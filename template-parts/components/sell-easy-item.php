<?php
/**
 *  Sell Easy Item
 * 
 */

$item  = $args['item'] ?? null;
$index = $args['index'] ?? 1;

if (!$item) return;

$image = $item['image'] ?? null;
?>

<div 
    class="sell-easy__item <?php echo $index === 1 ? 'is-active' : ''; ?> ui-animate"
    data-image="<?php echo esc_url($image['url'] ?? ''); ?>"
    data-alt="<?php echo esc_attr($image['alt'] ?? ''); ?>"
>

    <div class="sell-easy__step">
        <?php echo esc_html($index); ?>
    </div>

    <div class="sell-easy__item-content">
        <?php if (!empty($item['title'])): ?>
            <h3 class="sell-easy__item-title"><?php echo esc_html($item['title']); ?></h3>
        <?php endif; ?>

        <?php if (!empty($item['text'])): ?>
            <p class="sell-easy__item-text"><?php echo esc_html($item['text']); ?></p>
        <?php endif; ?>
    </div>

    <?php if ($image): ?>
        <div class="sell-easy__image sell-easy__image--mobile">
            <img
                src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>"
                loading="lazy"
            >
        </div>
    <?php endif; ?>

</div>