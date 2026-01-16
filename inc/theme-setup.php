<?php
function clicasa_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo'); 

    register_nav_menus([
        'main-menu'   => __('Main Menu', 'clickcasa'),
        'footer-menu' => __('Footer Menu', 'clickcasa'),
    ]);
}
add_action('after_setup_theme', 'clicasa_theme_setup');

foreach ( glob( get_template_directory() . '/inc/render/*.php' ) as $file ) {
    require_once $file;
}