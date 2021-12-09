<?php
/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'under_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function under_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on underscore, use a find and replace
		 * to change 'under' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'under', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'under' ),
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
				'under_custom_background_args',
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
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'under_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function under_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'under_content_width', 640 );
}
add_action( 'after_setup_theme', 'under_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function under_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'under' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'under' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'under_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function captcha_scripts() {
	wp_enqueue_style( 'under-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
	wp_style_add_data( 'under-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'under-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'modeSombre', get_template_directory_uri() . '/js/modeSombre.js', array(), _S_VERSION, true );
	
	if(is_category('projet')){
		wp_enqueue_script( 'projets',get_template_directory_uri() . '/js/projets.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array(), _S_VERSION, true );
	}
	if(is_category('enseignants')){
		wp_enqueue_script( 'enseignants',get_template_directory_uri() . '/js/enseignants.js', array(), _S_VERSION, true );
	}	
	wp_enqueue_script( 'grilledecours',get_template_directory_uri() . '/js/grilledecours.js', array(), _S_VERSION, true );
  
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'captcha_scripts' );

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

/*
function extraire_article_accueil($query) {
    if(  !is_admin() && $query->is_front_page() && $query->is_main_query() ) {
        $query->set('category_name','accueil');
        $query->set('meta_key', 'ordre');
        $query->set('orderby', array('meta_value' => "ASC"));
        $query->set('post_per_page', -1);
    }  
}
add_action( "pre_get_posts", "extraire_article_accueil" );
*/
function extraire_article_cours($query) {
    if(  !is_admin() && $query->is_category('10') && $query->is_main_query() ) {
        //$query->set('meta_key', 'ordre');
        //$query->set('orderby', array('meta_value' => "ASC"));
		$query->set('orderby', array('title' => "ASC"));
        $query->set('post_per_page', -1);
    }  
}
add_action( "pre_get_posts", "extraire_article_cours" );

/*
function cookies_auteurProjet($nomAuteur) {  
	$auteurProjet = $nomAuteur;  
	if(!isset($_COOKIE[$auteurProjet])) {
	setcookie('auteurProjet', $auteurProjet, time()+86400); 
	}
}

function get_cookie($auteurProjet) { 
	if(isset($_COOKIE['auteurProjet'])) {
	function placeholder() {
	}
	}
}*/
/*
function cookies_auteurProjet() {  
	$auteurProjet = '';  
	if(!isset($_COOKIE[$auteurProjet])) {
	setcookie('auteurProjet', $auteurProjet, time()+86400); 
	}
}*/