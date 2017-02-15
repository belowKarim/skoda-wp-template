<?php
/**
 * Template name: Aktion Drive-In-Wochen
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width" name="viewport">
	<meta name="description" content="Das ŠKODA Team Rhein-Main wünscht Ihnen eine „Guude Fahrt“: Lernen Sie uns kennen und entdecken Sie unsere aktuellen Neu- und Gebrauchtwagenangebote."/>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet">
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
        <body class="aktion">
		<div id="wrapper"> <!--Main Wrapper Start -->
			<header id="header"> <!--Main Header Start -->
				<div class="container"> <!--container Start -->
					<nav id="nav" class="navbar row" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header col-md-3">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="logo" href="<?php echo home_url(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/skoda_logo.png" alt="SKODA Team Rhein-Main" /></a>
								</div>
								<!-- wordpress dynamic Manu -->
								<?php
								wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse col-md-9',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'dropdown_class'    => 'subnavigation',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
								);
								?>
							</div>
						</nav>
					</div> <!--container End -->
				</header> <!--Main Header End -->
			<div id="main">
				<div id="content">
					<div class="container"> <!--container Start -->
						<section class="section">
							<div class="row">
								<div class="col-md-12">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/skoda_drive_in_wochen_visual.jpg" alt="">
									<div class="sk-ak-hero">
										<hgroup>
											<h1 class="sk-headline">DIE SONDERMODELLE<br>DRIVE VON ŠKODA.</h1>
											<!-- <h1 class="sk-headline">DRIVE VON ŠKODA.</h1> -->
										</hgroup>
									</div>
								</div>
							</div>
						</section>

						<section style="margin-bottom: 35px;">
							<header class="row">
								<div class="col-md-9 col-sm-8 col-xs-12 animated">
									<h1 class="sk-second-headline">DARF ES EIN BISSCHEN</h1>
									<h1 class="sk-second-headline text-margin">MEHR SEIN?</h1>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12 pull-right animated bounceInRight">
									<a href="#Formular_Probefahrt" class="btn btn-success custom-button" id="checkBoxhit">
										<span>Jetzt Probe fahren!</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</div>
							</header>
						</section>

						<section class="section">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<p class="skoda-information">Jetzt sind DRIVE-IN-WOCHEN beim ŠKODA TEAM Rhein-Main. Das bedeutet: die beliebten Modelle ŠKODA FABIA, YETI, RAPID und auch den Neuen ŠKODA OCTAVIA gibt es ab sofort mit vielen unwiderstehlichen Extras wie &nbsp; z. B. Klimaanlage Climatronic , Sitzheizung oder Leichtmetallfelgen. Dazu 5 Jahre Garantie inklusive. Und das bei Preisvorteilen von bis zu 4.444 €.<sup>2</sup> <br><br>Vereinbaren Sie direkt einen Probefahrttermin bei uns und erleben Sie unsere Sondermodelle DRIVE live. Wir freuen uns auf Sie.</p>
										<p class="skoda-kraft">Kraftstoffverbrauch für alle verfügbaren Motoren des ŠKODA DRIVE Sondermodelle in l/100 km, innerorts: 8,1–4,2; außerorts: 5,7–3,3; kombiniert: 6,6–3,8. CO<sub>2</sub>-Emission kombiniert: 154–99&nbsp;g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse C–A</p>
										<p class="skoda-kraft" style="margin-bottom: 0;">Kraftstoffverbrauch für alle verfügbaren Motoren in l/100 km, innerorts: 9,1–4,1; außerorts: 6,4–3,3; kombiniert: 7,4–3,6; CO2-Emission, kombiniert: 170–95 g/km (gemäß VO (EG) Nr.715/2007). Effizienzklasse D – A+</p> <br>


								</div>
										<div class="col-md-6 animated bounceInLeft">
											<img src="<?php echo get_template_directory_uri(); ?>/images/skoda_drive_in_wochen.png" class="img-responsive" alt=""  />
										</div>
									</div>
						</section>

						<section class="section">
							<div class="row">
								<div class="col-md-12">
									<p class="impressum-text"><sup class="sub-num">1</sup>3 Jahre kostenlose Garantieverlängerung im Anschluss an die 2-jährige Herstellergarantie mit der ŠKODA Garantie+, der Neuwagen-Anschlussgarantie der ŠKODA AUTO Deutschland GmbH,
										Max-Planck-Str. 3–5, 64331 Weiterstadt, mit einer maximalen Ge­samtfahrleistung von 50.000 km. Die Leistungen entsprechen dem Umfang der Herstellergarantie. Mehr Details hierzu erfahren Sie
										unter www.skoda-auto.de/garantieplus</p>
									<p class="impressum-text text-margin"><sup class="sub-num">2</sup>Preisvorteil am Beispiel des ŠKODA YETI DRIVE inklusive der optionalen Ausstattungspakete „Best of Function” und „Best of Infotainment” gegenüber der unverbindlichen Preisempfehlung der ŠKODA AUTO
											Deutschland GmbH für vergleichbar ausgestattete Serienmodelle der Ausstattungslinie Ambition.</p>
								</div>
							</div>
						</section>




						<section class="section forForm" id="Formular_Probefahrt">
							<div class="row">
								<div class="col-md-12">
									<hgroup>
										<h1 class="sk-third-headline">PROBEFAHRT VEREINBAREN</h1>
									</hgroup>
									<p class="layout-space">Reservieren Sie jetzt einen Probefahrttermin bei einem ŠKODA Partner des ŠKODA TEAM Rhein-Main und testen Sie Ihr ŠKODA Sondermodell DRIVE.</p>
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
									<p>* Verfügbar ab 04.03.2017</p>
									</div>
							</div>
						</section>

					</div> <!--container End -->
				</div>
			</div>
			<footer id="footer"> <!--Footer Start -->
				<div class="container">
					<div class="footerContent">
						<div class="col-sm-6 logo">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/skoda_team_rhein_main_logo.png" alt="SKODA Team Rhein-Main Logo" class="img-responsive" /></a>
						</div>
						<div class="col-sm-6 footer-nav">
							<ul class="col-lg-7 col-sm-5 col-xs-6">

								<!-- dynamic Footer mnenu-->
								<?php wp_nav_menu( array( 'skoda' => 'footer_menu' ) ); ?>

								<!-- <li><a href="/impressum/">Impressum</a></li>
								<li><a href="/datenschutz/">Datenschutz</a></li> -->
								<!-- <li><a href="#">Kontakt</a></li> </a> -->
							</ul>
							<div class="pull-right copyright col-lg-5 col-sm-7 col-xs-6">
								<p>&copy; ŠKODA TEAM Rhein-Main</p>
							</div>
						</div>
					</div>
				</div>
			</footer> <!--Footer End -->
		</div> <!--Main Wrapper End -->
<?php wp_footer(); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sorting.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
<!-- Google analytics -->
<?php include_once("analyticstracking.php") ?>
<!-- <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-31278561-1', 'auto');
	ga('set', 'anonymizeIp', true);
	ga('send', 'pageview');

</script> -->


<script type="text/javascript">

$(document).ready(function(){

	// Call to action Button checked in
	// $("#checkBoxhit").click(function(){
	// 	$('#boxChecked span input[type=checkbox]').attr('checked', true);
	// });

	//Bootstrap drop down menu
	$('.dropdown-menu').addClass('subnavigation');

	// Scroll Slider Top to Bottom
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top -10
				}, 1000);
				return false;
			}
		}
	});


});

</script>







</body>
</html>
