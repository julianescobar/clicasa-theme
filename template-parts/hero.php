<?php 
$hero_fondo          = get_field('hero_fondo');
$hero_titulo         = get_field('hero_titulo');
$hero_placeholder    = get_field('hero_buscar_placeholder');
$hero_boton_texto    = get_field('hero_boton_vender_texto');
$hero_subtitulo      = get_field('hero_texto_secundario');
$hero_video_url      = get_field('hero_boton_video_url');
$hero_video_texto    = get_field('hero_boton_video_texto');
?>

<section class="hero">
    <?php if ($hero_fondo): ?>
        <div class="hero__background" style="background-image: url('<?php echo esc_url($hero_fondo['url']); ?>');"></div>
    <?php endif; ?>

    <div class="hero__content">
        <div class="hero__header">
            <h1 class="hero__title">
                <?php echo strip_tags($hero_titulo, '<strong>'); ?>
            </h1>
            <img
                class="hero__arrow"
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.png"
                alt="Icon Arrow"
            >
        </div>

        <form class="hero__search-form" action="" method="get">
            <div class="hero__search-input-wrapper">
                <div class="hero__search-input-bg">
                    <span class="hero__search-icon">
                        <?php echo get_theme_icon_svg('home'); ?>
                    </span>
                    <input 
                        type="text" 
                        class="hero__search-input" 
                        placeholder="<?php echo esc_attr($hero_placeholder); ?>" 
                        name="direccion"
                    >
                </div>
                <button type="submit" class="hero__search-button">
                    <?php echo esc_html($hero_boton_texto); ?>
                </button>
            </div>
        </form>

        <p class="hero__subtitle ui-subtitle"><?php echo esc_html($hero_subtitulo); ?></p>

        <?php if ($hero_video_url): ?>
            <a href="<?php echo esc_url($hero_video_url); ?>" class="hero__video-button" target="__blank">
                <?php echo esc_html($hero_video_texto); ?>
                <?php echo get_theme_icon_svg('button'); ?>
            </a>
        <?php endif; ?>
    </div>
</section>
