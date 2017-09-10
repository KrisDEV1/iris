<?php
/**
 * nobodys-fool functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nobodys-fool
 */

if ( ! function_exists( 'nobodysfool_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nobodysfool_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nobodys-fool, use a find and replace
		 * to change 'nobodysfool' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nobodysfool', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'nobodysfool' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nobodysfool_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nobodysfool_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nobodysfool_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nobodysfool_content_width', 640 );
}
add_action( 'after_setup_theme', 'nobodysfool_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nobodysfool_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nobodysfool' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nobodysfool' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nobodysfool_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nobodysfool_scripts() {
	wp_enqueue_style( 'nobodysfool-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nobodysfool-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nobodysfool-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');


    wp_enqueue_style('nobodysfool-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro|PT+Serif');

  //  wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

    wp_enqueue_script( 'jquery' );

//    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );

    wp_enqueue_script('nobodysfool-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true);

	/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'nobodysfool_scripts' );


// CUSTOM POST TYPES

function create_cpt()
{
    register_post_type('home-services',
        array(
            'labels' => array(
                'name' => __('Homepage Middle'),
                'singular_name' => __('HomeMiddle')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-layout',
            'has_archive' => true,
            'rewrite' => array('slug' => 'home-midddle'),
            'supports' => array('title', 'thumbnail', 'editor', 'page-attributes')
        )
    );


    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'has_archive' => true,
            'rewrite' => array('slug' => 'slider'),
            'supports' => array('title', 'thumbnail', 'editor', 'page-attributes')
        )
    );

}

add_action( 'init', 'create_cpt' );

function options_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'options',
        array(
            'title' => 'Theme Options',
            'description' => 'Theme Options',
            'priority' => 160,
        )
    );

}

add_action('customize_register', 'options_customize_register');

function header_customize_register($wp_customize)
{
    $wp_customize->add_section(
        'header',
        array(
            'title' => 'Header Social',
            'description' => 'Header Section',
            'priority' => 120,
        )
    );
    $wp_customize->add_panel('header', array(
        'title' => __('Test'),
        'description' => 'test', // Include html tags such as <p>.
        'priority' => 160, // Mixed with top-level-section hierarchy.
    ));


    $wp_customize->add_setting(
        'linkedin-link',
        array(
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'linkedin-link',
        array(
            'label' => 'Linkedin Link',
            'section' => 'header',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'twitter-link',
        array(
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'twitter-link',
        array(
            'label' => 'Twitter Link',
            'section' => 'header',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'pinterest-link',
        array(
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'pinterest-link',
        array(
            'label' => 'Pinterest Link',
            'section' => 'header',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'gplus-link',
        array(
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'gplus-link',
        array(
            'label' => 'Google + Link',
            'section' => 'header',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'rss-link',
        array(
            'default' => '',
        )
    );

    $wp_customize->add_control(
        'rss-link',
        array(
            'label' => 'RSS Feed Link',
            'section' => 'header',
            'type' => 'text',
        )
    );

}

add_action('customize_register', 'header_customize_register');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

