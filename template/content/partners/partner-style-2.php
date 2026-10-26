<article id="post-<?php the_ID(); ?>" class="bg-white rounded-xl p-6 flex items-center justify-center aspect-square shadow-lg hover:scale-105 transition-transform">
    <div class="partner-item">
        <?php if (has_post_thumbnail()) : ?>
            <div class="partner-image">
                <?php the_post_thumbnail('full', ['class' => 'max-w-full max-h-full object-contain', 'style' => 'max-height: 8rem; max-width: 8rem;']); ?>
            </div>
        <?php endif; ?>
    </div>
</article>

