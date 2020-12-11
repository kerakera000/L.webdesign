<?php
function add_views_count($postId) {
    $viewCountKey = 'view_count';
    add_post_meta($postId, $viewCountKey, 0);
}

add_action('wp_insert_post', 'add_views_count');

function set_post_views($postId) {
    $key = 'view_count';
    $count = get_post_meta($postId, $key, true);

    if($count == '') {
        $count = 0;
        delete_post_meta($postId, $key);
        add_post_meta($postId, $key, $count);
        return;
    }

    $count++;
    update_post_meta($postId, $key, $count);
}

function is_bot() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $bots = array("googlebot", "msnbot", "yahoo");

    foreach($bots as $bot) {
        if(stripos($ua, $bot) !== false) {
            return true;
        }

        return false;
    }
}