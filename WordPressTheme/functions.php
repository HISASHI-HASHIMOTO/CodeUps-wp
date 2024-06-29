<?php
function codeups_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // Theme CSS
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array(), null);

    // jQuery (WordPress includes jQuery, but in case you want a specific version)
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // jQuery Inview Plugin
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

    // Custom Theme JS
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'codeups_enqueue_scripts');

// Meta tags and other head elements
function codeups_add_meta_tags() {
    echo '<meta charset="UTF-8" />';
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0" />';
    echo '<meta name="format-detection" content="telephone=no" />';
    echo '<meta name="robots" content="noindex" />';
    echo '<meta name="description" content="" />';
    echo '<meta name="keywords" content="" />';
    echo '<meta property="og:title" content="" />';
    echo '<meta property="og:type" content="" />';
    echo '<meta property="og:url" content="" />';
    echo '<meta property="og:image" content="" />';
    echo '<meta property="og:site_name" content="" />';
    echo '<meta property="og:description" content="" />';
    echo '<link rel="icon" href="" />';
}
add_action('wp_head', 'codeups_add_meta_tags');

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'campaign__swiper', 'キャンペーンカード', 'manage_options', 'theme-options' );


?>