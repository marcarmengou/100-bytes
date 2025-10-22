<?php
if ( ! function_exists( 'bytes100_setup' ) ) :
function bytes100_setup() {
    load_theme_textdomain( '100-bytes' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
}
endif;
add_action( 'after_setup_theme', 'bytes100_setup' );

function bytes100_enqueue_styles() {
    $ver = file_exists( get_stylesheet_directory() . '/style.css' )
        ? filemtime( get_stylesheet_directory() . '/style.css' )
        : false;

    wp_enqueue_style( 'bytes100-style', get_stylesheet_uri(), array(), $ver );
}
add_action( 'wp_enqueue_scripts', 'bytes100_enqueue_styles' );
