<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 9/9/17
 * Time: 5:48 PM
 */
get_header(); ?>

<section class="slider-container">
<div id="container-width-reference" class="slideshow-container">
    <?php $args = array(
        'post_type' => 'slider',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    );
    $slides = new WP_Query($args);
    if ($slides->have_posts()) : ?>
        <?php while ($slides->have_posts()):$slides->the_post(); ?>
            <?php $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); ?>


            <div class="mySlides fade">
                <div class="slide-left container-half-aligner">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="slide">
                    <img src="<?php echo $thumbnail_src[0]; ?>" style="width:100%">

                </div>

            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>
    <div class="dots" style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

<div style="clear: both;"></div>
</section>
