<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
                <p>Воспользуйтесь услугой Trade-In в CTK CENTER!</p>
                <p><b>Trade-In — это система взаимозачета, благодаря которой вы можете продать нам свой старый автомобиль в счет стоимости приобретаемого Datsun.</b> Все вопросы по реализации и оформлению документов мы берем на себя.</p>
                <p>Оценка стоимости Вашего автомобиля БЕСПЛАТНАЯ!  Заполните заявку, мы перезвоним и сделаем  предварительный расчет.</p>
                <p></p>
                <div class="news-subtitle">
                    СДАТЬ  АВТОМОБИЛЬ В ЗАЧЕТ
                </div>
                <div class="news-line1">
                </div>
                <div class="form-fancybox-modal testdr-form">
                    <form name="SIMPLE_FORM_7" action="/services/trade-in/" method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid_5" value="899e2d55be5839172815485cd64fee9c" /><input type="hidden" name="WEB_FORM_ID" value="7" />
                        <label>
                            <div class="label"><p>Фамилия, Имя<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_29" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Телефон<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_30" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Модель</p></div>
                            <select class="my_select_box" selected name="form_dropdown_SIMPLE_QUESTION_481" id="form_dropdown_SIMPLE_QUESTION_481"><option selected value="31">on-DO</option><option value="32">mi-DO</option></select>			</label>
                        <label>
                            <div class="label"><p>Автомобиль в зачет</p></div>
                            <input type="text"  class="inputtext"  name="form_text_33" value="" size="0" />			</label>
                        <label>
                            <div class="label"><p>Комментарий</p></div>
                            <textarea name="form_textarea_34" cols="40" rows="5"  class="inputtextarea" ></textarea>			</label>
                        <label><table><tbody><tr><td><input type="text" name="name" value=""></td></tr></tbody></table></label>
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