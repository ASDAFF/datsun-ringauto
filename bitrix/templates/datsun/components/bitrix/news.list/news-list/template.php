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
<div class="news">
	<div class="first-title"><?=$arResult["NAME"]?></div>
	<!-- news slider -->

	<div class="news-slider">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="news-slider-item">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item">
				<div class="news-item-inner" style="height: 500px;background: #FFFFFF;">
					<div class="news-item-photo">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
					</div>
					<div class="news-item-text">
						<div class="news-item-title">
							<?=$arItem["NAME"]?>
						</div>
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<div class="news-item-descr">
								<?echo TruncateText($arItem["PREVIEW_TEXT"], 120);?>
							</div>
						<?endif;?>
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<div class="news-item-date">
								<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
							</div>
						<?endif?>
					</div>
				</div>
			</a>
		</div>
		<?endforeach;?>


	</div>
	<a class="news-slider-prev" href="javascript:void(0);"><img src="<?=SITE_TEMPLATE_PATH?>/images/news-slider-prev.png" alt=""></a>
	<a class="news-slider-next" href="javascript:void(0);"><img src="<?=SITE_TEMPLATE_PATH?>/images/news-slider-next.png" alt=""></a>

</div>
