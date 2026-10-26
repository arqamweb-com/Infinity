<section id="about" class="py-20 lg:py-32 bg-white">
    <div class="ast-container">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative order-2 lg:order-1">
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden border-2 border-primary/30" id="imageSlider">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marketing-consultation.jpg" alt="<?php esc_attr_e('Marketing Consultation - Business professionals discussing strategy', 'arqamweb'); ?>" class="slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/digital-marketing.jpg" alt="<?php esc_attr_e('Digital Marketing - Team working on digital campaigns', 'arqamweb'); ?>" class="slide absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                        <button class="dot w-2.5 h-2.5 rounded-full transition-all bg-primary w-8 p-0"></button>
                        <button class="dot w-2.5 h-2.5 rounded-full transition-all bg-white/60 hover:bg-white/80 p-0"></button>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const slider = document.getElementById("imageSlider");
                            const slides = slider.querySelectorAll(".slide");
                            const dots = slider.querySelectorAll(".dot");

                            let current = 0;
                            const total = slides.length;
                            let interval;

                            function showSlide(index) {
                                slides.forEach((slide, i) => {
                                    slide.classList.toggle("opacity-100", i === index);
                                    slide.classList.toggle("opacity-0", i !== index);
                                });

                                dots.forEach((dot, i) => {
                                    dot.classList.toggle("bg-primary", i === index);
                                    dot.classList.toggle("w-8", i === index);
                                    dot.classList.toggle("bg-white/60", i !== index);
                                    dot.classList.toggle("w-2.5", i !== index);
                                });

                                current = index;
                            }

                            function nextSlide() {
                                showSlide((current + 1) % total);
                            }

                            function startAutoSlide() {
                                interval = setInterval(nextSlide, 4000);
                            }

                            function stopAutoSlide() {
                                clearInterval(interval);
                            }

                            // Click dots
                            dots.forEach((dot, index) => {
                                dot.addEventListener("click", () => {
                                    stopAutoSlide();
                                    showSlide(index);
                                    startAutoSlide();
                                });
                            });

                            startAutoSlide();
                        });
                    </script>
                    <div class="absolute -bottom-6 -right-6 md:bottom-8 md:right-8 bg-gradient-to-br from-[#d0ad68] to-[#a88a4a] p-6 rounded-2xl shadow-2xl animate-pulse-glow">
                        <div class="text-center">
                            <span class="block text-4xl md:text-5xl font-bold text-white">+10</span>
                            <span class="text-sm md:text-base font-medium text-white/90"><?php esc_html_e('Years of Experience', 'arqamweb'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-primary/30 rounded-2xl -z-10"></div>
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Who We Are', 'arqamweb'); ?></span>
                <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-[#1a150b] mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('About %1$sInfinity%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                <p class="text-[#574626] text-lg leading-relaxed mb-8"><?php esc_html_e('Infinity Consultations is a strategic business & marketing consultancy dedicated to empowering SMEs in Egypt and the Middle East. We blend creativity, market intelligence, and proven systems to turn your vision into reality.', 'arqamweb'); ?></p>
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Strategic Planning', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Market Intelligence', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Creative Solutions', 'arqamweb'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-[#1a150b] font-medium"><?php esc_html_e('Proven Systems', 'arqamweb'); ?></span>
                    </div>
                </div>
                <a href="<?php echo ($about_page = get_page_by_path('about-us')) ? get_permalink($about_page->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground hover:text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-11 rounded-md px-8"><?php esc_html_e('Read More', 'arqamweb'); ?></a>
            </div>
        </div>
    </div>
</section>