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

<div id="header-slider">
	<ul class="bxslider">

		<?foreach($arResult["ITEMS"] as $arItem):?>
			<? if($arItem["DETAIL_PICTURE"]["SRC"]): ?>
				<li style="background-image: url('<?=$arItem["DETAIL_PICTURE"]["SRC"]?>');">
					<a href="<?=$arItem['CODE']?>">
						<div class="slider-text not-dream">
							<div class="price-from special-img" >
								<img alt="<?echo $arItem["NAME"]?>" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
							</div>
						</div>

						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<div class="price-from price-disc">
							<?echo $arItem["PREVIEW_TEXT"];?>
						</div>
						<?endif;?>
					</a>
				</li>
			<?endif;?>
		<?endforeach;?>

	</ul>

	<div class="slider-links">
		<a class="item form-fancybox" href="#signUpForATestDrive">Записаться на тест-драйв</a>
		<a class="item form-fancybox" href="#calculateLoan">Рассчитать кредит</a>
		<a class="item form-fancybox" href="#writingToService">Записаться на сервис</a>
		<a class="item red" href="/offers/">Автомобили в наличии</a>
	</div>

</div>


