<article id="post-<?php the_ID(); ?>" class="flex-shrink-0 mx-4 flex items-center justify-center">
    <div class="partner-item w-32 h-32 bg-white rounded-xl flex items-center justify-center p-4 shadow-lg">
        <?php if (has_post_thumbnail()) : ?>
            <div class="partner-image">
                <?php the_post_thumbnail('full', ['class' => 'max-w-full max-h-full object-contain', 'style' => 'max-height: 8rem; max-width: 8rem;']); ?>
            </div>
        <?php endif; ?>
    </div>
</article>