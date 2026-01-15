<?php 
$testimonials = get_field('testimonials'); 
if( $testimonials ): 

    $display = $testimonials['display']; 
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
<section class="testimonials">
    <div class="testimonials__container">
        <?php if( !empty($testimonials['title']) ): ?>
            <h2 class="testimonials__title"><?php echo esc_html($testimonials['title']); ?></h2>
        <?php endif; ?>

        <?php if( !empty($testimonials['subtitle']) ): ?>
            <p class="testimonials__subtitle"><?php echo esc_html($testimonials['subtitle']); ?></p>
        <?php endif; ?>

        <div class="testimonials__slider">
            <?php for($i=1; $i<=3; $i++): 
                $img = $testimonials['image_'.$i];
                $txt = $testimonials['text_'.$i];
                $name = $testimonials['name_'.$i];
                if($img || $txt || $name):
            ?>
            <div class="testimonials__item">
                <?php if($img): ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="testimonials__img">
                <?php endif; ?>
                <?php if($txt): ?>
                    <p class="testimonials__text"><?php echo esc_html($txt); ?></p>
                <?php endif; ?>
                <?php if($name): ?>
                    <p class="testimonials__name"><?php echo esc_html($name); ?></p>
                <?php endif; ?>
            </div>
            <?php endif; endfor; ?>
        </div>
    </div>
</section>
<?php 
    endif; 
endif; 
?>
<script>
  jQuery(document).ready(function($){
    jQuery('.testimonials__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,         // dots activados
        arrows: true,       // flechas para desktop
        infinite: true,     // scroll infinito
        autoplay: true,     // autoplay activo
        autoplaySpeed: 4000, // 4 segundos por slide
        swipe: true,        // permite swipe en mobile
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,    // mobile: 1 slide = 1 dot por testimonial
                    arrows: false, // quitar flechas en mobile
                    autoplay: true,
                    autoplaySpeed: 4000
                }
            }
        ]
    });
});


</script>