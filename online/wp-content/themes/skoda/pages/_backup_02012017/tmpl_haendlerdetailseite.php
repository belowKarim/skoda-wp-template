<?php
/**
 * Template name: Händlerdetailseite
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

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/haendlerdetails.css" type="text/css" rel="stylesheet">

<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</head>
<body id="haendlerdetailseite" class="haendlerdetails">
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
					<li><a href="<?php echo home_url(); ?>">Aktionen</a></li>
					<!-- <li><a href="#">Fahrzeuge</a></li> -->
						<li><a href="/team-rhein-main/" class="active">TEAM Rhein-Main</a></li>
						<!-- <li><a href="/guudies/" class="active">Guudies</a></li> -->
						<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Guudies
						<span class="caret"></span>
						</a>
                        <ul class="dropdown-menu subnavigation">
							<li><a href="/ausflugtipps/">Ausflugtipps</a></li>
							<li><a href="/rezepte/">Rezepte</a></li>
						</ul>
						</li>
						</ul>
				</div><!-- 
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

				</div>-->
			</nav>
		</div>
	</header>



    <div id="main">
        <div id="content">
            <div class="container">
                <div class="select-map">
                    <div class="mapWrap">
                        <div class="interactiveContainer">
							<div class="imgBox"></div>
                            <div class="mapMain">
                                <section class="mapHead">
                                    <div>
                                        <div>
                                            <h1>ŠKODA TEAM RHEIN-MAIN GUUDE FAHRT.</h1>
											<h2>Geballte Power für unsere Region. Lernen Sie uns kennen.</h2>

                                        </div>
                                    </div>
                                </section>
                                
                        </div>
                    </div>
					<div class="haendlerdetails_close"><a href="/team-rhein-main/" title="zurück zum TEAM Rhein-Main" target="_self"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_close.png" class="close_icon" alt="zurück zum TEAM Rhein-Main"></a></div>
                </div>

</div>

</div>


<div class="container">
<div class="container-fluid background_white abstand_top">
<section class="section">

	<div class="col-md-12 margin30">
	<header id="Autohaus_Anschrift">
		<!-- Icon Händler -->
		<?php $image = get_field('acf_haendler_icon'); if( !empty($image) ): ?>
			<img class="item_icon"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
		<h1 class="anchor">
			<?php the_field('acf_haendler_name'); ?>, <?php the_field('acf_haendler_ort');?>
		</h1>
		</header>

		
		<div class="internal_menu">
			<ul>
				<li><a href="#Autohaus_Allgemein">Unser Autohaus</a></li>
				<li><a href="#Autohaus_Leistungen">Unsere Leistungen und Services</a></li>
				<li><a href="#Mitarbeiter">Unsere Mitarbeiter</a></li>
			</ul>
		</div>
</div>

<div class="col-md-6"><!-- linke Spalte. Allg Händlerinfos -->

							<div class="oneItem" data-name="<?php the_field('acf_haendler_name'); ?>" data-town="<?php the_field('acf_haendler_ort');?>">


								<section class="item_wrap">
	
									<article class="contacts">

										<div class="contact_info">
											<div class="contact_info_main">
											<!-- logo -->
											<?php $image = get_field('acf_haendler_logo'); if( !empty($image) ): ?>
												<img class="haendler_logo img-responsive"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
											<?php endif; ?>
												<!-- fallback logo -->
												<?php $image = get_field('acf_haendler_logo'); if( empty($image) ): ?>
													<img class="haendler_logo img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/skoda_logo_fallback.jpg" alt="ŠKODA Logo" title="ŠKODA" />
											<?php endif; ?>
											<!-- standorte -->
											<?php $image = get_field('acf_haendler_standorte'); if( !empty($image) ): ?>
											<h2 class="haendler_standorte"><?PHP the_field('acf_haendler_standorte'); ?></h2>
											<?php endif; ?>
												<!-- fallback standort -->
												<?php $image = get_field('acf_haendler_standorte'); if( empty($image) ): ?>
												<h2 class="haendler_standorte"><?PHP the_field('acf_haendler_ort'); ?></h2>
												<?php endif; ?>
											<!-- Adresse -->
											<?php the_field('acf_haendler_anschrift'); ?>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
													<?php the_field('acf_haendler_oeffnungszeiten'); ?>
											</div><!-- times -->
										</div>
									</article>
								</section>
							</div>


    </div>

	<div class="col-md-6"> <!-- rechte Spalte. Bild Händler -->
		<div class="imgBoxHaendler">
			<?php $image = get_field('acf_haendler_bild'); if( !empty($image) ): ?>
				<img class="img-responsive haendler_bild" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
			<?php endif; ?>

		</div>
	</div>
</section>

</div>

</div><!-- row -->
  

    <div class="container">
    <div class="container-fluid background_white">
    <div class="col-md-6">


    	<section class="section" id="Autohaus_Allgemein">
		    <h2 class="anchor">Unser Autohaus:</h2><a href="#haendlerdetailseite" title="nach oben" class="jump_to_top hidden-lg"></a>
		    <p><?php the_field('acf_haendler_unser_autohaus'); ?></p>
		</section>
		
    	<section class="section" id="Autohaus_Leistungen">	
		    <h2 class="anchor">Unsere Leistungen und Services:</h2><a href="#haendlerdetailseite" title="nach oben" class="jump_to_top hidden-lg"></a>
			<?php if( get_field('acf_haendler_unsere_leistungen_und_services') ): ?>
				<p><?php the_field('acf_haendler_unsere_leistungen_und_services'); ?></p>
			<?php endif; ?>





<div class="row haendler_leistung_details">

<?php
$values = get_field('acf_haendler_vertrieb');
$field  = get_field_object('acf_haendler_vertrieb');
$choices = $field['choices'];
?>
	<h3 class="green">Vertrieb:</h3>

	<div class="row"> 
	<?php foreach ($choices as $value => $label): ?> 
		<?PHP $umlaute = array( ' ' => '_', '­' => '', '–' => '_', '/' => '_', 'Ä' => 'Ae', 'Ö' => 'Oe', 'Ü' => 'Ue', 'ä' => 'ae', 'ö' => 'oe', 'ü' => 'ue', 'ß' => 'ss', '&' => '-');
         $leistung_item_umlautefrei = strtr($value,$umlaute);?>

         <!-- Ausgabe bauen -->
		<?PHP 
         if (in_array($value, $values)) { ?>
        		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 min-height-170">
					<div class="thumbnail_div">
						<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?><?PHP echo '/images/icons/Icon_'.$leistung_item_umlautefrei.'.png' ?>" title="<?PHP echo $value ?>" alt="<?PHP echo $value ?>" />
					</div>
					<div class="caption">
					    <p><?php echo $label; ?></p>
					</div><!-- caption -->
         		</div>
   		<?PHP }  ?>
	<?php endforeach; ?>
	</div>
</div>


<!--
		<div class="row haendler_leistung_details">

			<?php if( have_rows('acf_haendler_vertrieb') ): ?>

			<h3 class="green">Vertrieb:</h3>
				<div class="row">
				<?php while( have_rows('acf_haendler_vertrieb') ): the_row(); 

					// vars
					$image = get_sub_field('acf_haendler_vertrieb_item_icon');
					$content = get_sub_field('acf_haendler_vertrieb_item_text');
					?>

					<div class="col-xs-6 col-sm-3 col-md-2 min-height-170">

					<div class="thumbnail_div">
						<img class="haendler_leistung_icon img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
					</div>
					
					<div class="caption">
					    <p><?php echo $content; ?></p>
					</div>
					</div>

				<?php endwhile; ?>
				</div>
			<?php endif; ?>



		</div>

 -->

<!-- 
	<div class="row haendler_leistung_details">

		<?php if( have_rows('acf_haendler_service') ): ?>

		<h3 class="green">Service:</h3>
			<div class="row">
			<?php while( have_rows('acf_haendler_service') ): the_row(); 

				// vars
				$image = get_sub_field('acf_haendler_service_item_icon');
				$content = get_sub_field('acf_haendler_service_item_text');
				?>

				<div class="col-xs-6 col-sm-3 col-md-2 min-height-170">

				<div class="thumbnail_div">
					<img class="haendler_leistung_icon img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
				</div>
				
				<div class="caption">
				    <p><?php echo $content; ?></p>
				</div>
				</div>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>

		</div>
-->


<div class="row haendler_leistung_details">

<?php
$values = get_field('acf_haendler_service');
$field  = get_field_object('acf_haendler_service');
$choices = $field['choices'];
?>
	<h3 class="green">Service:</h3>

	<div class="row"> 
	<?php foreach ($choices as $value => $label): ?> 
		<?PHP $umlaute = array( ' ' => '_', '­' => '', '–' => '_', '/' => '_', 'Ä' => 'Ae', 'Ö' => 'Oe', 'Ü' => 'Ue', 'ä' => 'ae', 'ö' => 'oe', 'ü' => 'ue', 'ß' => 'ss', '&' => '-');
         $leistung_item_umlautefrei = strtr($value,$umlaute);?>

         <!-- Ausgabe bauen -->
		<?PHP 
         if (in_array($value, $values)) { ?>
        		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 min-height-170">
					<div class="thumbnail_div">
						<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?><?PHP echo '/images/icons/Icon_'.$leistung_item_umlautefrei.'.png' ?>" title="<?PHP echo $value ?>" alt="<?PHP echo $value ?>" />
					</div>
					<div class="caption">
					    <p><?php echo $label; ?></p>
					</div><!-- caption -->
         		</div>
   		<?PHP }  ?>
	<?php endforeach; ?>
	</div>
</div>


</section>


</div><!-- col-md-6 linke spalte -->


<div class="col-md-6">

    	<section class="section" id="Autohaus_Mitarbeiter">	
	    <h2 class="anchor" id="Mitarbeiter">Unsere Mitarbeiter:</h2><a href="#haendlerdetailseite" title="nach oben" class="jump_to_top hidden-lg"></a>



			<?php if( have_rows('acf_haendler_mitarbeiter') ): ?>
			<div class="row">
			
			<?php while( have_rows('acf_haendler_mitarbeiter') ): the_row(); 

				// vars
				$image = get_sub_field('acf_haendler_mitarbeiter_bild');
				$name = get_sub_field('acf_haendler_mitarbeiter_name');
				$position_bereich = get_sub_field('acf_haendler_mitarbeiter_position_bereich');
				$telefon = get_sub_field('acf_haendler_mitarbeiter_telefon');
				$email = get_sub_field('acf_haendler_mitarbeiter_email');
				?>

				<div class="col-md-6 col-sm-6 haendler_mitarbeiter min-height-385">
				<?PHP 	if (empty($image)) {
							echo '<div class="haendler_mitarbeiter_bild_container"><img class="img-responsive haendler_mitarbeiter_bild" src="'.get_template_directory_uri().'/images/mitarbeiter_silhouette.png" /></div>';
						} else { 
							echo '<div class="haendler_mitarbeiter_bild_container"><img class="img-responsive haendler_mitarbeiter_bild" src="'.$image['url'].'" alt="'.$image['alt'].'" title="'.$image['title'].'" /></div>';
					 	} ?>
					<span class=""><?php echo $name; ?></span>
					<span><?php echo $position_bereich; ?></span>
				    <span class="">Telefon: <a href="tel:<?php echo $telefon; ?>"> <?php echo $telefon; ?></a></span>
					<span class=""><a href="mailto:<?php echo $email; ?>">E-Mail schreiben</a></span>
				</div>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</section>
    </div><!-- col-6 -->


</div>

</div>
</div><!-- caontiner -->
</div>


     </div>
  
                        
    <footer id="footer">
        <div class="container">
            <div class="footerContent">
                <div class="col-sm-6 logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/skoda_team_rhein_main_logo.png" alt="SKODA TEAM Rhein-Main Logo" class="img-responsive" /></a>
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

<script type="text/javascript">
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

</script>


</body>
</html>