<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nobodys-fool
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'nobodysfool'); ?></a>

    <header id="masthead" class="site-header">

        <div id="topbar-wrapper" class="header-top-bar">
            <div class="header-links">
                <?php wp_nav_menu(array('menu' => 'Header-Links')); ?>
            </div>
            <div class="header-social-links">
                <ul>
                    <li>
                        <a class="linkedin" href="<?php echo get_theme_mod('linkedin-link', ''); ?>">
                            <div class="icon icon-linkedin">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"
                                     alt="linkedin ico"/>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="<?php echo get_theme_mod('twitter-link', ''); ?>">
                            <div class="icon icon-twitter">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"
                                     alt="twitter ico"/>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="pinterest" href="<?php echo get_theme_mod('pinterest-link', ''); ?>">
                            <div class="icon icon-pinterest">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png"
                                     alt="pinterest ico"/>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="gplus" href="<?php echo get_theme_mod('gplus-link', ''); ?>">
                            <div class="icon icon-gplus">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/googleplus.png"
                                     alt="google plus ico"/>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="<?php echo get_theme_mod('rss-link', ''); ?>">
                            <div class="icon icon-rss">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/rss.png" alt="rss ico"/>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div style="clear: both;"></div>
        </div>
        <span class="toparea-btn minus" id="btn-expand"></span>
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"></button>
            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu',)); ?>
        </nav><!-- #site-navigation -->
        <!--<div style="clear: both;"></div>-->
        <div class="logo-search">
            <div class="logo-holder">
                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                              rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                              rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                endif;

                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                endif; ?>
            </div>
            <div class="search">
                <form action="">
                    <input type="text" name="search" placeholder="Search Our Website...">
                    <input type="submit" name="result" value="Search">
                </form>
            </div>
            <div style="clear: both;"></div>
        </div><!-- .site-branding -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">
