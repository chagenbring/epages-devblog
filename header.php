<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header class="header">
    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/epages_logo_rgb.png">

    <div class="navigation-menu navbar">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
  </header>
