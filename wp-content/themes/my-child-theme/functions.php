<?php
if (!defined('ABSPATH')) exit;

/**
 * Enqueue styles
 */
add_action('wp_enqueue_scripts', 'bati_enqueue_styles', 10);

function bati_enqueue_styles() {
  wp_enqueue_style('my-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('parent-theme-style'), rand(111, 9999));
  wp_enqueue_style('my-child-theme-general-css', get_stylesheet_directory_uri() . '/assets/css/my-child-theme-general.css', array('my-child-theme-css'), rand(111, 9999));
}