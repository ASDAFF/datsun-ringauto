<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("Контакты");
?>

    <div class="header-spacer"></div>


    <div class="content">
        <!-- contacts -->
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "contacts", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
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
            "IBLOCK_ID" => "6",	// Код информационного блока
            "IBLOCK_TYPE" => "contacts",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
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
                0 => "EMAIL",
                1 => "STREET",
                2 => "WORK_TIME",
                3 => "PHONE",
                4 => "VK",
                5 => "FB",
            ),
            "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
            false
        );?>


        <div class="form-fancybox-modal backform">
            <h3>ЗАКАЗ ОБРАТНОГО ЗВОНКА</h3>
            <p>Оставьте свой номер телефона, и наши специалисты свяжутся с Вами в ближайшее время.</p>
            <?$APPLICATION->IncludeComponent(
                "nbrains:main.feedback",
                ".default",
                array(
                    "EMAIL_TO" => "",
                    "EVENT_MESSAGE_ID" => array(
                        0 => "8",
                    ),
                    "IBLOCK_ID" => "17",
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
        <div class="clear"></div>

        <!-- contacts END -->



        <!-- map -->
        <div class="map">
            <div class="map-inner">
                <div id="map"></div>
                <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
            </div>
        </div>
        <!-- map END -->﻿
    </div>
    <!-- content END -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>