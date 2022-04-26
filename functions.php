<?php
 /* ---------------------------------------
テーマタグ設定
--------------------------------------- */
function init_func() {
    add_theme_support('title-tag');
}
add_action('init', 'init_func');

/* ---------------------------------------
管理バー表示オフ設定
--------------------------------------- */
add_filter( 'show_admin_bar', '__return_false' );

/* ---------------------------------------
外観ー＞メニュー追加
--------------------------------------- */
function simple01_setting() {
    add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'simple01_setting' );



/* ---------------------------------------
アイキャッチ画像の有効化
--------------------------------------- */
add_theme_support( 'post-thumbnails' ); 



/* ---------------------------------------
StyleSheet・JavaScript読み込み設定
--------------------------------------- */
function add_scripts() { 
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri().'/normalize.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'add_scripts');


/* ---------------------------------------
ブログのアーカイブURL生成
--------------------------------------- */
function post_has_archive($args, $post_type) {
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; // ページURL
        $args['label'] = 'ブログ'; // ページタイトル
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);



/* ---------------------------------------
ポスト追加
--------------------------------------- */
function create_portfolio() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'ポートフォリオ',
            'singular_name' =>  'portfolio',
        ],
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。
        'query_var' => true, // query_varキーの名前
        'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。
        'capability_type' => 'post', // 権限の指定。
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => [ // 投稿できる項目。
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'excerpt',
            'author',
            'trackbacks',
            'comments',
            'revisions',
            'page-attributes'
            ]
    ]);
}
add_action('init', 'create_portfolio');


 /* ---------------------------------------
ブログ表示件数設定
--------------------------------------- */
function column_posts($query) {
    if(is_admin()||!$query->is_main_query()) {
        return;
    }
    if($query->is_front_page()) {
        $query->set('posts_per_page','10');
    }
}
add_action('pre_get_posts','column_posts');



