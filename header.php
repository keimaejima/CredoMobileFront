<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <?php if ( is_front_page() ): ?>
      <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php else : ?>
      <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php endif; ?>
      <meta property="og:title" content="Credo">
      <meta property="og:type" content="blog">
      <meta property="og:description" content="既知の一歩先へ Credo">
      <meta property="og:url" content="http://credo.asia">
      <meta property="og:image" content="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg">
      <meta property="og:site_name" content="Credo">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@credo_media">
      <meta name="twitter:domain" content="credo.asia">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="frontpage.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header -->
    <div id="header">
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Politics</a></li>
                    <li><a href="">Economy</a></li>
                    <li><a href="">Science</a></li>
                </ul>
            </nav>
            <!-- Logo -->
            <div id="logo">
                <h1><a href="<?php bloginfo('url'); ?>">Credo</a></h1>
            </div>
    </div>
    <!-- Header -->
