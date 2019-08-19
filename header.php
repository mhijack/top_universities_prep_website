<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Jianyuan Chen" />
  <title>
    <?php bloginfo('name'); ?> |
    <?php is_front_page(); ?> ? <?php bloginfo('description'); ?> : <?php wp_title(); ?>
  </title>

  <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" /> <!-- style.css -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" /> <!-- boostrap.css -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/product.css" rel="stylesheet" /> <!-- product.css -->

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- For plugins to work correctly, must have header right before end of head -->
  <?php wp_head(); ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    wp_nav_menu(array(
      'theme_location'  => 'primary',
      'depth'            => 2, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id'    => 'bs-example-navbar-collapse-1',
      'menu_class'      => 'navbar-nav mr-auto',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ));
    ?>
  </nav>