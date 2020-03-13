<?php
/**
 * The header for our theme
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'automobile-hub' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header role="banner">
	<a class="screen-reader-text skip-link" href="#tp_content"><?php esc_html_e( 'Skip to content', 'automobile-hub' ); ?></a>
	<?php
	  get_template_part( 'template-parts/header/top', 'bar' );
	  get_template_part( 'template-parts/header/site', 'branding' );
	  get_template_part( 'template-parts/navigation/site', 'nav' );
	?>
</header>