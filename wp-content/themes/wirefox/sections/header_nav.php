<header id="site-header" class="fullscreen-menu invert-header" data-menucolor="#0c0c0c">
	<div id="header-container">


		<!-- Logo -->
		<div id="logo" class="hide-ball">
			<a class="ajax-link" data-type="page-transition" href="index.html">
				<img class="black-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ClaPat Logo">
				<img class="white-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ClaPat Logo">
			</a>
		</div>
		<!--/Logo -->


		<!-- Navigation -->
		<nav>
			<div class="nav-height">
				<div class="outer">
					<div class="inner">
						<!-- <ul data-breakpoint="10025" class="flexnav">
							<li class="link menu-timeline"><a class="ajax-link active" data-type="page-transition" href="index.html">
									<div class="before-span"><span data-hover="Home">Home</span></div>
								</a></li>
							<li class="link menu-timeline"><a class="" href="index.html#">
									<div class="before-span"><span data-hover="Portfolio">Portfolio</span></div>
								</a>
								<ul>
									<li><a class="ajax-link" href="index-showcase-carousel.html" data-type="page-transition">Showcase Carousel</a></li>
									<li><a class="ajax-link" href="index-showcase-grid.html" data-type="page-transition">Portfolio Grid</a></li>
									<li><a class="ajax-link" href="index-showcase-slider.html" data-type="page-transition">Fullscreen Slider</a></li>
									<li><a class="ajax-link" href="index-showcase-list.html" data-type="page-transition">Infinity List</a></li>
									<li><a class="ajax-link" href="index-showcase-gallery.html" data-type="page-transition">Archive Gallery</a></li>
								</ul>
							</li>
							<li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="about.html">
									<div class="before-span"><span data-hover="About">About</span></div>
								</a></li>
							<li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="contact.html">
									<div class="before-span"><span data-hover="Contact">Contact</span>
									</div>
								</a></li>
							<li class="link menu-timeline"><a class="" href="index.html#">
									<div class="before-span"><span data-hover="More">More</span></div>
								</a>
								<ul>
									<li><a class="ajax-link" href="typography.html" data-type="page-transition">Typography</a></li>
									<li><a class="ajax-link" href="multimedia.html" data-type="page-transition">Multimedia</a></li>
									<li><a class="ajax-link" href="shortcodes.html" data-type="page-transition">Shortcodes</a></li>
								</ul>
							</li>
							<li class="link menu-timeline"><a class="buy-template" target="_blank" href="https://themeforest.net/item/manifesto-creative-portfolio-theme/48149521">
									<div class="before-span"><span data-hover="Buy Now">Buy Now</span>
									</div>
								</a></li>

						</ul> -->
						<!-- wp menu -->
						
						<ul data-breakpoint="10025" class="flexnav">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'container' => false,
								'items_wrap' => '%3$s', // Removes the <ul> container
								'walker' => new Custom_Bootstrap_Nav_Walker(),
							));
							?>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<!--/Navigation -->


		<!-- Menu Burger -->
		<div class="button-wrap right menu burger-lines">
			<div class="icon-wrap parallax-wrap">
				<div class="button-icon parallax-element">
					<div id="burger-wrapper">
						<div id="menu-burger">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="button-text sticky right"><span data-hover="Menu">Menu</span></div>
		</div>
		<!--/Menu Burger -->

	</div>
</header>