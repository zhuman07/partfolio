<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >


	<div class="loader">
		<div class="loader-inner"></div>
	</div>

	<header class="main-head main_color_bg " data-parallax="scroll" data-image-src="<?php echo ale_get_option('headbg'); ?>" data-z-index="1">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="logo-container">
									<?php dynamic_sidebar('logo'); ?>
					</div>

					<button class="toggle-menu hidden-md hidden-lg">
						<span class="sandwich">
							<span class="sw-topper"></span>
							<span class="sw-bottom"></span>
							<span class="sw-footer"></span>
						</span>
					</button>
					<nav class="mob-menu hidden-md hidden-lg">
						<?php if( has_nav_menu('mobile_menu') ) {

							wp_nav_menu(array(
								'theme_location' => 'mobile_menu',
								'menu'           => 'Mobile Menu',
								'menu_class'     => 'menu menu-right cf',
								'walker'         => new Aletheme_Nav_Walker(),
								'container'      => '',
								));
							} ?>
					</nav>
			
					<nav class="top-menu hidden-xs hidden-sm">
						<?php if( has_nav_menu('header_right_menu') ) {

							wp_nav_menu(array(
								'theme_location' => 'header_right_menu',
								'menu'           => 'Header Right Menu',
								'menu_class'     => 'menu menu-right cf',
								'walker'         => new Aletheme_Nav_Walker(),
								'container'      => '',
								));
							} ?>
						<audio id="sound-link" preload="auto">
							<source src="<?php echo get_template_directory_uri(); ?>/audio/hover.mp3" type="audio/wav">
							<source src="<?php echo get_template_directory_uri(); ?>/audio/button20.wav" type="audio/wav">
						</audio>
					</nav>
				</div>
			</div>
		</div>
		<div class="top-wrap">
			<div class="top-desc">
				<div class="top-center">
					<div class="top-text">
						<h1><?php echo get_bloginfo('name' ); ?></h1>
						<p><?php echo get_bloginfo('description' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</header>