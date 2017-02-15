<?php
/**
 * Template name: Team-Rhein-Main
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
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Das ŠKODA Team Rhein-Main wünscht Ihnen eine „Guude Fahrt“: Lernen Sie uns kennen und entdecken Sie unsere aktuellen Neu- und Gebrauchtwagenangebote."/>

	<title>Team Rhein-Main - ŠKODA TEAM Rhein-Main</title>
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
				<div class="select-map">
					<div class="mapWrap">
						<div class="interactiveContainer">
							<?php $backgroundimage = get_field('acf_haendler_karte_backgroundimage'); if( !empty($backgroundimage) ): ?>
								<div class="imgBox" style="background-image: url('<?php echo $backgroundimage['url'] ?>')"></div>
							<?php endif; ?>
							<div class="mapMain">
								<section class="mapHead">
									<div>
										<div>
											<?php $headline = get_field('acf_haendler_texte_headline'); if( !empty($headline) ): ?>
											<h1><?PHP echo $headline ?></h1>
											<?php endif; ?>
											<?php $subline = get_field('acf_haendler_texte_subline'); if( !empty($subline) ): ?>
											<h2><?PHP echo $subline ?></h2>
											<?php endif; ?>
										</div>
									</div>
								</section>
								<div class="customMap_wrap">
									<div id="custom_map">
										<div class="mapImg"><img src="<?php echo get_template_directory_uri(); ?>/images/map03.png" alt="map"></div>
										<ul class="towns">

											<?php if( have_rows('acf_haendler_karte') ): ?>
												<?php while( have_rows('acf_haendler_karte') ): the_row();
													// vars
													$city = get_sub_field('acf_haendler_karte_stadt');
													$pos_left = get_sub_field('acf_haendler_karte_stadt_pos_links');
													$pos_top = get_sub_field('acf_haendler_karte_stadt_pos_oben');

														echo '<li onClick="ga(\'send\', \'event\', \'Map-Hotspot\', \'Click\', \''.$city.'\');" class="hotspot" data-id="'.$city.'" data-town="'.$city.'" style="left:'.$pos_left.'px; top:'.$pos_top.'px;"><i class="pnt"></i><span class="pnt">'.$city.'</span></li>';

												endwhile;
											endif;
											?>

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
							<?php $headline = get_field('acf_haendler_infobox_headline'); if( !empty($headline) ): ?>
								<h3><?PHP echo $headline ?></h3>
							<?php endif; ?>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 pull-right">
							<div class="sorting">
								<p class="title"><span>Sortieren nach:</span></p>
								<div class="sort_box">
									<div class="selected drops">
										<span class="selected_sort" data-sort="up">Autohausname, alphabetisch</span>
										<span class="bs-caret"><span class="caret"></span></span>
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


						<?php if( have_rows('acf_haendler_infobox') ): ?>


							<?php while( have_rows('acf_haendler_infobox') ): the_row();

								// vars
								$name = get_sub_field('acf_haendler_infobox_name');
								$ort = get_sub_field('acf_haendler_infobox_ort');
								$bild = get_sub_field('acf_haendler_infobox_bild');
								/*$icon = get_sub_field('acf_haendler_infobox_icon');*/
								$adresse = get_sub_field('acf_haendler_infobox_adresse');
								$link = get_sub_field('acf_haendler_infobox_link');

								?>


						<div class="oneItem" id="<?php echo $ort ?>" data-name="<?php echo $name ?>" data-town="<?php echo $ort ?>" data-id="<?php echo $ort ?>">
										<section class="item_wrap">
											<header>
												<h4>
													<span class="name"><?php echo $name ?></span>,
													<span class="town"><?php echo $ort ?></span>
												</h4>
												<div class="imgBox" style="background-image: url('<?php echo $bild['url']; ?>')"></div>
											</header>
											<article class="contacts">
												<header class="showContact">
													<h5>Kontaktdaten</h5>
													<i class="item_icon"></i>
													<!-- <img class="item_icon" src="<?php echo $icon['url'] ?>" alt="" /> -->

													<span>
														<svg fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 16.42l9.17 9.17 9.17-9.17 2.83 2.83-12 12-12-12z"/></svg>
														<svg class="down" fill="#fff" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
													</span>
												</header>
												<div class="contact_info">
													<div class="contact_info_main">
													<?php if( $adresse ): ?>
														<?PHP echo $adresse ?>
													<?php endif; ?>
													</div>
													<div class="times">
														<h6>Öffnungszeiten</h6>

																<!-- Verkauf -->
																<!-- -->
											<?php while( have_rows('acf_haendler_infobox_oeffnungszeiten') ): the_row(); ?>

																	<?php if( have_rows('acf_haendler_infobox_oeffnungszeiten_verkauf') ): ?>

																	<strong>Verkauf:</strong>
																	<dl>
																	<?php while( have_rows('acf_haendler_infobox_oeffnungszeiten_verkauf') ): the_row(); ?>

																	<?PHP $uhrzeit = get_sub_field('acf_haendler_infobox_oeffnungszeiten_verkauf_uhrzeit');
																		$wochentag = get_sub_field('acf_haendler_infobox_oeffnungszeiten_verkauf_wochentag'); ?>


																				<dt><?PHP echo $wochentag ?></dt>
																				<dd><?PHP echo $uhrzeit ?></dd>


																	<?php endwhile; ?> <!-- Verkauf -->
																	</dl>
																<?php endif; ?><!-- Verkauf -->


															<!-- Werkstatt -->
															<!-- -->
															<?php if( have_rows('acf_haendler_infobox_oeffnungszeiten_werkstatt') ): ?>
															<strong>Werkstatt:</strong>
																	<dl>
																	<?php while( have_rows('acf_haendler_infobox_oeffnungszeiten_werkstatt') ): the_row(); ?>
																	<?PHP $uhrzeit = get_sub_field('acf_haendler_infobox_oeffnungszeiten_werkstatt_uhrzeit');
																	$wochentag = get_sub_field('acf_haendler_infobox_oeffnungszeiten_werkstatt_wochentag'); ?>


																			<dt><?PHP echo $wochentag ?></dt>
																			<dd><?PHP echo $uhrzeit ?></dd>


																	<?php endwhile; ?>
																	</dl>
																<?php endif; ?><!-- Werkstatt -->

										<?php endwhile; ?> <!-- acf_haendler_infobox_oeffnungszeiten -->


													</div>
												</div>
											</article>

											<?php if( $link ): ?>
												<a onClick="ga('send', 'event', 'CTA-More-Information', 'Click', '<?php echo $name ?>, <?php echo $ort ?>');" class="btn btn-success custom-button" href="<?php echo $link; ?>"><span>Mehr Informationen</span><i class="cta_arrow"><svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/></svg></i></a>
											<?php endif; ?>

									</section>
								</div><!-- oneItem -->



							<?php endwhile; ?> <!-- acf_haendler_infobox -->


						<?php endif; ?> <!-- acf_haendler_infobox -->




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
						<!-- <li><a href="/impressum/">Impressum</a></li>-->
						<!-- <li><a href="/datenschutz/">Datenschutz</a></li> -->
						<!-- <li><a href="#">Kontakt</a></li> </a> -->
						<?php wp_nav_menu( array( 'skoda' => 'footer_menu' ) ); ?>
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

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>-->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sorting.js"></script>

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
/*
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
*/
</script>

<script type="text/javascript">
 $(".towns .hotspot").on('click', function() {
    var data_id = $(this).data('id');

    $('.oneItem').each(function() {
      var el = $(this);

      if (el.attr('id') == data_id) {
		 $('html, body').animate({
		        scrollTop: el.offset().top -10
		      }, 1000);
		      return false;
		    }
  })
});
</script>


<script type="text/javascript">
$(document).ready(function() {
    $('.dropdown-menu').addClass('subnavigation');
});
</script>

<script type="text/javascript">
		$(document).ready(function() {


		});
</script>









</body>
</html>
