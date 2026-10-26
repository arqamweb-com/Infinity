<?php /* Template Name: Services */ ?>

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
        <section class="py-20 lg:py-28 bg-[#111111] relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute w-96 h-96 rounded-full bg-gradient-to-br from-primary/10 to-transparent blur-3xl" style="top: -10%; right: -5%;"></div>
                <div class="absolute w-64 h-64 rounded-full bg-gradient-to-tl from-primary/5 to-transparent blur-2xl" style="bottom: 10%; left: 5%;"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('What We Offer', 'arqamweb'); ?></span>
                    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Our %1$sServices%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h1>
                    <p class="text-gray-300 text-lg leading-relaxed"><?php esc_html_e('At Infinity Consultations, we offer a comprehensive suite of marketing and business services designed to help your brand grow, connect, and convert. From strategy to execution, we\'re your partner in success.', 'arqamweb'); ?></p>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28">
            <div class="container mx-auto px-4">
                <?php
                set_query_var('per_paged', -1);
                get_template_part('/template/services/custom-loop', 'services'); ?>
            </div>
        </section>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>