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

<div class="header-spacer"></div>


<div class="content">
	<div class="news-detail">
		<h1>Благодарности</h1>
		<div class="news-date">
		</div>
		<!-- <div class="news-line"></div> -->
		<div class="news-banner">
			<img class="news-banner-img" src="/reviews/images/banner.jpg">
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


		<div class="form-fancybox-modal backform reviewsform">
			<h3>ОСТАВИТЬ ОТЗЫВ</h3>
			<form name="iblock_add" class="review_form" action="/about/reviews/" method="post" enctype="multipart/form-data">
				<p>
					Нам очень важно знать Ваше мнение. Ведь мы стремимся профессионально выполнять свою работу, тем самым, подтверждая высокий статус официального дилера Datsun. Присылайте нам свои предложения, пожелания, жалобы и отзывы. Каждый, без исключения, найдет свой ответ.
				</p>
				<input type="hidden" name="sessid" id="sessid_5" value="899e2d55be5839172815485cd64fee9c" />								<label>
					<div class="label">
						<p>Имя<span class="required">*</span></p>
					</div>
					<input type="text" name="PROPERTY[NAME][0]" size="25" value="" required /><br />					</label>
				<label>
					<div class="label">
						<p>Комментарий<span class="required">*</span></p>
					</div>
					<textarea required cols="30" rows="5" name="PROPERTY[PREVIEW_TEXT][0]"></textarea>
				</label>
				<label>
					<div class="label">
						<p>Телефон</p>
					</div>
					<input type="text" name="PROPERTY[75][0]" size="25" value=""  /><br />					</label>
				<label>
					<div class="label">
						<p>E-mail<span class="required">*</span></p>
					</div>
					<input type="email" name="PROPERTY[94][0]" size="25" value="" required /><br />					</label>
				<div class="form-bottom">

					<div class="form-i">
						<input class="zapis_check" type="checkbox" name="zapis_check" value=""/>
						<span class="agreement">Я даю свое согласие на обработку персональных данных, с <a href="/upload/personal.docx">условиями обработки персональных данных</a> ознакомлен</span>
					</div>


					<input type="submit" name="iblock_submit" class="btn" value="ОТПРАВИТЬ" />
					<div>
						<p>
							<span class="required">*</span>Поля, обязательные для заполнения
						</p>
					</div>
				</div>
				<div class="clear">
				</div>
			</form>
		</div>


		<div class="contacts reviewslist">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="reviewblock" id="bx_3218110189_2523">
				<div class="title"><?=$arItem["NAME"]?></div>
				<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
				<div class="comment"><p><?echo $arItem["PREVIEW_TEXT"];?></p></div>
			</div>
			<?endforeach;?>

			<br />
			<!-- Новости -->
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
		<div class="clear">
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

