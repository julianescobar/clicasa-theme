<?php
$companies = get_field('working_with_top_companies');

if (empty($companies)) {
    return;
}

if (!should_display_section($companies['display'] ?? null)) {
    return;
}
?>

<section class="companies">
    <div class="companies__container">

        <?php if (!empty($companies['title'])): ?>
            <h2 class="companies__title ui-title">
                <?= esc_html($companies['title']); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($companies['subtitle'])): ?>
            <p class="companies__subtitle ui-animate">
                <?= esc_html($companies['subtitle']); ?>
            </p>
        <?php endif; ?>

        <div class="companies__row">
            <?php
            for ($i = 1; $i <= 2; $i++):
                if (empty($companies["logo_{$i}"])) {
                    continue;
                }
                get_template_part(
                    'template-parts/components/company-logo',
                    null,
                    [
                        'logo' => $companies["logo_{$i}"],
                        'alt'  => $companies["logo_{$i}"]["alt"] ?? '',
                    ]
                );
            endfor;
            ?>
        </div>

    </div>
</section>