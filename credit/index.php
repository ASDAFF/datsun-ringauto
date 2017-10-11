<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("credit");
?>


    <div class="header-spacer"></div>


    <div class="content">

        <div class="news-detail">
            <h1>Кредит и Страхование</h1>

            <div class="news-date"> 	</div>

            <!-- <div class="news-line"></div> -->

            <div class="news-banner"> <img src="./images/ak.jpg" class="news-banner-img"  />
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
                <p> <b>Планируете покупку автомобиля Datsun в кредит? Оформить его вы можете в CTK CENTER, где действуют самые выгодные программы на льготных условиях от производителя.</b> 		</p>
                <a href="#calculateLoanOnCredit" class="form-fancybox service btn" >Рассчитать кредит</a>
                <div class="news-subtitle"> 			 КРЕДИТНАЯ ПРОГРАММА DATSUN FINANCE<sup>1</sup> 		</div>

                <p> 			 Программа кредитования Datsun Finance – это доступный кредит на автомобили Datsun на льготных условиях от производителя. Первоначальный взнос на приобретение <b>седана on-DO и хэтчбека mi-DO – всего 10%.&nbsp;</b> 		</p>

                <p> 	 Внимание! С 1 сентября действуют специальные сниженные ставки по кредиту при покупке автомобилей Datsun 2017 года: кредитная ставка 0% для mi-DO и 9,9% на 3 года для on-DO. Кроме того, участники кредитного предложения могут получить <b>&quot;КАСКО&quot; от 3,5%!</b> </p>

                <div class="news-subtitle"> 			 СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ 		</div>

                <!-- <div style="text-align: center;"> <img id="bxid_628037" alt="0% на 3 года" src="http://datsun-spb.ru/on-do/files/kr_9.png" class="img768" title="0% на 3 года" border="0"  /> 		</div>-->

                <div style="text-align: center;"> <img alt="0% на 3 года" src="./images/kr_08.jpg" class="img768" title="0% на 3 года" border="0"  /> 		</div>

                <div class="news-subtitle"> 			 ПЛАТЕЖ В МЕСЯЦ<sup>**</sup> 		</div>

                <div style="text-align: center;"> <img alt="Платеж в месяц" src="./images/kr_0507.png" class="img768" title="Платеж в месяц" border="0"  /> 		</div>

                <div class="news-subtitle"> 			 УСЛОВИЯ КРЕДИТОВАНИЯ 		</div>

                <p> 			 Условия по программе Datsun Finance простые и прозрачные. 		</p>

                <div style="text-align: center;"> <img alt="finance_0505.jpg" src="./images/Кредит.jpg" class="img768" title="finance_0505.jpg" border="0"  /> 		</div>


                <div class="news-subtitle"> 			 ОСОБЕННОСТИ ПРОГРАММЫ 		</div>

                <p> 			 Главной особенностью программы Datsun Finance является возможность приобрести полис автострахования ЛайтКАСКО по доступной цене. Теперь, чтобы получить кредит, Вам не нужно тратить свои средства на дорогостоящее страхование. Достаточно выбрать комфортный ежемесячный платеж и оформить кредит в дилерском центре CTK CENTER. 		</p>

                <p> 			 Кроме того, клиентам программы доступны современные и полезные сервисы: 		</p>

                <p> <b>Программа Защита кредита</b>: страховая компания возьмет на себя обязательства по погашению Вашего кредита при наступлении непредвиденных ситуаций со здоровьем или работой. 		</p>

                <p> <b>Программа Datsun 3+</b>: защита от непредвиденных расходов на ремонт автомобиля в постгарантийный период (4 и 5 год пользования автомобилем). 		</p>
                <hr>
                <p class="disclaimer"> <sup></sup> - Кредит предоставляется АО «РН Банк» (лицензия ЦБ РФ №170). </p>

                <p class="disclaimer"> <sup>*</sup> - Предложение действительно при покупке в кредит Datsun mi-DO, для Datsun on-DO скидка составляет 30 000 рублей. </p>

                <p class="disclaimer"> <sup>**</sup>&nbsp; Предложение действительно для Datsun on-DO Access, стоимость 366 000 руб., аванс 189 000 руб., программа 11,9%, срок кредита - 5 лет; для Datsun mi-DO Trust MT, стоимость 352 000 руб., аванс 227 000 руб., программа 11,9%, срок кредита - 5 лет. </p>

                <p></p>
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

        </div>

        <br />
        ﻿
    </div>

    <!-- content END -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>