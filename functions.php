<?php
/**
 * galaxypro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package galaxypro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'galaxypro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function galaxypro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on galaxypro, use a find and replace
		 * to change 'galaxypro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'galaxypro', get_template_directory() . '/languages' );

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
		add_image_size('galaxypro_post_thumbnail', 357, 240, true);
		add_image_size('galaxypro_post_sideimg', 115, 75, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'galaxypro' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'galaxypro_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 43,
				'width'       => 125,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'galaxypro_setup' );

// Change the custom logo class

add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'img-fluid logo', $html );
    //$html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function galaxypro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'galaxypro_content_width', 640 );
}
add_action( 'after_setup_theme', 'galaxypro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function galaxypro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'galaxypro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '<div class="widget widget-archive style-01 mt-40">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title style-01">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'galaxypro' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '<div class="widget widget-archive style-01 mt-40">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title style-01">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Project Sidebar', 'galaxypro' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '<div class="widget widget-archive style-01 mt-40">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title style-01">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column One', 'galaxypro' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Two', 'galaxypro' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title mb-20">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Three', 'galaxypro' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title mb-20">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column Four', 'galaxypro' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'galaxypro' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title mb-20">',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'galaxypro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function galaxypro_scripts() {

	wp_enqueue_style( 'galaxypro-main-style', get_template_directory_uri() . '/assets/style.css', array('galaxypro-bootstrap'), _S_VERSION );
	wp_enqueue_style( 'galaxypro-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
	wp_enqueue_style( 'galaxypro-font-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'galaxypro-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'galaxypro-carousel', get_template_directory_uri() . '/assets/css/owl-carousel/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'galaxypro-swiper', get_template_directory_uri() . '/assets/css/swiper/swiper.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'galaxypro-animate', get_template_directory_uri() . '/assets/css/animate/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'galaxypro-magnific', get_template_directory_uri() . '/assets/css/magnific-popup/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap', false );

	wp_enqueue_style( 'galaxypro-style', get_stylesheet_uri(), array(), _S_VERSION );
	$custom_css = theme_get_customizer_css();
	wp_add_inline_style( 'galaxypro-style', $custom_css );
	wp_style_add_data( 'galaxypro-style', 'rtl', 'replace' );

	wp_enqueue_script( 'galaxypro-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-popper', get_template_directory_uri() . '/assets/js/popper/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-app-js', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-carousel-js', get_template_directory_uri() . '/assets/js/owl-carousel/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-appear-js', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-countTo-js', get_template_directory_uri() . '/assets/js/counter/jquery.countTo.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-jarallax-js', get_template_directory_uri() . '/assets/js/jarallax/jarallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-swiper-js', get_template_directory_uri() . '/assets/js/swiper/swiper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-swiperanimation-js', get_template_directory_uri() . '/assets/js/swiperanimation/SwiperAnimation.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-magnific-js', get_template_directory_uri() . '/assets/js/magnific-popup/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-shuffle-js', get_template_directory_uri() . '/assets/js/shuffle/shuffle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'galaxypro-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'galaxypro_scripts' );

/**
 * Register all custom post type.
 *
 */
function galaxypro_create_posttype() {
 
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
			'supports'   => array( 'title', 'editor', 'thumbnail', 'excerpt', 'tags' ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'service'),
            'show_in_rest' => true,
			'menu_icon'  => 'dashicons-networking',
			'menu_position' => 12,
        )
    );

	register_taxonomy( 'service_cat', 'service', array(
        'label'        => __( 'Service Type', 'galaxypro' ),
        'rewrite'      => array( 'slug' => 'service_cat' ),
        'hierarchical' => true,
    ) );

	register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
			'supports'  => array( 'title', 'editor', 'thumbnail','excerpt' ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'project'),
            'show_in_rest' => true,
			'menu_icon'  => 'dashicons-images-alt2',
			'menu_position'      => 15,
 
        )
    );

	register_taxonomy( 'project_cat', 'project', array(
        'label'        => __( 'Project Type', 'galaxypro' ),
        'rewrite'      => array( 'slug' => 'project_cat' ),
        'hierarchical' => true,
    ) );
	
}
add_action( 'init', 'galaxypro_create_posttype' );

/**
 * Theme options using codestar.
 */
require get_template_directory() . '/inc/theme-options.php';
/**
 * TGM setup for plugins installation
 */
require get_template_directory() . '/inc/codestar-framework/codestar-framework.php';
/**
 * TGM setup for plugins installation
 */
require get_template_directory() . '/inc/data-import.php';
/**
 * TGM setup for plugins installation
 */
require get_template_directory() . '/inc/tgm-config.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Implement the Custom Wdigets feature.
 */
require get_template_directory() . '/inc/custom-comment.php';
/**
 * Implement the Custom Wdigets feature.
 */
require get_template_directory() . '/inc/custom-widgets.php';
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

