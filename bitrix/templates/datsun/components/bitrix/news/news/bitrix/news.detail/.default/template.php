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

	<!-- <p  class="to-news-list"><a href="/about/news/">Назад к новостям</a></p> -->
	<div class="news-detail">
		<div class="title-share">
			<h2><?=$arResult["NAME"]?></h2>
		</div>
		<div class="block-share">
			<div class="share">
				<span>Поделиться</span>

				<div class="share-btns" id="asd_share_buttons">
					<a class="asd_vk_share" href="#" title="Поделиться в ВКонтакт" onclick=""></a>
					<a class="asd_fb_share" href="#" title="Поделиться в Facebook" onclick=""></a>
					<a class="asd_od_share" href="#" title="Поделиться в Одноклассники" onclick=""></a>
					<a class="asd_tw_share" href="#" title="Поделиться в Twitter" onclick=""></a>
					<a class="asd_ma_share" rel="nofollow" href="#" title="Поделиться в Mail.Ru" onclick=""></a>
				</div>
				<!--/noindex-->
			</div>
		</div>
		<div class="news-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
		<div class="news-line"></div>
		<div class="news-banner">
			<img class="news-banner-img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
			<div class="news-banner-menu">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/news-banner-menu.php"
					)
				);?>
			</div>
		</div>
		<div class="news-cont">
			<?echo $arResult["DETAIL_TEXT"];?>
			<br />
		</div>
		<p align="center"></p>
	</div>

	<br>




