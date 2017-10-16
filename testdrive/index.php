<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("testdrive");
?>
    <div class="header-spacer"></div>

    <div class="content">

        <div class="news-detail">
            <h1>Пройдите тест-драйв автомобиля Datsun!</h1>

            <div class="news-banner"> <img alt="clocks.png" src="http://datsun-spb.ru/upload/medialibrary/437/test_drive.jpg" title="clocks.png" class="news-banner-img"  />
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
                <p> <b>Пройдите тест-драйв любой модели Datsun в Ринг Авто Север в удобное для Вас время!</b> </p>
                <p>На Ваш выбор предлагаются седан Datsun on-DO и хэтчбек Datsun mi-DO с автоматической или механической коробкой передач. Мы разработали несколько вариантов маршрута, чтобы Вы могли в реальных условиях оценить возможности автомобиля Datsun.</p>
                <p> Поездка может быть проведена с 09.00 до 20.30 в любой день недели. Обращаем Ваше внимание, что при проведении тест-драйва при себе необходимо иметь паспорт и водительские права.</p>

                <div class="news-subtitle">Записаться на тест-драйв</div>

                <div class="news-line1"></div>

                <div class="form-fancybox-modal testdr-form">

                    <?$APPLICATION->IncludeComponent(
                        "nbrains:main.feedback",
                        "",
                        Array(
                            "EMAIL_TO" => "info@bitrix.ru",
                            "EVENT_MESSAGE_ID" => array(),
                            "IBLOCK_ID" => "13",
                            "IBLOCK_TYPE" => "feedback",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "PROPERTY_CODE" => array("FIO","PHONE","MODEL","DATE","COMMENT","RULE"),
                            "USE_CAPTCHA" => "N"
                        )
                    );?>
                    
                </div>
            </div>

            <p> <strong>Звоните 336-91-19 или оставьте&nbsp;</strong><a href="http://datsun-spb.ru/contacts/" >запрос на звонок</a><strong>, и мы Вам перезвоним.</strong> 	</p>

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
        </div>

        <!-- </div> -->
        ﻿
    </div>

    <!-- content END -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>