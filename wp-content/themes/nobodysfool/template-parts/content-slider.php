<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 9/9/17
 * Time: 5:48 PM
 */
get_header(); ?>
<!--
<section class="intro">
    <div class="left">
        <div>
            <span>Explore</span>
            <h1>The Places Where You Will</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eveniet amet excepturi voluptates dolorem
                totam ad quod hic, porro accusamus, repellat, corrupti at obcaecati ducimus, dolor quibusdam sequi nemo
                inventore?</p>
            <a href="https://unsplash.com/" target="_blank">Images by Unsplash</a>
        </div>
    </div>
    <?php
/*    $args = array(
        'post_type' => 'slider',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    );
    $slides = new WP_Query($args);
    if ($slides->have_posts()) : */ ?>
    <div class="slider">
        <ul>
            <?php /*while ($slides->have_posts()):
            $slides->the_post(); */ ?>
            <?php /*$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full"); */ ?>
            <li style="background-image:url('<?php /*echo $thumbnail_src[0]; */ ?>')">
                <div class="center-y">

                </div>
            </li>
        <?php /*endwhile; */ ?>
        </ul>

        <ul>
            <nav>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </nav>
        </ul>
        <?php /*endif; */ ?>
    </div>
</section>-->

<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <?php
        $args = array(
            'post_type' => 'slider',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        );
        $slides = new WP_Query($args);
        while ($slides->have_posts()) :
            $slides->the_post();
            ?>
            <div class="item active">

                <div class="carousel-caption">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="slider-thumbnail"><?php the_post_thumbnail(); ?></div>
            </div><!-- item active -->
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
        <?php
        $args = array(
            'post_type' => 'slider',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        );
        $slides = new WP_Query($args);
        while ($slides->have_posts()) :
            $slides->the_post();
            ?>
            <div class="item">

                <div class="carousel-caption">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="slider-thumbnail"><?php the_post_thumbnail(); ?></div>
            </div><!-- item -->
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div><!-- carousel-inner -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- #myCarousel -->
