<?php
/**
 * Front Page
 *
 * @package CliCasa
 */

get_header();
?>

<main class="home">
    <?php get_template_part('template-parts/hero'); ?>    
    <?php get_template_part('template-parts/section-advantages'); ?>    
    <?php get_template_part('template-parts/section-sell-easy'); ?>    
    <?php get_template_part('template-parts/section-conditions'); ?>    
    <?php get_template_part('template-parts/section-companies'); ?>  
    <?php get_template_part('template-parts/section-testimonials'); ?>  
    <?php get_template_part('template-parts/section-search_offers'); ?>
</main>

<?php
get_footer();
