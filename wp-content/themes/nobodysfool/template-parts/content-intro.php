<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 9/9/17
 * Time: 2:36 PM
 */
?>
<?php get_header(); ?>

<section class="homepage-intro-section">
    <div class="content-left">
        <div class="col-2-4" style="background: url('<?php echo get_template_directory_uri(); ?>/img/intro-left.png') no-repeat center center">
            <!--<img src="<?php /*echo get_template_directory_uri(); */?>/img/intro-left.png"
                 alt="all devices"/>-->
        </div>
    </div>
    <div class="content-right">
        <div class="col-3-4">
            <?php
            $args = array(
                'post_type' => 'home-services',
                'order' => 'ASC',
                'posts_per_page' => -1,
            );
            $tiles = new WP_Query($args);
            if ($tiles->have_posts()) : ?>
                <div id="intro" class="tiles">

                    <?php while ($tiles->have_posts()):$tiles->the_post(); ?>
                        <div id="tile-<?php the_ID(); ?>" class="internal-tiles <?php post_class(); ?>">
                            <div class="tile-thumbnail"><?php the_post_thumbnail('full'); ?></div>
                            <div class="tile-cont">
                                <div class="tile-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="tile-contents"><?php the_content(); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
