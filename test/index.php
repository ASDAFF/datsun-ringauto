<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><br>
<div class="header-spacer">
</div>


<?
CModule::IncludeModule("iblock");
$el = new CIBlockElement;

$PROP = array();
$PROP['NAME'] = "Иван Иванов";
$PROP['COMMENT'] = array("VALUE" => array("TEXT" => "Комментарий"));
$PROP['PHONE'] = "";
$PROP['EMAIL'] = "info@bitrix.ru";
$PROP['RULE']["VALUE"] = 23;



$arLoadProductArray = Array(
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => 10,
    "NAME"           => "Элемент",
    "PROPERTY_VALUES" => $PROP,
    "ACTIVE"         => "N",            // активен

);

if($PRODUCT_ID = $el->Add($arLoadProductArray))
    echo "New ID: ".$PRODUCT_ID;
else
    echo "Error: ".$el->LAST_ERROR;
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>