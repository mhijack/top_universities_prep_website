<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme Support
function cs_theme_setup()
{
  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
  ));
}

add_action('after_setup_theme', 'cs_theme_setup');
