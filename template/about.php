<?php /* Template Name: About Us */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<main>
    <section class="py-20 lg:py-28 bg-[#14110b] relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute w-96 h-96 rounded-full bg-gradient-to-br from-primary/10 to-transparent blur-3xl" style="top: -10%; right: -5%;"></div>
            <div class="absolute w-64 h-64 rounded-full bg-gradient-to-tl from-primary/5 to-transparent blur-2xl" style="bottom: 10%; left: 5%;"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('About Us', 'arqamweb'); ?></span>
                <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Who We %1$sAre%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h1>
                <p class="text-gray-300 text-lg leading-relaxed"><?php esc_html_e('Infinity Consultations is a strategic business & marketing consultancy dedicated to empowering SMEs in Egypt and the Middle East. We blend creativity, market intelligence, and proven systems to turn your vision into reality.', 'arqamweb'); ?></p>
            </div>
        </div>
    </section>
    <section class="py-20 lg:py-28">
        <div class="container mx-auto px-4">
            <div class="flex flex-col gap-12 max-w-4xl mx-auto">
                <div class="gradient-card border border-border/50 rounded-2xl p-8 lg:p-12 hover-glow">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-8 h-8 text-primary">
                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></div>
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our %1$sVision%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                    <p class="text-muted-foreground text-lg leading-relaxed"><?php esc_html_e('To become the leading business and marketing consultancy in Egypt and the Middle East, empowering organizations to grow through innovation, strategy, and measurable impact.', 'arqamweb'); ?></p>
                </div>
                <div class="gradient-card border border-border/50 rounded-2xl p-8 lg:p-12 hover-glow">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-8 h-8 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg></div>
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our %1$sMission%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                    <p class="text-muted-foreground leading-relaxed mb-6"><?php esc_html_e('At Infinity Consultations, our mission is to help businesses — especially SMEs — build sustainable growth by:', 'arqamweb'); ?></p>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-muted-foreground"><span class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></span><?php esc_html_e('Designing tailored strategies that align with each client\'s goals.', 'arqamweb'); ?></li>
                        <li class="flex items-start gap-3 text-muted-foreground"><span class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></span><?php esc_html_e('Providing integrated marketing and business solutions that deliver real ROI.', 'arqamweb'); ?></li>
                        <li class="flex items-start gap-3 text-muted-foreground"><span class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></span><?php esc_html_e('Supporting entrepreneurs and managers with ongoing guidance and expertise.', 'arqamweb'); ?></li>
                        <li class="flex items-start gap-3 text-muted-foreground"><span class="w-2 h-2 rounded-full bg-primary mt-2 flex-shrink-0"></span><?php esc_html_e('Driving innovation to shape the future of marketing and business consulting in the region.', 'arqamweb'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 lg:py-28 gradient-section-alt">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('What Drives Us', 'arqamweb'); ?></span>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our Core %1$sValues%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="gradient-card border border-border/50 rounded-2xl p-6 text-center hover-glow">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-7 h-7 text-primary">
                            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg></div>
                    <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Innovation', 'arqamweb'); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php esc_html_e('Constantly evolving our strategies to stay ahead of market trends.', 'arqamweb'); ?></p>
                </div>
                <div class="gradient-card border border-border/50 rounded-2xl p-6 text-center hover-glow">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-primary">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg></div>
                    <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Partnership', 'arqamweb'); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php esc_html_e('Building long-term relationships based on trust and mutual success.', 'arqamweb'); ?></p>
                </div>
                <div class="gradient-card border border-border/50 rounded-2xl p-6 text-center hover-glow">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-7 h-7 text-primary">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg></div>
                    <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Results', 'arqamweb'); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php esc_html_e('Focused on delivering measurable outcomes that drive real growth.', 'arqamweb'); ?></p>
                </div>
                <div class="gradient-card border border-border/50 rounded-2xl p-6 text-center hover-glow">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-7 h-7 text-primary">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg></div>
                    <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Excellence', 'arqamweb'); ?></h3>
                    <p class="text-muted-foreground text-sm"><?php esc_html_e('Committed to the highest standards in everything we do.', 'arqamweb'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 lg:py-28">
        <div class="container mx-auto px-4">
            <div class="gradient-card border border-border/50 rounded-2xl p-8 lg:p-16 text-center max-w-4xl mx-auto">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mb-4"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Ready to %1$sGrow Together?%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                <p class="text-muted-foreground text-lg mb-8 max-w-2xl mx-auto"><?php esc_html_e('Let\'s discuss how Infinity Consultations can help transform your business and achieve your goals.', 'arqamweb'); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center"><a href="/book-consultation"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Book Consultation', 'arqamweb'); ?></button></a><a href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : ''; ?>"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-primary/50 bg-transparent text-primary hover:bg-primary hover:text-primary-foreground hover:border-primary h-14 rounded-lg px-10 text-base"><?php esc_html_e('Contact Us', 'arqamweb'); ?></button></a></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>