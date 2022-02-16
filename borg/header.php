<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php redwave_print_wp_title() ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php wp_head(); ?>
</head>
<body>
<div id="templatemo_top">      
      <?php
        wp_nav_menu(array(
          'menu'              => 'primary_menu',
          'theme_location'    => 'primarymenu',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'menu2',
          'menu_class'        => 'navbar navbar-left',
        ));
      ?>
      <?php
        wp_nav_menu(array(
          'menu'              => 'primaryright_menu',
          'theme_location'    => 'primaryrightmenu',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'menu1',
          'menu_class'        => 'navbar navbar-right',
        ));
      ?>
  </div>

<div id="templatemo_wrapper">