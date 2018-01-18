<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Благодарности | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("reviews");
?>

	<div class="header-spacer"></div>


	<div class="content">
	<div class="news-detail">
	<h1>Благодарности</h1>
	<div class="news-date">
	</div>
	<!-- <div class="news-line"></div> -->
	<div class="news-banner">
		<img class="news-banner-img" src="./images/banner.jpg">
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


	<div class="form-fancybox-modal backform reviewsform">
		<h3>ОСТАВИТЬ ОТЗЫВ</h3>
		<p>
			Нам очень важно знать Ваше мнение. Ведь мы стремимся профессионально выполнять свою работу, тем самым, подтверждая высокий статус официального дилера Datsun. Присылайте нам свои предложения, пожелания, жалобы и отзывы. Каждый, без исключения, найдет свой ответ.
		</p>

		<?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
		),
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "news",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "COMMENT",
			2 => "PHONE",
			3 => "EMAIL",
			4 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

	</div>

 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "j M Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "РќРѕРІРѕСЃС‚Рё",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "COMMENT",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews"
	),
	false
);?>

	</div>

		<!-- map -->
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/map.php"
			)
		);?>
		<!-- map END -->
		﻿
	</div>

	<!-- content END -->


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>