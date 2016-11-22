<?php
	include("includes/config.php");
	$actual_page = "portfolio";
	$title = "Portfolio - The R Flowers";
	$meta_keywords = "";
	$meta_description = "";
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php') ?>

<body class="">

	<div id="main-container">
		
		<!-- HEADER -->
		<header id="header-container">
			
			<?php include("includes/header.php"); ?>
			
			<div id="page-header" class="parallax" data-stellar-background-ratio="0.1" style="background-image:url(images/backgrounds/page-header-5.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<h1>Portfolio</h1>
							
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Portfolio classic</li>
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
							
							<p>We present</p>
							<h4>Our Projects</h4>
							
						</div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="portfolio-item portfolio-classic">
							
							<div class="portfolio-item-thumbnail">
								
								<img src="images/portfolio/image-26.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-26.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Statement Piece</a></h6>
								<p>Media</p>
								
								<p>Proin aliquam orci sed fringilla suscipit. Integer accumsan sodales mi tempus consectetur. 
								Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
								
								<a href="portfolio-single.html">Read more <i class="bronx-icon-arrow-right"></i></a>
								
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
								
								<img src="images/portfolio/image-27.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-27.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Statement Piece</a></h6>
								<p>Media</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut lacus rutrum, iaculis dolor 
								et, iaculis sapien. Morbi orci tortor, tincidunt non aliquet eu, scelerisque eget justo...</p>
								
								<a href="portfolio-single.html">Read more <i class="bronx-icon-arrow-right"></i></a>
								
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
								
								<img src="images/portfolio/image-28.jpg" alt="">
								
								<div class="portfolio-item-hover">
									
									<a class="fancybox zoom-action" data-fancybox-group="portfolio" href="images/portfolio/image-28.jpg">+</a>
									
								</div><!-- portfolio-item-hover -->
								
							</div><!-- portfolio-item-thumbnail -->
							
							<div class="portfolio-item-details">
								
								<h6><a href="portfolio-single.html">Statement Piece</a></h6>
								<p>Media</p>
								
								<p>Vivamus pretium massa in libero consectetur, nec convallis mauris porta. Morbi lacinia tellus arcu, 
								vitae ultricies nunc varius quis. Integer volutpat blandit ligula. Nullam eu dolor porttitor...</p>
								
								<a href="portfolio-single.html">Read more <i class="bronx-icon-arrow-right"></i></a>
								
							</div><!-- portfolio-item-details -->
							
						</div><!-- portfolio-item -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	
                        <ul class="pagination">
							<li class="prev"><a href="#">01</a></li>
							<li class="next"><a href="#">04</a></li>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                            <li><a href="#">04.</a></li>
                        </ul>
                        
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