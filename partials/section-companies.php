<?php 
$companies_group = get_field('working_with_top_companies'); 
if( $companies_group ): 

    $display = $companies_group['display']; // mobile, desktop o both
    $show_section = false;

    if( $display === 'both' ) {
        $show_section = true;
    } elseif( $display === 'mobile' && wp_is_mobile() ) {
        $show_section = true;
    } elseif( $display === 'desktop' && !wp_is_mobile() ) {
        $show_section = true;
    }

    if( $show_section ):
?>
<section class="companies">
    <div class="companies__container">
        <?php if( !empty($companies_group['title']) ): ?>
            <h2 class="companies__title"><?php echo esc_html($companies_group['title']); ?></h2>
        <?php endif; ?>

        <?php if( !empty($companies_group['subtitle']) ): ?>
            <p class="companies__subtitle"><?php echo esc_html($companies_group['subtitle']); ?></p>
        <?php endif; ?>

        <div class="companies__row">
            <div class="companies__col">
                <?php 
                if( !empty($companies_group['logo_1']) ):
                    $logo1 = $companies_group['logo_1'];
                    $logo1_alt = $companies_group['logo_1_alt']; 
                ?>
                    <img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1_alt); ?>" class="companies__logo">
                <?php endif; ?>
            </div>
            <div class="companies__col">
                <?php 
                if( !empty($companies_group['logo_2']) ):
                    $logo2 = $companies_group['logo_2'];
                    $logo2_alt = $companies_group['logo_2_alt']; 
                ?>
                    <img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2_alt); ?>" class="companies__logo">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php 
    endif; // show_section
endif; // group exists
?>
