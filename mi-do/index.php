<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купите Datsun mi-DO (Датсун ми-ДО) в Воронеже у официального дилера  по привлекательной цене");
$APPLICATION->SetTitle("mi-do");
?>

<?
$APPLICATION->IncludeFile("/include/top-menu.php", Array(), Array(
    "MODE"      => "html",
    "NAME"      => "Редактирование включаемой области раздела",
    "TEMPLATE"  => ""
));
?>

    <!-- NAVIGATION BEGIN -->
    <nav class="navbar navbar-fixed-top navbar-slide">
        <div class="container_fluid">
            <a class="navbar-brand goto" href="#wrap">Datsun mi-DO:</a>

            <button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <div class="collapse navbar-collapse navMenuCollapse">
                <ul class="nav">
                    <li><a href="#pricing-table">Комплектация и цены</a> </li>
                    <li><a href="#innovations1">Кредит</a></li>
                    <li><a href="#innovations">Экстерьер и интерьер</a></li>
                    <li><a href="#bg_line_cars_9_color">Цвета кузова</a></li>
                    <li><a href="#techspec">Характеристики</a></li>
                    <li><a href="#screenshots">Особенности</a></li>
                    <li><a href="#news">Галерея</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVIGAION END -->

<?
for($i = 1; $i <= 13; $i++) {
    $APPLICATION->IncludeFile($APPLICATION->GetCurDir() . "block" .$i.".php", Array(), Array(
        "MODE" => "html",                                           // будет редактировать в веб-редакторе
        "NAME" => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
        "TEMPLATE" => ""                    // имя шаблона для нового файла
    ));
}
?>


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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>