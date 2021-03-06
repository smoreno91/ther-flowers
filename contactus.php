<?php
	include("includes/config.php");
	$actual_page = "contact";
	$title = _L("LANG_CONTACT_US") . " - " . _L("SITE_NAME");
	$meta_keywords = "Hydrangea, Hortensia, Flores, Flowers, Flor, Antioquia,  Colombia, Cultivo, Crop, Plantation, Fresh, Naturaleza, Nature, Campo, Finca, Farm, Tallo, Copa, Ramiflores, Quality, Mini Green, Select, Extra, Jumbo, White, Blue, Premium";
	$meta_description = "Contact us now! Phone: (+57)3004208483 – Email: ramifloreslaceja@hotmail.com -  Km 1 Vía La Ceja-El Retiro, Vereda La Milagrosa, La Ceja-Antioquia. Colombia.";
	
	include('includes/head.php')
?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.1" style="background-image:url(images/contactus/banner-contactus.png);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1><?php echo _L("LANG_CONTACT_US") ?></h1>
							
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
						
						<h4><small><?php echo _L("CONTACT_GET_IN_TOUCH") ?></small></h4>
						
						<br>
						
						<div class="widget widget-contact">
							
							<ul>
								<li>    
									<span><?php echo _L("CONTACT_PHONE") ?>: </span>
									<?php echo _S("CONTACT_PHONE") ?>
								</li>
								<li>
									<span><?php echo _L("CONTACT_EMAIL") ?>: </span>
									<a href="mailto:<?php echo _S("CONTACT_EMAIL") ?>"><?php echo _S("CONTACT_EMAIL") ?></a>
								</li>
								<li>
									<span><?php echo _L("CONTACT_ADDRESS") ?>: </span>
									Km 1 Vía La Ceja-El Retiro<br>Vereda La Milagrosa<br>La Ceja, Antioquia.<br>Colombia.
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
	
	<!-- PARALLAX -->
	<script src="assets/plugins/parallax/jquery.stellar.min.js"></script>
	
	<!-- PLACEHOLDER -->
	<script src="assets/plugins/placeholders/jquery.placeholder.min.js"></script>
	
	<!-- CONTACT FORM VALIDATE & SUBMIT -->
	<script src="assets/plugins/validate/jquery.validate.min.js"></script>
	<script src="assets/plugins/submit/jquery.form.min.js"></script>
	
	<!-- ANIMATIONS -->
	<script src="assets/plugins/animations/wow.min.js"></script>
	
	<!-- CUSTOM JS -->
	<script src="assets/js/custom.js"></script>
	
</body>

</html>