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

    <title><?php wp_title('|',true,'right'); ?>The KISSmetrics Blog</title>

    <link rel="stylesheet" media="all"  href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body <?= body_class(); ?>>