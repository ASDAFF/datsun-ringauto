<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Гарантия | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("warranty");
?>


    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>Гарантия</h1>

            <div class="news-date"> 	</div>

            <!-- <div class="news-line"></div> -->

            <div class="news-banner">
                <img src="./images/garantiya.jpg" class="news-banner-img"  />
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
                <p> 			Доверие &mdash; один из ключевых принципов Datsun. Вы доверяете официальному сервисному центру регулярное техническое обслуживание своего автомобиля, а мы берем на себя полную ответственность за его безупречную работу и за высокое качество обслуживания. <b>Заводская гарантия Datsun на новые автомобили On-Do и Mi-Do действует 3 года или 100 000 км пробега</b>, в зависимости от того, что наступит ранее, и распространяется на все важнейшие узлы Вашего автомобиля (гарантия на кузов, запчасти и др.). 		</p>

                <div class="news-subtitle"> 			МЫ ПРЕДОСТАВЛЯЕМ: 		</div>

                <ul>
                    <li>гарантию на <b>лакокрасочное покрытие</b> — 3 года (независимо от пробега);</li>

                    <li>гарантию <b>от сквозной коррозии на кузовные детали</b> — 6 лет (независимо от пробега);</li>

                    <li>гарантия <b>на оригинальные запасные части</b>, установленные в автосалоне Ринг Авто Север, — 1 год.</li>

                    <li>гарантия на <b>все работы, выполняемые в сервисном центре</b>, — 6 месяцев.</li>
                </ul>
<!--
                <p> 			<a href="/files/Warranty_3.pdf" target="_blank" >Скачать документацию&gt;&gt;</a> 		</p>
-->

                <div class="news-subtitle"> 			ПРОГРАММА ПОСТПРОДАЖНОГО ОБСЛУЖИВАНИЯ DATSUN 3+ 		</div>

                <p> 			<b>Хотите продлить срок гарантии? Воспользуйтесь специальной программой Datsun3+</b> 		</p>

                <p> 			Благодаря ей Вы еще на несколько лет освободите себя от лишних забот и будете уверены, что Ваш автомобиль в отличной форме. Вам будет предложено стать участником программы Datsun 3+ при покупке нового автомобиля. 		</p>

                <p> 			<b>Стоимость участия в программе:</b> 		</p>

                <ul>
                    <li>1 год или 125 000 км пробега, в зависимости от того, что наступит ранее — <b>6 400 руб</b>*.;</li>

                    <li>2 года или 125 000 км пробега в зависимости от того, что наступит ранее — <b>11 900 руб</b>*.</li>
                </ul>
<!--
                <p> 			<a href="/files/EW_Internet_ON_29_12.pdf" target="_blank" >Скачать документацию&gt;&gt;</a> 		</p>
-->
                <hr>
                <p class="disclaimer"> 			<sup>*</sup> Цена действительна на 01.10.2015. Не является публичной офертой. Цена может быть изменена в одностороннем порядке. Текущую цену уточняйте по телефону +7 (473) 233-27-77.</p>
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