<?php
	include("includes/config.php");
	$actual_page = "about-us";
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
			
			<div id="page-header" class="parallax2" data-stellar-background-ratio="0.1" style="background-image:url(images/backgrounds/page-header-1.jpg);">
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
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/image-20.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-20.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Nuestra compañia</a></h6>
								
								<p>Proin aliquam orci sed fringilla suscipit. Integer accumsan sodales mi tempus consectetur. 
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">¿Por que preferirnos?</a></h6>
								
								<p>Proin aliquam orci sed fringilla suscipit. Integer accumsan sodales mi tempus consectetur. 
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
								
							</div><!-- portfolio-item-details -->
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/image-20.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-20.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/image-20.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-20.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Responsabilidad social</a></h6>
								
								<p>Proin aliquam orci sed fringilla suscipit. Integer accumsan sodales mi tempus consectetur. 
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Nuestras fincas</a></h6>
								
								<p>Proin aliquam orci sed fringilla suscipit. Integer accumsan sodales mi tempus consectetur. 
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
								
							</div><!-- portfolio-item-details -->
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/image-20.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-20.jpg">+</a>
									
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