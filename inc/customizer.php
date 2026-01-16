<?php
function clicasa_customize_register($wp_customize) {
    $wp_customize->add_section('clicasa_contact_section', [
        'title'    => __('Información de contacto', 'clickcasa'),
        'priority' => 30,
    ]);

    $fields = [
        'phone' => 'text',
        'whatsapp' => 'text',
        'email' => 'email',
    ];

    foreach($fields as $field => $type){
        $wp_customize->add_setting("clicasa_{$field}", [
            'default'           => '',
            'sanitize_callback' => $field === 'email' ? 'sanitize_email' : 'sanitize_text_field',
        ]);
        $wp_customize->add_control("clicasa_{$field}", [
            'label'   => ucfirst($field),
            'section' => 'clicasa_contact_section',
            'type'    => $type,
        ]);
    }

    $wp_customize->add_section('clicasa_footer_section', [
        'title'    => __('Footer', 'clickcasa'),
        'priority' => 35,
    ]);

    $wp_customize->add_setting('clicasa_footer_text', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('clicasa_footer_text', [
        'label'   => __('Texto footer', 'clickcasa'),
        'section' => 'clicasa_footer_section',
        'type'    => 'text',
    ]);

    $socials = ['facebook','twitter','linkedin','youtube'];
    foreach($socials as $social){
        $wp_customize->add_setting("clicasa_{$social}_url", [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("clicasa_{$social}_url", [
            'label'   => ucfirst($social) . ' URL',
            'section' => 'clicasa_footer_section',
            'type'    => 'url',
        ]);
    }
}
add_action('customize_register', 'clicasa_customize_register');
