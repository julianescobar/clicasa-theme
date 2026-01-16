<?php
/**
 * Section: Sell Easy
 * Template-part para la sección "Sell Easy"
 */

$bg_image = get_field('sell_easy_bg_image');
$bg_style = $bg_image
    ? 'style="background-image: url(' . esc_url($bg_image['url']) . ');"'
    : '';

$title       = get_field('sell_easy_title');
$subtitle    = get_field('sell_easy_subtitle');
$button_text = get_field('sell_easy_button_text');
$button_url  = get_field('sell_easy_button_url');

$items = [];
for ($i = 1; $i <= 4; $i++) {
    $item = get_field("sell_easy_item_$i");
    if (!empty($item)) {
        $items[] = $item;
    }
}

if (empty($items)) {
    return; 
}
?>

<section class="sell-easy" <?php echo $bg_style; ?> id="sell-easy">
    <div class="sell-easy__container">
        
        <header class="sell-easy__header">
            <?php if ($title): ?>
                <h2 class="sell-easy__title ui-title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($subtitle): ?>
                <p class="sell-easy__subtitle ui-animate"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </header>

        <div class="sell-easy__content">

            
            <div class="sell-easy__grid">
                <?php foreach ($items as $index => $item): ?>
                    <?php
                        get_template_part('template-parts/components/sell-easy-item', null, [
                            'item'  => $item,
                            'index' => $index + 1
                        ]);
                    ?>
                <?php endforeach; ?>
            </div>

            
            <?php
            $first_image = $items[0]['image'] ?? null;
            if ($first_image):
            ?>
                <div class="sell-easy__image sell-easy__image--desktop">
                    <img
                        id="sellEasyDesktopImage"
                        src="<?php echo esc_url($first_image['url']); ?>"
                        alt="<?php echo esc_attr($first_image['alt']); ?>"
                        loading="lazy"
                    >
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>