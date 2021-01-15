<?php
// add_action( 'after_setup_theme', 'blankslate_setup' );
// function blankslate_setup() {
// load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
// add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selecctive-refresh-widgets' );

// global $content_width;
// if ( ! isset( $content_width ) ) { $content_width = 1920; }
// }

// Load in our CSS
function antiquistema_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'antiquistema_enqueue_styles' );

// Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'antiquistema' )
]);


// Load in our JS
function antiquistema_enqueue_scripts() {
    wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
}
add_action( 'wp_enqueue_scripts', 'antiquistema_enqueue_scripts' );

// Adobe fonts
function wpb_add_google_fonts() {
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://use.typekit.net/jnc6rkw.css', false ); 
    }
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' ); er skrevet om ovenover
// function blankslate_load_scripts() {
// wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
// }

// ----- ALT HERUNDER ER IKKE ÆNDRET I ------ FRA BLANKSLATE  --------

