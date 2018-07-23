<?

require_once("init.php");
getSource();

if( !isset($_SESSION["group"]) ){
	$_SESSION["group"] = (rand(1, 100) > 50)?2:1;
}
$group = $_SESSION["group"];

require_once("controller-1.php");

$version = 4;

?><!DOCTYPE html>
<html>
<head>
	<title><?=$browserTitle?></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css?<?=$version?>" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/slick-theme.css?<?=$version?>" type="text/css">
	<link rel="stylesheet" href="css/layout.css?<?=$version?>" type="text/css">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="i/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="i/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="i/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="i/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="i/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="i/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="i/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="i/favicon/apple-touch-icon-152x152.png" />
	
	<link rel="icon" type="image/png" href="i/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="i/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="i/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="i/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="i/favicon/favicon-128.png" sizes="128x128" />

	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css?<?=$version?>">

	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<!-- Пиксель VK -->
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?157",t.onload=function(){VK.Retargeting.Init("VK-RTRG-264822-cLysz"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-264822-cLysz" style="position:fixed; left:-999px;" alt=""/></noscript>
</head>
<body>
	<img src="i/bg-popup-2-m.jpg" style="display: none">
	<img src="i/bg-popup-2.jpg" style="display: none">
	<img src="i/transfer.png" style="display: none">
	<div class="b b-1">
		<div class="b-block">
			<div class="b-header-wrap clearfix">
				<a href="http" class="b-logo-cont">
					<img src="i/logo.svg">
				</a>
				<div class="b-adr">
					<p>г. Томск, пр. Кирова, 58 ст. 26,<br> офис 21, 2 этаж</p>
				</div>
				<div class="b-phone">
					<label for="recall" class="phone">+7 (3822) 909-303</label>
					<a class="recall fancy goal-click" data-goal="CALLME_OPEN" id="recall" href="#b-popup-5">перезвоните мне</a>
				</div>
			</div>
			<div class="b-bottom">	
				<div class="b-h1-wrap">
					<h1><?=$title?></h1>
					<p class="b-subtitle"><b>Узнайте стоимость</b> вашего путешествия,  ответив на несколько простых вопросов</p>
					<div class="consult">
						<a href="#b-popup-quiz-1" class="b-button orange left fancy goal-click" data-goal="CALC_OPEN" data-next="scr-1">
							<p class="button-bold">Рассчитать стоимость</p>
							<p class="button-thin">путешествия в Турцию</p>
						</a>
						<p class="small">это не займет много времени</p>
						<!-- <a href="#b-popup-2" class="b-button orange left fancy goal-click" data-goal="CALC_OPEN" data-next="scr-1">
							<p class="button-bold">Получить консультацию</p>
							<p class="button-thin">бесплатно</p>
						</a>
						<p class="small">это просто и ни к чему не обязывает</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block">
			<h2 class="b-header-h2"><b>5 причин,</b> почему вам стоит хотя бы раз посетить Турцию</h2>	
		</div>
		<div class="b-reasons clearfix">
			<div class="b-reason">
				<div class="b-block">
					<div class="b-picture-3"></div>
					<div class="b-reason-text-3  slider-anim fadeDown">
						<h3 class="b-header-h3 slider-anim fadeDown">Больше морей – <b>больше&nbsp;пляжей</b></h3>
						<p class="b-text slider-anim fadeDown delay200">Турция омывается 4-мя морями – Средиземным, Черным, Эгейским и Мраморным. А пляжи входят в десятку <em>чистейших пляжей мира.</em> Эти факты уже неплохой повод приехать сюда на отдых.</p>
					</div>
				</div>
			</div>
			<div class="b-reason">
				<div class="b-block">
					<div class="b-picture-2"></div>
					<div class="b-reason-text-2 slider-anim fadeDown">
						<h3 class="b-header-h3 slider-anim fadeDown">Капля адреналина и <b>множество</b> эмоций</h3>
						<p class="b-text slider-anim fadeDown delay200">Для людей, которые <em>не любят сидеть на&nbsp;одном месте</em> в Турции есть множество активных видов отдыха - дайвинг, рафтинг, яхтинг, альпинизм, сафари, водные лыжи, парапланы и воздушные шары.</p>
					</div>
				</div>
			</div>
			<div class="b-reason">
				<div class="b-block">
					<div class="b-picture-4"></div>
					<div class="b-reason-text-4">
						<h3 class="b-header-h3 slider-anim fadeDown">Знаменитый<br><b>«All&nbsp;inclusive»</b></h3>
						<p class="b-text slider-anim fadeDown delay200">Что мы чаще всего слышим про Турцию? Правильно, что там все включено. Практически в каждом отеле в стоимость проживания <em>входит завтрак, обед и ужин, </em>и на каждом – шикарный шведский стол.</p>
					</div>
				</div>
			</div>
			<div class="b-reason">
				<div class="b-block">
					<div class="b-picture-1"></div>
					<div class="b-reason-text-1 slider-anim fadeDown">
						<h3 class="b-header-h3 slider-anim fadeDown"><b>Вкуснейшие</b> восточные&nbsp;сладости</h3>
						<p class="b-text slider-anim fadeDown delay200">Турция знаменита <em>своими сладостями</em> – баклава, рахат-лукум, халва, кадаиф, кюнефе. Пробовали? Уверены? Поверьте, так, как их готовят в Турции, <em>не готовят больше нигде.</em></p>
					</div>
				</div>
			</div>
			<div class="b-reason">
				<div class="b-block">
					<div class="b-picture-5"></div>
					<div class="b-reason-text-5 slider-anim fadeDown">
						<h3 class="b-header-h3 slider-anim fadeDown">Дорогой сервис по <b>невысокой</b> цене</h3>
						<p class="b-text slider-anim fadeDown delay200">Звездные отели, большие бассейны, блеск и изящество – по уровню обслуживания Турция не уступит ни одной европейской стране. Только вот <em>заплатите</em> Вы за это <em>гораздо меньше.</em></p>
					</div>
				</div>
			</div>
		</div>
		<a href="#b-popup-1" class="b-button orange more fancy goal-click" data-goal="MEETING_OPEN">
			<p class="button-bold">Узнать подробнее</p>
			<p class="button-thin">о путешествии по Турции</p>
		</a>
	</div>
	<div class="b b-2-1">
		<div class="b-block">
			<div class="b-overprice clearfix">
				<div class="b-expert-3-wrap">
					<div class="b-expert-3">
						<div id="circle-3" class="b-circle anim fadeDown">
							<div class="b-expert-cont anim fadeDown delay200">
								<img src="i/girl-overprice.png" id="expert-3" class="b-expert-pic-3" data-retina="i/girl-overprice@2x.png" data-cont="notOverprice"> 
							</div>
						</div>
					</div>
				</div>
				<div class="b-header-h2" id="notOverprice">
					Допустим, нет&nbsp;сомнений, что я хочу в Турцию, но где мне взять путевку <b>не переплачивая турагентам?</b>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-2-2">
		<div class="b-block">
			<h2 class="b-header-h2">Турагентство «Отдых круглый год» занимается&nbsp;продажей туров <b>напрямую от&nbsp;туроператоров</b></h2>
			<p class="b-subtitle" id="b-2-2h2">Как это работает:</p>
			<div class="explain clearfix">
				<div class = "explanation anim fadeDown" data-cont="#b-2-2h2">
					<img src="i/direct-1.jpg" data-retina="i/direct-1@2x.jpg">
					<p class="b-dif-text">Вы <a href="#b-popup-2" class="fancy goal-click" data-goal="REQUEST_OPEN"><b>оставляете заявку</b></a> на поиск тура</p>
				</div>
				<div class = "explanation clearfix anim fadeDown delay200" data-cont="#b-2-2h2">
					<img src="i/direct-2.jpg" data-retina="i/direct-2@2x.jpg">
					<p class="b-dif-text">Наш менеджер подбирает для вас <b>лучший тур</b> под все ваши запросы</p>
				</div>
				<div class = "explanation clearfix anim fadeDown delay400" data-cont="#b-2-2h2">
					<img src="i/direct-3.jpg" data-retina="i/direct-3@2x.jpg">
					<p class="b-dif-text">Мы бронируем путевку <b>по цене туроператора</b></p>
				</div>
			</div>
			<p class="b-subtitle payoff"><b>Вы не платите комиссию</b> нашим менеджерам: за вас это делает туроператор</p>
		</div>
	</div>
	<div class="b-block">
		<img id="b-title-logo" class="b-title-logo" src="i/logo-big.svg" data-enllax-ratio=".15" data-enllax-type="foreground" data-enllax-direction="vertical">
	</div>
	<div class="b b-3">
		<div class="b-block">
			<h2 class="b-header-h2">Чем <b>турагентство «Отдых круглый год»</b> отличается от обычных банков туров?</h2>
			<div class="b-differences clearfix">
				<div class="b-difference">
					<div class="b-money anim fadeDown" data-cont=".b-3">
					</div>
					<h4 class="b-dif-title anim fadeDown delay100" data-cont=".b-3">Железная цена,<br> никаких скрытых доплат</h4>
					<p class="b-dif-text anim fadeDown delay200" data-cont=".b-3">Вы платите <b>только стоимость тура</b>, которую устанавливает туроператор и ни копейки больше.</p>
				</div>
				<div class="b-difference">
					<div class="b-docs anim fadeDown delay400" data-cont=".b-3">
					</div>
					<h4 class="b-dif-title anim fadeDown delay500" data-cont=".b-3">Бесплатная помощь при оформлении тура</h4>
					<p class="b-dif-text anim fadeDown delay600" data-cont=".b-3">Подбор и бронирование тура, оформление документов, а также сопровождение на протяжении всего путешествия – <b>бесплатно.</b> </p>
				</div>
			</div>
			<div class="b-bottom-b-3 clearfix">
				<div class="b-julia anim fadeDown" data-cont=".b-bottom-b-3">
					<div class="b-post anim fadeRight delay600" data-cont=".b-bottom-b-3">менеджер турагентства «Отдых круглый год»</div>
					<div class="b-name anim fadeRight delay500" data-cont=".b-bottom-b-3">Юлия Лозовая</div>
				</div>
				<div class="p-description">
					<p class="b-header-h3"><b>Опытные эксперты</b> по направлению&nbsp;Турция </p> 
					<p class="b-text">Наши менеджеры <b>знают абсолютно все<br> об отдыхе в Турции: </b>где находятся самые чистые пляжи,<br> как и где дешевле записаться на экскурсию и т.д.</p>
				</div>
			</div>
			<div class="b-bottom-b-3-m">
				<div class="b-expert">
					<div class="b-circle">
						<div class="b-expert-cont">
							<img src="i/julia-mobile.png" class="b-expert-pic anim fadeDown"  data-retina="i/julia-mobile@2x.png">
						</div>
					</div>
				</div>
				<h4 class="b-dif-title"><b>Опытные эксперты</b> по направлению&nbsp;Турция</h4>
				<p class="b-dif-text">Наши менеджеры <b>знают абсолютно всё об отдыхе в Турции: </b>где находятся самые чистые пляжи, как и где дешевле записаться на экскурсию и т.д.</p>
			</div>
		</div>
	</div>
	<div class="b b-4">
		<div id="particles-js"></div>	
		<div class="b-block">
			<h2 class="b-header-h2">Посмотрите <b>отзывы туристов</b>, которые уже&nbsp;доверились нашему турагентству</h2>
		</div>
		<div class="b-reviews">
			<div class="b-review">
				<div class="b-block">
					<div class="wrapper">
						<div class="b-r-wrap"> 
							<div class="b-r-photo-1"></div>
							<p class="b-r-name">Алёна Шаипова<br>
							<noindex><a href="https://vk.com/id11474406" class="b-r-link" target="_blank">ссылка VK</a></noindex></p>
						</div>
						<p class="b-r-header slider-anim fadeDown">«Это было лучше, чем в раю! Всем советую»</p>
						<p class="b-r-text slider-anim fadeDown delay200">Выражаю огромную благодарность турагентству «Отдых круглый год» за мой первый великолепный отдых. Отель на первой линии, хороший район, шикарный пляж, через дорогу шикарное море... Это было лучше, чем в раю! Спасибо от души, всем советую это туристическое агентство.</p>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="wrapper">
						<div class="b-r-wrap"> 
							<div class="b-r-photo-2"></div>
							<p class="b-r-name">Марта Казакова<br>
							<noindex><a href="https://vk.com/id18874055" class="b-r-link" target="_blank">ссылка VK</a></noindex></p>
						</div>
						<p class="b-r-header slider-anim fadeDown">«Спасибо за отличную организацию нашего отпуска»</p>
						<p class="b-r-text slider-anim fadeDown delay200">Очень понравилось работать с Юлией! Терпеливый менеджер, который подберёт идеальный вариант даже для самых капризных клиентов. Всё изучит, позвонит узнает нюансы, которые важны для клиентов... В общем, спасибо за отличную организацию нашего отпуска!</p>
					</div>
				</div>
			</div>
			<div class="b-review">
				<div class="b-block">
					<div class="wrapper">
						<div class="b-r-wrap"> 
							<div class="b-r-photo-3"></div>
							<p class="b-r-name">Арина Чикурова<br>
							<noindex><a href="https://vk.com/arniechi" class="b-r-link" target="_blank">ссылка VK</a></noindex></p>
						</div>
						<p class="b-r-header slider-anim fadeDown">«Остались так довольны, что решили снова обратиться к вам»</p>
						<p class="b-r-text slider-anim fadeDown delay200">Мы обратились в первый раз в связи со свадебным путешествием и остались так довольны, что с появлением новой возможности поехать отдыхать решили снова обратиться к агенту Юлии Лозовой. Её компетентность, индивидуальный подход и приятная индивидуальность - неоспоримы! </p>
					</div>
				</div>
			</div>
		</div>
		<a href="#b-popup-2" class="b-button orange relax fancy goal-click" data-goal="WANTSAME_OPEN">
				<p class="button-bold">Хочу так же отдохнуть</p>
				<p class="button-thin">подберите мне тур</p>
		</a>
	</div>
	<div class="b b-5">
		<div class="b-block">
			<h2 class="b-header-h2"><b>Над вашим отдыхом</b> будут работать лучшие в&nbsp;своем деле <b>эксперты</b></h2>
			<div class="b-experts">
				<div class="b-expert-1-wrap clearfix">
					<div class="b-expert">
						<div id="circle" class="b-circle">
							<div class="b-expert-cont">
								<img src="i/julia-2.png" id="expert" class="b-expert-pic" data-enllax-ratio="-0.07" data-enllax-type="foreground" data-enllax-direction="vertical" data-retina="i/julia-2@2x.png">
							</div>
						</div>
					</div>
					<div class="b-expert-quote-wrap">
						<div class="line-1 anim width-1" data-cont=".b-5"></div>
						<div id="expert-name" class="b-expert-name anim fadeDown delay500" data-cont=".b-5">Юлия Лозовая</div>
						<div id="expert-quote" class="b-expert-quote anim fadeDown delay600" data-cont=".b-5">«Я счастлива от того, что делаю людей&nbsp;счастливыми»</div>
						<div id="question-button" class="anim fadeRight delay800" data-cont=".b-5">
							<a id="link-1" href="#b-popup-3" class="b-button orange question fancy left anim fadeRight goal-click" data-goal="JULIA_OPEN" data-cont=".b-5">
								<p class="button-bold">Задать вопрос</p>
							</a>
						</div>
					</div>
				</div>
				<div class="b-expert-1-wrap clearfix">
					<div class="b-expert right">
						<div id="circle-2" class="b-circle">
							<div class="b-expert-cont">
								<img src="i/kate.png" id="expert-2" class="b-expert-pic-2" data-enllax-ratio="0.07" data-enllax-type="foreground" data-enllax-direction="vertical" data-retina="i/kate@2x.png">
							</div>
						</div>
					</div>
					<div class="b-expert-quote-wrap">
						<div class="line-2 anim width-2" data-cont=".line-2"></div>
						<div id="expert-name-2" class="b-expert-name anim fadeDown" data-cont=".line-2">Екатерина Белозёрова</div>
						<div id="expert-quote-2" class="b-expert-quote anim fadeDown delay100" data-cont=".line-2">«С детства мечтала знать всё о всех странах&nbsp;мира, теперь хочу поделиться этим&nbsp;с&nbsp;моими клиентами»</div>
						<div id="question-button-2" class="anim fadeLeft delay300" data-cont=".line-2">
							<a href="#b-popup-4" class="b-button orange question left fancy goal-click" data-goal="KATE_OPEN">
								<p class="button-bold">Задать вопрос</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-6 anim" data-anim="footer-animate" data-offset="70">
		<div class="b-block clearfix">
			<div class="b-left">
				<p class="b-header-h2-b-6">Запишитесь на встречу в нашем офисе</p>
				<p class="b-header-h2-b-6-2"></p>
				<p class="b-subtitle-b-6">и мы бесплатно пришлем за вами автомобиль с личным водителем</p>
				<!-- <p id="typed-show"></p>
				<p id="typed-show-2"></p> -->
				<p class="b-subtitle-b-6-2"></p>
			</div>
			<div class="b-car fadeLeft anim delay2000" data-cont=".b-6" data-offset="-50px"></div>
			<div class="b-right fadeDown anim delay2800" data-cont=".b-6" data-offset="-50px">
				<p class="b-form-header">Заполните простую форму</p>
				<p class="b-form-subtitle">И наш менеджер свяжется с вами в течение 2&nbsp;минут и предложит удобное время</p>
				<form action="kitsend.php" method="POST" data-goal="BOTTOM" id="b-form-1">	
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange meeting ajax">
							<p class="button-bold">Записаться на встречу</p>
							<p class="button-thin">бесплатно в нашем офисе</p>
						</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
						<p class="small">Это просто и ни к чему не обязывает</p>
					</div>
					<input type="submit" style="display: none;">
					<input type="hidden" name="subject" value="Форма с личным авто">
					<input required checked id="agree" class="agree" type="checkbox" name="agreement">
					<label for="agree"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
				</form>	
			</div>
			<div class="b-footer clearfix">
				<a href="#" class="b-logo-cont">
					<img src="i/logo-black.svg">
				</a>
				<div class="b-f-contacts">
					<ul>
						<li>г. Томск, пр. Кирова, 58 ст. 26,<br> офис 21, 2 этаж</li>
						<li>Остались вопросы? Звоните&nbsp;+7&nbsp;(3822)&nbsp;909-303</li>
						<li><a href="https://kru-god.ru/politics/" target="_blank">Политика по работе с персональными данными</a></li>
					</ul>
				</div>
				<a class="b-redder">
					Разработка сайта: <b>redder.pro</b>
				</a>
			</div>
		</div>
	</div>

	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-1">
			<form action="kitsend.php" method="POST" data-goal="MEETING" id="b-form-1">
				<div class="b-left" id="typed-strings">
					<h2 class="b-header-h2"><b>Узнайте подробнее<br></b> о путешествии по Турции</h2>
					<h3 class="b-subtitle">Наши эксперты готовы проконсультировать вас <b>абсолютно&nbsp;бесплатно.</b></h3>
				</div>
				
				<div class="b-right">
					<p class="b-form-header">Заполните простую форму</p>
					<p class="b-form-subtitle">И наш менеджер свяжется с вами в течение 2&nbsp;минут и предложит удобное время</p>
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange meeting ajax">
									<p class="button-bold">получить консультацию</p>
									<p class="button-thin">бесплатно</p>
						</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
						<p class="small">Это просто и ни к чему не обязывает</p>
					</div>
					<input type="hidden" name="subject" value="Запись на консультацию">
					<input type="submit" style="display: none;">
					<input required checked id="agree-1" class="agree" type="checkbox" name="agreement">
					<label for="agree-1"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
				</div>
			</form>
		</div>

		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-2">
			<form action="kitsend.php" method="POST" data-goal="WANTSAME" id="b-form-2">
				<div class="b-left">
					<h2 class="b-header-h2">Подберем лучший<br>тур под<b> все ваши запросы</b></h2>
					<h3 class="b-subtitle">За нашими плечами <b>5 лет опыта</b> работы на рынке туризма и сотни довольных клиентов.</b></h3>
				</div>
				
				<div class="b-right">
					<p class="b-form-header">Заполните простую форму</p>
					<p class="b-form-subtitle">И наш менеджер свяжется с вами в течение 2&nbsp;минут и предложит удобное время</p>
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange meeting find ajax">
									<p class="button-bold">Подберите мне тур</p>
									<p class="button-thin">я уже хочу на отдых</p>
						</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
						<p class="small">Это просто и ни к чему не обязывает</p>
					</div>
					<input type="hidden" name="subject" value="Запрос на подбор тура">
					<input type="submit" style="display: none;">
					<input required checked id="agree-2" class="agree" type="checkbox" name="agreement">
					<label for="agree-2"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
				</div>
			</form>
		</div>

		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup b-orange-popup" id="b-popup-3">
			<form action="kitsend.php" method="POST" data-goal="JULIA" id="b-form-3">			
				<div class="b-right">
					<p class="b-form-header">Напишите Юлии – старшему менеджеру турагентства</p>
					<p class="b-form-subtitle">Юлия ответит вам в течение рабочего дня: <b>с&nbsp;10:00 до 18:00</b></p>
					<textarea class="b-form-input" type="textarea" id="question" name="question" placeholder="Ваш вопрос"></textarea>
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange find meeting ajax">
									<p class="button-bold">Получить ответ от Юлии</p>
									<p class="button-thin">на мой вопрос</p>
						</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
					</div>
					<input type="hidden" name="subject" value="Вопрос Юлии">
					<input type="submit" style="display: none;">
					<input required checked id="agree-3" class="agree" type="checkbox" name="agreement">
					<label for="agree-3"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
					<div class="pop-cont-1">
						<div class="b-julia-pop"></div>
					</div>
				</div>
			</form>
		</div>

		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup b-orange-popup" id="b-popup-4">
			<form action="kitsend.php" method="POST" data-goal="KATE" id="b-form-4">			
				<div class="b-right">
					<p class="b-form-header">Напишите Екатерине – менеджеру турагентства</p>
					<p class="b-form-subtitle">Юлия ответит вам в течение рабочего дня: <b>с&nbsp;10:00 до 18:00</b></p>
					<textarea class="b-form-input" type="textarea" id="question" name="question" placeholder="Ваш вопрос"></textarea>
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange find meeting ajax">
									<p class="button-bold">Получить ответ от Екатерины</p>
									<p class="button-thin">на мой вопрос</p>
						</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>	
					</div>
					<div class="pop-cont-2">
						<div class="b-kate-pop"></div>
					</div>
					<input type="hidden" name="subject" value="Вопрос Екатерине">
					<input type="submit" style="display: none;">
					<input required checked id="agree-4" class="agree" type="checkbox" name="agreement">
					<label for="agree-4"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
				</div>
			</form>
		</div>

		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup b-orange-popup" id="b-popup-5">
			<form action="kitsend.php" method="POST" data-goal="CALLME" id="b-form-5">			
				<div class="b-right">
					<p class="b-form-header">Перезвоните мне</p>
					<p class="b-form-subtitle">Наш менеджер свяжется с вами в течение 2&nbsp;минут</b></p>
					<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
					<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
					<div class="b-office">	
						<a href="#" class="b-button orange find meeting ajax">
							<p class="button-bold">Перезвоните мне</p>
							<p class="button-thin">в течение 2 минут</p>
						</a>
						<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
					</div>
					<input type="hidden" name="subject" value="Заявка на обратный звонок">
					<input type="submit" style="display: none;">
					<input required checked id="agree-5" class="agree" type="checkbox" name="agreement">
					<label for="agree-5"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
				</div>
			</form>
		</div>

		<div class="b-popup" id="b-popup-quiz-1">
			<form action="kitsend.php" method="POST" data-goal="QUIZ" id="b-quiz">
				<div class="b-quiz">
					<div class="quiz-screen scr-1">
						<h2 class="b-header-h2"><b>Рассчитайте</b> стоимость вашего&nbsp;путешествия в Турцию</h2>
						<h3 class="b-subtitle"><b>Когда вы планируете отдохнуть?</b></h3>
							<div class="quiz-answers">
								<div class="b-error-placement"></div>

								<input name="when" type="radio" class="radio" id="radio-1" value="Чемоданы собраны, хоть завтра">
								<label for="radio-1"><p>Чемоданы собраны, хоть&nbsp;завтра</p></label>

								<input name="when" type="radio" class="radio" id="radio-2" value="В течении месяца">
								<label for="radio-2">В течении месяца</label>

								<input name="when" type="radio" class="radio" id="radio-3" value="Через 2-3 месяца">
								<label for="radio-3">Через 2-3 месяца</label>

								<input name="when" type="radio" class="radio" id="radio-4" value="Планирую через полгода">
								<label for="radio-4">Планирую через полгода</label>

								<div class="b-center-but">
									<a href="#" class="b-button orange quiz-but" data-next=".scr-2">
										<p class="button-bold">дальше</p>
									</a>
									<p class="small">Ещё три шага</p>
								</div>
							</div>		
					</div>
					<div class="quiz-screen scr-2">
						<h2 class="b-header-h2"><b>Отлично!</b><br>Теперь укажите количество отдыхающих <b>взрослых и детей</b></h2>
						<h3 class="b-subtitle"><b>Количество взрослых</b></h3>
						<div class="quiz-answers">
							<input name="adults" type="radio" class="radio" id="radio-2-1" value="1 взрослый">
							<label for="radio-2-1">1</label>

							<input name="adults" type="radio" class="radio" id="radio-2-2" checked value="2 взрослых">
							<label for="radio-2-2">2</label>

							<input name="adults" type="radio" class="radio" id="radio-2-3" value="3 взрослых">
							<label for="radio-2-3">3</label>

							<input name="adults" type="radio" class="radio" id="radio-2-4" value="4 взрослых">
							<label for="radio-2-4">4</label>

							<input name="adults" type="radio" class="radio" id="radio-2-5" value="5 взрослых">
							<label for="radio-2-5">5</label>
						</div>
						<h3 class="b-subtitle" id="second-h3"><b>Количество детей</b></h3>
						<div class="quiz-answers">
							<input name="children" type="radio" class="radio" id="radio-2-6" checked value="без детей">
							<label for="radio-2-6">0</label>

							<input name="children" type="radio" class="radio" id="radio-2-7" value="1 ребёнок">
							<label for="radio-2-7">1</label>

							<input name="children" type="radio" class="radio" id="radio-2-8" value="2 ребёнка">
							<label for="radio-2-8">2</label>

							<input name="children" type="radio" class="radio" id="radio-2-9" value="3 ребёнка">
							<label for="radio-2-9">3</label>

							<input name="children" type="radio" class="radio" id="radio-2-10" value="4 ребёнка">
							<label for="radio-2-10">4</label>
						</div>
							<a href="#" class="b-button orange quiz-but" data-next=".scr-3">
								<p class="button-bold">дальше</p>
							</a>
							<p class="small">Ещё два шага</p>
					</div>
					<div class="quiz-screen scr-3">
						<h2 class="b-header-h2">На <b>сколько ночей</b> хотели&nbsp;бы слетать в Турцию?</h2>
						<div class="quiz-answers">
							<div class="b-error-placement"></div>
							<div class="b-answers-wrapper">
								<input name="nights" type="radio" class="radio" id="radio-3-1" value="5-7 ночей">
								<label for="radio-3-1">5-7 ночей</label>

								<input name="nights" type="radio" class="radio" id="radio-3-2" value="8–10 ночей">
								<label for="radio-3-2">8–10 ночей</label>

								<input name="nights" type="radio" class="radio" id="radio-3-3" value="11–13 ночей">
								<label for="radio-3-3">11–13 ночей</label>

								<input name="nights" type="radio" class="radio" id="radio-3-4" value="Более 13 ночей">
								<label for="radio-3-4">Более 13 ночей</label>

								<input name="nights" type="radio" class="radio" id="radio-3-5" value="Не важно">
								<label for="radio-3-5">Не важно</label>
							</div>
							<div class="b-center-but">
								<a href="#" class="b-button orange quiz-but" data-next=".scr-4">
									<p class="button-bold">дальше</p>
								</a>
								<p class="small">Остался всего один шаг</p>
							</div>
						</div>	
					</div>
					<div class="quiz-screen scr-4">
						<h2 class="b-header-h2"><b>Остался всего один шаг!</b></h2>
						<h3 class="b-subtitle">Оставьте ваши контакты и получите <b>расчёт</b> стоимости  путешествия в Турцию по вашим запросам</h3>
						<div class="quiz-answers">
							<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
							<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
							<a href="#" class="b-button orange ajax">
								<p class="button-bold">получить расчёт</p>
								<p class="button-thin">в ближайшее время</p>
							</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<input type="hidden" name="subject" value="Рассчет стоимости тура">
							<input required checked id="agree-quiz" class="agree" type="checkbox" name="agreement">
							<label for="agree-quiz"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации</a></p></label>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div style="display:none;">
			<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
			<div class="b-popup" id="b-popup-6">
				<form action="kitsend.php" method="POST" data-goal="TRANSFER" id="b-form-6">
					<div class="b-left" id="typed-strings">
						<h2 class="b-header-h2">Не уходите <b>с&nbsp;пустыми&nbsp;руками</b></h2>
						<h3 class="b-subtitle"><b>До 30 июля</b> мы дарим всем своим клиентам приятный подарок: <b>бесплатный трансфер</b> до&nbsp;Толмачево&nbsp;и&nbsp;обратно, <b>независимо&nbsp;от&nbsp;даты&nbsp;</b>вылета.</h3>
						<div class="transfer"></div>
					</div>
					
					<div class="b-right">
						<p class="b-form-header">Заполните простую форму</p>
						<p class="b-form-subtitle">И если в будущем вы выберете наше турагентство мы предоставим вам <b>бесплатный трансфер</b> до аэропорта Толмачево</p>
						<input class="b-form-input" type="text" id="name" name="name" required placeholder="Ваше имя*">
						<input class="b-form-input" type="text" id="tel" name="phone" required placeholder="Ваш телефон*">
						<div class="b-office">	
							<a href="#" class="b-button orange meeting ajax transfer-but">
										<p class="button-bold">Получить трансфер</p>
										<p class="button-thin">до Толмачево <b>бесплатно</b></p>
							</a>
							<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
							<p class="small">Это просто и ни к чему не обязывает</p>
						</div>
						<input type="hidden" name="subject" value="Форма с трансфером в аэропорт">
						<input type="submit" style="display: none;">
						<input required checked id="agree-6" class="agree" type="checkbox" name="agreement">
						<label for="agree-6"><p class="b-condition">Я принимаю <a href="https://kru-god.ru/politics/" target="_blank">условия передачи информации></a></p></label>
					</div>
				</form>
			</div>

			<div class="b-thanks b-popup" id="b-popup-success">
				<div class="b-right">
					<p class="b-form-header">Отлично!</p>
					<p class="b-form-subtitle">Мы <b>уже получили</b> вашу заявку и перезвоним вам в течение 2 минут</p>
					<input type="submit" class="b-button orange find submit meeting" onclick="$.fancybox.close(); return false;" value="Закрыть окно">
				</div>
			</div>
			<div class="b-thanks b-popup" id="b-popup-error">
				<div class="b-right">
					<p class="b-form-header">Ошибка!</p>
					<p class="b-form-subtitle">При отправке заявки произошла ошибка. Вы можете позвонить нам по номеру: <b>+7 (3822) 909-303</b></p>
					<input type="submit" class="b-button orange find submit meeting" onclick="$.fancybox.close(); return false;" value="Закрыть окно">
				</div>
			</div>

	<a href="#b-popup-6" class="fancy pop6" style="display: none">
	<!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript" src="js/jquery.enllax.js"></script>
	<script type="text/javascript" src="js/KitSend.js?<?=$version?>"></script>
	<script type="text/javascript" src="js/main.js?<?=$version?>"></script>

	<? if($_SERVER["HTTP_HOST"] == "turkey.kru-god.ru" ): ?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter49375867 = new Ya.Metrika2({
	                    id:49375867,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/tag.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks2");
	</script>
	<? endif; ?>
	<noscript><div><img src="https://mc.yandex.ru/watch/49375867" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Begin LeadBack code {literal} -->
	<script>
	    var _emv = _emv || [];
	    _emv['campaign'] = '8ea1e4f9f24c38bac6ab6f28';
	    
	    (function() {
	        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
	        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
	        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
	    })();
	</script>
	<!-- End LeadBack code {/literal} -->
</body>
</html>