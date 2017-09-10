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

                get_template_part( 'template-parts/content', 'slider1' );
                get_template_part( 'template-parts/content', 'intro' );
                get_template_part( 'template-parts/content', 'contact' );

            endwhile; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
