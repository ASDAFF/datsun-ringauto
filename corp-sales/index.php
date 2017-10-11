<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("corp_sales");
?>


    <div class="header-spacer"></div>


    <div class="content">

        <div class="news-detail">
            <h1>Корпоративным клиентам</h1>

            <div class="news-date"> 	</div>

            <!-- <div class="news-line"></div> -->

            <div class="news-banner">
                <img src="./images/advantages_corp.png" class="news-banner-img"  />

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
                <p>CTK CENTER предлагает корпоративным клиентам специальные условия на покупку автомобилей Datsun:</p>
                <p>Условия по приобретению автомобилей и их сервисному обслуживанию рассчитываются индивидуально, в зависимости от набора услуг и размера парка автомобилей.</p>
                <br />

                <div class="first-block">
                    <img src="./images/cars.jpg"  />
                    <ul class="blue-arrow">
                        <li>Приобретение автомобиля<br />на выгодных условиях</li>
                        <li>Обслуживание на СТО<br />без очереди</li>
                        <li>Возможность приобретения автомобиля в лизинг</li>
                        <li>Выгодная замена автопарка<br />по системе Trade-In</li>
                        <li>Персональный менеджер</li>
                    </ul>
                </div>


                <div class="second-block">
                    <div class="table-special-offer">
                        <span class="table-cell title" style="background: rgb(202, 223, 254);">Автомобили в сделке</span>
                        <span class="table-cell title" style="background: rgb(202, 223, 254);">Предложение</span>
                    </div>

                    <div class="table-special-offer">
                        <span class="table-cell" style="background: rgb(155, 199, 254);">1-4</span>
                        <span class="table-cell" style="background: rgb(155, 199, 254);">Индивидуальное предложение</span>
                    </div>

                    <div class="table-special-offer">
                        <span class="table-cell" style="background: rgb(202, 220, 251);">5-9</span>
                        <span class="table-cell" style="background: rgb(202, 220, 251);">4,0%</span>
                    </div>

                    <div class="table-special-offer">
                        <span class="table-cell" style="background: rgb(222, 234, 254);">10-19</span>
                        <span class="table-cell" style="background: rgb(222, 234, 254);">7,0%</span>
                    </div>

                    <div class="table-special-offer">
                        <span class="table-cell" style="background: rgb(238, 245, 254);">&gt;20</span>
                        <span class="table-cell" style="background: rgb(238, 245, 254);">9,0%</span>
                    </div>

                    <div class="table-special-offer">
                        <span class="table-cell" style="background: rgb(255, 254, 255);">Лизинг</span>
                        <span class="table-cell" style="background: rgb(255, 254, 255);">9,0%</span>
                    </div>
                </div>

                <div class="form-fancybox-modal third-block backform">
                    <h3>ОСТАВИТЬ ЗАЯВКУ</h3>

                    <!-- <p>Остались вопросы? Оставьте Ваши контакты, мы перезвоним и сделаем индивидуальный расчет на самых выгодных условиях!</p> -->
                    <form name="SIMPLE_FORM_17" action="/specials/corp_sales/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="sessid" id="sessid_5" value="899e2d55be5839172815485cd64fee9c" />
                        <input type="hidden" name="WEB_FORM_ID" value="17" />
                        <label>
                            <div class="label"><p>Имя<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_72" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Телефон<span class="required">*</span></p></div>
                            <input type="text"  class="inputtext"  name="form_text_73" value="" size="0" / required>			</label>
                        <label>
                            <div class="label"><p>Комментарий</p></div>
                            <textarea name="form_textarea_74" cols="40" rows="5"  class="inputtextarea" ></textarea>			</label>
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

                <div class="clear"></div>

                <p>По вопросам корпоративного сотрудничества обращайтесь:<br /><br /></p>
                <p></p>

                <div class="inline">
                    <div class="contacts-block-2">
                        <img src="./images/pr_1.jpg"  />
                    </div>

                    <div class="contacts-block" style="width: 450px;">
                        <b>Наталья Байкова,<br />руководитель отдела продаж Datsun:</b>
                        <br />
                        <br />

                        <div class="contact-icon"></div>

                        <div class="contact-descr">
                            <p> <span class="descr1"><b>Телефоны:</b></span>
                                <br />
                            </p>
                            <p> +7 (921) 982 00 11,</p>

                            <p> <span class="ya-phone-1">+7 (812) 336 91 19</span></p>
                        </div>

                        <div class="contact-icon"></div>

                        <div class="contact-descr">
                            <p> <span class="descr1"><b>E-mail:</b></span>
                                <br />
                                <a href="mailto:n.baykova@ctk-center.ru" >n.baykova@ctk-center.ru</a>
                            </p>
                        </div>
                    </div>
                </div>

                <p></p>

                <div class="news-subtitle">Лизинг</div>

                <p><b>CTK CENTER осуществляет продажу автомобилей Datsun в лизинг, предлагая каждому клиенту индивидуальный поход и персональную лизинговую программу.</b></p>
                <b>
                    <ol>
                        <li value="1">Существенная экономия</li>
                    </ol>
                </b>
                <p>Приобретая автомобиль в лизинг, вы не несете никаких крупных финансовых затрат. Вы делаете небольшой первоначальный взнос и при этом получаете в пользование полностью отвечающий вашим нуждам автомобиль.</p>
                <b>
                    <ol>
                        <li value="2">Удобная схема выплат</li>
                    </ol>
                </b>
                <p>Существует несколько вариантов выплат по лизингу:</p>

                <ul>
                    <li>равные платежи</li>

                    <li>дифференцированные (уменьшающиеся) платежи</li>

                    <li>комбинированные платежи</li>
                </ul>
                <b>
                    <ol>
                        <li value="3">Положительное влияние на структуру финансовой отчетности</li>
                    </ol>
                </b>
                <p>Платежи по лизингу не указываются в балансе компании как текущие затраты, то есть не имеют статус «долга». Это способствует улучшению структуры баланса по части ликвидности и сохраняет кредитоспособность клиента.</p>
                <b>
                    <ol>
                        <li value="4">Значительная экономия на налогах</li>
                    </ol>
                </b>
                <p>Платежи по лизингу полностью относятся на себестоимость, что приводит к значительному сокращению налоговых сумм при расчете налогооблагаемой прибыли.</p>

                <p><b>Звоните <span class="ya-phone-1">+7 (812) 336 91 19</span> или оставьте <a href="/contacts/" >запрос на звонок</a>, и мы перезвоним.</b></p>
            </div>
            <br />
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