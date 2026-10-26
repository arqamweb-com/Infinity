<section id="consultation" class="py-20 lg:py-32 bg-white">
    <div class="ast-container">
        <div class="text-center max-w-3xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Expert Guidance', 'arqamweb'); ?></span>
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-[#1a150b] mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Consultation Service by %1$sDr. Rabab%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden border-2 border-primary/30"><img src="https://infinity-consultation.com/wp-content/uploads/2026/08/width_800.webp" alt="<?php esc_attr_e('Dr. Rabab Mohamed - Marketing and Sales Consultant', 'arqamweb'); ?>" class="w-full h-full object-cover object-top">
                    <div class="absolute -bottom-6 -left-6 md:bottom-8 md:left-8 bg-gradient-to-br from-[#d0ad68] to-[#a88a4a] p-6 rounded-2xl shadow-2xl animate-pulse-glow">
                        <div class="text-center"><span class="block text-4xl md:text-5xl font-bold text-white">15</span><span class="text-sm md:text-base font-medium text-white/90"><?php esc_html_e('Years of Experience', 'arqamweb'); ?></span></div>
                    </div>
                </div>
                <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-primary/30 rounded-2xl -z-10"></div>
            </div>
            <div><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('About Dr. Rabab Mohamed', 'arqamweb'); ?></span>
                <h3 class="font-heading text-2xl md:text-3xl font-bold text-[#1a150b] mt-3 mb-6"><?php esc_html_e('Marketing & Sales Consultant', 'arqamweb'); ?></h3>
                <p class="text-[#574626] text-lg leading-relaxed mb-8"><?php esc_html_e('Dr. Rabab Mohamed is a Marketing and Sales Consultant with over 15 years of practical experience in developing marketing strategies, coaching professionals, and supporting projects. She has built a strong reputation for transforming complex marketing concepts into clear, applicable steps that generate measurable results.', 'arqamweb'); ?></p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Marketing Strategies', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Sales Coaching', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Project Support', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Professional Training', 'arqamweb'); ?></span>
                    </div>
                </div>
                <a href="<?php echo ($consultation_page = get_page_by_path('consultation')) ? get_permalink($consultation_page->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground hover:text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-11 rounded-md px-8"><?php esc_html_e('Read More', 'arqamweb'); ?></a>
            </div>
        </div>
    </div>
</section>