<?php
$boxes = get_field('black_boxes'); // Post Object (Array)

if ($boxes) :
?>
    <div class="grid sm:grid-cols-2 gap-6">

        <?php foreach ($boxes as $index => $box) :

            $title = get_the_title($box->ID);
            $desc  = get_the_excerpt($box->ID);
            $num   = $index + 1;

            // $img = get_the_post_thumbnail(
            //     $box->ID,
            //     'large',
            //     [
            //         'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
            //     ]
            // );
        ?>


            <div class="gradient-card border border-border/50 rounded-xl p-6">
                <h3 class="font-heading text-lg font-semibold text-foreground mb-3"><?php echo esc_html($title); ?></h3>
                <p class="text-muted-foreground text-sm"><?php echo esc_html($desc); ?></p>
            </div>


        <?php endforeach; ?>

    </div>
<?php endif; ?>