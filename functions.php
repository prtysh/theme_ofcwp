<?php

/**
 * ofcwp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ofcwp
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('ofcwp_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ofcwp_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ofcwp, use a find and replace
		 * to change 'ofcwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('ofcwp', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'ofcwp'),
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
				'ofcwp_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'ofcwp_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ofcwp_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ofcwp_content_width', 640);
}
add_action('after_setup_theme', 'ofcwp_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ofcwp_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ofcwp'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'ofcwp'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Frontpage', 'ofcwp'),
			'id'            => 'front-1',
			'description'   => esc_html__('Add widgets here.', 'ofcwp'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ofcwp_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ofcwp_scripts()
{
	# wp_enqueue_style( 'ofcwp-style', get_stylesheet_uri() , array(), _S_VERSION );
	wp_enqueue_style('ofcwp-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), "4.5.2", 'all');
	wp_enqueue_style('ofcwp-purecss', "https://unpkg.com/purecss@2.0.3/build/pure-min.css", ['ofcwp-bootstrap'], "2.0.3", 'all');
	wp_enqueue_style('ofcwp-style', get_stylesheet_uri(), ['ofcwp-purecss'], time(), 'all');
	wp_enqueue_style('ofcwp-custom-style', get_stylesheet_directory_uri() . '/css/custom.css', ['ofcwp-style'], time(), 'all');
	wp_enqueue_style('ofcwp-carousel', get_stylesheet_directory_uri() . '/css/carousel.css', ['ofcwp-custom-style'], time(), 'all');
	wp_enqueue_style('ofcwp-qutoe-page', get_stylesheet_directory_uri() . '/css/quote-page.css', ['ofcwp-custom-style'], time(), 'all');
	wp_style_add_data('ofcwp-style', 'rtl', 'replace');

	wp_enqueue_script('ofcwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('ofcwp-jquery', "https://code.jquery.com/jquery-3.5.1.slim.min.js", "ofcwp-navigation", "3.5.1", true);
	wp_enqueue_script('ofcwp-popperjs', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", "ofcwp-jquery", "3.5.1", true);
	wp_enqueue_script('ofcwp-bootsrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", "ofcwp-popperjs", "3.5.1", true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ofcwp_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function ofcwp_numeric_posts_nav()
{

	if (is_singular())
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1)
		return;

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max   = intval($wp_query->max_num_pages);

	/** Add current page to the array */
	if ($paged >= 1)
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="ofcwp-pagination"><ul>' . "\n";
	// echo '<li class="ofcwp-pagination-arrow"> &#x25C5; </li>' . "\n";

	/** Previous Post Link */
	if (get_previous_posts_link())
		printf('<li>%s</li>' . "\n", get_previous_posts_link('&#x25C5'));

	/** Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

		if (!in_array(2, $links))
			echo '<li>…</li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array) $links as $link) {
		$class = $paged == $link ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}

	/** Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links))
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}

	/** Next Post Link */
	if (get_next_posts_link())
		printf('<li>%s</li>' . "\n", get_next_posts_link('&#x25BB'));
	// echo '<li class="ofcwp-pagination-arrow"> &#x25BB; </li>' . "\n";
	echo '</ul></div>' . "\n";
}

// adding custom post type
function ofcwp_add_member_post_type( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'member' ) );
    return $query;
}

add_action( 'pre_get_posts', 'ofcwp_add_member_post_type' );
