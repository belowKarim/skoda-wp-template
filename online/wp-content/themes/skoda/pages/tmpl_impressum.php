<?php
/**
 * Template name: Impressum
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

	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</head>
<body class="impressum">
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
							<div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/map_bg.jpg')"></div>
							<div class="mapMain">
								<section class="mapHead">
									<div>
										<div>
											<!--<h1>ŠKODA TEAM RHEIN-MAIN GUUDE FAHRT.</h1>
											<h2>Geballte Power für unsere Region. Lernen Sie uns kennen.</h2>-->
										</div>
									</div>
								</section>

						</div>
					</div>
				</div>
				<div class="container-fluid">
				<section class="section forForm">
							<div class="row">
								<div class="col-md-12">

									<header><h1><?php the_field('acf_impressum_main_headline'); ?></h1></header>
									<h2><?php the_field('acf_impressum_headline_information'); ?></h2>
									<br/><br/>
								</div>

								<?php
										if( have_rows('acf_impressum_haendler_address') ):
								    		
								    		while ( have_rows('acf_impressum_haendler_address') ) : the_row();
											$haendler_impressum_address = get_sub_field('acf_impressum_single_haendler_address'); ?>

											<div class="col-md-3 col-sm-8 col-xs-6 min-height">
											   <?php echo $haendler_impressum_address; ?>
											</div>

								<?php 	endwhile;
								
									endif;
								?>

							</div>
							<div>
								<?php the_field('acf_impressum_seitenbetreiber_info'); ?>
							</div>
						</section>

	</div>
</div>
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
$(document).ready(function() {
    $('.dropdown-menu').addClass('subnavigation');
});
</script>

</body>
</html>
