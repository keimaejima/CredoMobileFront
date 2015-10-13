<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <?php if ( is_front_page() ): ?>
      <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php else : ?>
      <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php endif; ?>
    <meta name="Author" content="" />
    <link rel="stylesheet" type="text/css" href="/hottocafemichikusa/wp-content/themes/CredoMobileFront/style.css">
    <meta property="og:title" content="人工知能と付き合っていくために人間に必要な要素を考える">
    <meta property="og:type" content="article">
    <meta property="og:description" content="既知の一歩先へ Credo">
    <meta property="og:url" content="http://credo.asia/2015/05/29/japan-job-future-2/">
    <meta property="og:image" content="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg">
    <meta property="og:site_name" content="Credo">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@credo_media">
    <meta name="twitter:domain" content="credo.asia">
    <meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>

    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ja_KS/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


</head>


<body>
    <div id="fb-root"></div>

    <!-- Header -->
    <header id="header">
      <!-- Nav -->
      <div class="hb-navigation">
          <div class="button">MENU</div>
      </div>
      <nav class="navigation-contents segment menu">
          <p><a href="">Politics</a></p>
          <p><a href="">Economy</a></p>
          <p><a href="">Society</a></p>
          <p><a href="">Culture & Art</a></p>
          <p><a href="">IT & Technology</a></p>
          <p><a href="">Movie</a></p>
      </nav>
        <!-- Logo -->
        <div id="logo">
            <h1><a href="http://credo.asia">CREDO</a></h1>
        </div>
    </header>
