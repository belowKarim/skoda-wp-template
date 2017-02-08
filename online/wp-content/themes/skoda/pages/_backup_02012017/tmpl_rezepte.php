<?php
/**
 * Template name: Rezepte
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

	<title>Rezepte - ŠKODA TEAM Rhein-Main</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link href="<?php echo get_template_directory_uri(); ?>/towns.css" type="text/css" rel="stylesheet">
<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">-->
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/media.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

</head>
<body class="guudies">
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
						<li><a href="/team-rhein-main/">TEAM Rhein-Main</a></li>
						<!-- <li><a href="/guudies/" class="active">Guudies</a></li> -->
						<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Guudies
						<span class="caret"></span>
						</a>
                        <ul class="dropdown-menu subnavigation">
							<li><a href="/ausflugtipps/">Ausflugtipps</a></li>
							<li><a href="/rezepte/" class="active">Rezepte</a></li>
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
                            <div class="imgBox" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/guudies_rezepte_bg.jpg')"></div>
                            <div class="mapMain">
                                <section class="mapHead">
                                    <div>
                                        <div>
                                            <h1>HHMMMM… <br />ECHT LEGGER!</h1>
                                        </div>
                                    </div>
                                </section>
                                
                        </div>
                    </div>
                </div>



<div class="container-fluid">
<section class="section">
    <div class="row">
    <div class="col-lg-12">
    <br /><br />

    <header>
    <h1>Die beste Weihnachtsplätzjer aus unserer Region.</h1>
    </header>
    
    <p>
    Für Naschkatze und Weihnachtsengelcher. Wir zeigen Ihnen hier, welche „Plätzjer“ uns am besten schmecken.<br /> Und wir verraten auch, wie man sie macht. <br />
    <br />
    Guuden Appetit wünscht<br />
    Ihr ŠKODA Team Rhein Main<br />
    <br />
    <strong>Zu den Rezepten:</strong>
    </p>
    <ul>
    <li><strong><a href="#WAFFELKEKSE">Waffelkekse</a></strong></li>
    <li><strong><a href="#HUSARENKRAPFEN">Husarenkrapfen</a></strong></li>
    <li><strong><a href="#BETHMAENNCHEN">Bethmännchen</a></strong></li>
    <li><strong><a href="#KOKOSMAKRONEN">Kokosmakronen</a></strong></li>
    </ul>

    </div>
    </div>
</section>



<section id="WAFFELKEKSE" class="section">
<div class="row untenausrichten">
    
    <div class="col-lg-6">
    <h2>Waffelkekse</h2>
<!--
    <ul>Zutaten:
    <li>200 g Butter</li>
    <li>150 g Zucker</li>
    <li>425 g Mehl</li>
    <li>2 Eier</li>
    <li>1 Päckchen Backaroma Orange oder 1 Fläschchen Orangenaroma</li>
    <li>1 Päckchen Backpulver</li>
    <li>1 Päckchen Vanillezucker</li>
    <li>Etwas Öl für das Waffeleisen</li>
    </ul>
-->


   <div class="tipp_box_rezepte">
        <h3>Zutaten:</h3>
        <dl>
            <dt>></dt>
            <dd>200 g Butter</dd>
            <dt>></dt>
            <dd>150 g Zucker</dd>
            <dt>></dt>
            <dd>425 g Mehl</dd>
            <dt>></dt>
            <dd>2 Eier</dd>
            <dt>></dt>
            <dd>1 Päckchen Backaroma Orange oder 1 Fläschchen Orangenaroma</dd>                                     
            <dt>></dt>
            <dd>1 Päckchen Backpulver</dd>
            <dt>></dt>
            <dd>1 Päckchen Vanillezucker</dd>                            
            <dt>></dt>
            <dd>Etwas Öl für das Waffel&shy;eisen</dd>           
        </dl>
    </div><!-- tipp-box -->
      
    <p><strong>Butter</strong> (am besten mit Zimmertemperatur) und <strong>Zucker</strong> verrühren. Die <strong>Eier</strong> je eine halbe Minute unterrühren. <strong>Restliche Zutaten</strong> zugeben und Teig etwa 3–4&nbsp;Minuten kneten. Aus dem Teig kleine <strong>Kugeln formen</strong>. Waffel&shy;eisen aufheizen und mit <strong>etwas Öl</strong> besprühen/bepinseln. Kugeln (circa fünf pro Vorgang) in das Waffel&shy;eisen setzen und <strong>goldbraun backen.</strong>
    </p>

    </div><!-- col -->
    <div class="col-lg-6 rechts">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rezepte_waffelkekse.jpg" alt="Guudies, Rezepte: Waffelkekse" title="Guudies, Rezepte: Waffelkekse" class="img-responsive" /> 
    </div>

</div><!-- row -->

</section><!--  -->



<section id="HUSARENKRAPFEN" class="section">
<div class="row untenausrichten">
    
   <div class="col-lg-6 col-lg-push-6">

   <h2>Husarenkrapfen</h2>

   <div class="tipp_box_rezepte">
       <h3>Zutaten:</h3>
        <dl>
            <dt>></dt>
            <dd>300 g Mehl</dd>
            <dt>></dt>
            <dd>80 g Haselnüsse, gemahlen</dd>
            <dt>></dt>
            <dd>100 g Zucker</dd>
            <dt>></dt>
            <dd>200 g kalte Butter</dd>
            <dt>></dt>
            <dd>100 g Johannisbeergelee</dd>                                     
            <dt>></dt>
            <dd>2 Eigelb</dd>
            <dt>></dt>
            <dd>1 Päckchen Vanillezucker</dd>                            
            <dt>></dt>
            <dd>Puderzucker zum Bestäuben</dd>           
        </dl>
    </div><!-- tipp_box -->  
   
    <p><strong>Mehl, gemahlene Haselnüsse, Zucker</strong> und <strong>Vanille&shy;zucker</strong> mischen. Die <strong>kalte Butter</strong> und die beiden <strong>Eigelb</strong> dazugeben. Alles rasch zu einem <strong>glatten Teig kneten.</strong> Den Teig mindestens eine Stunde in den <strong>Kühl&shy;schrank</strong> stellen und <strong>ruhen lassen.</strong> Anschließend circa <strong>2&nbsp;Zentimeter große Kugeln formen</strong> und auf ein mit <strong>Back&shy;papier belegtes Blech</strong> setzen. Mit dem Stiel eines Kochlöffels in jede Kugel mittig eine <strong>Mulde</strong> drücken. Das <strong>Johannis&shy;beer&shy;gelee in die Vertiefung füllen.</strong> Die Plätzchen bei 180&nbsp;°C etwa 15&nbsp;Minuten backen. Nach dem Erkalten <strong>Puderzucker</strong> über die Husaren&shy;krapfen sieben.
    </p>
    
    </div><!-- col -->

    <div class="col-lg-6 col-lg-pull-6 links">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rezepte_husarenkrapfen.jpg" title="Guudies, Rezepte: Husarenkrapfen" alt="Guudies, Rezepte: Husarenkrapfen" class="img-responsive" />
    </div>


</div><!-- row -->

</section><!--  -->



<section id="BETHMAENNCHEN" class="section">
<div class="row untenausrichten">
    
    <div class="col-lg-6">
    <h2>Frankfurter Bethmännchen</h2>

   <div class="tipp_box_rezepte">
        <h3>Zutaten:</h3>
        <dl>
            <dt>></dt>
            <dd>200 g Marzipan zum Backen</dd>
            <dt>></dt>
            <dd>80 g Puderzucker</dd>
            <dt>></dt>
            <dd>80 g Mandeln, gemahlen</dd>
            <dt>></dt>
            <dd>2 EL Mehl</dd>
            <dt>></dt>
            <dd>1 EL Orangenlikör oder Amaretto</dd>                                     
            <dt>></dt>
            <dd>40 Mandeln, halbiert ohne Schale</dd>
            <dt>></dt>
            <dd>4 EL Milch</dd>                            
            <dt>></dt>
            <dd>1 Ei</dd>           
        </dl>
    </div><!-- tipp-box -->
      
    <p><strong>Marzipan</strong> grob hacken. <strong>Puderzucker</strong> sieben. <strong>Gemahlene Mandeln, Mehl, Eiweiß</strong> und <strong>Orangen&shy;likör/Amaretto</strong> dazugeben und verkneten. Aus dem Teig <strong>kleine Kugeln formen</strong> und auf ein mit Backpapier ausgelegtes Blech legen. Je <strong>3&nbsp;Mandelhälften</strong> an ein Bethmännchen drücken. <strong>Eigelb</strong> mit <strong>Milch</strong> verquirlen und die Bethmännchen damit bestreichen. Im Backofen (E-Herd: 175&nbsp;°C, Gasherd: Stufe&nbsp;2) etwa 15&nbsp;Minuten backen.
    </p>

    </div><!-- col -->
    <div class="col-lg-6 rechts">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rezepte_frankfurter_bethmaennchen.jpg" alt="Guudies, Rezepte: Frankfurter Bethmännchen" title="Guudies, Rezepte: Frankfurter Bethmännchen" class="img-responsive" /> 
    </div>

</div><!-- row -->

</section><!--  -->



<section id="KOKOSMAKRONEN" class="section">
<div class="row untenausrichten">
    
    <div class="col-lg-6 col-lg-push-6">
    <h2>Kokosmakronen</h2>

    <div class="tipp_box_rezepte">
        <h3>Zutaten:</h3>
        <dl>
            <dt>></dt>
            <dd>4 Eiweiß</dd>
            <dt>></dt>
            <dd>65 g Quark</dd>
            <dt>></dt>
            <dd>200 g Puderzucker</dd>
            <dt>></dt>
            <dd>200 g Kokosflocken</dd>
            <dt>></dt>
            <dd>1 Päckchen Vanillezucker</dd>                                     
            <dt>></dt>
            <dd>Oblaten und Kuvertüre nach Geschmack</dd>         
        </dl>
    </div>
        
    <p>Das <strong>Eiweiß</strong> steif schlagen und den <strong>Vanillezucker</strong> und das <strong>Bitter&shy;mandelöl</strong> hinzugeben. <strong>Puderzucker</strong> in das geschlagene Eiweiß sieben und unter&shy;rühren. Den <strong>Quark</strong> glatt rühren und mit der Eiweiß&shy;masse vermengen. Zuletzt die <strong>Kokosflocken</strong> hinzugeben und vorsichtig unterheben. Mit 2&nbsp;Teelöffeln <strong>kleine Häufchen</strong> formen und je nach Geschmack entweder auf Oblaten setzen oder direkt auf ein mit Back&shy;papier belegtes Blech geben. Im Backofen bei 130&nbsp;°C (Umluft) auf mittlerer Schiene etwa 20&nbsp;Minuten backen. Nach Belieben können die fertigen Makronen nach dem Abkühlen noch zur Hälfte in Kuvertüre getunkt werden.</p>
    
    </div><!-- col -->

    <div class="col-lg-6 col-lg-pull-6 links">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rezepte_kokusmakronen.jpg" alt="Guudies, Rezepte: Kokusmakronen" title="Guudies, Rezepte: Kokusmakronen" class="img-responsive" />
    </div>


</div><!-- row -->

</section><!--  -->


</div>


</div>


</div><!-- caontiner -->


     </div>
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
</body>
</html>