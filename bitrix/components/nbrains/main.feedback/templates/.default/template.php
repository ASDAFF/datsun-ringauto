<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>



<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}

if(strlen($arResult["OK_MESSAGE"]) > 0)
{

	var_dump($arResult["OK_MESSAGE"]);
}


?>




<form name="" action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">
	<?=bitrix_sessid_post()?>

	<? foreach($arResult['USER_FIELD'] as $field):?>

		<?

		switch ($field['PROPERTY_TYPE']) {
			case "S":
				?>
				<?if($field['USER_TYPE'] != "HTML"):?>
				<label>
					<div class="label">
						<p><?=$field["NAME"]?><?if($field["IS_REQUIRED"] == "Y"):?><span class="required">*</span><?endif;?></p>
					</div>
					<input type="text"  class="inputtext"  name="<?=$field['CODE']?>" value="<?=$arResult[$field['CODE']]?>" size="0" <?if($field["IS_REQUIRED"] == "Y"):?>required<?endif;?>/>
				</label>
				<?else:?>
				<label>
					<div class="label">
						<p><?=$field["NAME"]?><?if($field["IS_REQUIRED"] == "Y"):?><span class="required">*</span><?endif;?></p>
					</div>
					<textarea name="<?=$field['CODE']?>" cols="40" rows="5"  class="inputtextarea" ><?=$arResult[$field['CODE']]?></textarea>
				</label>
				<?endif;?>
				<?
				break;
			case "L":
				if($field['MULTIPLE'] == "Y"){
					?>
					<label>
						<div class="label"><p><?=$field['NAME']?></p></div>
						<select class="my_select_box" selected name="<?=$field['CODE']?>" id="form_dropdown_<?=$field['CODE']?>">
							<?foreach($field['VALUE'] as $key => $val):?>
							<option <? if($key == 0):?>selected<?endif;?> value="<?=$field['VALUE_ID'][$key]?>"><?=$val?></option>
							<?endforeach;?>
						</select>
					</label>
					<?
				}else{
					?>
					<div class="form-i">
						<input class="zapis_check" type="checkbox" name="<?=$field['CODE']?>" value="<?=$field['VALUE_ID'][0]?>" checked/>
						<span class="agreement">Я даю свое согласие на обработку персональных данных, с <a href="/rules/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
					</div>
					<?
				}
				break;
		}
		?>

	<? endforeach; ?>

	<div class="requiredText"><span class="required">*</span>Поля, обязательные для заполнения</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha">
			<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
			<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
			<input type="text" name="captcha_word" size="30" maxlength="50" value="">
		</div>
	<?endif;?>

	<div class="submitButton">
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input class="btn" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" />
	</div>
	<div class="clear"></div>

</form>




