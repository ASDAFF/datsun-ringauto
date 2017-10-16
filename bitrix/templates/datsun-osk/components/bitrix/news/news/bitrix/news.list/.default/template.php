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


	<div class="news-detail">
		<h1><?=$arResult["NAME"]?></h1>

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-elem">
			<img class="prev-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt>
			<div class="prev-descr">
				<h2><?=$arItem["NAME"]?></h2>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<p class="prev-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
				<?endif?>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>

					<p class="prev-text"><?echo $arItem["PREVIEW_TEXT"];?></p>
				<?endif;?>
			</div>
		</a>
		<?endforeach;?>

		<div class="clear"></div>
	</div>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
	<br>





