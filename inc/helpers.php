<?php
if ( ! function_exists('get_footer_social_links') ) {
    function get_footer_social_links(): array {

        $socials = ['facebook', 'twitter', 'linkedin', 'youtube'];
        $links   = [];

        foreach ( $socials as $social ) {
            $url = get_theme_mod("clicasa_{$social}_url");

            if ( ! empty($url) ) {
                $links[$social] = esc_url($url);
            }
        }

        return $links;
    }
}

if ( ! function_exists('should_display_section') ) {
    function should_display_section(string $display = 'both'): bool {

        switch ( $display ) {
            case 'mobile':
                return wp_is_mobile();

            case 'desktop':
                return ! wp_is_mobile();

            case 'both':
            default:
                return true;
        }
    }
}

if ( ! function_exists('get_theme_icon_svg') ) {
    function get_theme_icon_svg(string $icon_name): string {        
        if ( ! preg_match('/^[a-z0-9\-]+$/i', $icon_name) ) {
            return '';
        }
        $path = get_template_directory() . '/assets/icons/' . $icon_name . '.svg';
        if ( ! file_exists($path) ) {
            return '';
        }
        return file_get_contents($path);
    }
}

?>