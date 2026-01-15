<?php 

$display     = get_field('search_offers_display'); 
$title       = get_field('search_offers_title');
$subtitle    = get_field('search_offers_subtitle');
$button_text = get_field('search_offers_button_text');
$button_url  = get_field('search_offers_button_url');
$background  = get_field('search_offers_background');


$show_section = false;

if ($display === 'both') {
    $show_section = true;
} elseif ($display === 'mobile' && wp_is_mobile()) {
    $show_section = true;
} elseif ($display === 'desktop' && !wp_is_mobile()) {
    $show_section = true;
}

if ($show_section) :
?>
<section 
    class="search_offers"
    <?php if ($background): ?>
        style="background-image: url('<?php echo esc_url($background['url']); ?>');"
    <?php endif; ?>
>
    <div class="search_offers__container">

        <?php if ($title): ?>
            <h2 class="search_offers__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($subtitle): ?>
            <p class="search_offers__subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>

        <?php if ($button_text): ?>
            <a 
                href="<?php echo $button_url ? esc_url($button_url) : '#'; ?>" 
                class="search_offers__button"
            >
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
