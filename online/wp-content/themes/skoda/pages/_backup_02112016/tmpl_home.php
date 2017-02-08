<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skoda
 */  
?>
<!DOCTYPE HTML>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width" name="viewport">
		<title>ŠKODA  Team Rhein-Main</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet">
                <?php wp_head(); ?>
		<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	</head>
        <body>
		<div id="wrapper">
			<header id="header">
				<div class="container">
					<nav id="nav" class="navbar row">
						<div class="navbar-header col-md-3">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="logo" href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/skoda_logo.png" alt="SKODA Team Rhein-Main" />
							</a>
						</div>
						<div class="collapse navbar-collapse col-md-9" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li><a href="<?php echo home_url(); ?>" class="active">Aktionen</a></li>							
							<!-- <li><a href="#">Fahrzeuge</a></li> -->
								<li><a href="/team-rhein-main/">Team Rhein-Main</a></li>
								<li><a href="/guudies/">Guudies</a></li>
							</ul>
						</div>
						<div class="subMenu">
							<div class="container">
								<ul>
									<li><a href="#">Navigation 1.1</a></li>
									<li><a href="#">Navigation 1.2</a></li>
									<li><a href="#">Navigation 1.3</a></li>
									<li><a href="#">Navigation 1.4</a></li>
									<li><a href="#">Navigation 1.5</a></li>
								</ul>
							</div>

						</div>
					</nav>
				</div>
			</header>
			<div id="main">
				<div id="content">
					<div class="container">
						<div id="banner">
							<div class="bannerWrap">
								<div class="bannerContainer">
									<ul>


										<li>
											<a class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img01.jpg')">
												<span style="bottom: 36px; left: 157px">... die hembels</span>
											</a>
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img02.jpg')">
												<span style="top: 44px; left: 282px">... die bembels</span>
											</a>
										</li>

										<li>
											<a class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img03.jpg')">
												<span style="top: 155px; left: 199px">... Die Brückentage</span>
											</a>
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img04.jpg')">
												<span style="bottom: 31px; left: 142px">... Die Verkehrsplaner</span>
											</a>
										</li>


										<li>
											<a class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img05.jpg')">
												<span style="bottom: 37px; left: 56px">... Die Fussballfans</span>
											</a>
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img06.jpg')">
												<span style="top: 49px; left: 407px; text-indent: -120px">... Die Krawall-<br>schachdel</span>
											</a>
										</li>


										<li class="aloneSlide">
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img07.jpg')">
												<span style="bottom: 31px; right: 117px">... Unsere Region</span>
											</a>
										</li>

										<li>
											<a class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img08.jpg')">
												<span style="top: 53px; left: 229px">... Die Närrischen</span>
											</a>
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img09.jpg')">
												<span style="bottom: 33px; left: 128px">... Die Lässischen</span>
											</a>
										</li>

										<li>
											<a class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img10.jpg')">
												<span style="top: 53px; left: 218px">... Die Mobbelsche</span>
											</a>
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img11.jpg')">
												<span style="bottom: 26px; left: 226px; text-indent: -69px;">... Die zugger- <br>schneggsche</span>
											</a>
										</li>

										<li class="aloneSlide">
											<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img07.jpg')">
												<span style="bottom: 31px; right: 117px">... Unsere Region</span>
											</a>
										</li>


									</ul>
									<div class="bigSlide partOneTop"></div>
									<div class="bigSlide partOneBottom"></div>
									<div class="partTwoTop"></div>
									<span class="fur">FÜR <br>...</span>
									<div class="shadowLeft"></div>
									<div class="shadowTop"></div>
									<div class="shadowRight"></div>
									<div class="shadowBottom"></div>
								</div>
							</div>
						</div>
						<section class="section">
							<header class="row">
								<div class="col-md-7 col-sm-7 col-xs-12">
									<h1>WIE-FÜR-MICH-GEBAUT-MODELLE TESTEN ...</h1>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12 pull-right">
									<a href="#custom_form" class="btn btn-success custom-button">
										<span>Jetzt Probe fahren!</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</div>
							</header>
							<div class="row">
								<div class="col-md-3 col-sm-8 col-xs-6">
									<p>Dynamisches Design, modern&shy;ste Technologien und viele Simply- Clever-Lösungen – wer in einen ŠKODA einsteigt, denkt sofort „Wie für mich gebaut!“ Und kann jetzt auch noch richtig viel sparen. Denn das ŠKODA TEAM Rhein-Main gewährt Ihnen einen attrak&shy;tiven Kundenvorteil auf viele ausgewählte Neuwagen.</p>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6 specialImg">
									<img width="250" src="<?php echo get_template_directory_uri(); ?>/images/platzhalter_kundenvorteil.jpg" class="img-responsive" alt="" />
								</div>
								<div class="col-md-6">
									<img height="250" src="<?php echo get_template_directory_uri(); ?>/images/platzhalter_aktion1.jpg" class="img-responsive" alt=""  />
								</div>
							</div>
						</section>
						<section class="section last-section">
							<div class="row">
								<div class="col-md-6">
									<header><h1>… UND GEWINNEN!</h1></header>
									<p>Das ŠKODA „Wie für mich gemacht“-Gefühl erleben Sie am besten einmal selbst. Deshalb laden wir Sie ein zu einer außergewöhnlichen Probefahrt in Ihrem Wunschmodell.</p>
									<p><strong>Und wenn Sie gleich einen Termin vereinbaren, sichern Sie sich die Chance auf individuelle Gewinne:</strong></p>
									<ul>
										<li><strong>2&times;1 Einrichtungsberatung durch einen Innenarchitekten inklusive Möbeln im Wert von je 5.000,– &euro;<sup>2</sup></strong></li>
										<li><strong>Und jeden Monat 2 Tickets für Ihren Lieblingssportverein aus dem Rhein-Main-Gebiet<sup>3</sup></strong></li>
									</ul>
									<p>Wir wünschen schon mal guude Fahrt und viel Glück!</p>
								</div>
								<div class="col-md-6">
									<img height="340" src="<?php echo get_template_directory_uri(); ?>/images/platzhalter_aktion3.jpg" alt="" class="img-responsive" />
								</div>
							</div>
						</section>
						<section class="section forForm">
							<div class="row">
								<div class="col-md-12">
									<header><h1>Probefahrt vereinbaren.</h1></header>
									<p>Reservieren Sie jetzt einen Probefahrttermin bei einem ŠKODA Partner des ŠKODA TEAM Rhein-Main und testen Sie Ihr ŠKODA Wunschmodell. Vor Ort bei Ihrem ŠKODA Partner können Sie auch direkt Ihre Gewinnspielkarte ausfüllen und an unserer großen Verlosung teilnehmen.
								</div>
							</div>
						</section>
						<div class="custom-form" id="custom_form">
							<?php
								while ( have_posts() ) : the_post();
										the_content();
								endwhile;
							?>
						</div>
						<section class="listtField">
							<div class="row">
								<div class="col-md-12">
									<h5>Kraftstoffverbrauch für den OCTAVIA COMBI in l/100 km, innerorts: 8,4–4,2; außerorts: 5,7–3,4; kombiniert: 6,6–3,7. CO2-Emission kombiniert: 154–98&nbsp;g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse C–A+
</br></br>Kraftstoffverbrauch für alle verfügbaren Motoren in l/100 km, innerorts: 9,1–4,1; außerorts: 6,4–3,2; kombiniert: 7,2–3,6. CO2-Emissionen kombiniert: 170–95 g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse D–A+.</h5>
									<ul>
										<li>Kundenvorteil am Beispiel der unverbindlichen Preisempfehlung für den ŠKODA OCTAVIA COMBI (Ausstattungslinie Ambition) inklusive Klimaanlage Climatronic, beheizbarer Vordersitze, Infotainmentpaket   Amundsen und Traveller-Funktion für Amundsen gegenüber der unverbindlichen Preisempfehlung der ŠKODA AUTO Deutschland GmbH für ein ansonsten vergleichbar ausgestattetes Serienmodell. Angebot gilt für Privatkunden bei Kauf eines sofort verfügbaren ŠKODA Neuwagens bis zum 31.12.2016 (Kaufvertragsdatum), solange der Vorrat reicht. Das Angebot ist nicht kombinierbar mit weiteren Sonderkonditionen.</li>
										<li>Intensive Individualberatung durch einen Innenarchitekten. Teilnahmeschluss: 31.12.2016. Teilnahme ab 18 Jahren. Die Gewinner werden schriftlich benachrichtigt. Mitarbeiter der ŠKODA AUTO Deutschland GmbH und der ŠKODA Partner sind, ebenso wie ihre Angehörigen, von der Teilnahme ausgeschlossen. Ein bundesweites Gewinnspiel der ŠKODA AUTO Deutschland GmbH. Der Rechtsweg ist ausgeschlossen. Barauszahlung des Gewinns im Wert von 5.500,– € möglich.</li>
										<li>Es wird jeden Monat ein Gewinn (= 2 Tickets) verlost. Teilnahmeschluss: jeweils der letzte Tag des Monats. Teilnahme ab 18 Jahren. Die Gewinner werden schriftlich benachrichtigt. Mitarbeiter der ŠKODA AUTO Deutschland GmbH und der ŠKODA Partner sind, ebenso wie ihre Angehörigen, von der Teilnahme ausgeschlossen. Ein Gewinnspiel des <a href="/impressum/">ŠKODA TEAM Rhein-Main</a>. Der Rechtsweg ist ausgeschlossen. Barauszahlung des Gewinns nicht möglich.</li>
									</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<footer id="footer">
				<div class="container">
					<div class="footerContent">
						<div class="col-sm-6 logo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/skoda_team_rhein_main_logo.png" alt="SKODA Team Rhein-Main Logo" class="img-responsive" /></a>
						</div>
						<div class="col-sm-6 footer-nav">
							<ul class="col-lg-7 col-sm-5 col-xs-6">
								<li><a href="/impressum/">Impressum</a></li>
								<li><a href="/datenschutz/">Datenschutz</a></li>
								<!-- <li><a href="#">Kontakt</a></li> </a> -->
							</ul>
							<div class="pull-right copyright col-lg-5 col-sm-7 col-xs-6">
								<p>&copy; ŠKODA TEAM Rhein-Main</p>
							</div>
						</div>


					</div>
				</div>
			</footer>
		</div>
                <?php wp_footer(); ?>

		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datetimepicker.min.js"></script>


		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/banner.js"></script>
		<script>jQuery('#datetimepicker input').datetimepicker({format: 'DD/MM/YYYY'});</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-31278561-1', 'auto');
			ga('set', 'anonymizeIp', true);
			ga('send', 'pageview');

		</script>
	</body>
</html>