<?php

$bg_image = get_field('sell_easy_bg_image');
$bg_style = $bg_image 
  ? 'style="background-image: url(' . esc_url($bg_image['url']) . ');"'
  : '';
?>

<section class="sell-easy" <?php echo $bg_style; ?>>

  <div class="sell-easy__container">

    <header class="sell-easy__header">
      <h2 class="sell-easy__title">
        <?php the_field('sell_easy_title'); ?>
      </h2>

      <p class="sell-easy__subtitle">
        <?php the_field('sell_easy_subtitle'); ?>
      </p>
    </header>

    <div class="sell-easy__content">

    
    <div class="sell-easy__grid">

      <?php
      for ( $i = 1; $i <= 4; $i++ ) :
        $item = get_field( "sell_easy_item_$i" );
        if ( empty( $item ) ) continue;
      ?>
        <div class="sell-easy__item">

          <div class="sell-easy__step">
            <?php echo $i; ?>
          </div>

          <div class="sell-easy__content">

            <?php if ( ! empty( $item['title'] ) ) : ?>
              <h3 class="sell-easy__item-title">
                <?php echo esc_html( $item['title'] ); ?>
              </h3>
            <?php endif; ?>

            <?php if ( ! empty( $item['text'] ) ) : ?>
              <p class="sell-easy__item-text">
                <?php echo esc_html( $item['text'] ); ?>
              </p>
            <?php endif; ?>

          </div>
        </div>
      <?php endfor; ?>

    </div>

    <?php 
      $image = get_field('sell_easy_image');
      if ( ! empty( $image ) ) :
    ?>
      <div class="sell-easy__image">
        <img
          src="<?php echo esc_url( $image['url'] ); ?>"
          alt="<?php echo esc_attr( $image['alt'] ); ?>"
        >
      </div>
      </div>
    <?php endif; ?>

  </div>
</section>
