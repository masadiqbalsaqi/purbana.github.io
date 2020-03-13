<?php 
/**
 * Template Name: Left Sidebar
 *
 * @package excellent-business
 * @subpackage excellent-business
 */
get_header();
?>
    <main class="left-sidebar-page">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <?php get_sidebar(); ?>
                    <div class="col-lg-9 col-md-8 col-12 margin-top">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php

get_footer();