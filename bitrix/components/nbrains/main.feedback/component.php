<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */


CModule::IncludeModule("iblock");

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

//$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

//var_dump($arParams['PROPERTY_CODE']);
//var_dump($arParams['IBLOCK_ID']);

$arPropertyFild = array();
foreach($arParams['PROPERTY_CODE'] as $code){
	$rsProp = CIBlockProperty::GetList(array(), array("ACTIVE"=>"Y", "IBLOCK_ID" => $arParams['IBLOCK_ID'],"CODE" => $code));
	if($arr = $rsProp->GetNext())
	{
		$arPropertyField[$arr['ID']] = $arr;
		if($arr['PROPERTY_TYPE'] == "L"){
			$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "CODE" => $arr['CODE']));
			while($enum_fields = $property_enums->GetNext())
			{
				$arPropertyField[$arr['ID']]['VALUE'][] = $enum_fields["VALUE"];
				$arPropertyField[$arr['ID']]['VALUE_ID'][] = $enum_fields["ID"];
			}
		}
	}
}




if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{


	$arResult["ERROR_MESSAGE"] = array();
	if(check_bitrix_sessid())
	{

		foreach($arPropertyField as $field){
			if($field['IS_REQUIRED'] == "Y"){
				if(strlen($_POST[$field['CODE']]) < 1)
					$arResult["ERROR_MESSAGE"][] = GetMessage("FIELD_ERROR").': '.$field['NAME'];
			}
		}

		if($arParams["USE_CAPTCHA"] == "Y")
		{
			include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
			$captcha_code = $_POST["captcha_sid"];
			$captcha_word = $_POST["captcha_word"];
			$cpt = new CCaptcha();
			$captchaPass = COption::GetOptionString("main", "captcha_password", "");
			if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
			{
				if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
					$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
			}
			else
				$arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");

		}



		if(empty($arResult["ERROR_MESSAGE"])){

			$el = new CIBlockElement;
			$PROP = array();
			foreach($arPropertyField as $field) {
				if($field['PROPERTY_TYPE'] == "S"){

					if($field['USER_TYPE'] == "HTML"){
						$PROP[$field['CODE']] = array("VALUE" => array("TEXT" => trim(strip_tags($_POST[$field['CODE']]))));
					}else {
						$PROP[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
					}
				}elseif($field['PROPERTY_TYPE'] == "L"){

					$PROP[$field['CODE']] = Array("VALUE" => trim(strip_tags($_POST[$field['CODE']])));

				}elseif($field['PROPERTY_TYPE'] == "F"){

					$img = $_FILES['FILE'];
					$fid = CFile::SaveFile($img, "vote");
					$PROP[$field['CODE']] = Array("VALUE" => $fid);

				}
			}




			$arLoadProductArray = Array(
				"IBLOCK_SECTION_ID" => false,
				//"DATE_ACTIVE_FROM" => date("d.m.Y H:i:s"),
				"IBLOCK_ID"      => $arParams['IBLOCK_ID'],
				"PROPERTY_VALUES"=> $PROP,
				"NAME"           => "Новое сообщение!",
				"ACTIVE"         => "N"
			);
			$PRODUCT_ID = $el->Add($arLoadProductArray);
			if(!$PRODUCT_ID){
				echo "Error: ".$el->LAST_ERROR;
				die();
			}

		}


		if(empty($arResult["ERROR_MESSAGE"]))
		{
			$arFields = Array();
			foreach($arPropertyField as $field){
				if($field['CODE'] == "PRODUCT_CART"){
					$arFields[$field['CODE']] = $_POST[$field['CODE']];
					CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID(), false);
				}else{
					$arFields[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
				}
				$arFields["EMAIL_TO"] = $arParams["EMAIL_TO"];
			}
			if(!empty($arParams["EVENT_MESSAGE_ID"]))
			{
				foreach($arParams["EVENT_MESSAGE_ID"] as $v)
					if(IntVal($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
			}
			else
			CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
			LocalRedirect("/ok/?success=".$arResult["PARAMS_HASH"]);
		}

		foreach($arPropertyField as $field){
			$arResult[$field['CODE']] = trim(strip_tags($_POST[$field['CODE']]));
		}
	}
	else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}
$arResult['USER_FIELD'] = $arPropertyField;


if($arParams["USE_CAPTCHA"] == "Y")
	$arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
