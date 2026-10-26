<?php
$steps = get_field('work_steps'); // Post Object (Array)

if ($steps) :
?>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <?php foreach ($steps as $index => $step) :

            $title = get_the_title($step->ID);
            $desc  = get_the_excerpt($step->ID);
            $num   = $index + 1;

            $img = get_the_post_thumbnail(
                $step->ID,
                'large',
                [
                    'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500'
                ]
            );
        ?>

            <div class="gradient-card border border-border/50 rounded-2xl overflow-hidden group hover-glow">

                <div class="aspect-square overflow-hidden">
                    <?php if ($img) : ?>
                        <?php echo $img; ?>
                    <?php endif; ?>
                </div>

                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold flex-shrink-0">
                            <?php echo esc_html($num); ?>
                        </span>

                        <h3 class="font-heading text-lg font-semibold text-foreground mb-0">
                            <?php echo esc_html($title); ?>
                        </h3>
                    </div>

                    <p class="text-muted-foreground text-sm">
                        <?php echo esc_html($desc); ?>
                    </p>
                </div>

            </div>

        <?php endforeach; ?>

    </div>
<?php endif; ?>