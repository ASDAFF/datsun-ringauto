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

<div class="all-shares-outer">
	<h1><?=$arResult["NAME"]?></h1>
	<div class="all-shares-table">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<!--www-->
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="all-shares-block">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
			<div class="all-shares-inner">
				<p class="all-shares-title"><?=$arItem["NAME"]?></p>
				<div class="all-shares-line"></div>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<p class="all-shares-text"><?echo TruncateText($arItem["PREVIEW_TEXT"], 100);?></p>
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
	<!--    <p class="unhide-shares">Все акции и&nbsp;спецпредложения</p> -->
</div>






