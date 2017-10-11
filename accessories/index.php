<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
                    <div class="left-pic"><a href="on-do/"><img src="./images/on-do_acc_page.jpg"></a></div>
                    <div class="right-pic"><a href="mi-do/"><img src="./images/mi-do_acc_page.jpg"></a></div>
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
                    <form name="SIMPLE_FORM_9" action="/maintenance/accessories/" method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid_5" value="899e2d55be5839172815485cd64fee9c" /><input type="hidden" name="WEB_FORM_ID" value="9" />
                        <label>
                            <div class="label"><p>Интересующая запчасть<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_38" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Фамилия, Имя<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_39" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Телефон<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_40" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>E-mail</p></div>
                            <input type="email"  class="inputtext"  name="form_email_41" value="" size="0" />			</label>
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