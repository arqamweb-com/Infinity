<section id="services" class="py-20 lg:py-32 bg-[#312a1b]">
    <div class="ast-container">
        <div class="text-center max-w-3xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('What We Offer', 'arqamweb'); ?></span>
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-foreground mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our %1$sServices%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
            <p class="text-muted-foreground text-lg"><?php esc_html_e('At Infinity Consultations, we offer comprehensive marketing and business solutions tailored to your specific needs.', 'arqamweb'); ?></p>
        </div>

        <?php
        set_query_var('per_paged', 8);
        get_template_part('/template/services/custom-loop', 'services'); ?>

        <div class="text-center mt-12">
            <a href="<?php echo ($services_page = get_page_by_path('services')) ? get_permalink($services_page->ID) : ''; ?>">
                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('View All Services', 'arqamweb'); ?></button>
            </a>
        </div>
    </div>
</section>