<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/sp.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div id="content">
    <header id="header"> 
         <h1 class="header__title"><a href="#">L.WEB DESIGN</a></h1>
        
        <nav class="header__nav">
            <span></span>
            <span></span>
            <span></span>
            <ul class="header__list">
                <li><a href="#">TOP</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="#"><span class="header__list--icon"></span>CONTACT</a></li>
            </ul>
        </nav>
    </header>