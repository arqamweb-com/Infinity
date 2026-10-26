<?php
$per_paged = get_query_var('per_paged') ?: -1;
$style = get_query_var('style') ?: 'style-1';
$grid = get_query_var('grid') ?: 'flex animate-marquee';

$args = [
    'post_type'      => 'partner',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : $i = 0; ?>

    <div class="<?php echo $grid; ?>">
        <?php
        while ($q->have_posts()) : $q->the_post();
            get_template_part('template/content/partners/partner', $style);
        endwhile;
        ?>
    </div>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        <p class="mb-0"> <?php esc_html_e('No partners are currently available.', 'arqamweb'); ?> </p>
    </div>
<?php endif; ?>