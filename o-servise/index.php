<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("o-servise");
?>

    <div class="header-spacer"></div>
    <div class="content">
        <div class="news-detail">
            <h1>О сервисе</h1>
            <div class="news-date"></div>
            <div class="news-cont">
                <div id="datsun_frame_container"></div>
                <script id="datsun_frame" src="http://datsun-spb.datsun-dealers.palmer-hargreaves.ru/datsun-frame/datsun-frame-load.js?url=http://datsun-spb.datsun-dealers.palmer-hargreaves.ru"></script>
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