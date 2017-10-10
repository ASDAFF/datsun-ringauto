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
                    <div class="banner-menu">
                        <a href="/cars/in_stock/" class=" car">Автомобили в наличии</a>
                        <a href="#signUpForATestDrive" class="form-fancybox rul">Записаться на тест-драйв</a>
                        <a href="#calculateLoan" class="form-fancybox percent">Рассчитать кредит</a>
                        <a href="#handOverInOffset" class="form-fancybox zachet">Сдать а/м в зачет</a>
                        <a href="#writingToService" class="form-fancybox service">Записаться на сервис</a>
                        <a href="#getConsult" class="form-fancybox consult">Получить консультацию</a>
                        <div class="clear"></div>
                    </div>
                    <!-- popups forms -->

                    <!-- END popups forms -->
                </div>
            </div>

            <div class="news-cont">
                <p> <b>Пройдите тест-драйв любой модели Datsun в CTK CENTER в удобное для Вас время!</b> </p>
                <p>На Ваш выбор предлагаются седан Datsun on-DO и хэтчбек Datsun mi-DO с автоматической или механической коробкой передач. Мы разработали несколько вариантов маршрута, чтобы Вы могли в реальных условиях оценить возможности автомобиля Datsun.</p>
                <p> Поездка может быть проведена с 09.00 до 20.30 в любой день недели. Обращаем Ваше внимание, что при проведении тест-драйва при себе необходимо иметь паспорт и водительские права.</p>

                <div class="news-subtitle">Записаться на тест-драйв</div>

                <div class="news-line1"></div>

                <div class="form-fancybox-modal testdr-form">
                    <form name="SIMPLE_FORM_6" action="/cars/testdrive/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="sessid" id="sessid_5" value="ea3b7f2a1f582c315066f419a5874d03" />
                        <input type="hidden" name="WEB_FORM_ID" value="6" />
                        <label>
                            <div class="label"><p>Фамилия, Имя<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_23" value="" size="0" / required>
                        </label>
                        <label>
                            <div class="label"><p>Телефон<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_24" value="" size="0" / required>
                        </label>
                        <label>
                            <div class="label"><p>Модель</p></div>
                            <select class="my_select_box" selected name="form_dropdown_SIMPLE_QUESTION_567" id="form_dropdown_SIMPLE_QUESTION_567"><option selected value="25">on-DO</option><option value="26">mi-DO</option></select>			</label>
                        <label>
                            <div class="label"><p>Удобная дата</p></div>
                            <input type="text"  class="inputtext"  name="form_text_27" value="" size="0" />
                        </label>
                        <label>
                            <div class="label"><p>Комментарий</p></div>
                            <textarea name="form_textarea_28" cols="40" rows="5"  class="inputtextarea" ></textarea>
                        </label>
                        <label>
                            <table><tbody><tr><td><input type="text" name="name" value=""></td></tr></tbody></table>
                        </label>
                        <div class="form-bottom">

                            <div class="form-i">
                                <input class="zapis_check" type="checkbox" name="zapis_check" value=""/>
                                <span class="agreement">Я даю свое согласие на обработку персональных данных, с <a href="/upload/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
                            </div>

                            <input class="btn" type="submit" name="web_form_submit" value="Отправить" />
                            <div><p><span class="required">*</span>Поля, обязательные для заполнения</p></div>
                        </div>
                        <div class="clear"></div>

                    </form>
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