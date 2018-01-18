<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/offers/([a-z-_0-9]+)/(?:\\?.*)?#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/offers/detail.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/people/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/people/index.php",
	),
	array(
		"CONDITION" => "#^/shares/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/shares/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>