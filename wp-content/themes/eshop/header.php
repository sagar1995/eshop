<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title>ESHOP</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body class="animsition">
		<!-- Header -->
		<header class="header1">
			<!-- Header desktop -->
			<div class="container-menu-header">
				<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over Rs. 10000
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						youremail@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>NPR</option>
							<option>USD</option>
						</select>
					</div>
				</div>
			</div>
				<div class="wrap_header">
					<!-- Logo -->
					<a href="index.php" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icons/logo.png" alt="IMG-LOGO">
					</a>
					<!-- Menu -->
					<div class="wrap_menu">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="<?php echo get_site_url(); ?>">Home</a>
								</li>
								<li>
									<a href="<?php echo get_site_url(); ?>/shop">Shop</a>
								</li>
								
								<li>
									<a href="<?php echo get_site_url(); ?>/blog">Blog</a>
								</li>
								<li>
									<a href="<?php echo get_site_url(); ?>/contact">Contact</a>
								</li>
								<li>
									<a href="<?php echo get_site_url(); ?>/about-us">About Us</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- Header Icon -->
					<div class="header-icons">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
						<span class="linedivide1"></span>
						<div class="header-wrapicon2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti" id="cart-count"><?php
        						$cart_count = WC()->cart->get_cart_contents_count();
						        echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
						        ?></span>	
							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo get_site_url(); ?>/cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo get_site_url(); ?>/checkout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Mobile -->
			<div class="wrap_header_mobile">
				<!-- Logo moblie -->
				<a href="home.php" class="logo-mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icons/logo.png" alt="IMG-LOGO">
				</a>
				<!-- Button show menu -->
				<div class="btn-show-menu">
					<!-- Header Icon mobile -->
					<div class="header-icons-mobile">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
						<span class="linedivide2"></span>
						<div class="header-wrapicon2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti">0</span>
							<!-- Header cart noti -->
							<div class="header-cart header-dropdown">
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo get_site_url(); ?>/cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											View Cart
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo get_site_url(); ?>/checkout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Check Out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</div>
				</div>
			</div>
			<!-- Menu Mobile -->
			<div class="wrap-side-menu" >
				<nav class="side-menu">
					<ul class="main-menu">
						<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
							<span class="topbar-child1">
								Free shipping for standard order over Rs. 10000
							</span>
						</li>
						<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
							<div class="topbar-child2-mobile">
								<span class="topbar-email">
									youremail@example.com
								</span>
								<div class="topbar-language rs1-select2">
									<select class="selection-1" name="time">
										<option>USD</option>
										<option>NPR</option>
									</select>
								</div>
							</div>
						</li>
						<li class="item-topbar-mobile p-l-10">
							<div class="topbar-social-mobile">
								<a href="#" class="topbar-social-item fa fa-facebook"></a>
								<a href="#" class="topbar-social-item fa fa-instagram"></a>
								<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
								<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
								<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
							</div>
						</li>
						<li class="item-menu-mobile">
							<a href="<?php echo get_site_url(); ?>">Home</a>
						</li>
						<li class="item-menu-mobile">
							<a href="<?php echo get_site_url(); ?>">Shop</a>
						</li>
						<li class="item-menu-mobile">
							<a href="<?php echo get_site_url(); ?>">Blog</a>
						</li>
						<li class="item-menu-mobile">
							<a href="<?php echo get_site_url(); ?>">About</a>
						</li>
						<li class="item-menu-mobile">
							<a href="<?php echo get_site_url(); ?>">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>