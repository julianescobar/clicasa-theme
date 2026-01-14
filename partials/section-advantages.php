<?php
$advantages = get_field('advantages_');
if ( ! $advantages ) {
  return;
}
?>

<section class="advantages">
  <div class="advantages__container">

    <header class="advantages__header">
      <h2 class="advantages__title">
        <?php echo esc_html( $advantages['title'] ); ?>
      </h2>

      <?php if ( ! empty( $advantages['subtitle'] ) ) : ?>
        <p class="advantages__subtitle">
          <?php echo esc_html( $advantages['subtitle'] ); ?>
        </p>
      <?php endif; ?>
    </header>

    <div class="advantages__grid">

      <?php for ( $i = 1; $i <= 4; $i++ ) :
        if ( empty( $advantages["item_{$i}"] ) ) {
          continue;
        }

        $item = $advantages["item_{$i}"];        
      ?>
        <article class="advantages__item">

          <?php if ( ! empty( $item['image'] ) ) : ?>
            <img
              src="<?php echo esc_url( $item['image']['url'] ); ?>"
              alt="<?php echo esc_attr( $item['image']['alt'] ); ?>"
              class="advantages__item-image"
            >
          <?php endif; ?>

          <div class="advantages__content">

          <?php if ( ! empty( $item['title'] ) ) : ?>
            <h3 class="advantages__item-title">
              <?php echo esc_html( $item['title'] ); ?>
            </h3>
          <?php endif; ?>

          <?php if ( ! empty( $item['text'] ) ) : ?>
            <p class="advantages__item-text">
              <?php echo esc_html( $item['text'] ); ?>
            </p>
          <?php endif; ?>
          </div>

        </article>
      <?php endfor; ?>

    </div>

  </div>
</section>