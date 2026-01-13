<?php
function clicasa_assets() {
  wp_enqueue_style(
    'clicasa-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0.0'
  );

  wp_enqueue_script(
    'clicasa-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'clicasa_assets');
