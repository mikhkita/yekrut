<?

require_once("init.php");
session_start();
getSource();

$keyWord = (isset($_GET["utm_term"]))?$_GET["utm_term"]:NULL;

$arFirst = array(
	"Раннее бронирование " => array("ранн", "заране"),
	"Продажа " => array("продаж"),
	"Купить " => array("купить"),
	"Дешевые " => array("дешев"),
	"Недорогие " => array("недорог"),
	"Подбор " => array("подобра", "подбор"),
	"Подбор " => array("подобра", "подбор"),
);
$arTours = array(
	"Путевки" => array("путев"),
	"Горящие туры" => array("горящ", "горяч"),
);
$arRegions = array(
	"Анталию" => array("антали"),
	"Анталью" => array("анталь"),
	"Аланию" => array("алан"),
	"Стамбул" => array("стамбул"),
	"Сиде" => array("сиде"),
	"Белек" => array("белек"),
);
$arSecond = array(
	"по системе «все включено»" => array("включ"),
	"в январе" => array("январ"),
	"в феврале" => array("феврал"),
	"в марте" => array("март"),
	"в апреле" => array("апрел"),
	"в мае" => array("мае", "май", " мая"),
	"в июне" => array("июн"),
	"в июле" => array("июл"),
	"в августе" => array("август"),
	"в сентябре" => array("сентябр"),
	"в октябре" => array("октябр"),
	"в ноябре" => array("ноябр"),
	"в декабре" => array("декабр"),
);

$first = intersectArray($keyWord, $arFirst, "");
$tour = intersectArray($keyWord, $arTours, "Туры");
$region = intersectArray($keyWord, $arRegions, "Турцию");
$second = intersectArray($keyWord, $arSecond, "по системе «все включено»");

$title = $first."<b>".$tour." в ".$region."</b> ".$second;

$browserTitle = strip_tags($title);

?>