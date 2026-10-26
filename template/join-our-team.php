<?php /* Template Name: Join Our Team */ ?>

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

<div>

    <main>
        <section class="py-20 lg:py-28 relative overflow-hidden" style="background-color: rgb(20, 17, 11);">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute w-96 h-96 rounded-full bg-gradient-to-br from-primary/10 to-transparent blur-3xl" style="top: -10%; right: -5%;"></div>
                <div class="absolute w-64 h-64 rounded-full bg-gradient-to-tl from-primary/5 to-transparent blur-2xl" style="bottom: 10%; left: 5%;"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Careers', 'arqamweb'); ?></span>
                    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Join Our %1$sTeam%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h1>
                    <p class="text-muted-foreground text-lg leading-relaxed"><?php esc_html_e('At Infinity Consultations, we believe in nurturing talent and empowering individuals to grow alongside us. If you\'re passionate about marketing, creativity, and making a real impact, we\'d love to hear from you.', 'arqamweb'); ?></p>
                </div>
            </div>
        </section>
        <section class="py-16 lg:py-24">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Why Join %1$sInfinity?%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="gradient-card border border-border/50 rounded-2xl p-8 text-center hover-glow">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></div>
                        <h3 class="font-heading text-xl font-semibold text-foreground mb-3"><?php esc_html_e('Collaborative Culture', 'arqamweb'); ?></h3>
                        <p class="text-muted-foreground text-sm"><?php esc_html_e('Work with a diverse team of passionate professionals who support and inspire each other.', 'arqamweb'); ?></p>
                    </div>
                    <div class="gradient-card border border-border/50 rounded-2xl p-8 text-center hover-glow">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-8 h-8 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg></div>
                        <h3 class="font-heading text-xl font-semibold text-foreground mb-3"><?php esc_html_e('Growth Opportunities', 'arqamweb'); ?></h3>
                        <p class="text-muted-foreground text-sm"><?php esc_html_e('Continuous learning, training programs, and clear career advancement paths.', 'arqamweb'); ?></p>
                    </div>
                    <div class="gradient-card border border-border/50 rounded-2xl p-8 text-center hover-glow">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mx-auto mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-8 h-8 text-primary">
                                <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                            </svg></div>
                        <h3 class="font-heading text-xl font-semibold text-foreground mb-3"><?php esc_html_e('Creative Freedom', 'arqamweb'); ?></h3>
                        <p class="text-muted-foreground text-sm"><?php esc_html_e('We encourage innovative thinking and give you the space to bring your ideas to life.', 'arqamweb'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="py-20 lg:py-28 gradient-section-alt">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto">
                    <div class="gradient-card border border-border/50 rounded-2xl p-8 pb-0 lg:p-12 lg:pb-0">
                        <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-2 text-center"><?php esc_html_e('Apply Now', 'arqamweb'); ?></h2>
                        <p class="text-muted-foreground text-center mb-8"><?php esc_html_e('Fill out the form below and we\'ll get back to you soon.', 'arqamweb'); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="d7f50a6" title="Join Us"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>