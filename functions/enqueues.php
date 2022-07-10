<?php
function custom_enqueue_scripts()
{
  // * styles *

  // Bootstrap Styles
  wp_register_style('bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '5.1.3', null);
  wp_enqueue_style('bootstrap-styles');

  // Custom styles
  wp_register_style('custom', get_template_directory_uri() . '/assets/css/main.css', false, '1.0.0', null);
  wp_enqueue_style('custom');

  // * scripts *

  // remove jQuery
  wp_deregister_script('jquery');
  // add latest jQuery * uncomment to enable jQuery *
  // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, '3.6.0', false);
  // wp_enqueue_script('jquery');

  wp_register_script('bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', false, '5.1.3', true);
  wp_enqueue_script('bootstrap-scripts');

  // custom script
  wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', false, '1.0.0', true);
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 100);