
<footer>
    <div class="footer-inner">
        <div class="footer-subcsribe">
            <div class="footer-subscribe-title">Подписаться на новости</div>
            <div class="footer-subscribe-text">Мы будем предоставлять Вам<br>актуальную и важную информацию<br>без спама</div>

            <?
            switch(SITE_ID){
                case "s1":
                    $news_id = 55;
                    break;

                case "s2":
                    $news_id = 56;
                    break;

                case "s3":
                    $news_id = 57;
                    break;
            }
            ?>
            <?$APPLICATION->IncludeComponent("nbrains:main.feedback", "follow-news", Array(
                "EMAIL_TO" => "info@bitrix.ru",	// E-mail, на который будет отправлено письмо
                "EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
                "IBLOCK_ID" => $news_id,	// Код информационного блока
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
<!--
            <div class="footer-subcsribe-vk"><span>Присоединяйтесь к нам</span> <a href="https://vk.com/ctk_center"><img width="99" src="images/vk.svg" data-png-fallback="images/vk.png"></a><div class="clear"></div></div>-->
        </div>




        <div class="footer-menu">
            <ul id="horizontal-multilevel-menu">




                <li><a href="#" class="root-item">Автомобили</a>
                    <ul>






                        <li class="item-selected"><a href="/on-do/">Datsun on-DO</a></li>







                        <li><a href="/mi-do/">Datsun mi-DO</a></li>







                        <li><a href="/in_stock/">Автомобили в наличии</a></li>







                        <li><a href="/testdrive/">Тест-драйв</a></li>





                    </ul></li>

                <li><a href="/offers/" class="root-item">Спецпредложения</a>
                    <ul>






                        <li><a href="/shares/">Акции</a></li>







                        <li><a href="/corp-sales/">Корпоративным клиентам</a></li>





                    </ul></li>

                <li><a href="#" class="root-item">Сервис</a>
                    <ul>






                        <li><a href="/teh_service/">Техническое обслуживание</a></li>







                        <li><a href="/repair/">Ремонт</a></li>







                        <li><a href="/warranty/">Гарантия</a></li>







                        <li><a href="/accessories/">Запчасти</a></li>







                        <li><a href="/aksessuary/">Aксессуары</a></li>







                        <li><a href="/o-servise/">О сервисе</a></li>





                    </ul></li>

                <li><a href="#" class="root-item">Услуги</a>
                    <ul>






                        <li><a href="/credit/">Кредит и Страхование</a></li>







                        <li><a href="/trade-in/">TRADE-IN</a></li>







                        <li><a href="/assistance/">Datsun Assistance</a></li>





                    </ul></li>

                <li><a href="/center/" class="root-item">О компании</a>
                    <ul>






                        <li><a href="/center/">Ринг Авто</a></li>







                        <li><a href="/people/">Наш коллектив</a></li>







                        <li><a href="/news/">Новости</a></li>







                        <li><a href="/reviews/">Благодарности</a></li>







                        <li><a href="/advantages/">О бренде</a></li>





                    </ul></li>

                <li><a href="/contacts/" class="root-item">Контакты</a></li>






            </ul>
        </div>
        <!-- <div class="menu-clear-left"></div> -->

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
            <img width="39" src="images/logo-footer@2x.png" alt="">
            <a class="artfactor" href="#"></a>
        </div>

    </div>
</footer>

<?
$feedback = array();
if(SITE_ID == "s1"){
    $feedback = array(
        0 => 15,
        1 => 14,
        2 => 13
    );
}elseif(SITE_ID == "s2"){
    $feedback = array(
        0 => 51,
        1 => 49,
        2 => 38
    );
}else{
    $feedback = array(
        0 => 52,
        1 => 50,
        2 => 39
    );
}

?>
<!-- slider modals -->
<div id="handOverInOffset" class="popup-form">
    <div class="title">Сдать автомобиль в зачет</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "36",
		),
		"IBLOCK_ID" => "52",
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
<div id="calculateLoan" class="popup-form">
    <div class="title">Рассчитать кредит</div>

    <?$APPLICATION->IncludeComponent(
	"nbrains:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "37",
		),
		"IBLOCK_ID" => "50",
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
			0 => "43",
		),
		"IBLOCK_ID" => "37",
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

</div>
<!-- MODALS BEGIN-->
<!-- subscribe modal-->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <p class="modal-title"></p>
        </div>
    </div>
</div>
<!-- contact modal-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <!--<h3 class="modal-title">Отправить заявку</h3>-->
            <p>Интересуетесь покупкой автомобиля Datsun?<br>
                Мы готовы ответить на все Ваши вопросы!<br>
                Оставьте Ваши контакты.<br>
                Мы перезвоним и подробно расскажем про процесс приобретения автомобиля в нашем дилерском центре.</p>
            <div id="contact_form">
                <form name="SIMPLE_FORM_2" action="/on-do/" method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid_6" value="35328a620dee4260e952fa5514697c39" /><input type="hidden" name="WEB_FORM_ID" value="2" />
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Имя"   name="form_text_4" value="" size="0" / required>
                    </div>

                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Телефон"   name="form_text_5" value="" size="0" / required>
                    </div>
                    <div class="form-group">
                        <textarea name="form_textarea_6" cols="40" rows="5"  class="form-control" placeholder="Комментарий"  ></textarea>
                    </div>
                    <label><table><tbody><tr><td><input type="text" name="name" value=""></td></tr></tbody></table></label>
                    <div class="form-i call_landing">
                        <input class="zapis_check" type="checkbox" name="zapis_check" value=""/>
                        <span class="agreement">Я даю свое согласие на обработку персональных данных, с <a href="/upload/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
                    </div>
                    <button type="submit" name="web_form_submit" value="*" id="contact_submit" data-loading-text="•••"> <i class="icon icon-paper-plane"></i></button>
                    <h5>Мы гарантируем, что номер телефона будет использован только для связи с Вами.</h5>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODALS END-->


<!-- JavaScript -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.min.js"></script>
<link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.validate.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/wow.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/smoothscroll.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.smooth-scroll.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.superslides.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/placeholders.jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/retina.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/chosen.jquery.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.datetimepicker.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/custom.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/tools.js"></script>

<script>
    $(function(){
        var panel = $('#panel');
        panel.toggleClass('hiddenz');
        $(document).keypress("z",function(e) {
            if(e.ctrlKey && e.keyCode == '26') {
                //console.dir(e);
                //console.dir('ctrl+z pressed');
                panel.toggleClass('hiddenz');
            }
        });
    });
</script>



<!-- {/literal} -->

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

