<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("center");
?>

    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>CTK CENTER</h1>
            <div class="news-date">
            </div>
            <!-- <div class="news-line"></div> -->
            <div class="news-banner">
                <img src="./images/banner.jpg" class="news-banner-img">
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
                <p>В здании дилерского центра Ринг Авто Север общей площадью 1500 м2 расположены: просторный шоу-рум с зоной выдачи новых автомобилей, рассчитанный на размещение девяти автомобилей Datsun, сервисная зона, оснащенная самым современным оборудованием и специальными инструментами на 6 автомобильных постов; склад запасных частей в двух уровнях. Также в ремонтной зоне работают 2 поста мойки автомобилей.
                </p>
                <p>Центр спроектирован и построен в соответствии с концепцией «3S»: Showroom, Service shop, Spare parts, то есть предлагает клиентам полный спектр услуг по продаже, техническому обслуживанию и ремонту автомобилей Datsun, а также широчайший выбор оригинальных запасных частей и аксессуаров.
                </p>
                <p>
                    В Автосалоне Вы можете не только купить новый автомобиль Datsun, клиентам дилерского центра доступен полный спектр сопутствующих услуг:
                </p>
                <ul class="red-bullet">
                    <li><p><a href="/testdrive/">тест-драйв</a></p></li>
                    <li><p><a href="/teh_service/">сервисное обслуживание и ремонт</a></p></li>
                    <li><p><a href="/credit/">кредитование и страхование</a></p></li>
                    <li><p><a href="/trade-in/">Trade-In</a></p></li>
                    <li><p><a href="/corp-sales/">лизинг и выгодные условия для корпоративных клиентов</a></p></li>
                </ul>

                <p>Основной задачей при создании дилерского центра «Ринг Авто Север» было обеспечение максимальной удовлетворенности и комфорта для наших посетителей и клиентов путем достижения и поддержания высочайшего уровня обслуживания.
                </p>
<!--
                <div class="news-subtitle">
                    НАШИ ПРЕИМУЩЕСТВА:
                </div>
                <ul class="red-bullet">
                    <li><p><b>CTK CENTER удобно расположен:</b> в 10 минутах езды от центра города и КАД, в 10 минутах ходьбы от станции метро «Ладожская».</p></li>
                    <li><p>В CTK CENTER для Вас открыт <b>большой светлый демонстрационный зал</b> по продаже новых автомобилей, в котором представлен весь модельный ряд Datsun.</p></li>
                    <li><p><b>Склад автомобилей Datsun расположен на территории CTK CENTER.</b> Наши специалисты помогут выбрать комплектацию и цвет, которые нужны именно Вам.</p></li>
                    <li><p>В CTK CENTER оборудован <b>просторный паркинг площадью 3 500 кв. м.</b> Вы всегда с легкостью сможете найти место для парковки.</p></li>
                    <li><p>Станция технического обслуживания <b>площадью 813 кв. м оборудована прозрачными стенами,</b> благодаря чему Вы можете наблюдать за тем, как специалисты CTK CENTER проводят работы по сервисному обслуживанию Вашего автомобиля.</p></li>
                    <li><p>Малярно-кузовной цех <b>площадью 716 кв.м способен обслуживать за смену около 40 автомобилей.</b> В случае необходимости специалисты CTK CENTER выполнят кузовные работы качественно и в максимально короткие сроки.</p></li>
                    <li><p><b>Прекрасная кухня и уютная атмосфера кафе «Токио-Париж»,</b> расположенном на втором этаже дилерского центра, позволят Вам отдохнуть в приятной обстановке, пока специалисты CTK CENTER заботятся о Вашем автомобиле.</p></li>
                </ul>


                <p>&nbsp;</p>
                <div class="news-bxslider">
                    <li><a class="news-item-fancy" href="./images/5.jpg" title="5.jpg"><img src="./images/5.jpg" alt="5.jpg"/></a></li>
                    <li><a class="news-item-fancy" href="./images/141218_CTK_Datsun_17.jpg" title="141218_CTK_Datsun_17.jpg"><img src="./images/141218_CTK_Datsun_17.jpg" alt="141218_CTK_Datsun_17.jpg"/></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_0743.JPG" title="IMG_0743.JPG"><img src="./images/IMG_0743.JPG" alt="IMG_0743.JPG"/></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_1396.jpg" title="IMG_1396.jpg"><img src="./images/IMG_1396.jpg" alt="IMG_1396.jpg"/></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_1411.jpg" title="IMG_1411.jpg"><img src="./images/IMG_1411.jpg" alt="IMG_1411.jpg"/></a></li>
                </div>
-->



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