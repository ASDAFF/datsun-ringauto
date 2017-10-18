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
	<input class="form-control" type="email" name="EMAIL" id="subscribe_email" placeholder="Введите Ваш E-mail" required>
	<div class="form-i footer-_sub">
		<input class="zapis_check" type="checkbox" name="RULE" value="Y" checked/>

		<span class="agreement">Я даю свое согласие на обработку персональных данных, с
			<a href="/rules/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
	</div>
	<label><table><tbody><tr><td><input type="text" name="name" value=""></td></tr></tbody></table></label>

	<input type="submit" name="submit" value=" ">


</form>








