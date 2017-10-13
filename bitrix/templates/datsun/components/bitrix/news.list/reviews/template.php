<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>




		<div class="contacts reviewslist">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="reviewblock" id="bx_3218110189_2523">
				<div class="title"><?=$arItem['PROPERTIES']["NAME"]['VALUE']?></div>
				<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
				<div class="comment"><p><?echo $arItem['PROPERTIES']["COMMENT"]['VALUE']['TEXT'];?></p></div>
			</div>
			<?endforeach;?>

			<br />
			<!-- Новости -->
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
		<div class="clear">
		</div>
		<br>

