<?php
/*
Template Name: page-LP
 */
?>


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
</head>

<body>

<div id="top" class="mainbody" > 
        <header> 
        <div id="section20">
            <div class="section20__titlebox">
                <h2 class="section20__title">L.WEB DESIGN</h2>
                <div class="section20__underline"></div>
                <p class="section20__text">Milk tea is my energy source</p>
                <div class="section20__link--contact">
                    <div class="section20__img--mail"></div>
                    <p class="section20__linktext"><a href="/sample-page/contact">CONTACT.</a></p>
                </div>
            </div>
            <div class="section20__mousebox">
                <div class="section20__line"></div>
                <div class="section20__mouseicon"></div>
            </div>
        </div>
    </header>
    
        <div id="section21">
            <h2 class="section21__title">ABOUT.</h2>
            <div class="section21__title--under-line"></div>
            <div class="section21__about--box">
            <div class="section21__img--me"></div>
            <div class="section21__profile--box">
                <ul class="section21__list1">
                    <li>名称: </li>
                    <li>所在地: </li>
                    <li>事業内容:</li>
                </ul>
                <ul class="section21__list2">
                    <li>L.</li>
                    <li>埼玉県</li>
                    <li>
                        デザイン、HTML・CSSコーディング、<br>スマートフォンサイト、CMS導入等
                    </li>
                </ul>
            </div>
            </div>

        </div>
        <div id="section22">
            <h2 class="section22__title">SERVICE.</h2>
            <div class="section22__title--under-line"></div>
            <div class="section22__img-flexbox">
                <div class="section22__img"></div>
                <div class="section22__img"></div>
                <div class="section22__img"></div>
            </div>
            <div class="section22__title-text--flexbox">
                <h3 class="section22__title">
                    コーティング代行<br><p>デザインカンプを元に、HTML・CSS・<br>Scss・JavaScript等の言語にてコーデ<br>ィングを行います。<br></p>
                </h3>
                <h3 class="section22__title">
                    WordPress導入<br><p>既存サイトのWordPress化やプラグインの導入、テーマの修正などの対応が可能です。</p>
                </h3>
                <h3 class="section22__title">
                    レスポンシブ化<br><p>既存のWebサイトをスマートフォン<br>でも閲覧できるよう、レスポンシブ<br>対応サイトに修正いたします。新し<br>くWebサイトを制作する場合も同様<br>に、レスポンシブ対応にて制作可能<br>です。
                    </p>
                </h3>
            </div>
        </div>
        <div id="section23">
            <h2 class="section23__title">SERVICE CONTENTS.</h2>
            <div class="section23__under-line"></div>

            <div class="secvice23__link-main-box">
                <div class="section23__link-subbox box1">
                    <a href="/">
                        <div class="section23__link--img"></div>
                        <p class="section23__link-text">
                            L.WEBDESIGN<br>公式サイト
                        </p>
                    </a>
                </div>

                <div class="section23__link-subbox box2">
                    <a href="/sample-page/service">
                        <div class="section23__link--img"></div>
                        <p class="section23__link-text">
                            HP作成プラン
                        </p>
                    </a>
                </div>

                <div class="section23__link-subbox box4">
                    <a href="/sample-page/contact">
                        <div class="section23__link--img"></div>
                        <p class="section23__link-text">
                            お問い合わせ
                        </p>
                    </a>
                </div>

                <div class="section23__link-subbox box5">
                    <a href="/sample-page/about">
                        <div class="section23__link--img"></div>
                        <p class="section23__link-text">
                            プロフィール
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>