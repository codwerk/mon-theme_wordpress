<?php

require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';

// Enqueuing CSS 
function load_css() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('main', get_template_directory_uri() . '/src/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// Enqueuing JS
function load_js() {
  wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.bundle.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus

register_nav_menus(

  array(

      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
  )

);