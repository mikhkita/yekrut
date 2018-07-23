<?

$keyWord = (isset($_GET["utm_term"]))?$_GET["utm_term"]:NULL;

$data = array(
	"TOUR" => (object) array(
		"relation" => "FIRST",
		"values" => array(
			(object) array(
				"value" => array("путевки", "путевок"),
				"keys" => array("путев"),
			),
			(object) array(
				"value" => array("горящие туры", "горящих туров"),
				"keys" => array("горящ", "горяч"),
			),
			(object) array(
				"value" => "семейный тур",
				"keys" => array("семья", "семьи", "семье", "семьё"),
			),
			(object) array(
				"value" => array("туры", "туров"),
				"keys" => array("тур ", "туров", "туры", "тура"),
			),
			(object) array(
				"value" => array("горящие туры", "горящих туров"),
				"keys" => NULL,
			),
		)
	),
	"REGION" => (object) array(
		"values" => array(
			(object) array(
				"value" => "Анталию",
				"keys" => array("антали"),
			),
			(object) array(
				"value" => "Анталью",
				"keys" => array("анталь"),
			),
			(object) array(
				"value" => "Аланию",
				"keys" => array("алан"),
			),
			(object) array(
				"value" => "Стамбул",
				"keys" => array("стамбул"),
			),
			(object) array(
				"value" => "Сиде",
				"keys" => array("сиде"),
			),
			(object) array(
				"value" => "Белек",
				"keys" => array("белек"),
			),
			(object) array(
				"value" => "Турцию",
				"keys" => NULL,
			),
		)
	),
);

$pattern = "<b>#TOUR# в #REGION#</b> от 20 000 руб";

$title = generateText($pattern, $keyWord, $data);

$browserTitle = strip_tags($title);

?>