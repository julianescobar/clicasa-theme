<footer class="footer">
    <div class="footer__top">
        <div class="footer__container footer__container--top">
            <div class="footer__logo">
               <a href="<?php echo home_url(); ?>" class="footer__logo-link" aria-label="<?php bloginfo('name'); ?>">
                    <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h2><?php bloginfo('name'); ?></h2>
                    <?php endif; ?>
                </a>
            </div>
            <nav class="footer__nav footer__nav--mobile">
                <?php render_footer_menu() ?>
            </nav>
            <div class="footer__contact">
                <?php if( get_theme_mod('clicasa_phone') ): ?>
                <a href="tel:<?php echo preg_replace('/\D/', '', get_theme_mod('clicasa_phone')); ?>"
                    class="footer__contact-item footer__contact-item--phone" aria-label="Llamar por teléfono">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt=""
                        aria-hidden="true" class="footer__icon">
                    <span class="footer__contact-text">
                        <?php echo esc_html(get_theme_mod('clicasa_phone')); ?>
                    </span>
                </a>
                <?php endif; ?>
                <?php if( get_theme_mod('clicasa_email') ): ?>
                <a href="mailto:<?php echo sanitize_email(get_theme_mod('clicasa_email')); ?>"
                    class="footer__contact-item footer__contact-item--email" aria-label="Enviar correo electrónico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail.svg" alt=""
                        aria-hidden="true" class="footer__icon">
                    <span class="footer__email-text">
                        <?php echo esc_html(get_theme_mod('clicasa_email')); ?>
                    </span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__container footer__container--bottom">
            
            <div class="footer__col footer__col--text">
                <?php if( get_theme_mod('clicasa_footer_text') ): ?>
                <p class="footer__text">
                    <?php echo esc_html( get_theme_mod('clicasa_footer_text') ); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="footer__col footer__col--menu footer__col--menu-desktop">
                <?php render_footer_menu(); ?>
            </div>

            <div class="footer__col footer__col--socials">
                <div class="footer__socials">
                    <?php foreach ( get_footer_social_links() as $social => $url ): ?>
                    <a href="<?php echo esc_url($url); ?>"
                        class="footer__social footer__social--<?php echo esc_attr($social); ?>" target="_blank"
                        rel="noopener" aria-label="Visítanos en <?php echo ucfirst($social); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo esc_attr($social); ?>.svg"
                            alt="" aria-hidden="true">
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>