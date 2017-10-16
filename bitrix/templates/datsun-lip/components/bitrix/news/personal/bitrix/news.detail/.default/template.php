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

	<div class="news-banner">
		<img class="news-banner-img" src="/people/images/banner.jpg">
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
		<div class="depart-menu">

			<?
			$item = array_chunk($arResult["ITEMS"],3);
			$count_item = count($item);
			?>

			<? for($i = 0; $i < $count_item; $i++): ?>

				<div>
					<ul>
						<?foreach($item[$i] as $arItem):?>
							<li id="bx_1847241719_93" class="blue-bul"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
						<?endforeach;?>
					</ul>
				</div>

			<?endfor;?>

			<div>
				<ul></ul>
			</div>
		</div>
		<div class="clear">
		</div>
		<h2><?=$arResult["NAME"]?></h2>
		<div class="news-line">
		</div>
		<div class="all-shares-table">

			<? foreach($arResult["PROPERTIES"]["PERSONAL"]["VALUE"] as $desc => $personal): ?>
				<? $name = explode('/',$arResult["PROPERTIES"]["PERSONAL"]["DESCRIPTION"][$desc]); ?>
				<span class="all-shares-block people-block-height"  id="bx_3218110189_345">
						<img src="<?=CFile::GetPath($personal);?>">
						<div class="all-shares-inner">
							<p class="all-shares-title"><?=$name[0]?></p>
							<div class="all-shares-line"></div>
							<p class="all-shares-text"><?=$name[1]?></p>
						</div>
					</span>
			<?endforeach;?>

			<div class="clear"></div>
		</div>
	</div>
</div>








