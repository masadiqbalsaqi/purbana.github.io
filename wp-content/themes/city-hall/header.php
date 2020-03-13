<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="container">

	<a class="skip-link screen-reader-text" href="#site-main"><?php _e( 'Skip to content', 'city-hall' ); ?></a>

	<div class="site-wrapper-all site-wrapper-boxed">

		<div class="site-wrapper-frame">

			<header id="site-masthead" class="site-section site-section-masthead">
				<div class="site-section-wrapper site-section-wrapper-masthead">
					<div id="site-logo"><?php
					if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
						jetpack_the_site_logo();
					} elseif ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
						city_hall_the_custom_logo();
					} else { ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php } ?></div><!-- #site-logo --><!-- ws fix
					--><div id="site-header-extra">
							<?php if (has_nav_menu( 'secondary' )) { ?> 

							<nav id="site-secondary-nav">
							<?php wp_nav_menu( array( 'container' => '', 'container_class' => '', 'menu_class' => '', 'menu_id' => 'site-secondary-menu', 'sort_column' => 'menu_order', 'depth' => '1', 'theme_location' => 'secondary' ) ); ?>
							</nav><!-- #site-secondary-menu -->

							<?php }	?>
						<?php if ( is_active_sidebar('header-widgets') ) { ?><div id="site-header-widgets"><?php dynamic_sidebar( 'header-widgets' ); ?></div><!-- #site-header-widgets --><?php } ?>
					</div><!-- #site-header-extra-->
				</div><!-- .site-section-wrapper .site-section-wrapper-masthead -->
			</header><!-- #site-masthead .site-section-masthead -->
			<?php
			if ( is_front_page() || is_home() ) {
				the_custom_header_markup();
			} else {
				if ( is_singular() ) {
					while (have_posts()) : the_post();
					get_template_part('slideshow','single');
					endwhile;
				} 
			} ?>
			<?php if (has_nav_menu( 'primary' )) { ?>
			<nav id="site-primary-nav">
				<div class="site-section-wrapper site-section-wrapper-primary-menu">
					<div class="navbar-header">

					<?php wp_nav_menu( array(
						'container_id'   => 'menu-main-slick',
						'menu_id' => 'menu-slide-in',
						'sort_column' => 'menu_order', 
						'theme_location' => 'primary'
					) ); 
					?>

				</div><!-- .navbar-header --><?php 
					if (has_nav_menu( 'primary' )) 
					{ 
						wp_nav_menu( array(
							'container' => '', 
							'container_class' => '', 
							'menu_class' => 'dropdown', 
							'menu_id' => 'site-primary-menu', 
							'sort_column' => 'menu_order', 
							'theme_location' => 'primary', 
							'link_after' => '', 
							'items_wrap' => '<ul id="site-primary-menu" class="large-nav sf-menu mobile-menu clearfix">%3$s</ul>' ) );
					}
				?></div><!-- .site-section-wrapper .site-section-wrapper-primary-menu -->
			</nav><!-- #site-primary-nav --><?php } ?>