<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">

<!-- 
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->


	<!-- Scroll Magic - jQuery plugin -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>

	<?php wp_head(); ?>
</head>
<header class="madeonline-header">

	<!-- Mobile menu sidebar -->
	<div class="main-menu-sidebar">
		<div class="container">
			<div class="row">
				<div class="sidebar-menu-wrap">
					<div class="logo">
						<a href="<?php home_url(); ?>">
							<img src="/wp-content/uploads/2022/07/cropped-Made-Online-Main-Logo-1.webp" alt="">
						</a>
					</div>
					<nav id="sidebar-menu-wrapper">
						<div id="menu">    
							<ul class="nav-links">
								<?php
								wp_nav_menu( array(
									'menu'              => 'Menu-mobile',
									'theme_location'    => 'Top menu',
									'depth'             => 2,
									'container'         => false,
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => false,
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'items_wrap' => '%3$s',
									'walker'            => new wp_bootstrap_navwalkermobile())
								);
								?>  
							</ul>
						</div>
					</nav>
					<div class="burger-menu">
						<!-- <button class="burger"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
						<button class="x"><i class="fa fa-times fa-3x" aria-hidden="true"></i></button> -->
						<div class="bar">
							<span class="bar-1"> </span>
							<span class="bar-2"> </span>
							<span class="bar-3"> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile menu sidebar END -->

	<!-- Desktop menu -->
	<div class="desktop-menu">
		<div class="container">
			<div class="row">
				<div class="header-wrapper">
					<div class="logo">
						<a href="<?php home_url(); ?>">
							<img src="/wp-content/uploads/2022/07/cropped-Made-Online-Main-Logo-1.webp" alt="">
						</a>
					</div>
					<div class="nav-wrapper">
						<nav class="desktop-navigation">
							<div class="desk-nav">
								<ul class="desk-links">
									<?php
									wp_nav_menu( array(
										'menu'              => 'Main menu',
										'theme_location'    => 'Primary menu',
										'depth'             => 2,
										'container'         => false,
										'container_class'   => 'collapse navbar-collapse',
										'container_id'      => false,
										'menu_class'        => 'nav navbar-nav',
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'items_wrap' => '%3$s',
										'walker'            => new wp_bootstrap_navwalkermobile())
									);
									?> 
								</ul>
							</div>
						</nav>
						<div class="contact-div">
							<div class="contact-wrap">
								<a href="/contact">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</header>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

