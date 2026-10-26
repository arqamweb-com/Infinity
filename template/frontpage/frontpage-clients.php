<section id="partners" class="py-20 lg:py-28 bg-[#312a1b]">
    <div class="ast-container relative">
        <div class="text-center max-w-3xl mx-auto mb-12"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Trusted By', 'arqamweb'); ?></span>
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our Success %1$sPartners%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
        </div>
        <div class="relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-[#312a1b] to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-[#312a1b] to-transparent z-10"></div>

            <?php get_template_part('template/partners/custom-loop', 'partners'); ?>

        </div>
        <div class="text-center mt-12">
            <a href="<?php echo ($clients_page = get_page_by_path('our-clients')) ? get_permalink($clients_page->ID) : ''; ?>">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('View All Partners & Clients', 'arqamweb'); ?></button>
            </a>
        </div>
    </div>
</section>