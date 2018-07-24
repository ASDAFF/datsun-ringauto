<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if($arResult['DETAIL_PICTURE']['SRC']): ?>

<section class="block-bg-offer" style="background: url('<?=$arResult['DETAIL_PICTURE']['SRC']?>');">
    <div class="top-price-block">

        <div class="top-name" style="background-image: url('/offers/images/1.png')"><?=$arResult["PROPERTIES"]["TITLE_TWO"]["VALUE"]?></div>

        <div class="top-price" style="background-image: url('/offers/images/2.png')">
            <div class="top-desc">новая цена<br><span>от</span></div>
            <div class="top-val"><?=$arResult["PROPERTIES"]["NEW_PRICE"]["VALUE"]?> &#8381;</div>
            <div class="clear"></div>
        </div>

        <div class="top-price" style="background-image: url('/offers/images/3.png')">
            <div class="top-desc">ваша выгода<br><span>от</span></div>
            <div class="top-val"><?=$arResult["PROPERTIES"]["CREDIT"]["VALUE"]?> &#8381;</div>
            <div class="clear"></div>
        </div>

    </div>
</section>

<? endif; ?>

<section class="ex-offer">

    <div class="content">
        <div class="exlusive-offer">
            <span>ЭТО ЭКСКЛЮЗИВНОЕ ПРЕДЛОЖЕНИЕ, ЗАБРОНИРУЙТЕ СКИДКУ ПРЯМО СЕЙЧАС</span>
            <a href="#offers-messages" class="ex-btn btn-blue form-fancybox" id="">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>
    </div>

</section>


<section class="in-detail-offer">
    <div class="content">

        <div class="offer-title">ПОДРОБНОСТИ СПЕЦПРЕДЛОЖЕНИЯ</div>

        <div class="in-detail">

            <div class="detail-block">
                <ul>
                    <li><a href="#">Модель: <?=$arResult["PROPERTIES"]["MODEL"]["VALUE"]?></a></li>
                    <li><a href="#">Трансмиссия: <?=$arResult["PROPERTIES"]["TransmissionCount"]["VALUE"]?> <?=$arResult["PROPERTIES"]["TRANSMISS"]["VALUE"]?></a></li>
                    <li><a href="#">Мощность: <?=$arResult["PROPERTIES"]["POWER"]["VALUE"]?></a></li>
                    <li><a href="#">Подушки безопасности</a></li>
                    <li><a href="#">Система ABS</a></li>
                </ul>
            </div>

            <div class="detail-block">
                <ul>
                    <li>
                        <div class="all-price">
                            <div class="detail-block">
                                <span class="old-price-desc">Старая цена:</span>
                            </div>
                            <div class="detail-block">
                                <span class="old-price-val"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> &#8381;</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="all-price">
                            <div class="detail-block">
                                <span class="new-price-desc">Новая цена:</span>
                            </div>
                            <div class="detail-block">
                                <span class="new-price-val"><?=$arResult["PROPERTIES"]["NEW_PRICE"]["VALUE"]?> &#8381;</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="all-price">
                            <div class="detail-block">
                                <span class="new-price-desc">Выгода:</span>
                            </div>
                            <div class="detail-block">
                                <span class="new-price-val"><?=$arResult["PROPERTIES"]["CREDIT"]["VALUE"]?> &#8381;</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>

                <div class="add-test">
                    <div class="offer-title blue">Записаться на тест-драйв</div>
                    <p>и забронировать эксклюзивную цену</p>
                    <a href="#offers-messages" class="offer-btn-test form-fancybox" id="">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:news.list", "gallery-offer", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "",	// Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "11",	// Код информационного блока
    "IBLOCK_TYPE" => "sliders",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "20",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
),
    false
);?>



<div class="content">

    <div class="title">Наши другие спецпредложения</div>
    <!-- offer -->

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "offer-list-detail", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",	// Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
        "DISPLAY_NAME" => "Y",	// Выводить название элемента
        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
        "FIELD_CODE" => array(	// Поля
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",	// Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "7",	// Код информационного блока
        "IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",	// Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",	// Название категорий
        "PARENT_SECTION" => "",	// ID раздела
        "PARENT_SECTION_CODE" => "",	// Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(	// Свойства
            0 => "CREDIT",
            1 => "NEW_PRICE",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
        "SHOW_404" => "N",	// Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
    ),
        false
    );?>

    <!-- offer END -->
</div>


<section class="credit-offer">

    <div class="content">

        <div class="gallery-title">Выгодный кредит на datsun</div>

        <div class="credits">
            <div class="credit-block-30">
                от <span>6 %</span>
            </div>
            <div class="credit-block-30">
                на <span>3</span> года
            </div>
            <div class="credit-block-40">
                от <span>40%</span> первый взнос
            </div>

            <div class="clear"></div>
        </div>

    </div>


</section>


<div class="content">

    <div class="advantages-slider">
        <ul class="advantages-slider-bx">

            <?
            $default_comlict = array_chunk($arResult["PROPERTIES"]["DEFAULT_COMPLIT"]["VALUE"],8);
            $default_comlict_count = count($default_comlict);
            for($i = 0;$i < $default_comlict_count;$i++):
            ?>
            <li>
                <div class="title">Комплектации datsun</div>

                <div class="text">
                    <span>Комплектация <?=$arResult["PROPERTIES"]["MODEL"]["VALUE"]?></span>
                    <ul>
                        <?foreach($default_comlict[$i] as $default):?>
                        <li><span><?=$default;?></span></li>
                        <? endforeach; ?>

                    </ul>
                </div>
                <img alt="<?=$arResult['NAME']?>" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" class="image"  />
            </li>
            <? endfor; ?>



        </ul>
    </div>
</div>

<section class="ex-offer">

    <div class="content">
        <div class="exlusive-offer">
            <span>ВОСПОЛЬЗУЙТЕСЬ УНИКАЛЬНЫМ ЦЕНОВЫМ ПРЕДЛОЖЕНИЕМ И ОСТАВЬТЕ ЗАЯВКУ НА ТЕСТ-ДРАЙВ</span>
            <a href="#offers-messages" class="ex-btn btn-blue form-fancybox" id="">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>
    </div>

</section>



<section class="contact">

    <div class="title">Контакты</div>

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
</section>