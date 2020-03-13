<?php
/**
 * The template for displaying search results pages
 *
 * @package excellent-business
 */

?>
<form method="get" class="search-form"  aria-labelledby="header-search-id" action="<?php echo esc_url( home_url( '/' )); ?>">
    <input type="text" class="form-control" value="<?php echo get_search_query() ?>" name="s" placeholder="<?php esc_attr_e( 'Search for...', 'excellent-business' ); ?>">
    <button class="btn" type="submit"><i class="ion-ios-search-strong"></i></button>
</form>