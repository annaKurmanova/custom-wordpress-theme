<?php

// register styles

function custom_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('custom-theme-styles', get_template_directory_uri(). '/style.css', array(), $version, 'all');
  wp_enqueue_style('custom-theme-sass', get_template_directory_uri(). '/assets/css/styles.css', array(), $version, 'all');
  wp_enqueue_style( 'dashicons' );
}

add_action('wp_enqueue_scripts', 'custom_register_styles');



// register menus
function register_custom_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_custom_menus' );














?>

