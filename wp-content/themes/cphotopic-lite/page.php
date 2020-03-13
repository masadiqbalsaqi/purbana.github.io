<?php
/**
 * @package cphotopic-lite
 */

get_header(); 
?>
<div id="content" class="container">
     <div class="page_content">
        <div class="site-main">
        	 <div class="blog-post">
					<?php
                    if ( have_posts() ) :
                        
                        while ( have_posts() ) : the_post();
                        ?>   
						<div class="pageheading"><h1><?php the_title(); ?></h1></div>
						<div class="pagecontent"><?php the_content();?></div>
                        <div>
                            <?php
                            wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'cphotopic-lite' ),
                            'after'  => '</div>',
                            ) );
                            ?>
                        </div>
						 <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
						<?php if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;?>
                        <?php endwhile;
                    endif;
                    ?>
                    </div><!--blog-post -->
             </div><!--col-md-8-->
             
                <?php get_sidebar();?>
                            
        <div class="clear"></div>
    </div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>