<?php
// テーマセットアップ
if ( ! function_exists( 'mytheme_setup' ) ) {
    function mytheme_setup() {
        // タイトルタグをWordPressに任せる
        add_theme_support( 'title-tag' );

        // アイキャッチ画像
        add_theme_support( 'post-thumbnails' );

        // HTML5マークアップのサポート
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

        // ナビメニュー
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'my-wordpress-theme' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// スタイル・スクリプト読み込み
function mytheme_scripts() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

// ウィジェット領域
function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'my-wordpress-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( '主サイドバー。', 'my-wordpress-theme' ),
        'before_widget' => '<section class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
