<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 9/8/17
 * Time: 8:32 PM
 */

/* Template Name: Homepage */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

               /* get_template_part( 'template-parts/content', 'homepage-banner' );
                get_template_part( 'template-parts/content', 'homepage-copy-1' );
                get_template_part( 'template-parts/content', 'homepage-tiles-1' );
                get_template_part( 'template-parts/content', 'homepage-copy-2' );
                get_template_part( 'template-parts/content', 'homepage-mailchimp' );
                get_template_part( 'template-parts/content', 'comments' );
*/
            endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
