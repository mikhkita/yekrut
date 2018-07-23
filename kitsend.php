<?php
require_once("phpmail.php");

session_start();

$users = array(
	(object)array(
		"id" => 1498240,
		"name" => "Юлия Лозовая",
		"login" => "kru-god-j@yandex.ru",
		"hash" => "5e4bd85e87b81e95357719fbdd1f85f5",
	), // Юля
	(object)array(
		"id" => 2204893,
		"name" => "Екатерина Белозёрова",
		"login" => "ekaterina1.belozerova@aiesec.net",
		"hash" => "387b6f825977c37ff495c73fb7152f0b",
	), // Катя
);

$id = intval(file_get_contents("amo.txt"));
$id = ( $id + 1 >= count($users) )?0:($id + 1);
file_put_contents("amo.txt", $id);

$user = $users[$id];

$email_admin = "dima@redder.pro";
// $email_admin = "turizm-krugod@yandex.ru, mike@kitaev.pro";

$from = "Лэндинг “Турция”";
$email_from = "turkey@kru-god.ru";

$chatid = "245407908";
// $chatid = "-203450551";

function sendMessage($messaggio) {
	global $chatid;

   	file_get_contents("http://redder.pro/api/sendTelegram.php?message=".urlencode($messaggio)."&chatid=".$chatid);

	return true;
}

$deafult = array("name"=>"Имя", "phone"=>"Телефон", "email"=>"E-mail", "question"=>"Вопрос", "when"=>"Планируемая дата вылета", "adults"=>"Количество взрослых", "children"=>"Количество детей", "nights"=>"Желаемое количество ночей" );

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
		$text .= "Ключевая фраза: ".$_SESSION["keyWord"]."\n";
	}

	foreach ($fields  as $key => $value){
		$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
		$text .= $key.": ".$value."\n";
	}	

	$message .= "<div><p><b>Ответственный:</b> ".$user->name."</p></div></div>";
	$text .= "Ответственный: ".$user->name;
	
	if(send_mime_mail("Сайт ".$from,$email_from,"",$email_admin,'UTF-8','UTF-8',$subject,"Турция: ".$message,true) && sendMessage("Турция: ".$text)){	
		echo "1";
	}else{
		echo "0";
	}
}

die();


$params = array( 
	"login" => $user->login, 
	"hash" => $user->hash,
	"subdomain" => "krugodtomsk",
	"phone_id" => 1771878,
	"email_id" => 1771880,
	"source_id" => 1983387,
	"keyWord_id" => 1983389
);

if( AmoAuth($params) ){
	$leadId = AmoLead($params, $user->id);
	$contactId = AmoContacts($params,$leadId);	
	if( (isset($_POST["comment"]) && $_POST["comment"] != "") || (isset($_POST["tour"]) && $_POST["tour"] != "") ){
		if( AmoNotes($params,$leadId) ){
			// echo "1";
		}else{
			// echo "0";
		}
	}else{
		// echo "1";
	}
}


function AmoAuth($params){
	$user=array(
		'USER_LOGIN'=>$params["login"], #Ваш логин (электронная почта)
		'USER_HASH'=>$params["hash"] #Хэш для доступа к API (смотрите в профиле пользователя)
	);
	 
	$subdomain=$params["subdomain"]; #Наш аккаунт - поддомен
	 
	#Формируем ссылку для запроса
	$link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json';

	$request = AmoRequest($link,$user);

	$out = $request["out"];
	$code=(int)$request["code"];
	$errors=array(
		301=>'Moved permanently',
		400=>'Bad request',
		401=>'Unauthorized',
		403=>'Forbidden',
		404=>'Not found',
		500=>'Internal server error',
		502=>'Bad gateway',
		503=>'Service unavailable'
	);
	try
	{
		#Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Ошибка1: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
	 
	/**
	 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
	 * нам придётся перевести ответ в формат, понятный PHP
	 */
	$Response=json_decode($out,true);
	$Response=$Response['response'];
	if(isset($Response['auth']))
		return true;
	return false;
}

function AmoRequest($link,$data){
	$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
	#Устанавливаем необходимые опции для сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
	curl_setopt($curl,CURLOPT_URL,$link);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($data));
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	 
	$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE); #Получим HTTP-код ответа сервера
	curl_close($curl); #Завершаем сеанс cURL
	return array("out"=>$out,"code"=>$code);
}

function AmoLead($params, $userId){

	$leads['request']['leads']['add']=array(
		array(
			'name'=>'Новый запрос: '.$_POST["name"],
			'date_create'=>time(), //optional
			'status_id'=>13706085,
			'responsible_user_id'=>$userId,
			'tags' => 'Оценка', #Теги
		)
	);

	$subdomain=$params["subdomain"]; #Наш аккаунт - поддомен
	#Формируем ссылку для запроса
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';

	$request = AmoRequest($link,$leads);

	$out = $request["out"];
	$code=(int)$request["code"];
	$errors=array(
		301=>'Moved permanently',
		400=>'Bad request',
		401=>'Unauthorized',
		403=>'Forbidden',
		404=>'Not found',
		500=>'Internal server error',
		502=>'Bad gateway',
		503=>'Service unavailable'
	);
	try
	{
		#Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Ошибка2: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
	 
	/**
	 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
	 * нам придётся перевести ответ в формат, понятный PHP
	 */
	$Response=json_decode($out,true);
	$Response=$Response['response']['leads']['add'];
	 
	$output='';
	foreach($Response as $v)
		if(is_array($v))
			$output.=$v['id'];
	return $output;
}

function AmoContacts($params,$leadId){
	$custom_fields = array();

	if( isset($_SESSION["source"]) && $_SESSION["source"] != "" ){
		array_push($custom_fields, array(
			#Источник
			'id'=>$params["source_id"], #Уникальный индентификатор заполняемого дополнительного поля
			'values'=>array(
				array(
					'value'=>$_SESSION["source"],
				),
			)
		));
	}

	if( isset($_SESSION["keyWord"]) && $_SESSION["keyWord"] != "" ){
		array_push($custom_fields, array(
			#Ключевая фраза
			'id'=>$params["keyWord_id"],
			'values'=>array(
				array(
					'value'=>$_SESSION["keyWord"],
				),
			)
		));
	}

	if( isset($_POST["phone"]) && $_POST["phone"] != "" ){
		array_push($custom_fields, array(
			#Телефон
			'id'=>$params["phone_id"], #Уникальный индентификатор заполняемого дополнительного поля
			'values'=>array(
				array(
					'value'=>$_POST["phone"],
					'enum'=>'MOB' #Мобильный
				),
			)
		));
	}
	if( isset($_POST["email"]) && $_POST["email"] != "" ){
		array_push($custom_fields, array(
			#E-mail
			'id'=>$params["email_id"],
			'values'=>array(
				array(
					'value'=>$_POST["email"],
					'enum'=>'WORK', #Рабочий
				),
			)
		));
	}

	$contacts['request']['contacts']['add']=array(
		array(
			'name'=>$_POST["name"], #Имя контакта
			//'last_modified'=>1298904164, //optional
			'linked_leads_id'=>array( #Список с айдишниками сделок контакта
				$leadId
			),
			'responsible_user_id'=>$user->id,
			// 'company_name'=>'amoCRM', #Наименование компании
			// 'tags' => 'Important, USA', #Теги
			'custom_fields'=>$custom_fields
		)
	);

	$subdomain=$params["subdomain"]; #Наш аккаунт - поддомен
	#Формируем ссылку для запроса
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';

	$request = AmoRequest($link,$contacts);

	$out = $request["out"];
	$code=(int)$request["code"];
	$errors=array(
		301=>'Moved permanently',
		400=>'Bad request',
		401=>'Unauthorized',
		403=>'Forbidden',
		404=>'Not found',
		500=>'Internal server error',
		502=>'Bad gateway',
		503=>'Service unavailable'
	);
	try
	{
		#Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
		if($code!=200 && $code!=204)
			throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
		die('Ошибка3: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
	 
	/**
	 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
	 * нам придётся перевести ответ в формат, понятный PHP
	 */
	$Response=json_decode($out,true);
	$Response=$Response['response']['contacts']['add'];
	 
	$output='';
	foreach($Response as $v)
	  	if(is_array($v))
	    	$output.=$v['id'];
	return $output;
}

function AmoNotes($params,$leadId){
	$text = "";

	if( isset($_POST["tour"]) && $_POST["tour"] != "" ){
		$text .= (str_replace("<br>", "\n", $_POST["tour"])."\n");

		if( isset($_POST["comment"]) && $_POST["comment"] != "" ){
			$text .= "Пожелания: ".$_POST["comment"]."\n";
		}
	}else if( isset($_POST["comment"]) && $_POST["comment"] != "" ){
		$text .= $_POST["comment"]."\n";
	}

	// if( isset($_POST["file"]) && $_POST["file"] != "" ){
	// 	$text .= "Прикрепленный файл: ".$_POST["file"]."\n";
	// }

	$notes['request']['notes']['add']=array(
	  #Привязываем к сделке
	  array(
	    'element_id'=>$leadId,
	    'element_type'=>2,
	    'text'=>$text,
	  )
	);

	$subdomain=$params["subdomain"]; #Наш аккаунт - поддомен
	#Формируем ссылку для запроса
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/notes/set';

	$request = AmoRequest($link,$notes);

	$code=(int)$request["code"];
	$errors=array(
	  301=>'Moved permanently',
	  400=>'Bad request',
	  401=>'Unauthorized',
	  403=>'Forbidden',
	  404=>'Not found',
	  500=>'Internal server error',
	  502=>'Bad gateway',
	  503=>'Service unavailable'
	);
	try
	{
	  #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
	  if($code!=200 && $code!=204)
	    throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
	}
	catch(Exception $E)
	{
	  die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
	}
	return true;
}

?>