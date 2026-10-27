<?php /* Template Name: Our Clients */ ?>

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
                <div class="text-center max-w-3xl mx-auto"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Our Portfolio', 'arqamweb'); ?></span>
                    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our %1$sClients%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h1>
                    <p class="text-muted-foreground text-lg leading-relaxed"><?php esc_html_e('We take pride in the partnerships we build and the success stories we create together. Explore how we\'ve helped brands transform their digital presence and achieve measurable growth.', 'arqamweb'); ?></p>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-background">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-2xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Portfolio', 'arqamweb'); ?></span>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our Client\'s %1$sCase Studies%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                </div>

                <?php get_template_part('/template/clients/custom-loop', 'clients'); ?>
            </div>
        </section>
        <section class="py-20 lg:py-28">
            <div class="container mx-auto px-4">
                <div class="text-center max-w-2xl mx-auto mb-12"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Trusted By', 'arqamweb'); ?></span>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our Success %1$sPartners%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                </div>
                
                <?php 
                
                $args = [
    'post_type'      => 'partner',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : $i = 0; ?>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
        <?php
        while ($q->have_posts()) : $q->the_post();
            get_template_part('template/content/partners/partner', 'style-2');
        endwhile;
        ?>
    </div>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        <p class="mb-0"> <?php esc_html_e('No partners are currently available.', 'arqamweb'); ?> </p>
    </div>
<?php endif; ?>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-background">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="gradient-card border border-border/50 rounded-2xl p-8 lg:p-12 mb-12">
                        <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6"><?php esc_html_e('What Makes It Unique', 'arqamweb'); ?></h2>
                        <p class="text-muted-foreground leading-relaxed mb-6"><?php esc_html_e('The Marketing Prescription Podcast stands out for its simplicity, honesty, and relevance. There\'s no jargon — just real stories, expert advice, and insights from guests across industries: marketers, business coaches, founders, and brand owners.', 'arqamweb'); ?></p>
                        <p class="text-muted-foreground leading-relaxed"><?php esc_html_e('Every episode feels like a real consultation — combining Dr. Rabab\'s expertise with Infinity\'s creative production to deliver content that\'s both educational and inspiring.', 'arqamweb'); ?></p>
                        <div class="mt-8 p-6 bg-primary/10 rounded-xl border-l-4 border-primary">
                            <p class="text-lg font-medium text-foreground"><?php esc_html_e('In One Line:', 'arqamweb'); ?></p>
                            <p class="text-muted-foreground italic mt-2">"<?php esc_html_e('From confusion to clarity — Marketing Prescription gives every business its right marketing dose.', 'arqamweb'); ?>"</p>
                        </div>
                    </div>
                    <div class="gradient-card border border-primary/30 rounded-2xl p-8 lg:p-12">
                        <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6"><?php esc_html_e('Get a Quote – Let\'s Build Your Brand Together', 'arqamweb'); ?></h2>
                        <p class="text-muted-foreground leading-relaxed mb-6"><?php esc_html_e('At Infinity Consultation, we don\'t just create marketing plans — we craft growth stories. Whether you\'re launching a new brand, managing a clinic, or expanding your cosmetic or pharmaceutical business, our team is ready to design a customized strategy that fits your goals.', 'arqamweb'); ?></p>
                        <div class="mb-8">
                            <p class="text-foreground font-medium mb-4"><?php esc_html_e('Our Services Include:', 'arqamweb'); ?></p>
                            <ul class="space-y-2 text-muted-foreground">
                                <li class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-primary">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><?php esc_html_e('Marketing &amp; Sales Consultancy', 'arqamweb'); ?></li>
                                <li class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-primary">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><?php esc_html_e('Brand Strategy &amp; Positioning', 'arqamweb'); ?></li>
                                <li class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-primary">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><?php esc_html_e('Social Media Management &amp; Content Creation', 'arqamweb'); ?></li>
                                <li class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-4 h-4 text-primary">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><?php esc_html_e('Business Development &amp; Training Programs', 'arqamweb'); ?></li>
                            </ul>
                        </div>
                        <div class="p-6 bg-muted rounded-xl">
                            <p class="text-foreground font-medium mb-4"><?php esc_html_e('Let\'s Talk!', 'arqamweb'); ?></p>
                            <p class="text-muted-foreground mb-4"><?php esc_html_e('Share your project details with us, and we\'ll send you a tailored proposal that fits your needs and budget.', 'arqamweb'); ?></p>
                            <div class="space-y-2 text-muted-foreground">
                                <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-primary">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg><a href="mailto:info@infinity-consultation.com" class="hover:text-primary transition-colors">info@infinity-consultation.com</a></p>
                                <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-primary">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg><a href="tel:+201009810736" class="hover:text-primary transition-colors">+20 102 799 2146</a></p>
                            </div>
                        </div>
                        <div class="mt-8 text-center"><a href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : ''; ?>"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Get a Quote Now', 'arqamweb'); ?></button></a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>


</div><!-- #primary -->



<?php get_footer(); ?>