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

function clicasa_enqueue_assets() {
    wp_enqueue_style(
        'clicasa-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'clicasa-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'clicasa-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'clicasa_enqueue_assets');

function clicasa_customize_register($wp_customize) {

   
    $wp_customize->add_section('clicasa_contact_section', array(
        'title'    => __('Información de contacto', 'clickcasa'),
        'priority' => 30,
    ));
   
    $wp_customize->add_setting('clicasa_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('clicasa_phone', array(
        'label'    => __('Teléfono', 'clickcasa'),
        'section'  => 'clicasa_contact_section',
        'type'     => 'text',
    ));
 
    $wp_customize->add_setting('clicasa_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('clicasa_whatsapp', array(
        'label'    => __('WhatsApp', 'clickcasa'),
        'section'  => 'clicasa_contact_section',
        'type'     => 'text',
    ));
   
    $wp_customize->add_setting('clicasa_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('clicasa_email', array(
        'label'    => __('Correo electrónico', 'clickcasa'),
        'section'  => 'clicasa_contact_section',
        'type'     => 'email',
    ));
   
    $wp_customize->add_section('clicasa_footer_section', array(
        'title'    => __('Footer', 'clickcasa'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('clicasa_footer_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('clicasa_footer_text', array(
        'label'    => __('Texto footer', 'clickcasa'),
        'section'  => 'clicasa_footer_section',
        'type'     => 'text',
    ));

    
    $socials = ['facebook','twitter','linkedin','youtube'];
    foreach($socials as $social){
        $wp_customize->add_setting("clicasa_{$social}_url", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("clicasa_{$social}_url", array(
            'label'    => ucfirst($social).' URL',
            'section'  => 'clicasa_footer_section',
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'clicasa_customize_register');
