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
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <link rel="stylesheet" type="text/css" href="common.css">
    <link rel="stylesheet" type="text/css" href="singlepage.css">
    <script src="socialcount.js"></script>
    <?php wp_head(); ?>
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
    $(function () {
        var count = 200;
        $("#sentence").each(function () {
            var thisText = $(this).text();
            var textLength = thisText.length;
            if (textLength > count) {
                var showText = thisText.substring(0, count);
                var hideText = thisText.substring(count, textLength);
                var insertText = showText;
                insertText += '<span class="hide">' + hideText + '</span>';
                insertText += '<span class="omit">......</span>';
                insertText += '<div id="button">もっと読む</div>';
                $(this).html(insertText);
            };
        });
        $('.hide').hide();
        $('#button').click(function () {
            $(this).hide()
                .prev('.omit').hide("fast")
                .prev('.hide').show(1500);
            return false;
        });
    });
</script>

<body>
    <div id="fb-root"></div>
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
    <!-- Header -->
    <header id="header">
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
            <h1><a href="http://credo.asia">CREDO</a></h1>
        </div>
    </header>
