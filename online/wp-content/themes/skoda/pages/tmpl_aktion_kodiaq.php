<?php
/**
 * Template name: Aktion Kodiaq
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
</head>
<body>
		<div id="wrapper">
			<header id="header">
				<div class="container">
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
					</div>
				</header>
			<div id="main">
				<div id="content">
					<div class="container">
            <section class="section">
							<div class="row">
								<div class="col-md-12">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/main-header.jpg" alt="">
									<div class="sk-hero">
											<hgroup>
													<h1 class="sk-headline">DER NEUE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ŠKODA KODIAQ. </h1>
													<!-- <h1 class="sk-headline headline-text-margin">ŠKODA KODIAQ.</h1> -->
											</hgroup>
									</div>
									<!-- <div class="sk-sub-hero">
											<hgroup>
													<h4 class="sk-headline">FÜR DIE,</h4>
													<h4 class="sk-headline">WO MIT’M BÄR STEPPE.</h4>
											</hgroup>
									</div> -->
								</div>
							</div>
						</section>

						<section style="margin-bottom: 35px;">
							<header class="row">
								<div class="col-md-9 col-sm-8 col-xs-12">
									<h1 class="sk-second-headline">ENTDECKEN SIE SCHON BALD NEUES</h1>
									<h1 class="sk-second-headline text-local-margin">TERRAIN. MIT DEM NEUEN SUV VON ŠKODA.</h1>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12 pull-right">
									<a href="#wahlen_Probefahrt" id="checkBoxhit" class="btn btn-success custom-button">
										<span>Jetzt Probe fahren!</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</div>
							</header>
						</section>

						<section class="section">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 text-local-margin">
									<p class="skoda-information">In Kürze ist es soweit – am 04. März 2017 wird der Neue ŠKODA KODIAQ bei den ŠKODA Partnern des ŠKODA TEAM Rhein-Main seine Premiere feiern. Und Sie sind herzlich eingeladen, dabei zu sein und an diesem Tag eine ganz neue Art von SUV zu entdecken. Denn der Neue ŠKODA KODIAQ ist nicht nur stark und groß wie sein Namensgeber, der imposante Kodiak-Bär aus Alaska. Sondern überzeugt auch durch seine eindrucksvolle Kombination aus elegantem Design, modernsten Assistenzsystemen und innovativen Konnektivitätslösungen.</p>
									<p class="skoda-information">Mit bis zu sieben Plätzen, dem größten Kofferraum seiner Klasse, Allrad Antrieb mit Offroad-Modus und einer umfangreichen Sicherheitsausstattung ist er für jedes Abenteuer bereit. Steigen Sie doch mal zu einer Probefahrt ein und erleben Sie den Taunus ganz neu!</p>
								</div>
								<div class="col-md-6">
									<img src="<?php echo get_template_directory_uri(); ?>/images/kodiaq-einklinke.jpg" class="img-responsive" alt=""  />
								</div>
							</div>
						</section>

						<section class="section feature-background feature-on-mobile-background">
							<div class="row">
									<div class="col-md-12">
											<div class="col-md-3 col-sm-12 col-xs-12 pull-right">
												<a href="http://guude-fahrt.de/wp-content/themes/skoda/files/Aktion_Kodiaq_Gewinnspielkarte.pdf" target="_blank" class="btn btn-success custom-button large-custom-button">
													<span class="feature-button">Gewinnspielkarte <br> als PDF herunterladen.</span>
													<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
												</a>
											</div>
											<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="feature-small-headline">
																<h4 class="feature-single-headline">FÜR GROSSE UND</h2>
																<span class="feature-single-headline single-text-pull">KLEINE ABENTEU(R)ER:</span>
													</div>
													<div class="feature-headline">
																<h1 class="feature-big-headline">ŠKODA KODIAQ</h1>
																<span class="feature-big-headline feature-pull-text">GEWINNNSPIEL</span>
													</div>
												  <div class="feature-small-content">Lust, neues Terrain zu entdecken? Dann beantworten Sie ein­fach die Gewinnspielfrage auf der Rückseite. Und gewinnen Sie mit etwas Glück eine <span class="xtra-bold-text">17-tä­gige kombinierte Rund­reise durch Kanada und Alaska-Kreuzfahrt für zwei Personen im Wert von bis zu 11,000 €<sup>1</sup>.</span> Inklusive Flug, Hotel, Premium-Schiff, Balkonkabine, Pre­mium-All-Inclusive an Bord und vieles mehr.</div>
												  <div class="feature-highlight-content">Jetzt mitmachen!<br>Drucken Sie einfach die Gewinnspielkarte aus, kreuzen Sie die richtige Antwort an und dann einfach bei Ihrem ŠKODA Partner angeben am besten direkt bei der Premiere des Neuen ŠKODA KODIAQ am 4. März 2017.</div>
													<div class="skoda-berge-meer-logo">
														<p class="berge-meer-logo-title">In Kooperation mit:</p>
														<img height="50" class="img-responsive img-berge" src="<?php echo get_template_directory_uri(); ?>/images/berge-meer.png" alt="">
													</div>
											</div>
		            </div>
							</div>
						</section>

						<section class="section">
							<div class="row">
								<div class="col-md-12">
									<p class="impressum impressum-text">Je nach Reisetermin (Terminwahl vorbehaltlich Verfügbarkeit).</p>
									<p class="impressum-text">Die von Ihnen angegebenen Daten speichern und verwenden wir ausschließlich zur Gewinnbenachrichtigung und Gewinnabwicklung; sie werden sodann wieder gelöscht. Die Gewinnbenachrichti­gung erfolgt dabei per E-Mail, per Telefon oder per Post durch unser ŠKODA Promotion-Team. Wir verwenden Ihre Daten nicht zu werb­lichen Zwecken.</p>
									<p class="impressum-text">Teilnahmeschluss ist der 11. März 2017 (Abgabe beim ŠKODA Partner). Teil­nahme ab 18 Jahren. Die Gewinner werden schriftlich benachrichtigt. Mitarbeiter der ŠKODA AUTO Deutschland GmbH, der ŠKODA Partner und des Kooperationspartners sowie ihre Angehörigen sind nicht teilnahmeberechtigt. Keine Barauszahlung möglich. Der Rechtsweg ist ausgeschlossen. Ein bundes­weites Gewinnspiel der ŠKODA AUTO Deutschland GmbH. Die Abwicklung der Reise erfolgt über Berge & Meer Touristik GmbH. Die Reise muss zu den vom Reiseveranstalter festgesetzten Terminen unternommen werden. Kommt es nicht zur Reise zu den festgesetzten Terminen aus Gründen, die weder die ŠKODA AUTO Deutschland GmbH noch der Reiseveranstalter zu vertreten hat, ist der Gewinnanspruch erloschen. Mit Bestätigung der Reise gelten die Reisebedingungen des Veranstalters, die sie vorab auf www.berge-meer.de einsehen können. Die Kosten für An- und Abreise zum Ausgangspunkt der Reise (Flughafen, Bahnhof etc.) hat der Gewinner zu tragen. Des Weiteren trägt er auch sämtliche privaten Kosten, die während der Reise entstehen und nicht Bestandteil der Inklusivleistungen sind. Der Gewinner und sein Mitreisender müssen nachweisen können, dass sie im Besitz eines gültigen Personaldokuments und erforderlicher Visa sowie anderer unabdingbarer Reisedokumente sind. Es entstehen Zusatzkosten für die Einreise in Höhe von 14 US-Dollar pro Person zu zahlen per Kreditkarte bei Antragstellung für ein US-amerikanisches ESTA-Visum.</p>
								</div>
							</div>
						</section>

						<section class="section forForm">
							<div class="row">
								<div class="col-md-12">
									<hgroup>
										<h1 class="sk-third-headline">SCHON JETZT PROBEFAHRT MIT DEM NEUEN<br>ŠKODA KODIAQ RESERVIEREN.</h1>
										<!-- <h1 class="sub-headline-text-space">ŠKODA KODIAQ RESERVIEREN.</h1> -->
									</hgroup>
									<p class="layout-space">Gehören Sie zu den Ersten, die den Neuen ŠKODA KODIAQ testen. Sichern Sie sich schon jetzt Ihren Wunschtermin für eine Probefahrt und erleben Sie unseren SUV schon bald live.</p>
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
									<h5>Kraftstoffverbrauch für alle verfügbaren Motoren des ŠKODA KODIAQ in l/100 km, innerorts: 9,1–5,8; außerorts: 6,4–4,6; kombiniert: 7,4–5,0. CO<sub>2</sub>-Emission kombiniert: 170–131&nbsp;g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse C–A
									<h5>Kraftstoffverbrauch für alle verfügbaren Motoren in l/100 km, innerorts: 9,1–4,1; außerorts: 6,4–3,3; kombiniert: 7,4–3,6. CO<sub>2</sub>-Emission kombiniert: 170–95&nbsp;g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse D–A<sup>+</sup>
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
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/skoda_team_rhein_main_logo.png" alt="SKODA Team Rhein-Main Logo" class="img-responsive" /></a>
						</div>
						<div class="col-sm-6 footer-nav">
							<ul class="col-lg-7 col-sm-5 col-xs-6">
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
			</footer>
		</div>

    <?php wp_footer(); ?>

		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datetimepicker.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="crossorigin="anonymous"></script>

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

		<script>

		$(document).ready(function(){

				// Call to action Button checked in
				$("#checkBoxhit").click(function(){
						 $('#boxChecked span input[type=checkbox]').attr('checked', true);
				});

				//Bootstrap drop down menu
				$('.dropdown-menu').addClass('subnavigation');

		});

		</script>


	</body>
</html>
