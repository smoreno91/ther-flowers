<?php
	include("includes/config.php");
	$actual_page = "home";
	$title = _L("LANG_HOME") . " - " . _L("SITE_NAME");
	$meta_keywords = "Hydrangea, Hortensia, Flores, Flowers, Flor, Antioquia,  Colombia, Cultivo, Crop, Plantation, Fresh, Naturaleza, Nature, Campo, Finca, Farm, Tallo, Copa, Ramiflores, Quality, Mini Green, Select, Extra, Jumbo, White, Blue, Premium";
	$meta_description = "We are a local farm situated in La Ceja-Antioquia. We specialize in produce high quality Hydrangeas in order to satisfy our clients needs. What make us different from the others is the fact that we really love what we do. Contact us now! ";

 	include('includes/head.php')
?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>
						<li data-transition="fade">
						
							<img src="images/home/revolution-slider/bg-slide-1.jpg" alt="">
							
							<div class="tp-caption big-title text-center"
                                data-x="center"
                                data-y="300"
                                data-speed="700"
                                data-start="1800"
                                data-transform_in="o:0;y:-100;s:700;"
                                data-transform_out="o:0;y:-100;s:700;">
								<?php echo _L("HOME_SLIDER_1"); ?>
                            </div>
							
						</li>
						<li data-transition="fade">
						
							<img src="images/home/revolution-slider/bg-slide-2.png" alt="">

                            <div class="tp-caption big-title"
                                data-x="20"
                                data-y="center"
								data-voffset="-25"
                                data-speed="700"
                                data-start="2100"
                                data-transform_in="x:-50;s:700;"
                                data-transform_out="x:-50;s:700;">
                            	<?php echo _L("HOME_SLIDER_2"); ?>
                            </div> 
							
						</li>
						<li data-transition="fade">

                            <img src="images/home/revolution-slider/bg-slide-3.jpg" alt="">

							<div class="tp-caption big-title"
                                data-x="20"
                                data-y="center"
                                data-speed="700"
                                data-start="1400"
                                data-transform_in="x:-100;s:700;"
                                data-transform_out="x:-100;s:700;">
								<?php echo _L("HOME_SLIDER_3"); ?>
                            </div>
							
						</li>
					</ul>
				</div><!-- rev_slider -->
			</div><!-- rev_slider_wrapper -->
			
		</header><!-- HEADER CONTAINER -->
		
		
		<!-- PAGE CONTENT -->
		<div id="page-content">
			
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="headline text-center">
							
							<h4><?php echo _L("LANG_PORTFOLIO"); ?></h4>
							
						</div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="owl-carousel services-slider">
							
							<div class="item">
								
								<div class="row">
									<div class="col-sm-4">
										
										<div class="service-box style-1">
							
											<a href="portfolio.php"><img src="images/home/mini-green.png" alt="Mini Green"></a>
											
											<div class="service-box-content">
												
												<h6><a href="portfolio.php">Mini Green</a></h6>
												
											</div><!-- service-box-content -->
											
										</div><!-- service-box -->
										
									</div><!-- col -->
									<div class="col-sm-4">
										
										<div class="service-box style-1">
							
											<a href="portfolio.php"><img src="images/home/white.png" alt="White"></a>
											
											<div class="service-box-content">
												
												<h6><a href="portfolio.php">White</a></h6>
												
											</div><!-- service-box-content -->
											
										</div><!-- service-box -->
										
									</div><!-- col -->
									<div class="col-sm-4">
										
										<div class="service-box style-1">
							
											<a href="portfolio.php"><img src="images/home/blue.png" alt="Blue"></a>
											
											<div class="service-box-content">
												
												<h6><a href="portfolio.php">Blue</a></h6>
												
											</div><!-- service-box-content -->
											
										</div><!-- service-box -->
										
									</div><!-- col -->
									
								</div><!-- row -->
								
							</div><!-- item -->
							
						</div><!-- services-slider -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<section class="full-section parallax" id="section-1" data-stellar-background-ratio="0.1">
				<div class="full-section-container">
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								
								<h1><?php echo _L("HOME_SECTION_DOWN") ?></h1>
								
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
					<br>
					
					<div class="container">
						<div class="row">
							<div class="col-sm-7">
								
								<!--<p>Nulla non maximus neque. Duis ut orci sit amet ex iaculis euismod rutrum sit amet 
								purus. Maecenas a leo id nisl porta dictum semper vel elit. Etiam feugiat diam congue 
								ornare scelerisque. Nunc nec lacus nibh. Cras ligula leo, condimen tum at sapien ut, 
								vehicula elementum felis. Suspendisse volutpat arcu ut quam mollis efficitur. Phasellus 
								condimentum eros lectus.</p>-->
								

							</div><!-- col -->

						</div><!-- row -->
					</div><!-- container -->
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								
								<a class="btn btn-default" href="aboutus.php"><?php echo _L("HOME_SECTION_DOWN_LINK") ?> <i class="bronx-icon-arrow-right"></i></a>
								
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
				</div><!-- full-section-container -->
			</section><!-- full-section -->
			
			<section class="full-section dark-section parallax" id="section-2" data-stellar-background-ratio="0.1">
			
				<div class="full-section-overlay-color"></div>
				
				<div class="full-section-container">
				
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
								
								<h3 class="last"><?php echo _L("HOME_DO_YOU_LIKE") ?> <?php echo _L("SITE_NAME") ?>?</h3>
								
							</div><!-- col -->
							<div class="col-sm-3 text-right">
								
								<a class="btn btn-default" href="/contactus.php"><?php echo _L("LANG_CONTACT_US") ?> <i class="bronx-icon-arrow-right"></i></a>
								
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
					
				</div><!-- full-section-container -->
			</section><!-- full-section -->

			
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
	
	<!-- ANIMATIONS -->
	<script src="assets/plugins/animations/wow.min.js"></script>
	
	<!-- CUSTOM JS -->
	<script src="assets/js/custom.js"></script>
	
</body>

</html>