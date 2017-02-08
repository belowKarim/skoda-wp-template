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

	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->
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
						<li><a href="#">Aktionen</a></li>
						<li><a href="#">Fahrzeuge</a></li>
						<li><a href="/salons/" class="active">Team Rhein-Main</a></li>
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
											<h1>ŠKODA TEAM RHEIN-MAIN GUUDE FAHRT.</h1>
											<h2>Geballte Power für unsere Region.Lernen Sie uns kennen.</h2>
										</div>
									</div>
								</section>
								<div class="customMap_wrap">
									<div id="custom_map">
										<div class="mapImg"><img src="<?php echo get_template_directory_uri(); ?>/images/map03.png" alt="map"></div>
										<ul class="towns">
											<li data-town="Friedberg"><i class="pnt"></i><span class="pnt">Friedberg</span></li>
											<li data-town="New Anspach"><i class="pnt"></i><span class="pnt">Neu Anspach</span></li>
											<li data-town="Oberursel"><i class="pnt"></i><span class="pnt">Oberursel</span></li>
											<li data-town="Grundau-Lieblos"><i class="pnt"></i><span class="pnt">Gründau-Lieblos</span></li>
											<li data-town="Frankfurt"><i class="pnt"></i><span class="pnt">Frankfurt</span></li>
											<li data-town="Hanau"><i class="pnt"></i><span class="pnt">Hanau</span></li>
											<li data-town="Offenbach"><i class="pnt"></i><span class="pnt">Offenbach</span></li>
											<li data-town="Hofheim"><i class="pnt"></i><span class="pnt">Hofheim</span></li>
											<li data-town="Wiesbaden"><i class="pnt"></i><span class="pnt">Wiesbaden</span></li>
											<li data-town="Mainz"><i class="pnt"></i><span class="pnt">Mainz</span></li>
											<li data-town="Rodermark"><i class="pnt"></i><span class="pnt">Rödermark</span></li>
											<li data-town="Darmstadt"><i class="pnt"></i><span class="pnt">Darmstadt</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="list_wrap">
					<header class="row">
						<div class="col-md-8 col-sm-6">
							<h3>Unser Team</h3>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 pull-right">
							<div class="sorting">
								<p class="title"><span>Sortieren nach:</span></p>
								<div class="sort_box">
									<div class="selected drops">
										<span class="selected_sort" data-sort="up">Autohausname, alphabetisch</span>
										<span class="bs-caret"><span class="caret"></span>
									</div>
									<ul>
										<li data-sort="up">Autohausname, alphabetisch</li>
										<li data-sort="town">Stadtname, alphabetisch</li>
									</ul>
								</div>
							</div>
						</div>
					</header>
					<div class="item_list">
						<div class="desktop_items">
							<div class="row item_columns">
								<div class="col-sm-4" data-column="0"></div>
								<div class="col-sm-4" data-column="1"></div>
								<div class="col-sm-4" data-column="2"></div>
							</div>
						</div>
						<div class="mob_items"></div>
						<div class="tempContainer"></div>
						<div class="tempMobContainer"></div>
						<div class="itemContainer">
							<div class="oneItem" data-name="ABS Mainz GmbH & Co KG" data-town="Mainz">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">ABS Mainz GmbH & Co KG</span>,
											<span class="town">Mainz</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_001.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Rheinallee 195</p>
												<p>55120 Mainz</p>
												<p></p>
												<p>Fon: 06131 962220</p>
												<p>E-Mail: verkauf@abs-mainz.com</p>
												<p>www.abs-mainz.com</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 19.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.30 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>7.30 - 17.00 Uhr</dd>
													<dt>Sa:</dt><dd>Notdienst <br>9.00 - 13.00 Uhr</dd>
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

							<div class="oneItem hid" data-name="Autohaus Kilian GmbH" data-town="Wiesbaden">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus Kilian GmbH</span>,
											<span class="town">Wiesbaden</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_AH_Kilian.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Im Rad 36-38</p>
												<p>65197 Wiesbaden</p>
												<p></p>
												<p>Fon: 0611 98986 60</p>
												<p>E-Mail: </p>
												<p>www.kilian-schick.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Do:</dt><dd>7.30 - 18.00 Uhr</dd>
													<dt>Fr:</dt><dd>7.00 - 16.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
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
							<div class="oneItem" data-name="Autohaus Preuss KG" data-town="Hanau">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus Preuss KG</span>,
											<span class="town">Hanau</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_005.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Moselstraße 42</p>
												<p>63452 Hanau</p>
												<p></p>
												<p>Fon: 06181 48001</p>
												<p>E-Mail: j.saulite@skoda-preuss.de</p>
												<p>www.skoda-preuss.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.30 Uhr <br>Mittegspause: <br>12.20 - 13.00 Uhr</dd>
													<dt>Sa:</dt><dd>10.00 - 14.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 17.00 Uhr <br>7.30 - 18.00 Uhr</dd>
													<dt>Sa:</dt><dd>10.00 - 14.00 Uhr</dd>
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
							<div class="oneItem" data-name="Auto Kemmer GmbH" data-town="Rodermark">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Auto Kemmer GmbH</span>,
											<span class="town">Rödermark</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_003.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Carl-Zeiss-Straße 2</p>
												<p>63322 Rödermark</p>
												<p></p>
												<p>Telefon: 06074 86830</p>
												<p>E-Mail: ralf.kemmer@auto-kemmer.de <br>harry.erbe@auto-kemmer.de</p>
												<p>www.auto-kemmer.skoda-auto.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Do:</dt><dd>9.00 - 18.00 Uhr</dd>
													<dt>Fr:</dt><dd>9.00 - 17.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Do:</dt><dd>8.00 - 18.00 Uhr</dd>
													<dt>Fr:</dt><dd>8.00 - 17.00 Uhr</dd>
													<dt>Sa:</dt><dd>geschlossen</dd>
												</dl>
											</div>
											<div class="share">
												<p class="title"><span>Aktionen und Veranstaltungen</span></p>
												<p>Das ist Blindtext, der zur Darstellung des Layouts dient und später ersetzt wird. Das ist Blindtext, der nur Darstellung dient und später ersetzt wird.</p>
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
							<div class="oneItem" data-name="MTS Automobile GmbH" data-town="New Anspach">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">MTS Automobile GmbH</span>,
											<span class="town">Neu-Anspach</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_MTS_Neu_Anspach.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Robert-Bosch-Straße 24</p>
												<p>61267 Neu-Anspach</p>
												<p></p>
												<p>Telefon: 06081 582900</p>
												<p>E-Mail: anspach@mts-mobile.de</p>
												<p>www.mts-mobile.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
												</dl>
											</div>
											<div class="share">
												<p class="title"><span>Aktionen und Veranstaltungen</span></p>
												<p>Das ist Blindtext, der zur Darstellung des Layouts dient und später ersetzt wird. Das ist Blindtext, der nur Darstellung dient und später ersetzt wird.</p>
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
							<div class="oneItem" data-name="MTS Automobile GmbH" data-town="Friedberg">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">MTS Automobile GmbH</span>,
											<span class="town">Friedberg</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_MTS_Friedberg.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Strassheimer Strasse 8</p>
												<p>61169 Friedberg</p>
												<p></p>
												<p>Fon: 06031 18800</p>
												<p>E-Mail: friedberg@mts-mobile.de</p>
												<p>www.mts-mobile.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
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
							<div class="oneItem" data-name="MTS Automobile GmbH" data-town="Oberursel">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">MTS Automobile GmbH</span>,
											<span class="town">Oberursel</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_MTS_Oberursel_Sued.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Pfeiffstraße 6-10</p>
												<p>61440 Oberursel</p>
												<p></p>
												<p>Telefon: 06171 887190</p>
												<p>E-Mail: oberursel@mts-mobile.de</p>
												<p>www.mts-mobile.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 18.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 14.00 Uhr</dd>
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
							<div class="oneItem" data-name="Volkswagen Automobile Frankfurt GmbH" data-town="Frankfurt">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Volkswagen Automobile Frankfurt GmbH</span>,
											<span class="town">Frankfurt am Main</span>
										</h4>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Mainzer Landstraße 404</p>
												<p>60326 Frankfurt am Main</p>
												<p></p>
												<p>Telefon: 069 870016 2333</p>
												<p>E-Mail: </p>
												<p>www.SKODA-frankfurt.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>

											</div>
										</div>
									</article>
									<a href="#" class="btn btn-success custom-button">
										<span>Mehr Informationen</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</section>
							</div>
							<div class="oneItem" data-name="Göthling & Kaufmann Automobile GmbH" data-town="Hofheim">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Göthling & Kaufmann Automobile GmbH</span>,
											<span class="town">Hofheim am Taunus</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_G_u_K_Hofheim.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Niederhofheimer Straße 60</p>
												<p>65719 Hofheim am Taunus</p>
												<p></p>
												<p>Telefon: 06192 807080</p>
												<p>Email: info@guk-hofheim.de</p>
												<p>http://www.hofheim.SKODA.de/</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 – 18.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 – 17.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo – Do:</dt><dd>7.00 – 17.00 Uhr</dd>
													<dt>Fr:</dt><dd>7.00 – 16.00 Uhr</dd>
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
							<div class="oneItem hid" data-name="Wiest Automobile GmbH" data-town="Darmstadt">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Wiest Automobile GmbH</span>,
											<span class="town">Darmstadt</span>
										</h4>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Hilpertstraße 6</p>
												<p>64295 Darmstadt</p>
												<p></p>
												<p>Telefon: 06151 8640</p>
												<p>E-Mail: </p>
												<p>http://darmstadt.skoda-auto.de/</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>

											</div>
										</div>
									</article>
									<a href="#" class="btn btn-success custom-button">
										<span>Mehr Informationen</span>
										<i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i>
									</a>
								</section>
							</div>
							<div class="oneItem" data-name="Autohaus Weise Atzert & Weber GmbH & Co. KG" data-town="Grundau-Lieblos">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus Weise Atzert & Weber GmbH & Co. KG</span>,
											<span class="town">Gründau-Lieblos</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_Atzert-Weber_Autohaus-Weise_Gruendau_1280x516.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>In der Aue 4-6</p>
												<p>63584 Gründau-Lieblos</p>
												<p></p>
												<p>Fon: 06051 6189980</p>
												<p>E-Mail: </p>
												<p>http://www.auto-weise.skoda-auto.de/</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 18.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>7.30 - 17.30 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
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
							<div class="oneItem" data-name="Autohaus R. Welker GmbH" data-town="Weiterstadt">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus R. Welker GmbH</span>,
											<span class="town">Weiterstadt</span>
										</h4>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Carl-Zeiss-Straße 1</p>
												<p>64331 Weiterstadt</p>
												<p></p>
												<p>Fon: 06150 7119</p>
												<p>E-Mail: info@ah-welker.de</p>
												<p>http://www.r.welker.skoda-auto.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<strong>Verkauf:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>9.00 - 18.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 16.00 Uhr</dd>
												</dl>
												<strong>Werkstatt:</strong>
												<dl>
													<dt>Mo - Fr:</dt><dd>8.00 - 18.00 Uhr</dd>
													<dt>Sa:</dt><dd>9.00 - 13.00 Uhr</dd>
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
							<div class="oneItem" data-name="Autohaus Best GmbH" data-town="Offenbach">
								<section class="item_wrap">
									<header>
										<h4>
											<span class="name">Autohaus Best GmbH</span>,
											<span class="town">Offenbach</span>
										</h4>
										<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/skoda_AH_Best.jpg')"></div>
									</header>
									<article class="contacts">
										<header class="showContact">
											<h5>Kontaktdaten</h5>
											<i class="item_icon"></i>
											<span>
												<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
												<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
											</span>
										</header>
										<div class="contact_info">
											<div class="contact_info_main">
												<p>Untere Grenzstraße 4-6</p>
												<p>63075 Offenbach</p>
												<p></p>
												<p>Fon: 069 8090960</p>
												<p>E-Mail: </p>
												<p>www.auto-best.skoda-auto.de</p>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>

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
					<ul class="col-lg-7 col-sm-5 col-xs-6">
						<li><a href="#">Impressum</a></li>
						<li><a href="#">Datenschutz</a></li>
						<li><a href="#">Kontakt</a></li>
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

<!--		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
<!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>-->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sorting.js"></script>
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