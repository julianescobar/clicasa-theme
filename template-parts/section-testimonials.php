<?php
$testimonials = get_field('testimonials'); 
if (!$testimonials) return;

if (!should_display_section($testimonials['display'] ?? null)) {
    return;
}
$items = [];
for ($i = 1; $i <= 3; $i++) {
    $img  = $testimonials["image_$i"] ?? null;
    $txt  = $testimonials["text_$i"] ?? null;
    $name = $testimonials["name_$i"] ?? null;

    if ($img || $txt || $name) {
        $items[] = compact('img','txt','name');
    }
}

if (empty($items)) return;
?>

<section class="testimonials">
    <div class="testimonials__container">
        <?php if (!empty($testimonials['title'])): ?>
            <h2 class="testimonials__title ui-title"><?php echo esc_html($testimonials['title']); ?></h2>
        <?php endif; ?>

        <?php if (!empty($testimonials['subtitle'])): ?>
            <p class="testimonials__subtitle ui-animate"><?php echo esc_html($testimonials['subtitle']); ?></p>
        <?php endif; ?>

        <div class="testimonials__slider">
            <?php foreach ($items as $item): ?>
                <?php get_template_part('template-parts/components/testimonial-item', null, ['item' => $item]); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>