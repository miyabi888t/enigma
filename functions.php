<?php 
function my_setup()
{
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links'); 
add_theme_support('title-tag'); 
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}
add_action('after_setup_theme', 'my_setup');


function my_script_init()
{
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('script', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), '20190123', false);
}
add_action('wp_enqueue_scripts', 'my_script_init');



function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー'
        )
        );
}
add_action('init', 'my_menu_init');
