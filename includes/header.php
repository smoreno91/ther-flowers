<div id="header">
			
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				
				<!-- LOGO -->
				<div id="logo">
					<a href="/">
						<img src="assets/images/logo.png" alt="">
					</a>
				</div>
				
			</div>
			
			<div class="col-sm-9">
				
				<!-- MENU --> 
				<nav>
				
					<a id="mobile-menu-button" href="#"><i class="bronx-icon-lines"></i></a> 
					
					<ul class="menu clearfix" id="menu">
						<li class="<?php echo $actual_page == 'home' ? 'active' : ''?>"><a href="/">Home</a></li>
						<li class="<?php echo $actual_page == 'portfolio' ? 'active' : ''?>"><a href="portfolio.php">Portafolio</a></li>
						<li class="<?php echo $actual_page == 'about-us' ? 'active' : ''?> dropdown">
							<a href="#">Nosotros</a>
							<ul>
								<li><a href="about-us.php">Nuestra compañia</a></li>
								<li><a href="about-us.php">Por que preferirnos</a></li>
								<li><a href="about-us.php">Responsabilidad social</a></li>
								<li><a href="about-us.php">Nuestras fincas</a></li>
							</ul>
						</li>
						<li class="<?php echo $actual_page == 'gallery' ? 'active' : ''?>"><a href="gallery.php">Galería</a></li>
						<li class="special-active"><a href="contact.php">Contáctenos</a></li>
						
						<li class="flags">
							<a class="spanish" href="?lang=es"><img src="images/flags/spanish.png"></img></a>
							<a class="english" href="?lang=en"><img src="images/flags/english.png"></a>
						</li>
						<li class="social">
							<div class="social-media">
								<a class="facebook" href="<?php echo _S('LINK_FACEBOOK'); ?>"><i class="fa fa-facebook"></i></a>
								<a class="instagram" href="<?php echo _S('LINK_INSTAGRAM'); ?>"><i class="fa fa-instagram"></i></a>
								<a class="skype" href="<?php echo _S('LINK_SKYPE'); ?>"><i class="fa fa-skype"></i></a>
							</div>
						</li>
					</ul>
				
				</nav>
			
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container-fluid -->
</div><!-- header -->