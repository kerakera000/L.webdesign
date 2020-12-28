<?php get_header(); ?>

<div id="top" class="mainbody"> 
    <div id="section1">
        <div class="section1__titlebox">
            <h2 class="section1__title">L.WEB DESIGN</h2>
            <div class="section1__underline"></div>
            <p class="section1__text">Milk tea is my energy source</p>
        </div>
        <div class="section1__mousebox">
            <div class="section1__line"></div>
            <div class="section1__mouseicon"></div>
        </div>
    </div>

    <div id="section2">
        <h2 class="section2__title">SERVICE.</h2>
        <h3 class="section2__subtitle">サービス内容</h3>

        <p class="section2__Brief-introduction">
            Webサイト制作、コーディング代行等をお引き受けしております。<br>
            ･自社サイトを作りたい<br>
            ･今のサイトをリニューアルしたい<br>
            ･コーティングを頼みたい<br>
            ･個人向けの制作会社を探している<br>
            ･初心者なのでどうやって頼んでいいかわからない<br>
            このような事でお困りの方は、是非一度<br>
            L.WEB DESIGNにご相談ください。<br>
        </p>

        <div class="section2__Contact-Us-box">
            <p class="section2__Contact-Us-text">
                <a href="#">
                    お問い合わせはコチラ
                </a>
            </p>
        </div>

        <div class="section2__service-Contents">
            <div class="section2__service-Contents--box1">
                <h2 class="section2__service-Contents--subtitle1">
                    コーティング代行
                </h2>
                <div class="section2__service-Contents--icon1"></div>
                <p class="section2__service-Contents--text1">
                    デザインカンプを元に、HTML・CSS・Scss・JavaScript等の言語にてコーディングを行います。
                </p>
            </div>

            <div class="section2__service-Contents--box2">
                <h2 class="section2__service-Contents--subtitle2">
                    WordPress導入
                </h2>
                <div class="section2__service-Contents--icon2"></div>
                <p class="section2__service-Contents--text2">
                    更新が必要なサイトは「WordPress」での制作をご提案しています。既存サイトのWordPress化やプラグインの導入、テーマの修正など
                </p>
            </div>

            <div class="section2__service-Contents--box3">
                <h2 class="section2__service-Contents--subtitle3">
                    レスポンシブ化
                </h2>
                <div class="section2__service-Contents--icon3"></div>
                <p class="section2__service-Contents--text3">
                    PC用のWebサイトをスマートフォンでも快適に閲覧できるよう、レスポンシブサイトに修正いたします。また、新しくWebサイトを制作する場合も、レスポンシブ対応で制作します。
                </p>
            </div>
        </div>

        <div class="section2__service-link-box">
            <p class="section2__service-link-text">
                <a href="#">
                サービス内容の詳細
                </a>
            </p>
        </div>

    </div>

    <div id="section3">
        <div class="section3__box"></div>
        <h2 class="section3__title">ABOUT.</h2>
        <h3 class="section3__sub-title">事業概要</h3>
        <p class="section3__text--1">事業携帯： 個人事業主</p>
        <p class="section3__text--2">事業内容： ウェブサイト制作</p>
        <p class="section3__text--3">住所： 埼玉県さいたま市</p>
        <p class="section3__text--4">ITグループ WillMake-inc会員</p>
        <div class="section3__link-box">
            <p class="section3__link-text"><a href="#">詳細</a></p>
        </div>
    </div>

    <div id="section4">
        <h2 class="section4__title">WORKS.</h2>
        <h3 class="section4__sub-title">実績</h3>
    </div>

    <div id="section5">
        <div class="section5__box"></div>
        <h2 class="section5__title">CONTACT.</h2>
        <h3 class="section5__sub-title">お問い合わせ</h3>
        <div class="section5__contact-box" >
            <?php echo do_shortcode( '[contact-form-7 id="27" title="L.WEBDESIGN用コンタクトフォーム"]' ); ?>
        </div>
    </div>

    <div id="section6">
        <h2 class="section6__title">NOTIFICATION.</h2>
        <h3 class="section6__subtitle">お知らせ</h3>
        <div class="section6__notification-box">
            2020/12/31　ホームページを公開しました。<br>
        </div>
    </div>
</div>

<?php get_footer(); ?>