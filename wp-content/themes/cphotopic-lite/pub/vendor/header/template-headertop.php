<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'cphotopic-lite' ); ?></a>
<section id="header">
  <header class="container">
    <div class="header_top row">      
      <div class="header_middle headercommon">
        <div class="logo">
          <?php if (display_header_text()==true){?>
          <h1><a href="<?php echo esc_url( home_url( '/') ); ?>"><?php bloginfo('name'); ?></a></h1>
          <p><?php bloginfo('description'); ?></p>
          <?php } ?>
        </div><!-- logo -->
      </div><!--header_middle-->      
      <div class="clear"></div>
    </div><!--header_top-->
    <div class="clear"></div>
    
  </header>
</section><!--header-->

<section id="main_navigation">
  <div class="container">
  <div class="main-navigation-inner mainwidth">
      <div class="toggle">
                <a class="togglemenu" href="#"><?php esc_html_e('Menu','cphotopic-lite'); ?></a>
                <div class="clear"></div>
      </div><!-- toggle --> 
      <div class="sitenav">
          <?php
          wp_nav_menu( array(
          'theme_location' => 'primary'
          ) );
          ?>
          <div class="clear"></div>
      </div><!-- site-nav -->
      <div class="clear"></div>
    </div><!--main-navigation-->
    <div class="clear"></div>
  </div><!--container-->
  <div class="clear"></div>
</section><!--main_navigation-->