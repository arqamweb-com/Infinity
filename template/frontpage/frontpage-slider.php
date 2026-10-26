<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <video autoplay="" loop="" playsinline="" class="absolute inset-0 w-full h-full object-cover">
        <source src="https://infinity-consultation.com/wp-content/uploads/2026/08/inf.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-[#1a150b]/85"></div>
    <div class="relative z-10 container text-center pt-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="font-heading text-5xl md:text-7xl lg:text-8xl font-bold mb-4 animate-fade-up">
                <span class="text-gradient-gold"><?php esc_html_e('Infinity', 'arqamweb'); ?></span><br>
                <span class="text-foreground"><?php esc_html_e('Consultation', 'arqamweb'); ?></span>
            </h1>
            <p class="text-primary text-lg md:text-xl font-medium mb-4 animate-fade-up stagger-1" style="animation-fill-mode: forwards;"><?php esc_html_e('★ We care about you', 'arqamweb'); ?></p>
            <h2 class="font-heading text-2xl md:text-4xl lg:text-5xl font-semibold text-foreground mb-6 animate-fade-up stagger-2" style="animation-fill-mode: forwards;"><?php esc_html_e('Your Business Growth Starts Here', 'arqamweb'); ?></h2>
            <p class="text-muted-foreground text-lg md:text-xl max-w-2xl mx-auto mb-10 animate-fade-up stagger-3" style="animation-fill-mode: forwards;"><?php esc_html_e('Infinity Consultations helps you scale smarter with strategies that deliver real results.', 'arqamweb'); ?></p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-fade-up stagger-4" style="animation-fill-mode: forwards;">
                <a href="<?php echo ($services_page = get_page_by_path('services')) ? get_permalink($services_page->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground hover:text-primary-foreground font-semibold py-6 hover:shadow-2xl hover:shadow-primary/40 hover:-translate-y-1 hover:scale-105 h-14 rounded-lg px-10 text-base"><?php esc_html_e('View our Services', 'arqamweb'); ?></a>
                <a href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-solid border-foreground/80 bg-transparent text-foreground hover:bg-foreground hover:text-background py-6 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Contact Us', 'arqamweb'); ?></a>
            </div>
            <div class="animate-bounce">
                <div class="w-6 h-10 border-2 border-solid border-primary/50 rounded-full flex items-start justify-center p-2 mx-auto">
                    <div class="w-1.5 h-3 bg-primary rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</section>