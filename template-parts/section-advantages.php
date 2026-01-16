<?php
$advantages = get_field('advantages_');
if (!$advantages) return;
?>

<section id="advantages" class="advantages">
    <div class="advantages__container">

        <header class="advantages__header">
            <h2 class="advantages__title ui-title"><?php echo esc_html($advantages['title']); ?></h2>

            <?php if (!empty($advantages['subtitle'])): ?>
                <p class="advantages__subtitle ui-animate"><?php echo esc_html($advantages['subtitle']); ?></p>
            <?php endif; ?>
        </header>

        <div class="advantages__grid">
            <?php 
            for ($i = 1; $i <= 4; $i++):
                if (empty($advantages["item_{$i}"])) continue;
                  get_template_part(
                    'template-parts/components/advantage-item',
                    null,
                    [
                        'item' => $advantages["item_{$i}"],
                    ]
                );                
            endfor;
            ?>
        </div>

    </div>
</section>