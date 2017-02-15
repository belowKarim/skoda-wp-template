<?php
/**
 * Template name: Aktion Startseite
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
		<meta name="description" content="Das ŠKODA Team Rhein-Main wünscht Ihnen eine „Guude Fahrt“: Lernen Sie uns kennen und entdecken Sie unsere aktuellen Neu- und Gebrauchtwagenangebote."/>
		<title>ŠKODA Team Rhein-Main</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet">
                <?php wp_head(); ?>
		<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

		<!-- Animation CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">

	</head>

<body>
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
							<div id="banner">
									<div class="bannerWrap">
										<div class="bannerContainer">
											<ul>
											  <li class="withoutflag">
													<a onClick="ga('send', 'event', 'Slider', 'Click', 'Startseite-drive-in-wochen');" href="aktionen/drive-in-wochen/" class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img12.jpg')">
														<span style="top: 34px; left: 49px">DIE SONDERMODELLE<br>DRIVE VON ŠKODA.</span>
														<p class="text-Exbold">Mit einer großen Portion Extras.</p>
													</a>
													<a onClick="ga('send', 'event', 'Slider', 'Click', 'Startseite-drive-in-wochen');" href="aktionen/drive-in-wochen/" class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img13.jpg')">
														<span style="bottom: 15px; left: 188px">FÜR SCHNÄPPSCHE-<br>JÄSCHER</span>
													</a>
												</li>

												<li class="withoutflag">
													<a onClick="ga('send', 'event', 'Slider', 'Click', 'Startseite-kodiaq');" href="aktionen/aktion-kodiaq/" class="upLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img14.jpg')">
														<span style="top: 40px; left:50px">Der NEUE ŠKODA KODIAQ.</span>
													</a>
													<a onClick="ga('send', 'event', 'Slider', 'Click', 'Startseite-kodiaq');" href="aktionen/aktion-kodiaq/" class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img15.jpg')">
														<span style="bottom: 26px; left: 156px;">FÜR DIE,<br>WO MIT’M BÄR STEPPE.</span>
													</a>
												</li>

												<li class="aloneSlide">
													<a class="readyLink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img07.jpg')">
														<span style="bottom: 31px; right: 117px">... Unsere Region</span>
													</a>
												</li>

												<li>
													<a class="upLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img01.jpg')">
														<span style="bottom: 36px; left: 157px">... die hembels</span>
													</a>
													<a class="readyLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img02.jpg')">
														<span style="top: 44px; left: 282px">... die bembels</span>
													</a>
												</li>

												<li>
													<a class="upLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img04.jpg')">
														<span style="bottom: 37px; left: 56px">... Die Fussballfans</span>
													</a>
													<a class="readyLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img05.jpg')">
														<span style="top: 485px; left: 297px; text-indent: -120px">... Die Verkehrsplaner</span>
													</a>
												</li>

												<li>
													<a class="upLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img08.jpg')">
														<span style="top: 53px; left: 229px">... Die Närrischen</span>
													</a>
													<a class="readyLink nolink" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ready_img09.jpg')">
														<span style="bottom: 33px; left: 128px">... Die Lässischen</span>
													</a>
												</li>
										 </ul>
										 	<!--Slider Flag Shape -->
											<div class="bigSlide partOneTop"></div>
											<div class="bigSlide partOneBottom"></div>
											<div class="bigFlag partTwoTop"></div>
											<span class="bigFlag fur">FÜR <br>...</span>
											<div class="shadowLeft"></div>
											<div class="shadowTop"></div>
											<div class="shadowRight"></div>
											<div class="shadowBottom"></div>

										</div>
									</div>
						</div>

						<section class="section">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12 text-local-margin">
									<a onClick="ga('send', 'event', 'CTA-Aktionen', 'Click', 'Aktion-kodiaq');" href="aktionen/aktion-kodiaq/"><img src="<?php echo get_template_directory_uri(); ?>/images/Drive_02021777.jpg" class="img-responsive" alt="" /></a>
										<div class="sk-um-second-hero">
												<hgroup>
														<h5 class="sk-um-sub-headline">Der neuer ŠKODA Kodiaq.</h5>
												</hgroup>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
									<a onClick="ga('send', 'event', 'CTA-Aktionen', 'Click', 'Aktion-drive-in');" href="aktionen/drive-in-wochen/"><img src="<?php echo get_template_directory_uri(); ?>/images/Kodiaq_02021777.jpg" class="img-responsive" alt="Neue ŠKODA KODIAQ"/></a>
										<div class="sk-um-second-sub-hero">
												<hgroup>
														<h5 class="sk-um-sub-headline">Die Sondermodelle</h5>
														<h5 class="sk-um-sub-headline">Drive von ŠKODA.</h5>
												</hgroup>
										</div>
									</div>
								</div>
						</section>

						<section class="section sk-um-map-feature">
							<div class="row">
								<div class="col-md-7 col-sm-12 col-xs-12">
									<hgroup>
											<h4 class="sk-um-second-headline">HERZLICH WILKOMMEN BEI DEN</h4>
											<h4 class="sk-um-second-headline sk-um-space-mrgin">ŠKODA EXPERTEN AUS IHRER REGION.</h4>
									</hgroup>
									<p class="skoda-information" style="margin-bottom: 16px;">Wenn es um ŠKODA geht, sind Sie beim ŠKODA TEAM Rhein-Main genau richtig. Denn mit 12 Standorten im Rhein-Main-Gebiet sind wir stets in Ihrer Nähe und bieten Ihnen die aktuellen ŠKODA Modelle, attraktive Gebrauchtwagen sowie alle Serviceleistungen rund um Ihren ŠKODA. Und auch für Ferz mit Krigge haben wir immer ein offenes Ohr.</p>
									<p class="skoda-information" style="margin-bottom: 16px;">Steigen Sie doch mal zu einer Probefahrt bei uns ein oder bringen Sie uns Ihren aktuellen ŠKODA zum Frühjahrs-Check. Sie werden sehen: bei uns fühlen Sie sich sofort wie dahaam.</p>
									<p class="skoda-information" style="margin-bottom: 16px;">Wir wünschen Ihnen Guude Fahrt!</p>
								</div>
								<div class="col-md-5 col-sm-12 col-xs-12 animated fadeIn">
								<a onClick="ga('send', 'event', 'CTA-von-karte', 'Click', 'Startseite-TeamRheinMain');" href="http://guude-fahrt.de/team-rhein-main/"><img src="<?php echo get_template_directory_uri(); ?>/images/map_umgebaut_seite.png" class="img-responsive" alt=""  /></a>
								</div>
							</div>
					 </section>

					 <section class="listtField">
							<div class="row">
								<div class="col-md-12">
									<h5>Kraftstoffverbrauch für alle verfügbaren Motoren in l/100 km, innerorts: 9,1–4,1; außerorts: 6,4–3,3; kombiniert: 7,4–3,6. CO<sub>2</sub>-Emission kombiniert: 170–95&nbsp;g/km (gemäß VO (EG) Nr. 715/2007). Effizienzklasse D–A<sup>+</sup>
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

									<!-- <li><a href="/impressum/">Impressum</a></li>-->
									<!-- <li><a href="/datenschutz/">Datenschutz</a></li> -->
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

		<!--JS library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/banner.js"></script>
		<script>jQuery('#datetimepicker input').datetimepicker({format: 'DD/MM/YYYY'});</script>

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

		<script>
		$(document).ready(function() {
			  //Bootstrap drop down menu
		    $('.dropdown-menu').addClass('subnavigation');
		});
		</script>

</body>
</html>
