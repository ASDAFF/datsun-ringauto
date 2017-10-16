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

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="phone"><strong>Телефон:</strong> <span class="ya-phone-1"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></span></div>
<div class="address"><strong>Адрес:</strong> <?=$arItem["PROPERTIES"]["STREET"]["~VALUE"]?></div>
<div class="hours"><strong>Режим работы:</strong><br><?=$arItem["PROPERTIES"]["WORK_TIME"]["~VALUE"]?></div>
<?endforeach;?>


