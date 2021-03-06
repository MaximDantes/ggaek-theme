<?php

function is_user_role($role)
{
    $user = wp_get_current_user();

    $user = is_numeric($user->ID) ? get_userdata($user->ID) : wp_get_current_user();

    if (!$user)
        return false;

    return in_array($role, (array)$user->roles);
}

add_action('after_setup_theme', function () {
    register_nav_menu('main_menu', 'Главное меню');
    register_nav_menu('cards_menu', 'Карточки');
});


function auto_redirect_after_logout(){
    wp_safe_redirect( home_url() );
    exit;
}
add_action('wp_logout','auto_redirect_after_logout');


add_filter('excerpt_more', function () {
    return ' ...';
});
add_filter('excerpt_length', function () {
    return 25;
});


function theme_scripts()
{
    wp_enqueue_style('swiper_css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
    wp_enqueue_style('fa_css', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('index_css', get_template_directory_uri() . '/inc/css/index.min.css');

    wp_enqueue_script('swiper_js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js');
    wp_enqueue_script('index_js', get_template_directory_uri() . '/inc/js/index.js',
        ['swiper_js'], null, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');


show_admin_bar(false);
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('thumbnail');
add_theme_support('post-thumbnails', ['advantages']);