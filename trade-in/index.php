<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Trade-in | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("trade-in");
?>

    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>TRADE-IN</h1>
            <div class="news-date">
            </div>
            <!-- <div class="news-line"></div> -->
            <div class="news-banner">
                <img src="./images/TRADE-IN.jpg" class="news-banner-img">
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
                <p>Хотите купить новый автомобиль Datsun, но не знаете, что делать со старой машиной? Вам не хочется тратить свое время на ее продажу и поиск покупателей?</p>
                <p>Воспользуйтесь услугой Trade-In в Ринг Авто Север!</p>
                <p><b>Trade-In — это система взаимозачета, благодаря которой вы можете продать нам свой старый автомобиль в счет стоимости приобретаемого Datsun.</b> Все вопросы по реализации и оформлению документов мы берем на себя.</p>
                <p>Оценка стоимости Вашего автомобиля БЕСПЛАТНАЯ!  Заполните заявку, мы перезвоним и сделаем  предварительный расчет.</p>
                <p></p>
                <div class="news-subtitle">
                    СДАТЬ  АВТОМОБИЛЬ В ЗАЧЕТ
                </div>
                <div class="news-line1">
                </div>
                <div class="form-fancybox-modal testdr-form">
                    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "16",
		),
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "CAR",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                </div>





            </div>
            <br>
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