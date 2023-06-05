<?php
if (!function_exists('bytes100_setup')) :
  function bytes100_setup() {
      load_theme_textdomain('100-bytes');
      add_theme_support('automatic-feed-links');
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
      register_nav_menus(array('primary' => __('Primary Menu', '100-bytes')));
      add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
      add_theme_support('customize-selective-refresh-widgets');
      add_theme_support('responsive-embeds');
}
endif;
add_action('after_setup_theme', 'bytes100_setup');

// Enqueue style.css
function bytes100_enqueue_styles() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bytes100_enqueue_styles' );

?>
