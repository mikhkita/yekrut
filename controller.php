<?

require_once("init.php");
session_start();
getSource();

$title = "Незабываемое <b>Путешествие в Турцию</b> по системе «все включено»";

$arFirst = array(
	"Раннее бронирование" => array("ранн"),
	"Раннее бронирование" => array("ранн"),
);
$arTours = array(
	"Путевки" => array("путев"),
);
$arRegions = array(
	"Анталию" => array("антали"),
	"Анталью" => array("анталь"),
	"Аланию" => array("алан"),
	"Стамбул" => array("стамбул"),
	"Сиде" => array("сиде"),
	"Белек" => array("белек"),
);

$first = intersectArray($keyWord, $arFirst, "");
$tours = intersectArray($keyWord, $arTours, "Туры");
$regions = intersectArray($keyWord, $arRegions, "Турцию");

$browserTitle = strip_tags($title);

?>