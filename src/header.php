<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(); ?>L.WEB DESIGN(エルドットウェブデザイン)</title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/sp.css">

    <?php wp_head(); ?>
</head>

<body>

        <header id="app" class="header" v-scroll="handleScroll" > 
            <h1 class="header__title"><a href="/">L.WEB DESIGN</a></h1>
        
            <nav class="header__nav">
            <div v-on:click='navbutton2=!navbutton2' 
            v-bind:class='{navbutton:navbutton2}'> 
                <div class="header__nav-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                <div class="header__list-box" v-bind:class='{header__listbox_active:navbutton2}'> 
                    <ul class="header__list">
                        <li><a href="#">MENU</a></li>
                        <li><a href="/">TOP</a></li>
                        <li><a href="/sample-page/about">ABOUT</a></li>
                        <li><a href="/sample-page/servise">SERVICE</a></li>
                        <li><a class="heade__list--text" href="/sample-page/contact"><span class="header__list--icon"></span>CONTACT</a></li>
                    </ul>
                </div>
            </nav>

            <div class="header__jump-button" v-scroll="jumpbutton" v-scroll-to="'#top'">
                <span></span>
            </div>
        </header>