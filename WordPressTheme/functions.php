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


// 管理画面投稿名変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（maange_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */

SCF::add_options_page(
	'ギャラリー画像',
	'ギャラリー画像',
	'manage_options',
	'gallery-img',
	'dashicons-format-gallery',
	8
);
SCF::add_options_page(
	'料金一覧',
	'料金一覧',
	'manage_options',
	'price-table',
	'dashicons-media-text',
	10
);
SCF::add_options_page(
	'よくある質問',
	'よくある質問',
	'manage_options',
	'faq-option',
	'dashicons-format-status',
	10
);

?>