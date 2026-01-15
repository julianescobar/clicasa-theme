<?php
/**
 * Front Page
 *
 * @package CliCasa
 */

get_header();
?>

<main class="home">
    <?php get_template_part('partials/hero'); ?>    
    <?php get_template_part('partials/section-advantages'); ?>    
    <?php get_template_part('partials/section-sell-easy'); ?>    
    <?php get_template_part('partials/section-conditions'); ?>    
</main>

<?php
get_footer();
