<?php

/**
 * Wirefox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wirefox
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wirefox_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Wirefox, use a find and replace
		* to change 'wirefox' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('wirefox', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'wirefox'),
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
			'wirefox_custom_background_args',
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
add_action('after_setup_theme', 'wirefox_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wirefox_content_width()
{
	$GLOBALS['content_width'] = apply_filters('wirefox_content_width', 640);
}
add_action('after_setup_theme', 'wirefox_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wirefox_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wirefox'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'wirefox'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wirefox_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wirefox_scripts()
{
	wp_enqueue_style('wirefox-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('wirefox-style', 'rtl', 'replace');

	wp_enqueue_script('wirefox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wirefox_scripts');

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

// Hide wp version
function remove_version_info()
{
	return '';
}
add_filter('the_generator', 'remove_version_info');

// add theme class to body tag
add_filter('body_class', 'my_body_classes');

function my_body_classes($classes)
{

	$classes[] = 'hidden';
	$classes[] = 'hidden-ball';
	$classes[] = 'smooth-scroll';
	$classes[] = 'uppercase-titles';

	return $classes;
}

// function register_navwalker(){
//     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );

// class Custom_Bootstrap_Nav_Walker extends Walker_Nav_Menu {
//     // function start_lvl(&$output, $depth = 0, $args = null) {
//     //     // Add any additional styling for nested menus
//     //     $output .= '<ul>';
//     // }

//     function start_el(&$output, $item, $depth = 2, $args = null, $current_object_id = 0) {
//         // Customize the menu item output
//         // $classes = empty($item->classes) ? array() : (array) $item->classes;
//         $output .= '<li class="link menu-timeline">';

//         $output .= '<a href="' . esc_url($item->url) . '" class="ajax-link" target="_blank" data-type="page-transition">';
//         $output .= '<div class="before-span">';
//         $output .= '<span data-hover="' . esc_html($item->title) . '">' . esc_html($item->title) . '</span>';
//         $output .= '</div>';
//         $output .= '</a>';

//         // Check if the current item has children (submenu)
// 		var_dump($args->walker->has_children);
//         if ($args->walker->has_children) {
//             $sub_menu_output = ''; // Initialize a variable to hold the submenu HTML
//             // $args->walker->start_lvl($sub_menu_output, $depth); // Pass the variable by value

//             // Output submenu items
//             foreach ($item->classes as $class) {
//                 if ($class === 'sub-menu-item') {
//                     $sub_menu_output .= '<li class="sub-menu-item">';
//                     $sub_menu_output .= '<a href="' . esc_url($item->url) . '" class="ajax-link" data-type="page-transition">' . esc_html($item->title) . '</a>';
//                     $sub_menu_output .= '</li>';
//                 }
//             }

//             $args->walker->end_lvl($sub_menu_output, $depth); // Pass the variable by value
//             $output .= $sub_menu_output; // Append the submenu HTML to the main output
//         }

//         $output .= '</li>';
//     }
// }


class Custom_Bootstrap_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Add any additional styling for nested menus
        $output .= '<ul class="sub-menu">';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0) {
        // Customize the menu item output
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $output .= '<li class="link menu-timeline">';

        $output .= '<a href="' . esc_url($item->url) . '" class="ajax-link" target="_blank" data-type="page-transition">';
        $output .= '<div class="before-span">';
        $output .= '<span data-hover="' . esc_html($item->title) . '">' . esc_html($item->title) . '</span>';
        $output .= '</div>';
        $output .= '</a>';

        // Check if the current item has children (submenu)
        if ($args->walker->has_children) {
            $output .= '<span class="touch-button"><i class="navicon">▼</i></span>';
            $args->walker->start_lvl($output, $depth, $args);
            // Output submenu items
            foreach ($item->classes as $class) {
                if ($class === 'sub-menu-item') {
                    $output .= '<li class="sub-menu-item">';
                    $output .= '<a href="' . esc_url($item->url) . '" class="ajax-link" data-type="page-transition">' . esc_html($item->title) . '</a>';
                    $output .= '</li>';
                }
            }
            $args->walker->end_lvl($output, $depth, $args);
        }

        // Close the main menu item
        $output .= '</li>';
    }
}