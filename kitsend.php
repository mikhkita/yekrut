<?php
require_once("phpmail.php");

// $email_admin = "beatbox787@gmail.com";
$email_admin = "mike@kitaev.pro";

$from = "Лэндинг “Турция”";
$email_from = "turkey@kru-god.ru";

$chatid = "245407908";
// $chatid = "-203450551";

function sendMessage($messaggio) {
	global $chatid;

   	file_get_contents("http://redder.pro/api/sendTelegram.php?message=".urlencode($messaggio)."&chatid=".$chatid);

	return true;
}

$deafult = array("name"=>"Имя", "phone"=>"Телефон", "email"=>"E-mail", "question"=>"Вопрос" );

$fields = array();

if( count($_POST) ){

	foreach ($deafult  as $key => $value){
		if( isset($_POST[$key]) ){
			$fields[$value] = $_POST[$key];
		}
	}

	$i = 1;
	while( isset($_POST[''.$i]) ){
		$fields[$_POST[$i."-name"]] = $_POST[''.$i];
		$i++;
	}

	$subject = $_POST["subject"];

	$title = "Поступила заявка с сайта ".$from.":\n";
	$text = $subject."\n";

	$message = "<div><h3 style=\"color: #333;\">".$title."</h3>";

	if( isset($_SESSION["source"]) && $_SESSION["source"] != "" ){
			$message .= "<div><p><b>Источник: </b>".$_SESSION["source"]."</p></div>";
		$text .= "Источник: ".$_SESSION["source"]."\n";
	}

	if( isset($_SESSION["keyWord"]) && $_SESSION["keyWord"] != "" ){
			$message .= "<div><p><b>Ключевая фраза: </b>".$_SESSION["keyWord"]."</p></div>";
		$text .= "Ключевая фраза: ".$_SESSION["source"]."\n";
	}

	foreach ($fields  as $key => $value){
		$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
		$text .= $key.": ".$value."\n";
	}	
	
	if(send_mime_mail("Сайт ".$from,$email_from,"",$email_admin,'UTF-8','UTF-8',$subject,$message,true) && sendMessage($text)){	
		echo "1";
	}else{
		echo "0";
	}
}
die();
?>