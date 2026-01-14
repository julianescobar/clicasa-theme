<section class="hero">
  <?php $hero_fondo = get_field('hero_fondo'); ?>
  <?php if($hero_fondo): ?>
    <div class="hero__background" style="background-image: url('<?php echo esc_url($hero_fondo['url']); ?>');"></div>
  <?php endif; ?>

  <div class="hero__content">
    <div class="hero__header">
        <h1 class="hero__title">
        <?php echo strip_tags(get_field('hero_titulo'), '<strong>'); ?>
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
            <?php echo file_get_contents(get_template_directory() . '/assets/icons/home.svg'); ?>
          </span>        
        <input 
          type="text" 
          class="hero__search-input" 
          placeholder="<?php the_field('hero_buscar_placeholder'); ?>" 
          name="direccion"
        >        
        </div>
        <button type="submit" class="hero__search-button">
          <?php the_field('hero_boton_vender_texto'); ?>
        </button>
      </div>
      
    </form>

    <p class="hero__subtitle"><?php the_field('hero_texto_secundario'); ?></p>

    <?php $video_url = get_field('hero_boton_video_url'); ?>
    <?php if($video_url): ?>
      <a href="<?php echo esc_url($video_url); ?>" class="hero__video-button">
        <?php the_field('hero_boton_video_texto'); ?>
        <?php echo file_get_contents(get_template_directory() . '/assets/icons/button.svg'); ?>
      </a>
    <?php endif; ?>
  </div>
</section>
