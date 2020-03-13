<?php
/**
 * Define Constants
 */
define('ACADEMIA_SHORTNAME', 'academia'); 
define('ACADEMIA_PAGE_BASENAME', 'academia-options'); 

/**
 * Specify Hooks/Filters
 */
add_action( 'admin_menu', 'academia_add_menu' );

/**
 * Include the required files
 */
// helper functions
require_once('academia-helper-functions.php');
// page settings sections & fields as well as the contextual help text.

/**
* The admin menu pages
*/
function academia_add_menu(){
	
	add_theme_page( __('AcademiaThemes','city-hall'), __('AcademiaThemes','city-hall'), 'manage_options', ACADEMIA_PAGE_BASENAME . '-doc', 'academia_settings_page_doc' ); 

}

// ************************************************************************************************************

/*
 * Theme Documentation Page HTML
 * 
 * @return echoes output
 */
function academia_settings_page_doc() {
	// get the settings sections array
	$theme_data = wp_get_theme();

	// dislays the page title and tabs (if needed)
	//academia_settings_page_header(); 
	?>
	
	<div class="academia-wrapper">
		<div class="header">
			<div id="academia-logo">
				<a href="https://www.academiathemes.com/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/academia-admin/images/academia-options-logo.png" width="117" height="50" alt="AcademiaThemes Logo" /></a>
			</div><!-- #academia-logo --><!-- ws fix

			--><div id="academia-theme-info">
				<p><span class="theme-name"><?php echo esc_html($theme_data->name); ?></span> <span class="theme-version"><?php echo esc_html($theme_data->version); ?></span></p>
			</div><!-- #academia-theme-info -->
		</div><!-- .header -->
		
		<div class="subheader">
			<ul>
				<li><span class="dashicons dashicons-update"></span> <a href="https://www.academiathemes.com/changelogs/city-hall-lite.txt"><?php esc_html_e('Changelog','city-hall'); ?></a></li>
				<li><span class="dashicons dashicons-welcome-learn-more"></span> <a href="https://www.academiathemes.com/documentation/city-hall-lite/"><?php esc_html_e('Theme Documentation','city-hall'); ?></a></li>
				<li><span class="dashicons dashicons-format-status"></span> <a href="https://www.academiathemes.com/support/"><?php esc_html_e('Theme Support','city-hall'); ?></a></li>
			</ul>
			<div class="cleaner">&nbsp;</div>
		</div><!-- .subheader -->
		
		<div class="academia-documentation">
			<h2><?php esc_html_e('Theme Documentation','city-hall'); ?></h2>
			
			<?php
			$message = sprintf( __( 'Thank you for using <a href="https://www.academiathemes.com/themes/city-hall-lite/" target="_blank" rel="noopener">City Hall Theme</a> by AcademiaThemes.com', 'city-hall' ) );
			printf( '<p style="font-size: 1.25em;"><strong>%s</strong>.</p>', $message );
			?>
			
			<p><?php esc_html_e('The theme\'s options can be accessed from Appearance > Customize page.','city-hall'); ?></p>

			<p><?php esc_html_e('If you are having difficulties setting-up our WordPress theme, or you simply have some questions about using this theme, we recommend checking the following pages:','city-hall'); ?></p>
			
			<ul>
				<li><a href="https://www.academiathemes.com/documentation/city-hall-lite/"><?php esc_html_e('City Hall Lite Theme Documentation','city-hall'); ?></a></li>
				<li><a href="https://www.academiathemes.com/themes/city-hall/"><?php esc_html_e('City Hall Lite Theme Release Page','city-hall'); ?></a></li>
				<li><a href="https://www.academiathemes.com/faq/"><?php esc_html_e('Frequently Asked Questions','city-hall'); ?></a></li>
			</ul>
			
			<p><?php esc_html_e('If you can\'t find answers to your theme-related questions, please feel free to contact our support team.','city-hall'); ?></p>
			<ul>
				<li><a href="https://www.academiathemes.com/support/"><?php esc_html_e('Support Resources','city-hall'); ?></a></li>
			</ul>
			
		</div><!-- .academia-documentation -->

	</div><!-- .academia-wrapper -->

<?php }