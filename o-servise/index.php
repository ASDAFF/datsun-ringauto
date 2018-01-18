<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "О сервисе | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("o-servise");
?>

    <div class="header-spacer"></div>
    <div class="content">
        <div class="news-detail">
            <h1>О сервисе</h1>
            <div class="news-date"></div>
            <div class="news-cont">
                <iframe src="http://datsun-ringauto.datsun-dealers.palmer-hargreaves.ru/" width="100%" height="1000" frameBorder="0"></iframe>
            </div>
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