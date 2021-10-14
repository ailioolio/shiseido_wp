<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SHISEIDO THE STORE|資生堂</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top-responsive.css">
    <?php wp_head(); ?>
</head>

<!--ここから中身-->

<body>
    <header>
        <!--hover で変化します-->
        <ul class="header-list">
            <li><a href="#">ACCESS</a></li>
            <li><a href="#">MENU</a></li>
        </ul>

        <!--真ん中の画像-->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hanatsubaki.svg" class="mark">
        <a class="play">
            <svg>
                <use xlink:href="#icon-play"></use>
            </svg>
            PLAY
        </a>
        <!--h1タグで囲む-->
        <h1>
            <svg class="logo-white">
                <use xlink:href="#icon-logo"></use>
            </svg>
        </h1>

        <nav>
        <?php
          $args = array(
            'menu_class' => 'navi width',
            'container' => false,
          );
          wp_nav_menu($args);
        ?>
        </nav>

    </header>
