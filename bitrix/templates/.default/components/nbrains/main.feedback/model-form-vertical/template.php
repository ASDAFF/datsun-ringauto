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

	<p>Остались вопросы? Заполните заявку на кредит, мы сделаем расчет и перезвоним Вам.</p>

	<div class="forma row-fluid">

		<? foreach($arResult['USER_FIELD'] as $field):?>

		<? if($field['PROPERTY_TYPE'] == "S") { ?>
		<div class="col-md-4 col-lg-4">
			<input name="<?=$field['CODE']?>" size="0" type="text" value="<?=$arResult[$field['CODE']]?>" placeholder="<?=$field["NAME"]?>" required />
		</div>
		<?}?>


		<? endforeach; ?>


		<div class="col-md-4 col-lg-4">
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input type="submit" name="submit" id="subscribe_submit" value="Отправить заявку">
		</div>

		<? foreach($arResult['USER_FIELD'] as $field):?>

		<? if($field['PROPERTY_TYPE'] == "L") { ?>
		<div class="form-i">
			<input class="zapis_check" type="checkbox" name="<?=$field['CODE']?>" value="<?=$field['VALUE_ID'][0]?>" checked/>
			<span class="agreement">Я даю свое согласие на обработку персональных данных, с <a href="/rules/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
		</div>
		<?}?>

		<? endforeach; ?>

	</div>
</form>










