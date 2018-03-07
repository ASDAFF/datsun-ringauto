</div>
</div>
<!-- wrapper END -->


<footer>
    <div class="footer-inner">


        <div class="footer-menu">
            <ul id="horizontal-multilevel-menu">

                <li><a class="root-item">Автомобили</a>
                    <ul>
                        <li><a href="/on-do/">Datsun on-DO</a></li>
                        <li><a href="/mi-do/">Datsun mi-DO</a></li>
                        <li><a href="/offers/">Автомобили в наличии</a></li>
                        <li><a href="/testdrive/">Тест-драйв</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/offers/" class="root-item">Спецпредложения</a>
                    <ul>
                        <li><a href="/shares/">Акции</a></li>
                        <li><a href="/corp-sales/">Корпоративным клиентам</a></li>
                    </ul>
                </li>

                <li>
                    <a class="root-item">Сервис</a>
                    <ul>
                        <li><a href="/teh-service/">Техническое обслуживание</a></li>
                        <li><a href="/repair/">Ремонт</a></li>
                        <li><a href="/warranty/">Гарантия</a></li>
                        <li><a href="/accessories/">Запчасти</a></li>
                        <li><a href="/aksessuary/">Aксессуары</a></li>
                        <li><a href="/o-servise/">О сервисе</a></li>
                    </ul>
                </li>

                <li><a class="root-item">Услуги</a>
                    <ul>
                        <li><a href="/credit/">Кредит и Страхование</a></li>
                        <li><a href="/trade-in/">TRADE-IN</a></li>
                        <li><a href="/assistance/">Datsun Assistance</a></li>
                    </ul>
                </li>

                <li><a href="/center/" class="root-item">О компании</a>
                    <ul>
                        <li><a href="/center/">Ринг Авто Север</a></li>
                        <li><a href="/people/">Наш коллектив</a></li>
                        <li><a href="/news/">Новости</a></li>
                        <li><a href="/reviews/">Благодарности</a></li>
                        <li><a href="/advantages/">О бренде</a></li>
                    </ul>
                </li>
                <li><a href="/contacts/" class="root-item">Контакты</a></li>
            </ul>
        </div>


        <div class="footer-subcsribe">
            <div class="footer-subscribe-title-text">
                <div class="footer-subscribe-title">Подписаться на новости</div>
                <div class="footer-subscribe-text">Мы будем предоставлять Вам<br>актуальную и важную информацию<br>без спама</div>
            </div>


            <?$APPLICATION->IncludeComponent("nbrains:main.feedback", "follow-news", Array(
                "EMAIL_TO" => "info@bitrix.ru",	// E-mail, на который будет отправлено письмо
                    "EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
                    "IBLOCK_ID" => "55",	// Код информационного блока
                    "IBLOCK_TYPE" => "feedback",	// Тип информационного блока (используется только для проверки)
                    "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                    "PROPERTY_CODE" => array(	// Поля формы
                        0 => "EMAIL",
                        1 => "RULE",
                    ),
                    "USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                ),
                false
            );?>
            <div class="clear"></div>
			<div class="footer-subcsribe-vk"><span>Присоединяйтесь к нам:</span>
                 <a href="https://vk.com/ringautodatsun" target="_blank">
                    <img width="" height="24" src="<?=SITE_TEMPLATE_PATH?>/images/vk.png" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/vk.png">
                </a>

				<a href="https://ok.ru/group/54952238448891" target="_blank">
					<img width="" height="24" src="<?=SITE_TEMPLATE_PATH?>/images/ok.png" data-png-fallback="<?=SITE_TEMPLATE_PATH?>/images/vk.png">
				</a>
				<div class="clear"></div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="copyright">
            <?
            $APPLICATION->IncludeFile("/include/model-footer-text.php", Array(), Array(
                "MODE"      => "html",
                "NAME"      => "Редактирование включаемой области раздела",
                "TEMPLATE"  => ""
            ));
            ?>
            <br><br>
            <a class="to_sitemap" href="#"></a>
            <img width="39" src="<?=SITE_TEMPLATE_PATH?>/images/logo-footer@2x.png" alt="">
			<a class="prime-incut white colour" style="float: right;"></a>
            <a class="artfactor" href="#"></a>
            <span id="bx-composite-banner"></span>
        </div>

    </div>
</footer>


<div id="writingToService" class="popup-form">
    <div class="title">Запись на сервис</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "11",
		),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "DATE",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>
<div id="writingToServiceOnService" class="popup-form">
    <div class="title">Запись на сервис</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "11",
		),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "DATE",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>


<div id="calculateLoan" class="popup-form">
    <div class="title">Рассчитать кредит</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "15",
		),
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "FIRST_ADD",
			4 => "COMFORT_PAY",
			5 => "COMMENT",
			6 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>
<div id="calculateLoanOnCredit" class="popup-form">
    <div class="title">Рассчитать кредит</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "15",
		),
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "FIRST_ADD",
			4 => "COMFORT_PAY",
			5 => "COMMENT",
			6 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>

<div id="signUpForATestDrive" class="popup-form">
    <div class="title">Записаться на тест-драйв</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "9",
		),
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "DATE",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>

<div id="handOverInOffset" class="popup-form">
    <div class="title">Сдать автомобиль в зачет</div>

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

<div id="getConsult" class="popup-form">
    <div class="title">Получить консультацию</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "14",
		),
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "COMMENT",
			3 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>

<div id="writingToServiceOnRepairS" class="popup-form">
    <div class="title">
        Запись на слесарный ремонт
    </div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "12",
		),
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "DATE",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>

<div id="writingToServiceOnRepairK" class="popup-form">
    <div class="title">
        Запись на кузовной ремонт
    </div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "10",
		),
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "MODEL",
			3 => "DATE",
			4 => "COMMENT",
			5 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>

<div id="offers-messages" class="popup-form">
    <div class="title">
        Заявка спецпредложения
    </div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "13",
		),
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "feedback",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "PHONE",
			2 => "DATE",
			3 => "COMMENT",
			4 => "RULE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>


<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/chosen.min.css"/>
<script src="<?=SITE_TEMPLATE_PATH?>/js/chosen.jquery.js"></script>

<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.datetimepicker.css"/>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.datetimepicker.js"></script>

<link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js"></script>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.theme.css">
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>


<script src="<?=SITE_TEMPLATE_PATH?>/js/af-tools.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/datsun.js" type="text/javascript"></script>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/bitrix/inc/seo-script-".SITE_ID.".php"
    )
);?>

</body>
</html>