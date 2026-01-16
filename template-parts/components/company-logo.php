<?php
$logo = $args['logo'] ?? null;
$alt  = $args['alt'] ?? '';

if (empty($logo)) {
    return;
}
?>

<div class="companies__col">
    <img
        src="<?= esc_url($logo['url']); ?>"
        alt="<?= esc_attr($alt); ?>"
        class="companies__logo"
    >
</div>
