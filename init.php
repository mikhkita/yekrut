<?

function intersect($str, $arr){
	foreach($arr as $arr_item){
		if(strpos($str, $arr_item)){
			return true;
		}
	}
	return false;
}

function intersectArray($keyWord, $arr, $default){
	foreach ($arr as $result => $keys) {
		if( intersect($keyWord, $keys) ){
			return $result;
		}
	}
	return $default;
}

function getSource(){
	if( isset($_SESSION["source"]) ) return true;

	if( isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] != "" ){
		$refer = $_SERVER["HTTP_REFERER"];
	}
	$source = "Неизвестен";
	$keyWord = NULL;

	if( isset($_GET["utm_source"]) ){
		$sources = array(
			"yandex.search" => "Яндекс.Директ (поиск)",
			"yandex.context" => "Яндекс.Директ (РСЯ)",
			"yadirect" => "Яндекс.Директ (поиск)",
		);
		if( isset($sources[ $_GET["utm_source"] ]) ){
			$source = $sources[ $_GET["utm_source"] ];
		}else{
			$source = $_GET["utm_source"];
		}

		$keyWord = $_GET["utm_term"];
		// $keyWord = $_GET["utm_content"];
	}elseif( strpos($refer, "vk.com") !== false ){
		$source = "Вконтакте";
	}elseif( strpos($refer, "link.2gis.ru") !== false ){
		$source = "2Gis";
	}elseif( strpos($refer, "instagram.com") !== false ){
		$source = "Инстаграм";
	}elseif( strpos($refer, "yandex.ru") !== false ){
		$source = "Яндекс (органика)";
	}elseif( strpos($refer, "google.ru") !== false ){
		$source = "Google (органика)";
	}

	$_SESSION["source"] = $source;
	$_SESSION["keyWord"] = $keyWord;
}

?>