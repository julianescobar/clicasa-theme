<?php
function clicasa_enqueue_assets() {
    $css_file = get_template_directory() . '/assets/css/main.css';    
    wp_enqueue_style('clicasa-main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime($css_file));    
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/library/slick/slick.min.css', [], '1.8.1');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/library/slick/slick-theme.min.css', ['slick-css'], '1.8.1');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/library/slick/slick.min.js', ['jquery'], '1.8.1', true);
    wp_enqueue_script('clicasa-main-js', get_template_directory_uri() . '/assets/js/main.js?v=2', ['jquery'], '1.0.0', true);
    wp_enqueue_script('clicasa-testimonials-js', get_template_directory_uri() . '/assets/js/testimonials.js', ['jquery','slick-js'], '1.0.0', true);
    wp_enqueue_script('clicasa-sell-easy-js', get_template_directory_uri() . '/assets/js/sell-easy.js', ['jquery','slick-js'], '1.0.0', true);  
}
add_action('wp_enqueue_scripts', 'clicasa_enqueue_assets');
