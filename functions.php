<?php
function custom_register_styles() {
  wp_enqueue_style('custom-theme-styles', get_template_directory_uri(). '/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'custom_register_styles');
?>