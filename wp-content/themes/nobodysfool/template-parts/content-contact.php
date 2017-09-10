<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 9/9/17
 * Time: 12:46 PM
 */
/* Template Name: Contact Us Section */
?>
<?php get_header(); ?>
<section class="contact-us-section">
    <?php query_posts('pagename=contact-us-today'); ?>
    <?php if (have_posts()) : the_post(); ?>
        <?php
        global $more;
        $temp = $more;
        $more = false;
        echo get_the_content();
        $more = $temp;
        ?>
    <?php endif; ?>
</section>

