<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Запчасти и аксессуары | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("accessories");
?>

    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>Запчасти и аксессуары Datsun On-Do и Mi-Do</h1>
            <div class="news-date">
            </div>
            <!-- <div class="news-line"></div> -->
            <div class="news-banner">
                <img src="./images/zap.jpg" class="news-banner-img">
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
                <p>Мы предлагаем Вам сделать свой Datsun уникальным, стильным и практичным.</p>
                <p>Благодаря большому ассортименту оригинальных аксессуаров и запчастей для Datsun On-Do и Mi-Do Вы можете настроить автомобиль под свой характер и стиль жизни. Яркие штрихи, выделяющие ваш Datsun в потоке машин, оригинальные детали, подчеркивающие Вашу индивидуальность, создающие комфорт, придающие Вам уверенности, — выбор за Вами!</p>
                <p>Все аксессуары и запчасти для Датсун Он-До и Ми-До, представленные в нашем каталоге, разработаны с учетом особенностей Вашего автомобиля и отвечают высоким стандартам качества и безопасности.
                </p>
                <div class="news-subtitle">
                    ВЫБИРАЙТЕ ТО, ЧТО ПОДХОДИТ ВАМ И ВАШЕМУ АВТОМОБИЛЮ:
                </div>

                <div class="twin-pics">
                    <div class="left-pic"><a href="/aksessuary/"><img src="./images/on-do_acc_page.jpg"></a></div>
                    <div class="right-pic"><a href="/aksessuary/"><img src="./images/mi-do_acc_page.jpg"></a></div>
                </div>
                <div class="news-subtitle">
                    ПРАЙС-ЛИСТ НА ОРИГИНАЛЬНЫЕ АКСЕССУАРЫ:
                </div>
                <a href="/files/Datsun_on-DO_acc_price-list.pdf" class="btn" target="_blank">DATSUN ON-DO</a>
                <a href="/files/Datsun_mi-DO_acc_price-list.pdf" class="btn" target="_blank">DATSUN MI-DO</a>
                <p> </p>
                <div class="news-subtitle">
                    РЕКОМЕНДОВАННЫЙ ЛИСТ АКСЕССУАРОВ ДЛЯ ТВОЕГО DATSUN ON-DO:
                </div>
                <a href="/files/ACC_ACCESS.jpg" class="btn" target="_blank">Access</a>
                <a href="/files/ACC_TRUST.jpg" class="btn" target="_blank">Trust</a>
                <a href="/files/ACC_DREAM.jpg" class="btn" target="_blank">Dream</a>
                <p> </p>

                <div class="news-subtitle">
                    ЗАПЧАСТИ
                </div>

                <div class="form-fancybox-modal testdr-form">

                    <?$APPLICATION->IncludeComponent(
                        "nbrains:main.feedback",
                        "",
                        Array(
                            "EMAIL_TO" => "info@bitrix.ru",
                            "EVENT_MESSAGE_ID" => array(
                                0 => "17",
                            ),
                            "IBLOCK_ID" => "20",
                            "IBLOCK_TYPE" => "feedback",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "PROPERTY_CODE" => array("DETAIL","FIO","PHONE","EMAIL","RULE"),
                            "USE_CAPTCHA" => "N"
                        )
                    );?>

                </div>
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