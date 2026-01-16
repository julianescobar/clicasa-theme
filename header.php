<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <div class="header__container">
    <button class="header__toggle" aria-controls="header-menu" aria-expanded="false" aria-label="Abrir menú">
      <?php echo get_theme_icon_svg('menu'); ?>
    </button>
    <div class="header__logo">
      <a href="<?php echo home_url(); ?>" class="header__logo-link" aria-label="<?php bloginfo('name'); ?>">
        <?php render_site_logo(); ?>
      </a>
    </div>
    <nav class="header__nav" aria-label="Menú principal">
      <?php render_header_menu(); ?>
    </nav>
    <div class="header__contact">
      <?php 
        render_header_contact('phone'); 
        render_header_contact('whatsapp'); 
        render_header_contact('email'); 
      ?>
    </div>
  </div>
</header>