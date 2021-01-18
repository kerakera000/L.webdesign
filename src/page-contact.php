<?php
/*
Template Name: page-contact
 */
?>


<?php get_header(); ?>

<div id="top" class="mainbody">
        <div id="section9">
        </div>

        <div id="section10">
            <h2 class="section10__title">CONTACT.</h2>
            <h3 class="section10__sub-title">お問い合わせ</h3>

            <p class="section10__text">
                ホームページ作成のご依頼のお申し込みは、下記のフォームから受け付けております。<br>
                料金やサービス内容などお気軽にお問い合わせください。ご検討中やお悩み中の段階でもまずはその旨ご連絡ください。
            </p>
        </div>

        <div class="section11">
            <?php echo do_shortcode( '[contact-form-7 id="27" title="L.WEBDESIGN用コンタクトフォーム"]' ); ?>
        </div>
</div>

<?php get_footer(); ?>