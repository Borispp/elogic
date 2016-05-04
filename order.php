<!DOCTYPE html>
<html lang="ro">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>EcoLogic</title>

		<!-- Main css style -->
		<link href="./css/main.css" rel="stylesheet" type="text/css">
		<!-- Reset -->
		<link href="./css/reset.css" rel="stylesheet" type="text/css">
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
		<link rel="icon" type="icon" href="./images/fav.png">
	</head>
	<body>
		<div class="wrapper">
			<!-- HEADER -->
			<header class="header -white">
				<div class="base-col">
					<a href="#" class="header__logo"><img src="./images/logo_2.png" alt="logo"></a>
					<div class="header__nav">
						<a href="#" class="header__nav-select">Acasa</a>
						<a href="#" class="header__nav-select">Descriere</a>
						<a href="#" class="header__nav-select">Proces</a>
						<a href="#" class="header__nav-select">Pachete</a>
						<a href="#" class="header__nav-select">Noutăţi</a>
						<a href="tel:+37367575390" class="header__nav-select">+373 (67) 57 53 90</a>
					</div>
				</div>
			</header>
			<!-- BLOCK 1 DESCRIPTION -->
			<section class="section -order">

				<div class="select_type--sol">
					<h1 class="headline-2">Alegeti tipul de sol</h1>

					<ul class="select_type--list">
						<li>
							<a href="#equipment" class="select_type--nisip scrollto -active">
								<h3>Nisip</h3>
								<p>Aceasta a aparut dupa cumpararea unui lot pomicol lui Eduard Popa, fiind în prezent administratorul.</p>
								<span class="angle_white"></span>
							</a>
						</li>
						<li>
							<a href="#equipment" class="select_type--argila scrollto"><h3>Argila</h3>
								<p>Aceasta a aparut dupa cumpararea unui lot pomicol lui Eduard Popa, fiind în prezent</p>
								<span class="angle_white"></span>
							</a>
						</li>
						<li>
							<a href="#dontknow" class="select_type--dont_know scrollto"><h3>Nu stiu</h3>
								<p>Aceasta a aparut dupa cumpararea unui lot pomicol lui Eduard Popa, fiind în prezent administratorul.</p>
								<span class="angle_white"></span>
							</a>
						</li>
					</ul>
				</div>

				<div class="select_type select_type--form -hide" id="dontknow">
					<h1 class="headline-2">Не знаете тип своей почвы? <br>Это не проблема! Вызовите нашего инженера</h1>
					<p class="select_type--form--desc">Lăsați nr. de telefon și revenim cu un sunet timp de 10 minute</p>

					<form class="popup__form" action="" method="post">
						<div class="field">
							<label class="popup_label" for="username">Nume</label>
							<input class="popup_input" type="text" name="username" id="username" placeholder="Alexandr">
						</div>
						<div class="field">
							<label class="popup_label" for="userphone">Telefon</label>
							<input class="popup_input" type="tel" name="userphone" id="userphone" placeholder="069577453">
							<div class="tooltip"><span>If you don't have a credit card or don't want to use it, then you can use your Paypal account.</span></div>
						</div>
						<input class="popup-submit" type="submit" name="" value="PLASATI COMANDA">
					</form>

					<span class="calltoapel">sau sunaţi-ne</span>
					<p class="popup__number">+373 (67) 57 53 90</p>
					<p class="popup__work_time">Zile de lucru Luni - Simbata. de la 9:00 pana la 20:00</p>
					<br><br><br>
				</div>

				<div class="select_type" id="equipment">
					<div class="select_type--equipment">
						<h1 class="headline-2">Alegeti tipul de pachet</h1>

						<div class="price_plan__buttons">
							<input type="radio" name="equipment" id="econom" checked>
							<label for="econom" class="btn-sand" data-id="#economSelect">ECONOM</label>

							<input type="radio" name="equipment" id="medium" checked>
							<label for="medium" class="btn-center" data-id="#mediumSelect">MEDIUM</label>

							<input type="radio" name="equipment" id="premium" checked>
							<label for="premium" class="btn-center" data-id="#premiumSelect">PREMIUM</label>

							<input type="radio" name="equipment" id="full" checked>
							<label for="full" class="btn-loam" data-id="#fullSelect">FULL</label>
						</div>
					</div>

					<div class="select_type--image -argila_econom">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Fosa septica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Rezervuar</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>
					</div>

					<div class="select_type--image -argila_medium">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Volum techic cu priza</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint5">
							<div class="hint_text">
								<h2>Rezervuar cu pompa</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>
					</div>

					<div class="select_type--image -argila_premium">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Volum techic cu priza dubla si furtun anexat cu conector</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint5">
							<div class="hint_text">
								<h2>Rezervuar cu doua pompe si circa 1680 l. de apa tehnica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>
					</div>

					<div class="select_type--image -argila_full">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Volum techic cu priza dubla si furtun anexat cu conector</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Dublu drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint5">
							<div class="hint_text">
								<h2>Rezervuar cu doua pompe si circa 1680 l. de apa tehnica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint6">
							<div class="hint_text">
								<h2>Fontanica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>
					</div>

					<div class="select_type--image -nisip_econom">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Fosa septica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>
					</div>

					<div class="select_type--image -nisip_medium">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>
					</div>

					<div class="select_type--image -nisip_premium">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Reservuar cu circa 950 l. de apa tehnica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>
					</div>

					<div class="select_type--image -nisip_full">
						<div class="hint -hint1">
							<div class="hint_text">
								<h2>Sistema de aerisire</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint2">
							<div class="hint_text">
								<h2>Ministatie epurare</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>

						<div class="hint -hint3">
							<div class="hint_text">
								<h2>Drenaj</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint4">
							<div class="hint_text">
								<h2>Reservuar cu circa 950 l. de apa tehnica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint5">
							<div class="hint_text">
								<h2>Volum techic cu priza dubla si furtun anexat cu conector</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj </p>
							</div>
						</div>

						<div class="hint -hint6">
							<div class="hint_text">
								<h2>Fontanica</h2>
								<p>Gradul de epurare dupa fosa costituie 70% iar dupa drenaj</p>
							</div>
						</div>
					</div>

					<div class="calculator">
						<div class="base-col">
							<h1 class="headline-2">Calculeaza-ti pretul orientativ <br>pachetului ECONOM - pe sol de argila:</h1>

							<div class="calculator--params">
								<div class="calculator--persons">
									<label class="label">Укажите количество  жильцов в вашем доме:</label>
									<div class="persons -persons7">
										<a href="#" data-persons="1"></a>
										<a href="#" data-persons="2"></a>
										<a href="#" data-persons="3"></a>
										<a href="#" data-persons="4"></a>
										<a href="#" data-persons="5"></a>
										<a href="#" data-persons="6"></a>
										<a href="#" data-persons="7"></a>
										<a href="#" data-persons="8"></a>
										<a href="#" data-persons="9"></a>
										<a href="#" data-persons="10"></a>
										<input type="text" hidden name="name" value="7" id="personsCount">
									</div>
									<span class="persons--count"><span>7</span> чел.</span>
								</div>

								<div class="calculator--volume">
									<label class="label">Selectati volumul de apa a rezervuarului:</label>
									<div class="slider" data-options='{"min": 500, "max": 2000, "step": 100, "value": 700, "quant": "L"}'></div>
									<span class="slider_quant"><span></span></span>
								</div>

								<div class="calculator--count">
									<label class="label">Как часто вы желатете проводить чистку?</label>
									<div class="slider" data-options='{"min": 1, "max": 15, "step": 1, "value": 5, "quantfirst": "год", "quantlast": "лет", "datenames": "год,года,лет"}'></div>
									<span class="slider_quant" style="margin-top: -39px;"><em>Раз в</em><span></span></span>
								</div>
							</div>

							<div class="calculator--results">
								<div class="total_price">
									<em>Total Pret</em>
									<p>€1525</p>
								</div>

								<p><a href="#" class="btn-more">Заказать бесплатный звонок</a></p>

								<p class="description">Aveți nevoie de ajutor? Nu ezitați să ne adresați întrebări. Contract direct pe mail <a href="mailto:info@elogic.md" class="description--mail">info@elogic.md</a> sau telefon <a href="tel:+37367575390" class="description--phone">+373 (67) 57 53 90</a></p>

								<a href="#" class="calculator--results--hint"><span>От чего зависит выбор объёма воды.</span></a>
							</div>
						</div>
					</div>

					<div class="description__text">
						<p class="description__head-text">"EcoLogic" este o statie de epurare anaerob-aeroba locala de prelucrare biologica a apelor reziduale menajere de la case individuale, vile, cabane, baruri, restaurante.</p>
						<p>Описание пакета, состоящее из этапов очистки воды, либо конкретных преимущества, заставляющий выбрать именно этот пакет.  Две строчки на краткое введение.</p>

						<ul>
							<li>Apele menajere se curata pina la 98%</li>
							<li>Datorita metodelor combinate, anaeroba si aeroba, la iesirea din instalatie primim apa technica, la dorinta putem uda florile, gazonul, copacii. Se poate folosi nelimitat ca ingraseminte (contine fosfor, calciu etc).</li>
							<li>Ocupa putin spatiu si nu incurca in gospodaria omului.</li>
							<li>Mirosul neplacut este exclus, deoarece instalatia dispune de o sistema de aerisire corect proiectata.</li>
							<li>Corespunde standardelor sanitare europene.</li>
						</ul>

						<blockquote>
							Datorită metodelor combinate, anaerobă şi aerobă, la <a href="#">ieşirea</a> din instalaţie primim apă tehnică, la dorinţă putem uda gazonul, copacii. Se poate folosi nelimitat ca îngrăşăminte (conţine fosfor, calciu etc).
						</blockquote>
						<p>Aceste instalatii se pot construi cu un debit de pina la 15 m3/zi. Folosirea acestei instalatii in calitate de statie de epurare asigura un grad inalt de epurare al apelor menajere, fiabilitate tehologica in procesul de lucru datorita regimului hidraulic durabil si simplitatea instlatiei in expluatare.</p>
					</div>
				</div>
			</section>
			<!-- BLOCK 7 -->
			<section class="section -call_me">
				<div class="base-col">
					<form action="" method="post">
						<!-- <span class="form-text" id="abonent">Aboneaza-te la noutati</span> -->
						<span class="form-text -hide" id="abonentSuccess">Vă mulţumesc</span>
		 				<input class="form-input" type="text" name="" placeholder="Aboneaza-te la noutati" id="subscribeEmail">
		 				<input class="form-submit" type="submit" name="" value="ABONEAZA-MA" id="subscribeButton">
		 			</form>
				</div>
			</section>
			<!-- FOOTER -->
			<footer class="footer">
				<div class="base-col">
					<ul class="footer__list">
						<li class="footer-col copyright">
							<a href="#"><img src="./images/logo_2.png" alt="logo"></a><br>
							<span>© 2016 All rights reserved.</span>
							<div class="social_buttons">
								<a href="#"><img src="./images/fb.png" alt=""></a>
								<a href="#"><img src="./images/ok.png" alt=""></a>
								<a href="#"><img src="./images/vk.png" alt=""></a>
							</div>
						</li>
						<li class="footer-col contacts">
							<span>Contacte</span>
							<table>
								<tr>
									<td>Tel/fax:</td>
									<td><a href="tel:+37322990981" class="cont_number">+373 (22) 99 09 81</a></td>
								</tr>
								<tr>
									<td>GSM:</td>
									<td><a href="tel:+37367575390" class="cont_number">+373 (67) 57 53 90</a></td>
								</tr>
								<tr>
									<td>E-Mail:</td>
									<td><a href="mailto:office@ecologic-md.net" class="cont_mail">office@ecologic-md.net</a></td>
								</tr>
							</table>
						</li>
						<li class="footer-col help">
							<span>Ajutor</span>
							<p>Aveţi nevoie de ajutor? Don't hesitate to ask us something. Email is directly <a href="mailto:office@ecologic-md.net" class="cont_mail">office@ecologic-md.net</a> or call us at<br> <a href="tel:+37322990981" class="cont_number">+373 (22) 99 09 81</a> and <a href="tel:+37367575390" class="cont_number">+373 (67) 57 53 90</a></p>
						</li>
					</ul>
					<div class="difiz_label">
						<a href="#"><img src="./images/difiz_logo.png" alt=""></a><br><span>Design by difiz.com</span>
					</div>
				</div>
			</footer>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	<script src="./libs/jquery-ui/jquery-ui.min.js"></script>

		<script type="text/javascript" src="./js/main.js"></script>
	</body>
</html>
