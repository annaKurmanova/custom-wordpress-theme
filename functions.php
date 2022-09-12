<?php

function custom_theme_support() {
// add dynamic title tag support
add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_support');

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



 add_action('acf/init', 'my_acf_init_block_types');
 function my_acf_init_block_types() {

     // Check function exists.
     if( function_exists('acf_register_block_type') ) {

         // register a testimonial block.
         acf_register_block_type(array(
             'name'              => 'faq',
             'title'             => __('FAQ'),
             'description'       => __('A custom faq block.'),
             'render_template'   => 'template-parts/blocks/faq.php',
             'category'          => 'formatting',
             'icon'              => 'admin-comments',
             'keywords'          => array( 'faq', 'quote' ),
         ));
     }
 }










?>

