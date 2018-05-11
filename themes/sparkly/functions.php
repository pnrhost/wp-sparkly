<?php
/**
 * sparkly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sparkly
 */

if ( ! function_exists( 'sparkly_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sparkly_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sparkly, use a find and replace
		 * to change 'sparkly' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sparkly', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'sparkly' ),
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
		add_theme_support( 'custom-background', apply_filters( 'sparkly_custom_background_args', array(
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
add_action( 'after_setup_theme', 'sparkly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparkly_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sparkly_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparkly_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparkly_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sparkly' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sparkly' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sparkly_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sparkly_scripts() {

	wp_enqueue_style( 'sparkly-bootstrap', get_template_directory_uri() . '/layouts/bootstrap.min.css' );

	wp_enqueue_style( 'sparkly-font-awesome', get_template_directory_uri() . '/layouts/font-awesome.min.css');

wp_enqueue_style( 'sparkly-owl', get_template_directory_uri() . '/layouts/owl.carousel.css' );

wp_enqueue_style( 'sparkly-lightbox', get_template_directory_uri() . '/layouts/lightbox.css');


wp_enqueue_style( 'sparkly-overlay', get_template_directory_uri() . '/layouts/cm-overlay.css');

	wp_enqueue_style( 'sparkly-style', get_stylesheet_uri() );


	wp_enqueue_script( 'sparkly-navigation', get_template_directory_uri() . '/js/navigation.js');

	wp_enqueue_script( 'sparkly-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js');



	wp_enqueue_script( 'sparkly-jquery-min', get_template_directory_uri() . '/js/jquery.min.js');

	wp_enqueue_script( 'sparkly-jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');

	wp_enqueue_script( 'sparkly-jsbootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );

	wp_enqueue_script( 'sparkly-grayscale', get_template_directory_uri() . '/js/grayscale.js' );


	wp_enqueue_script( 'sparkly-jquery.cm', get_template_directory_uri() . '/js/jquery.cm-overlay.js' );


	wp_enqueue_script( 'sparkly-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js' );

wp_enqueue_script( 'sparkly-jquery.mobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js' );

	wp_enqueue_script( 'sparkly-move-top', get_template_directory_uri() . '/js/move-top.js');

	wp_enqueue_script( 'sparkly-jsowl', get_template_directory_uri() . '/js/owl.carousel.js');

	wp_enqueue_script( 'sparkly-jquery-tools', get_template_directory_uri() . '/js/jquery.tools.min.js' );

	wp_enqueue_script( 'sparkly-smooth', get_template_directory_uri() . '/js/SmoothScroll.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparkly_scripts' );

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

// custpomize achive title
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_year()) {
        $title = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title = get_the_date(_x('F Y', 'monthly archives date format'));
    } elseif (is_day()) {
        $title = get_the_date(_x('F j, Y', 'daily archives date format'));
    } elseif (is_tax('post_format')) {
        if (is_tax('post_format', 'post-format-aside')) {
            $title = _x('Asides', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-gallery')) {
            $title = _x('Galleries', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-image')) {
            $title = _x('Images', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-video')) {
            $title = _x('Videos', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-quote')) {
            $title = _x('Quotes', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-link')) {
            $title = _x('Links', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-status')) {
            $title = _x('Statuses', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-audio')) {
            $title = _x('Audio', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-chat')) {
            $title = _x('Chats', 'post format archive title');
        }
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } else {
        $title = __('Archives');
    }
    return $title;
});

