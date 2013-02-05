<?php
  /*
   * The template for the header.
   *
   * It should be inlcuded on any 'pages' of our site.
   */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

    <link rel="stylesheet" media="all"  href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body <?php echo body_class(); ?>>
    <header class="site-header">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>

      <nav class="site-navigation">
        <?php wp_nav_menu(); ?>
      </nav>
    </header><!-- .site-header -->