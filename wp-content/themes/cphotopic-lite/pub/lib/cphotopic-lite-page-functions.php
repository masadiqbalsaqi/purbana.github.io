<?php
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'admin_menu', 'cphotopic_lite_pros');
function cphotopic_lite_pros() {    	
	add_theme_page( esc_html__('CPhotoPic Lite Details', 'cphotopic-lite'), esc_html__('CPhotoPic Lite Details', 'cphotopic-lite'), 'edit_theme_options', 'cphotopic_lite_pro', 'cphotopic_lite_pro_details');   
} 

function cphotopic_lite_pro_details() { 	
?>
<div class="wrap">
	<h1><?php esc_html_e( 'CPhotoPic Lite', 'cphotopic-lite' ); ?></h1>
	<p><strong> <?php esc_html_e( 'Description: ', 'cphotopic-lite' ); ?></strong><?php esc_html_e( 'CPhotoPic Pro WordPress theme is used for all type of Photography business. That business includes photography related stuff which is very important in day to day life. Its most probable WordPress theme used for Event PhotoGraphy, Wedding PhotoGraphy, Wild PhotoGraphy, Natural PhotoGraphy, Modelling PhotoGraphy, Film Industry PhotoGraphy, Blog PhotoGraphy, News PhotoGraphy, Media PhotoGraphy, IT PhotoGraphy, Real Estate PhotoGraphy, Portfolio Photography, Animals PhotoGraphy, Sea PhotoGraphy, River PhotoGraphy all types of PhotoGraphy', 'cphotopic-lite' ); ?></p>
<a class="button button-primary button-large" href="<?php echo esc_url( cphotopic_lite_THEMEURL ); ?>" target="_blank"><?php esc_html_e('Theme Url', 'cphotopic-lite'); ?></a>	
<a class="button button-primary button-large" href="<?php echo esc_url( cphotopic_lite_PROURL ); ?>" target="_blank"><?php esc_html_e('Purchase To Pro', 'cphotopic-lite'); ?></a>
<a class="button button-primary button-large" href="<?php echo esc_url( cphotopic_lite_DOCURL ); ?>" target="_blank"><?php esc_html_e('Documentation', 'cphotopic-lite'); ?></a>
 </div> 
</div>
<?php }?>
<?php
add_action('customize_register', 'cphotopic_lite_customize_register');
define('cphotopic_lite_PROURL', 'https://www.themescave.com/themes/cphotopic-pro-photography-wordpress-themes/');
define('cphotopic_lite_THEMEURL', 'https://www.themescave.com/themes/cphotopic-lite-free-photography-wordpress-themes/');
define('cphotopic_lite_DOCURL', 'https://www.themescave.com/documentation/cphotopic-pro/');
?>