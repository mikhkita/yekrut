<?

$keyWord = (isset($_GET["utm_term"]))?$_GET["utm_term"]:NULL;

$data = array(
	"FIRST" => (object) array(
		"values" => array(
			(object) array(
				"value" => "Раннее бронирование ",
				"keys" => array("ранн", "заране"),
				"exclude" => array("горящ", "горяч"),
				"p" => 1
			),
			(object) array(
				"value" => "Бронирование ",
				"keys" => array("бронир"),
				"p" => 1
			),
			(object) array(
				"value" => "Продажа ",
				"keys" => array("продаж"),
				"p" => 1
			),
			(object) array(
				"value" => "Купить ",
				"keys" => array("купить", "покуп"),
			),
			(object) array(
				"value" => "Дешевые ",
				"keys" => array("дешев"),
			),
			(object) array(
				"value" => "Недорогие ",
				"keys" => array("недорог"),
			),
			(object) array(
				"value" => "Подбор ",
				"keys" => array("подобра", "подбор"),
				"p" => 1
			),
			(object) array(
				"value" => "Рассчитать стоимость ",
				"keys" => array("стоит", "стоят", "цен", "почем", "почём"),
				"p" => 1
			),
			(object) array(
				"value" => "",
				"keys" => NULL,
			),
		)
	),
	"TOUR" => (object) array(
		"relation" => "FIRST",
		"values" => array(
			(object) array(
				"value" => array("путевки", "путевок"),
				"keys" => array("путев"),
				"exclude" => array("горящ", "горяч")
			),
			(object) array(
				"value" => array("горящие путевки", "горящих путевок"),
				"keys" => array("путев"),
			),
			(object) array(
				"value" => array("горящие туры", "горящих туров"),
				"keys" => array("горящ", "горяч"),
			),
			(object) array(
				"value" => "семейные туры",
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
	"COUNT" => (object) array(
		"values" => array(
			(object) array(
				"value" => "из Новосибирска ",
				"keys" => array("новосиб"),
			),
			(object) array(
				"value" => "из Томска ",
				"keys" => array("томск"),
			),
			(object) array(
				"value" => "из Кемерово ",
				"keys" => array("кемеро"),
			),
			(object) array(
				"value" => "5 звезд ",
				"keys" => array("5 зве"),
			),
			(object) array(
				"value" => "4 звезды ",
				"keys" => array("4 зве"),
			),
			(object) array(
				"value" => "3 звезды ",
				"keys" => array("3 зве"),
			),
			(object) array(
				"value" => "на двоих ",
				"keys" => array("двоих", "двоем", "двоём", "двое", "два "),
			),
			(object) array(
				"value" => "на троих ",
				"keys" => array("троих", "троем", "троём", "трое", "три "),
			),
			(object) array(
				"value" => "на четверых ",
				"keys" => array("четвер", "четыр"),
			),
			(object) array(
				"value" => "с детьми ",
				"keys" => array("детьми", "ребен", "ребён", "детка"),
			),
			(object) array(
				"value" => "",
				"keys" => NULL,
			)
		)
	),
	"END" => (object) array(
		"values" => array(
			(object) array(
				"value" => "по системе «все включено»",
				"keys" => array("включ"),
				"exclude" => array("5 зве", "4 зве", "3 зве"),
			),
			(object) array(
				"value" => "«все включено»",
				"keys" => array("включ"),
			),
			(object) array(
				"value" => "в январе 2019",
				"keys" => array("январ"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на январь 2019",
				"keys" => array("январ"),
			),
			(object) array(
				"value" => "в феврале 2019",
				"keys" => array("феврал"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на февраль 2019",
				"keys" => array("феврал"),
			),
			(object) array(
				"value" => "в марте 2019",
				"keys" => array("март"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на март 2019",
				"keys" => array("март"),
			),
			(object) array(
				"value" => "в апреле 2019",
				"keys" => array("апрел"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на апрель 2019",
				"keys" => array("апрел"),
			),
			(object) array(
				"value" => "в мае 2019",
				"keys" => array("мае", "май", " мая"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на май 2019",
				"keys" => array("мае", "май", " мая"),
			),
			(object) array(
				"value" => "в июне 2019",
				"keys" => array("июн"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на июнь 2019",
				"keys" => array("июн"),
			),
			(object) array(
				"value" => "в июле 2018",
				"keys" => array("июл"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на июль 2018",
				"keys" => array("июл"),
			),
			(object) array(
				"value" => "в августе 2018",
				"keys" => array("август"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на август 2018",
				"keys" => array("август"),
			),
			(object) array(
				"value" => "в сентябре 2018",
				"keys" => array("сентябр"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на сентябрь 2018",
				"keys" => array("сентябр"),
			),
			(object) array(
				"value" => "в октябре 2018",
				"keys" => array("октябр"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на октябрь 2018",
				"keys" => array("октябр"),
			),
			(object) array(
				"value" => "в ноябре 2018",
				"keys" => array("ноябр"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на ноябрь 2018",
				"keys" => array("ноябр"),
			),
			(object) array(
				"value" => "в декабре 2018",
				"keys" => array("декабр"),
				"exclude" => array("ранн", "брон"),
			),
			(object) array(
				"value" => "на декабрь 2018",
				"keys" => array("декабр"),
			),
			(object) array(
				"value" => "на 2018 год",
				"keys" => array("2018"),
			),
			(object) array(
				"value" => "на 2019 год",
				"keys" => array("2019"),
			),
			(object) array(
				"value" => "по системе «все включено»",
				"keys" => NULL,
			),
		)
	)
);

$pattern = "#FIRST#<b>#TOUR# в #REGION#</b> #COUNT##END#";

$title = generateText($pattern, $keyWord, $data);

$browserTitle = strip_tags($title);

?>