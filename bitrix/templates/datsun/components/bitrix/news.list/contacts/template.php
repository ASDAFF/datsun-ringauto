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

<h1><?=$arResult["NAME"]?></h1>

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="contacts">
	<div class="contacts-block">
		<div class="contact-icon"></div>
		<div class="contact-descr"><p><span class="descr1">Адрес:</span></p><p><?=$arItem["PROPERTIES"]["STREET"]["~VALUE"]?></p></div>
	</div>
	<div class="contacts-block">
		<div class="contact-icon"></div>
		<div class="contact-descr"><p><span class="descr1">Телефон:</span></p><p><span class="ya-phone-1"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></span></p></div>
	</div>
	<div class="clear"></div>
	<div class="contacts-block">
		<div class="contact-icon"></div>
		<div class="contact-descr"><p><span class="descr1">Режим работы:</span></p><p><?=$arItem["PROPERTIES"]["WORK_TIME"]["~VALUE"]?></p></div>
	</div>
	<div class="contacts-block">
		<div class="contact-icon"></div>
		<div class="contact-descr"><p><span class="descr1">E-mail:</span></p><p><a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></p></div>
	</div>
	<div class="contacts-block follow">
		<h3>ПРИСОЕДИНЯЙТЕСЬ К  НАМ:</h3>
		<a href="<?=$arItem["PROPERTIES"]["VK"]["VALUE"]?>" class="contact-vk"></a>
		<a href="<?=$arItem["PROPERTIES"]["FB"]["VALUE"]?>" class="contact-fb"></a>
	</div>
</div>
<?endforeach;?>

