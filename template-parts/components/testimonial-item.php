<?php
$item = $args['item'] ?? null;
if (!$item) return;

$img  = $item['img'] ?? null;
$txt  = $item['txt'] ?? '';
$name = $item['name'] ?? '';
?>

<div class="testimonials__item ui-animate">
    <?php if ($img): ?>
        <img 
            src="<?php echo esc_url($img['url']); ?>" 
            alt="<?php echo esc_attr($name); ?>" 
            class="testimonials__img"
        >
    <?php endif; ?>

    <div class="testimonials__item-container">
        <?php if ($txt): ?>
            <p class="testimonials__text"><?php echo esc_html($txt); ?></p>
        <?php endif; ?>

        <?php if ($name): ?>
            <p class="testimonials__name"><?php echo esc_html($name); ?></p>
        <?php endif; ?>
    </div>
</div>
