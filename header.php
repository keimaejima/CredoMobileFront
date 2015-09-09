<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <?php if ( is_front_page() ): ?>
      <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php else : ?>
      <title><?php wp_title(''); ?> | <?php bloginfo('title'); ?></title>
    <?php endif; ?>
      <meta name="Author" content="" />
      <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- Header -->
    <div id="header">
        <div id="nav-wrapper">
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Politics</a></li>
                    <li><a href="">Economy</a></li>
                    <li><a href="">Science</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="#">Credo</a></h1>
            </div>
        </div>
    </div>
    <!-- Header -->
