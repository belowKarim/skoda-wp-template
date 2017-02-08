<?php
/**
 * Template name: Salons
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
	<meta name="author" content="enenkoff@mail.ru">
	<title>Salons</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
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
						<li><a href="#">Aktionen</a></li>
						<!-- <li><a href="#">Fahrzeuge</a></li> -->
						<li><a href="#">Team Rhein-Main</a></li>
						<li><a href="#">Guudies</a></li>
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
				<div class="select-map">
					<div class="mapWrap">
						<div class="interactiveContainer">
							<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/map_bg.jpg')"></div>
							<div class="mapMain">
								<section class="mapHead">
									<div>
										<div>
											<h1>SKODA TEAM RHEIN-MAIN GUUDE FAHRT.</h1>
											<h2>Geballte Power fur unsere Region.Lernen Sie uns kennen.</h2>
										</div>
									</div>
								</section>
								<div class="customMap_wrap">
									<div id="custom_map">
										<div class="mapImg"><img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map"></div>
										<ul class="towns">
											<li data-town="Friedberg"><i class="pnt"></i><span class="pnt">Friedberg</span></li>
											<li data-town="New Anspach"><i class="pnt"></i><span class="pnt">New Anspach</span></li>
											<li data-town="Oberursel"><i class="pnt"></i><span class="pnt">Oberursel</span></li>
											<li data-town="Grundau-Lieblos"><i class="pnt"></i><span class="pnt">Grundau-Lieblos</span></li>
											<li data-town="Frankfurt"><i class="pnt"></i><span class="pnt">Frankfurt</span></li>
											<li data-town="Hanau"><i class="pnt"></i><span class="pnt">Hanau</span></li>
											<li data-town="Offenbach"><i class="pnt"></i><span class="pnt">Offenbach</span></li>
											<li data-town="Hofheim"><i class="pnt"></i><span class="pnt">Hofheim</span></li>
											<li data-town="Wiesbaden"><i class="pnt"></i><span class="pnt">Wiesbaden</span></li>
											<li data-town="Mainz"><i class="pnt"></i><span class="pnt">Mainz</span></li>
											<li data-town="Rodermark"><i class="pnt"></i><span class="pnt">Rodermark</span></li>
											<li data-town="Darmstadt"><i class="pnt"></i><span class="pnt">Darmstadt</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="mobMap">
							<div class="imgBox"></div>
							<section class="mapHead">
								<div class="row">
									<div class="col-xs-7">
										<h1>SKODA TEAM RHEIN-MAIN GUUDE FAHRT.</h1>
										<h2>Geballte Power fur unsere Region.Lernen Sie uns kennen.</h2>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<section class="list_wrap">
					<header class="row">
						<div class="col-md-8">
							<h3>Unser Team</h3>
						</div>
						<div class="col-md-4 pull-right">
							<div class="sorting">
								<p class="title">Sortieren nach:</p>
								<div class="sort_box">
									<div class="selected">Autohausname, alphabetisch</div>
									<ul>
										<li>Autohausname, alphabetisch</li>
										<li>Autohausname, alphabetisch untenhin</li>
									</ul>
								</div>
							</div>
						</div>
					</header>
					<div class="item_list">
						<div class="desktop_items">
							<div class="row">
								<div class="col-md-4" data-column="1"></div>
								<div class="col-md-4" data-column="2"></div>
								<div class="col-md-4" data-column="3"></div>
							</div>
						</div>
						<div class="mob_items">
							<div class="oneMobItem" data-name="ABS Mainz GmbH & Co KG" data-town="Mainz">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">ABS Mainz GmbH & Co KG</span>,
											<span class="town">Mainz</span>
										</h4>
										<div class="imgBox" style="background-image: url('https://www.scherer-gruppe.de/media/0d5c1a7a-7b04-4e86-a8d1-0cd3aec079b7/Seitenvorschau-Skoda.jpg?w=447&h=280&action=crop&anchor=middlecenter')"></div>
									</header>
									<article class="contacts">
										<header>
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span class="showContact"></span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Rheinallee 195</p>
												<p>55120 Mainz</p>
												<p></p>
												<p>Fon: 06131 962220</p>
												<p>E-Mail: xxxx@autohaus-best.de</p>
												<p>www.abs-mainz.skoda-auto.de</p>
											</div>
											<div class="times">
												<h6>?ffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo � Fr:</dt><dd>8.00 � 19.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 � 14.30 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo � Do:</dt><dd>7.30 � 17.30 Uhr</dd>
													<dt>Fr:</dt><dd>7.30 � 17.00</dd>
													<dt>Sa:</dt><dd>geschlossen</dd>
												</dl>
											</div>
										</div>
									</article>
									<a href="#" class="btn btn-success custom-button">
										<span>Mehr Informationen</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</section>
							</div>
							<div class="oneMobItem" data-name="Autohaus Best GmbH" data-town="Offenbach">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus Best GmbH</span>,
											<span class="town">Offenbach</span>
										</h4>
										<div class="imgBox" style="background-image: url('http://static3.fnp.de/storage/scl/importe/fnpartikel/rhein-main/wetterau/548625_m3w605h320q75v31659_Ndk_K_ASBAutosB_iz_28031_4c.jpg?version=1395971432')"></div>
									</header>
									<article class="contacts">
										<header>
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span class="showContact"></span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Untere Grenzstra?e 4�6</p>
												<p>63075 Offenbach</p>
												<p></p>
												<p>Telefon: 069 8090960</p>
												<p>E-Mail: xxxx@autohaus-best.de</p>
												<p>www.auto-best.skoda-auto.de</p>
											</div>
											<div class="times">
												<h6>?ffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo � Fr:</dt><dd>8.30 � 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 � 14.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo � Fr:</dt><dd>8.30 � 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 � 14.00 Uhr</dd>
												</dl>
											</div>
											<div class="share">
												<p class="title">Aktionen und Veranstaltungen</p>
												<p>Das ist Blindtext, der zur Darstellung des Layouts dient und sp?ter ersetzt wird. Das ist Blindtext, der nur Darstellung dient und sp?ter ersetzt wird.</p>
												<div class="link">
													<a href="#">
														<span>Erfahren Sie mehr</span>
														<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
													</a>
												</div>
											</div>
										</div>
									</article>
									<a href="#" class="btn btn-success custom-button">
										<span>Mehr Informationen</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</section>
							</div>
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
					<ul class="col-md-7 col-sm-12 col-xs-6">
						<li><a href="#">Impressum</a></li>
						<li><a href="#">Datenschutz</a></li>
						<li><a href="#">Kontakt</a></li>
					</ul>
					<div class="pull-right copyright col-md-5 col-xs-6">
						<p>&copy; ŠKODA TEAM Rhein-Main</p>
					</div>
				</div>


			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
<!--		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sorting.js"></script>
</body>
</html>