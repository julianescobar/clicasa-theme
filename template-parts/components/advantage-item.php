<?php
$item = $args['item'] ?? null;

if (empty($item)) {
    return;
}
?>

<article class="advantages__item ui-animate">
    <?php if (!empty($item['image'])): ?>
        <img
            src="<?= esc_url($item['image']['url']); ?>"
            alt="<?= esc_attr($item['image']['alt']); ?>"
            class="advantages__item-image"
        >
    <?php endif; ?>

    <div class="advantages__content">
        <?php if (!empty($item['title'])): ?>
            <h3 class="advantages__item-title">
                <?= esc_html($item['title']); ?>
            </h3>
        <?php endif; ?>

        <?php if (!empty($item['text'])): ?>
            <p class="advantages__item-text">
                <?= esc_html($item['text']); ?>
            </p>
        <?php endif; ?>
    </div>
</article>