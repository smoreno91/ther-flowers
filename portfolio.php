<?php
	include("includes/config.php");
	$actual_page = "portfolio";
	$title = _L("LANG_PORTFOLIO") . " - " . _L("SITE_NAME");
	$meta_keywords = "Hydrangea, Hortensia, Flores, Flowers, Flor, Antioquia,  Colombia, Cultivo, Crop, Plantation, Fresh, Naturaleza, Nature, Campo, Finca, Farm, Tallo, Copa, Ramiflores, Quality, Mini Green, Select, Extra, Jumbo, White, Blue, Premium";
	$meta_description = "High quality Hydrangeas. Mini Green- Hydrangea Select- Hydrangea Extra- Hydrangea Jumbo. Contact us now! ";
	
	include('includes/head.php')
?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.1" style="background-image:url(images/portfolio/banner-portfolio.png);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1><?php echo _L("LANG_PORTFOLIO"); ?></h1>
							
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
							
							<h4><?php echo _L("LANG_PORTFOLIO"); ?></h4>
							
						</div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
            
            <div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/mini-green.png" alt="Mini Green">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/mini-green.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6>Mini Green</h6>
								
								<p>Head Size: 9-12 cm<br>Packing: QB x 40st</p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/white.png" alt="White">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/white.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6>White</h6>
								
								<p>-Select:<br>Head Size: 16-19 cms<br>Packing: QB x 40 st</p>
								<p>-Extra:<br>Head Size: 20-22 cms<br>Packing: QB x 30 st</p>
								<p>-Jumbo:<br>Head Size: 23 cms +</p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/blue.png" alt="Blue">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/blue.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6>Blue</h6>
								
								<p>-Select:<br>Head Size: 16-19 cms<br>Packing: QB x 40 st</p>
								<p>-Extra:<br>Head Size: 20-22 cms<br>Packing: QB x 30 st</p>
								<p>-Jumbo:<br>Head Size: 23 cms +<br>Packing: QB x 20 st</p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
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
	
	<!-- PARALLAX -->
	<script src="assets/plugins/parallax/jquery.stellar.min.js"></script>
	
	<!-- ISOTOPE -->
	<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
	
	<!-- ANIMATIONS -->
	<script src="assets/plugins/animations/wow.min.js"></script>
	
	<!-- CUSTOM JS -->
	<script src="assets/js/custom.js"></script>
	
</body>

</html>