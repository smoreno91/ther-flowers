<?php
	include("includes/config.php");
	$actual_page = "aboutus";
	$title = _L("LANG_US") . " - The R Flowers";
	$meta_keywords = "";
	$meta_description = "";

	include('includes/head.php')
?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.1" style="background-image:url(images/aboutus/banner-aboutus.png);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1><?php echo _L("LANG_US") ?></h1>
							
							<ol class="breadcrumb">
								<li><a href="#"><?php echo _L("LANG_HOME") ?></a></li>
								<li class="active"><?php echo _L("LANG_US") ?></li>
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
							
							<h4><?php echo _L("LANG_US") ?></h4>
							
						</div><!-- headline -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container" id="our-company">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/aboutus/our-company.png" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/aboutus/our-company.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><?php echo _L("LANG_OUR_COMPANY") ?></h6>
								
								<p><?php echo _L("US_OURCOMPANY_CONTENT") ?></p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container" id="why-buy-from-us">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-details">
								
								<h6><?php echo _L("LANG_WHY_BUY_FROM_US") ?></h6>
								
								<p><?php echo _L("US_BUYFROMUS_CONTENT") ?></p>
								
							</div><!-- portfolio-item-details -->
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/aboutus/why-buy-from-us.png" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/aboutus/why-buy-from-us.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container" id="social-responsability">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/aboutus/social-responsability.png" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/aboutus/social-responsability.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><?php echo _L("LANG_SOCIAL_RESP") ?></h6>
								
								<p><?php echo _L("US_SOCIALRES_CONTENT") ?></p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container" id="our-farms">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-details">
								
								<h6><?php echo _L("LANG_OUR_FARMS") ?></h6>
								
								<p><?php echo _L("US_OURFARMS_CONTENT") ?></p>
								
							</div><!-- portfolio-item-details -->
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/aboutus/our-farms.png" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/aboutus/our-farms.png">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
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