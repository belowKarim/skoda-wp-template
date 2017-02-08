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

	<title>Händlerdetails - ŠKODA TEAM Rhein-Main</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/haendlerdetails.css" type="text/css" rel="stylesheet">

<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</head>
<body class="haendlerdetails">
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
					<div class="haendlerdetails_close"><span class="close_icon">x</span></div>
                </div>

</div>

</div>


<div class="container abstand_inhalt">

<section class="section" id="Autohaus_Anschrift">
	<div class="col-md-12 margin30">

	<header>
		<h1 class="anchor">
			<!-- <img class="item_icon" alt="" title="" src="<?php echo get_template_directory_uri(); ?>/images/Gruen_test.svg" /> -->
			<?php $image = get_field('acf_haendler_icon'); if( !empty($image) ): ?>
				<img class="item_icon"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>


			<!-- ABS Mainz GmbH &amp; Co KG, Mainz -->
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





    <div class="col-md-6">

							<div class="oneItem" data-name="<?php the_field('acf_haendler_name'); ?>" data-town="<?php the_field('acf_haendler_ort');?>">


								<section class="item_wrap">
	
									<article class="contacts">

										<div class="contact_info">
											<div class="contact_info_main">

											<!-- <img class="haendler_logo" alt="" title="" src="<?php echo get_template_directory_uri(); ?>/images/logo_autohaus_test.png" /> -->
											<?php $image = get_field('acf_haendler_logo'); if( !empty($image) ): ?>
												<img class="haendler_logo img-responsive"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
											<?php endif; ?>

												<!--<p>Rheinallee 195</p>
												<p>55120 Mainz</p>
												<p></p>
												<p>Telefon: 06131 962220</p>
												<p>E-Mail: <a href="mailto:verkauf@abs-mainz.com">verkauf@abs-mainz.com</a></p>
												<p><a href="http://www.abs-mainz.com" target="_blank">www.abs-mainz.com</a></p>-->
												<?php the_field('acf_haendler_anschrift'); ?>
											</div>
											<div class="times">
												<h6>Öffnungszeiten:</h6>
												<!--
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
												-->
												<?php the_field('acf_haendler_oeffnungszeiten'); ?>

											</div>
										</div>
									</article>
								</section>
							</div>


    </div>

	<div class="col-md-6">
		<div class="imgBox">
			<!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/skoda_001.jpg" alt="" title=""  /> -->
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/skoda_001.jpg" alt="" title=""  />

		</div>
	</div>

</section>



</div><!-- row -->
  

    <div class="container">
    <div class="col-md-6">


    	<section class="section" id="Autohaus_Allgemein">
		    <h2 class="anchor">Unser Autohaus:</h2><a href="#top" class="jump_to_top hidden-lg">to top</a>
		    <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>	-->
		    <p><?php the_field('acf_haendler_unser_autohaus'); ?></p>
		</section>
		
    	<section class="section" id="Autohaus_Leistungen">	
		    <h2 class="anchor">Unser Leistungen und Services:</h2><a href="#top" class="jump_to_top hidden-lg">to top</a>
		    <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>-->
			<p><?php the_field('acf_haendler_unsere_leistungen_und_services'); ?></p>

		</section>


		<div class="padding_null_lr">

		<div class="row haendler_leistung_details">

			<h3 class="green">Verkauf:</h3>

			<?php if( have_rows('acf_haendler_verkauf') ): ?>

				<?php while( have_rows('acf_haendler_verkauf') ): the_row(); 

					// vars
					$image = get_sub_field('acf_haendler_verkauf_item_icon');
					$content = get_sub_field('acf_haendler_verkauf_item_text');

					?>
					<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">

					<div class="thumbnail_div">
						<img class="haendler_leistung_icon img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
					</div>
					
					<div class="caption">
					    <p><?php echo $content; ?></p>
					</div><!-- caption -->
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

<!--
		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Neu&shy;wagen</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Gebraucht&shy;wagen</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Inzahlung&shy;nahme</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Finan&shy;zie&shy;rung</p>
	        </div>
		</div>
-->


		</div><!-- row haendler_leistung_details -->

	</div><!-- padding_null_lr  -->



	<div class="padding_null_lr">

	<div class="row haendler_leistung_details">

		<h3 class="green">Werkstatt:</h3>


			<?php if( have_rows('acf_haendler_werkstatt') ): ?>

			<?php while( have_rows('acf_haendler_werkstatt') ): the_row(); 

				// vars
				$image = get_sub_field('acf_haendler_werkstatt_item_icon');
				$content = get_sub_field('acf_haendler_werkstatt_item_text');

				?>
				<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">

				<div class="thumbnail_div">
					<img class="haendler_leistung_icon img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" />
				</div>
				
				<div class="caption">
				    <p><?php echo $content; ?></p>
				</div><!-- caption -->
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

<!-- 
		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Inspek&shy;tion</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>HU-Service</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Clever-Repair</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Saisonale Checks</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Räder&shy;wechsel Plus</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Glas&shy;reparatur</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Inspek&shy;tion</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>HU-Service</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Clever-Repair</p>
	        </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Saisonale Checks</p>
	        </div>
		</div>


		<div class="col-xs-6 col-sm-3 col-md-2 padding_null_l">
		     <div class="thumbnail_div">
				<img class="haendler_leistung_icon img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/haendlerdetail_verkauf_neuwagen.png" alt="" title="" />
			</div>
			<div class="caption">
	        	<p>Räder&shy;wechsel Plus</p>
	        </div>
		</div>
-->

		</div>

	</div><!-- col-6 -->

</div><!-- col-md-6 linke spalte -->





<div class="col-md-6">

    	<section class="section" id="Autohaus_Mitarbeiter">	

	    <h2 class="anchor" id="Mitarbeiter">Unsere Mitarbeiter:</h2><a href="#top" class="jump_to_top hidden-lg">to top</a>
		<div class="row">
			<div class="col-md-6 haendler_mitarbeiter">
			    <img class="img-responsive haendler_mitarbeiter_bild" src="<?php echo get_template_directory_uri(); ?>/images/rezepte_kokusmakronen.jpg" alt="" title="" />
			    <span class="haendler_mitarbeiter_name">Max Mustermann</span>
			    <span>Inhaber/Verkauf</span>
			    <span>Geschäftsführung</span>
			    <span class="haendler_mitarbeiter_telefon">Telefon: 0123456 7890 oder</span>
			    <span>Telefon: 012345 67890</span>
				<span class="haendler_mitarbeiter_email"><a href="mailto:#">E-Mail schreiben</a></span>
			</div><!-- haendler_mitarbeiter -->

			<div class="col-md-6 haendler_mitarbeiter">
			    <img class="img-responsive haendler_mitarbeiter_bild" src="<?php echo get_template_directory_uri(); ?>/images/rezepte_kokusmakronen.jpg" alt="" title="" />
			    <span class="haendler_mitarbeiter_name">Max Mustermann</span>
			    <span>Inhaber/Verkauf</span>
			    <span>Geschäftsführung</span>
			    <span class="haendler_mitarbeiter_telefon">Telefon: 0123456 7890 oder</span>
			    <span>Telefon: 012345 67890</span>
				<span class="haendler_mitarbeiter_email"><a href="mailto:#">E-Mail schreiben</a></span>
			</div><!-- haendler_mitarbeiter -->

		</div><!-- row -->

		<div class="row">
			<div class="col-md-6 haendler_mitarbeiter">
			    <img class="img-responsive haendler_mitarbeiter_bild" src="<?php echo get_template_directory_uri(); ?>/images/rezepte_kokusmakronen.jpg" alt="" title="" />
			    <span class="haendler_mitarbeiter_name">Max Mustermann</span>
			    <span>Inhaber/Verkauf</span>
			    <span>Geschäftsführung</span>
			    <span class="haendler_mitarbeiter_telefon">Telefon: 0123456 7890 oder</span>
			    <span>Telefon: 012345 67890</span>
				<span class="haendler_mitarbeiter_email"><a href="mailto:#">E-Mail schreiben</a></span>
			</div><!-- haendler_mitarbeiter -->

			<div class="col-md-6 haendler_mitarbeiter">
			    <img class="img-responsive haendler_mitarbeiter_bild" src="<?php echo get_template_directory_uri(); ?>/images/rezepte_kokusmakronen.jpg" alt="" title="" />
			    <span class="haendler_mitarbeiter_name">Max Mustermann</span>
			    <span>Inhaber/Verkauf</span>
			    <span>Geschäftsführung</span>
			    <span class="haendler_mitarbeiter_telefon">Telefon: 0123456 7890 oder</span>
			    <span>Telefon: 012345 67890</span>
				<span class="haendler_mitarbeiter_email"><a href="mailto:#">E-Mail schreiben</a></span>
			</div><!-- haendler_mitarbeiter -->

		</div><!-- row -->
	</section>
    </div><!-- col-6 -->


</div>

</div>
</div><!-- caontiner -->



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

<!--        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
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
$(".haendlerdetails_close" ).click(function() {
	alert("tbd close windows");
});
</script>

</body>
</html>