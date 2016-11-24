<?php
	include("includes/config.php");
	$actual_page = "contact";
	$title = _L("LANG_CONTACT_US") . " - The R Flowers";
	$meta_keywords = "";
	$meta_description = "";
?>
<!DOCTYPE html>
<html lang="<?php echo getLanguage() ?>">
	
<?php include('includes/head.php') ?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div id="page-header" class="parallax2" data-stellar-background-ratio="0.1" style="background-image:url(images/backgrounds/page-header-9.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1><?php echo _L("LANG_CONTACT_US") ?></h1>
							
							<ol class="breadcrumb">
								<li><a href="#"><?php echo _L("LANG_HOME") ?></a></li>
								<li class="active"><?php echo _L("LANG_CONTACT_US") ?></li>
							</ol>
							
							<a class="go-to-section" href="#page-content"><i class="bronx-icon-mouse"></i></a>
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->    
			</div><!-- page-header -->
			
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="headline text-center">
							
							<h4><?php echo _L("LANG_CONTACT_US") ?></h4>
							
						</div><!-- headline -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						
						<h4><small><?php echo _L("CONTACT_TITLE") ?></small></h4>
						
						<form id="contact-form" name="contact-form" method="post" action="assets/php/send.php">
                            <fieldset>

                                <div id="alert-area"></div>

                                <input class="col-xs-12" id="name" type="text" name="name" placeholder="<?php echo _L("CONTACT_NAME") ?>">

                                <input class="col-xs-12" id="email" type="email" name="email" placeholder="<?php echo _L("CONTACT_EMAIL") ?>">

                                <input class="col-xs-12" id="subject" type="text" name="subject" placeholder="<?php echo _L("CONTACT_SUBJECT") ?>">

                                <textarea class="col-xs-12" id="message" name="message" rows="9" cols="25" placeholder="<?php echo _L("CONTACT_MESSAGE") ?>"></textarea>

                                <button class="btn btn-default" id="submit" type="submit" name="submit" value=""><?php echo _L("CONTACT_SUBMIT") ?> <i class="bronx-icon-arrow-right"></i></button>

                            </fieldset>
                        </form>
						
					</div><!-- col -->
					<div class="col-sm-5">
						
						<h4><small>Bronx</small></h4>
						
						<br>
						
						<p>Bronx is a multiuse theme with a unique layout, strong colores and a design created with 
						passion. Following the trends, Bronx combines modern design with a classic touch. It's eclectic 
						shapes will make you love it!</p>
						
						<br>
						
						<h4><small>Get in touch</small></h4>
						
						<br>
						
						<div class="widget widget-contact">
							
							<ul>
								<li>    
									<span>Phone: </span>
									443-748-7769
								</li>
								<li>
									<span>E-mail: </span>
									<a href="mailto:bronx@vertiqalteam.com">bronx@vertiqalteam.com</a>
								</li>
								<li>
									<span>Address: </span>
									2801 Green Gate Lane <br> Baltimore, MD 21201
								</li>
							</ul>
							
						</div><!-- widget-contact -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
		</div><!-- PAGE CONTENT -->
		
		<?php include('includes/footer.php') ?>
		
	</div><!-- MAIN CONTAINER -->
	
	
	<!-- SCROLL UP -->
	<a id="scroll-up"><i class="fa fa-angle-up"></i></a>
	
	
	<!-- jQUERY -->
	<script src="assets/plugins/jquery/jquery-2.2.2.min.js"></script>
	
	<!-- BOOTSTRAP JS -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- VIEWPORT -->
	<script src="assets/plugins/viewport/jquery.viewport.js"></script>
	
	<!-- MENU -->
	<script src="assets/plugins/menu/hoverIntent.js"></script>
	<script src="assets/plugins/menu/superfish.js"></script>
	
	<!-- FANCYBOX -->
	<script src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
	
	<!-- REVOLUTION SLIDER  -->
	<script src="assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js"></script>
	
	<!-- OWL Carousel -->
	<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	
	<!-- PARALLAX -->
	<script src="assets/plugins/parallax/jquery.stellar.min.js"></script>
	
	<!-- ISOTOPE -->
	<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
	
	<!-- PLACEHOLDER -->
	<script src="assets/plugins/placeholders/jquery.placeholder.min.js"></script>
	
	<!-- CONTACT FORM VALIDATE & SUBMIT -->
	<script src="assets/plugins/validate/jquery.validate.min.js"></script>
	<script src="assets/plugins/submit/jquery.form.min.js"></script>
	
	<!-- GOOGLE MAPS -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="assets/plugins/googlemaps/gmap3.min.js"></script>
	
	<!-- CHARTS -->
	<script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>
	
	<!-- COUNTER -->
	<script src="assets/plugins/counter/jquerysimplecounter.js"></script>
	
	<!-- STATISTICS -->
	<script src="assets/plugins/statistics/chart.min.js"></script>
	
	<!-- INSTAFEED -->
	<script src="assets/plugins/instafeed/instafeed.min.js"></script>
	
	<!-- COUNTDOWN -->
	<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
	
	<!-- ANIMATIONS -->
	<script src="assets/plugins/animations/wow.min.js"></script>
	
	<!-- CUSTOM JS -->
	<script src="assets/js/custom.js"></script>
	
</body>

</html>