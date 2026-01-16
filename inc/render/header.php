<?php
if ( ! defined('ABSPATH') ) {
    exit;
}

if ( ! function_exists('render_header_menu') ) {
    function render_header_menu(): void {
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'container'      => false,
            'menu_class'     => 'header__menu',
            'menu_id'        => 'header-menu',
            'fallback_cb'    => false,
        ]);
    }
}

if ( ! function_exists('render_site_logo') ) {
    function render_site_logo(): void {
        if ( function_exists('the_custom_logo') && has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo '<h2>' . esc_html( get_bloginfo('name') ) . '</h2>';
        }
    }
}

if ( ! function_exists('render_header_contact') ) {
    function render_header_contact(string $type): void {

        if ( ! in_array($type, ['phone', 'whatsapp', 'email'], true) ) {
            return;
        }

        $value = get_theme_mod("clicasa_{$type}");
        if ( empty($value) ) {
            return;
        }

        $icons = [
            'phone'    => 'phone.svg',
            'whatsapp' => 'whatsapp.svg',
            'email'    => 'mail.svg',
        ];

        $hrefs = [
            'phone'    => 'tel:' . preg_replace('/\D/', '', $value),
            'whatsapp' => 'https://wa.me/' . preg_replace('/\D/', '', $value),
            'email'    => 'mailto:' . sanitize_email($value),
        ];

        $aria_labels = [
            'phone'    => 'Llamar por teléfono',
            'whatsapp' => 'Enviar mensaje por WhatsApp',
            'email'    => 'Enviar correo electrónico',
        ];

        $target = $type === 'whatsapp'
            ? ' target="_blank" rel="noopener"'
            : '';

        echo '<a href="' . esc_url($hrefs[$type]) . '"';
        echo ' class="header__contact-item header__contact-item--' . esc_attr($type) . '"';
        echo ' aria-label="' . esc_attr($aria_labels[$type]) . '"' . $target . '>';

        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/icons/' . $icons[$type] ) . '"';
        echo ' class="header__icon header__icon--' . esc_attr($type) . '" alt="" aria-hidden="true">';

        if ( $type === 'phone' ) {
            echo '<span class="header__contact-item-text">' . esc_html($value) . '</span>';
        }

        echo '</a>';
    }
}