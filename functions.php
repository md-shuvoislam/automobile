<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_style( 'theme-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,300,400,400i,500,600,600i,700,700i,800,900&display=swap');


    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-active', get_stylesheet_directory_uri() . '/js/active.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/src/js/bootstrap4/bootstrap.min.js', array(), $the_theme->get( 'Version' ), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Menu register
 */

register_nav_menus( array(
    'right-menu' => esc_html__( 'Right Menu', 'understrap-child' ),
) );

register_nav_menus( array(
    'left-menu' => esc_html__( 'Left Menu', 'understrap-child' ),
) );

/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';


function automobile_theme_footer_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer One', 'understrap-child' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'understrap-child' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 classwidgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Two', 'understrap-child' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'understrap-child' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 classwidgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Three', 'understrap-child' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'understrap-child' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 classwidgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'automobile_theme_footer_widget' );



