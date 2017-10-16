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

	<div class="offers-slider">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="news-slider-item">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item">
				<div class="news-item-inner">
					<div class="news-item-photo">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
					</div>
					<div class="news-item-text">
						<div class="news-item-title offer">
							<?=$arItem["NAME"]?>
						</div>

						<div class="news-item-descr offer"></div>

						<div class="offer-item-prices">
							<p><span>НОВАЯ ЦЕНА</span><span class="price"><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE']?></span><span>руб</span></p>
							<p><span>ВЫГОДА</span><span class="sale"><?=$arItem['PROPERTIES']['CREDIT']['VALUE']?></span><span>руб</span></p>
						</div>

						<div class="offer-item-btn">
							<span class="">Подробнее</span>
						</div>

					</div>
				</div>
			</a>
		</div>
		<?endforeach;?>


	</div>
	<a class="offers-slider-prev" href="javascript:void(0);"><img src="<?=SITE_TEMPLATE_PATH?>/images/news-slider-prev.png" alt=""></a>
	<a class="offers-slider-next" href="javascript:void(0);"><img src="<?=SITE_TEMPLATE_PATH?>/images/news-slider-next.png" alt=""></a>

</div>
