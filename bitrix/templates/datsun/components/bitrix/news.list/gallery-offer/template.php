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


<section class="gallery-offer">

	<div class="gallery-title">Фотогалерея</div>

	<div class="offer-bxslider">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<? if($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
				<?
				$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>350, 'height'=>240), BX_RESIZE_IMAGE_EXACT, true);
				?>

		<li><a class="news-item-fancy" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" title=""><img src="<?=$file['src']?>" alt="<?echo $arItem["NAME"]?>"/></a></li>

			<?endif;?>
		<?endforeach;?>
	</div>

</section>





