<!DOCTYPE html>
<!--[if IE]><html class="lt-ie10" lang="en" ><![endif]-->
<html class="no-js" lang="en" >

  <head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch-icon-ipad.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch-icon-iphone.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico">

    <?php wp_head(); ?>

    <!-- HTML5 & responsive support for IE browsers... -->
    <!--[if lte IE 9]>
    <link href="<?= get_asset_uri('css', 'ie') ?>?ver=<?= filemtime(get_asset_directory('css', 'ie')) ?>" rel="stylesheet" type="text/css">
    <script src="<?= get_asset_uri('js', 'ie') ?>?ver=<?= filemtime(get_asset_directory('js', 'ie')) ?>"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <link href="<?= get_asset_uri('css', 'ie8') ?>?ver=<?= filemtime(get_asset_directory('css', 'ie8')) ?>" rel="stylesheet" type="text/css">
    <script src="<?= get_asset_uri('js', 'ie8') ?>?ver=<?= filemtime(get_asset_directory('js', 'ie8')) ?>" type="text/javascript"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>

    <?php get_template_part('layouts/organisms/nav-topbar'); // load the navigation ?>

    <!-- the main block -->
    <main class="block-main" role="main">

      <!-- the breadcrumbs block -->
      <?php get_template_part('layouts/molecules/breadcrumbs'); ?>

      <!-- page title & hero unit -->
      <?php if ( is_front_page() ) : // if it's a static homepage, load the hero unit ?>

        <?php get_template_part('layouts/organisms/hero-unit'); ?>

      <?php else : // otherwise, load the standard page header ?>

        <?php get_template_part('layouts/organisms/page-header'); ?>

      <?php endif; ?>

      <!-- start the main content row -->
      <div class="row">

        <?php // if we're using the fullwdith template, apply the relevant class ?>
        <div class="columns <?= fullwidth_conditions() ? FULLWIDTH_SIZE : MAIN_SIZE; ?>" role="main">
