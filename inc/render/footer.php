<?php
if ( ! function_exists('render_footer_menu') ) {
    function render_footer_menu() {
        wp_nav_menu([
            'theme_location' => 'footer-menu',
            'container'      => false,
            'menu_class'     => 'footer__menu',
            'fallback_cb'    => false
        ]);
    }
}
