<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nobodys-fool
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

    <div class="col-1-4">
        <div class="footer-about">
            <h3>About Us</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/img/215-90.jpg" alt="215-90">
            <div class="footer-about-content">
                <?php query_posts('pagename=about-us'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    global $more;
                    $temp = $more;
                    $more = false;
                    echo '<div class="giveaway-excerpt"><p>' . get_the_content('Read More') . '</p></div>';
                    $more = $temp;
                    ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
    <div class="col-1-4">
        <div class="footer-q-links">
            <h3>Quick Links</h3>
            <?php wp_nav_menu(array('menu-id' => 'Footer-Quick-Links')); ?>
        </div>
    </div>
    <div class="col-1-4">
        <div class="footer-latest-posts">
            <h3>Latest Blog Posts</h3>
            <?php $wpb_all_query = new WP_Query(array('category_name' => 'blog', 'posts_per_page' => '2')); ?>

            <?php if ($wpb_all_query->have_posts()) : ?>

                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'page'); ?>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
    <div class="col-1-4">
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <form action="">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea type="text" name="message" placeholder="Message"></textarea>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
    <div style="clear: both;"></div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<div class="footer-site-info site-info">
    <span class="copyright-text">Copyright &copy; <?php echo date("Y"); ?> Domain Name - All Rights Reserved</span>
    <span class="creator-text">Template By OS Templates</span>
</div><!-- .site-info -->
</html>
