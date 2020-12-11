<?php
require_once get_template_directory() . '/resources/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {
	$plugins = array(
        // Instagram-Feedを追加
        // array(
        //     'name' => 'instagram-feed',
        //     'slug' => 'instagram-feed',
        //     'source' => 'https://downloads.wordpress.org/plugin/instagram-feed.zip',
        //     'required' => true,
        //     'force_activation' => true,
        //     'force_deactivation' => true,
        // ),

        // CustomPostType UIを追加
        // array(
        //     'name' => 'custom-post-type-ui',
        //     'slug' => 'custom-post-type-ui',
        //     'source' => 'https://downloads.wordpress.org/plugin/custom-post-type-ui.zip',
        //     'required' => true,
        //     'force_activation' => true,
        //     'force_deactivation' => true,
        // ),

        // AdvancedCustomFIeldsを追加
        // array(
        //     'name' => 'advanced-custom-fields',
        //     'slug' => 'advanced-custom-fields',
        //     'source' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.9.3.zip',
        //     'required' => true,
        //     'force_activation' => true,
        //     'force_deactivation' => true,
        // ),
	);

	$config = array(
        'id'           => 'tgmpa',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        // インストール拒否が できる: true できない: false
        'dismissable'  => false,
        // インストール拒否ができない場合に一緒に表示するメッセージ
        'dismiss_msg'  => 'ホームページの一部機能が壊れるため、プラグインのインストールを必須とさせていただいております。',
        'is_automatic' => true,
        'message'      => '',
	);

	tgmpa( $plugins, $config );
}