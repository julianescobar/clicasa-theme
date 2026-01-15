<?php 
// Obtener los campos ACF
$title = get_field('conditions_title');
$subtitle = get_field('conditions_subtitle');
$button_text = get_field('conditions_button_text');
$button_url = get_field('conditions_button_url');
$background = get_field('conditions_background');
?>

<section 
    class="conditions" 
    <?php if ($background): ?>style="background-image: url('<?php echo esc_url($background['url']); ?>');"<?php endif; ?>
>
    <div class="conditions__container">
        <?php if ($title): ?>
            <h2 class="conditions__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($subtitle): ?>
            <p class="conditions__subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>

        <?php if ($button_text): ?>
            <a href="<?php echo $button_url ? esc_url($button_url) : '#'; ?>" class="conditions__button">
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>

    </div>
</section>
