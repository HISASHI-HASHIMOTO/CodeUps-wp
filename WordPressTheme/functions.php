<?php 
// テーマのセットアップ
function theme_setup() {
    // サポートする機能を追加
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');

// メタ情報、OGP、Google Fonts、Swiper、ファビコン、CSS、JavaScriptの読み込み
function enqueue_custom_styles_and_scripts() {
    // Google Fontsのプリコネクト
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    
    // メタ情報
    echo '<meta name="description" content="">';
    echo '<meta name="keywords" content="">';
    
    // OGP
    echo '<meta property="og:title" content="">';
    echo '<meta property="og:type" content="">';
    echo '<meta property="og:url" content="">';
    echo '<meta property="og:image" content="">';
    echo '<meta property="og:site_name" content="">';
    echo '<meta property="og:description" content="">';
    
    // Google Fonts
    echo '<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap" rel="stylesheet">';
    
    // SwiperのCSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // ファビコン
    echo '<link rel="icon" href="">';

    // テーマのCSS
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'),
array(), null);

// jQuery
wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

// SwiperのJS
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

// jQuery inviewプラグイン
wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

// テーマのJS
wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
}
add_action('wp_head', 'enqueue_custom_styles_and_scripts');