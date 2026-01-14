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

   <!-- Botón hamburguesa para móvil -->
  <button class="header__toggle" aria-controls="header-menu" aria-expanded="false" aria-label="Abrir menú">
    <?php echo file_get_contents(get_template_directory() . '/assets/icons/menu.svg'); ?>
  </button>


    <!-- Columna 1: Logo -->
    <div class="header__logo">
      <a href="<?php echo home_url(); ?>" class="header__logo-link" aria-label="<?php bloginfo('name'); ?>">
        <?php 
          if ( function_exists('the_custom_logo') && has_custom_logo() ) {
            the_custom_logo(); 
          } else { 
        ?>
            <h2><?php bloginfo('name'); ?></h2>
        <?php } ?>
      </a>
    </div>

    <!-- Columna 2: Menú -->
    <nav class="header__nav" aria-label="Menú principal">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'header__menu',
          'menu_id' => 'header-menu',
          'fallback_cb' => false
        ));
      ?>
    </nav>

    <!-- Columna 3: Contacto -->
    <div class="header__contact">
      <!-- Teléfono -->
      <?php if( get_theme_mod('clicasa_phone') ): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', get_theme_mod('clicasa_phone')); ?>" class="header__contact-item header__contact-item--phone" aria-label="Llamar al <?php echo esc_html(get_theme_mod('clicasa_phone')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="Teléfono" class="header__icon header__icon--phone">
          <span class="header__contact-item--phone-text"><?php echo esc_html(get_theme_mod('clicasa_phone')); ?></span>
        </a>
      <?php endif; ?>

      <!-- WhatsApp -->
      <?php if( get_theme_mod('clicasa_whatsapp') ): ?>
        <a href="https://wa.me/<?php echo preg_replace('/\D/', '', get_theme_mod('clicasa_whatsapp')); ?>" class="header__contact-item header__contact-item--whatsapp" target="_blank" rel="noopener" aria-label="Enviar mensaje por WhatsApp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.svg" alt="WhatsApp" class="header__icon header__icon--whatsapp">
        </a>
      <?php endif; ?>

      <!-- Correo -->
      <?php if( get_theme_mod('clicasa_email') ): ?>
        <a href="mailto:<?php echo sanitize_email(get_theme_mod('clicasa_email')); ?>" class="header__contact-item header__contact-item--email" aria-label="Enviar correo a <?php echo esc_html(get_theme_mod('clicasa_email')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="Correo electrónico" class="header__icon header__icon--email">
        </a>
      <?php endif; ?>
    </div>

  </div>
</header>
