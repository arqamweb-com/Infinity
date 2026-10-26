<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>




<main>
	<section class="py-20 lg:py-28 relative overflow-hidden" style="background-color: rgb(17, 17, 17);">
		<div class="absolute inset-0 overflow-hidden pointer-events-none">
			<div class="absolute w-96 h-96 rounded-full bg-gradient-to-br from-primary/10 to-transparent blur-3xl" style="top: -10%; right: -5%;"></div>
			<div class="absolute w-64 h-64 rounded-full bg-gradient-to-tl from-primary/5 to-transparent blur-2xl" style="bottom: 10%; left: 5%;"></div>
		</div>
		<div class="container mx-auto px-4 relative z-10 text-center"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Case Study', 'arqamweb'); ?></span>
			<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mt-3 mb-4"><?php the_title(); ?></h1>

			<?php if (get_field('sub_heading')) : ?>
				<p class="text-xl text-muted-foreground"><?php echo get_field('sub_heading') ?></p>
			<?php endif; ?>

			<?php
			$services = get_field('select_services');

			if ($services) {
				echo '<ul class="client-services flex flex-wrap justify-center gap-2 mt-6">';
				foreach ($services as $service) {
					echo '<li>';
					echo '<a href="' . esc_url(get_permalink($service->ID)) . '"class="px-4 py-1 bg-primary/10 text-primary text-sm font-medium rounded-full">';
					echo esc_html(get_the_title($service->ID));
					echo '</a>';
					echo '</li>';
				}
				echo '</ul>';
			}
			?>
		</div>
	</section>
	<section class="relative">
		<div class="container mx-auto px-4 mt-12 relative z-20">
			<div class="rounded-2xl overflow-hidden shadow-2xl max-w-5xl mx-auto">
				<?php the_post_thumbnail('large', ['class' => 'w-full aspect-[2/1] object-cover']); ?>
			</div>
		</div>
	</section>
	<section class="pb-20 lg:pb-28 pt-10 lg:pt-18">
		<div class="container mx-auto px-4">
			<div class="max-w-4xl mx-auto space-y-16">
				<div class="entry-content editor-content">
					<?php the_content(); ?>
				</div>
				<div>
					<h2 class="font-heading text-2xl font-bold text-foreground mb-6"><?php esc_html_e('The Creative Strategy', 'arqamweb'); ?></h2>

					<?php get_template_part('/template/components/sections/black', 'box'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="py-20 lg:py-28 gradient-section-alt">
		<div class="container mx-auto px-4">
			<div class="text-center max-w-2xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Our Process', 'arqamweb'); ?></span>
				<h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('The Processes %1$sWe\'ve Done%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
			</div>

			<?php get_template_part('/template/components/sections/how', 'it-works'); ?>
		</div>
	</section>
	<section class="py-20 lg:py-28" style="background-color: rgb(31, 24, 11);">
		<div class="container mx-auto px-4">
			<div class="text-center max-w-2xl mx-auto mb-12"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Results', 'arqamweb'); ?></span>
				<h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('The %1$sOutcome%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
			</div>
			<div class="max-w-4xl mx-auto">
				<p class="text-muted-foreground leading-relaxed mb-8 text-center"><?php echo get_field('the_outcome'); ?></p>
				<div class="p-8 gradient-card border border-primary/30 rounded-2xl">
					<p class="text-primary font-medium mb-3"><?php esc_html_e('The Result in One Line:', 'arqamweb'); ?></p>
					<p class="text-xl font-medium text-foreground italic"><?php echo get_field('the_result_in_one_line'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="py-20" style="background-color: rgb(20, 16, 7);">
		<div class="container mx-auto px-4 text-center">
			<h2 class="font-heading text-3xl font-bold text-foreground mb-4"><?php esc_html_e('Ready to Write Your Success Story?', 'arqamweb'); ?></h2>
			<p class="text-muted-foreground mb-8 max-w-2xl mx-auto"><?php esc_html_e('Let\'s discuss how Infinity can help transform your brand\'s digital presence.', 'arqamweb'); ?></p>
			<div class="flex flex-wrap justify-center gap-4">
				<a href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : ''; ?>">
					<button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Get a Quote', 'arqamweb'); ?></button>
				</a>
				<a href="<?php echo ($clients_page = get_page_by_path('our-clients')) ? get_permalink($clients_page->ID) : ''; ?>">
					<button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-primary/50 bg-transparent text-primary hover:bg-primary hover:text-primary-foreground hover:border-primary h-14 rounded-lg px-10 text-base"><?php esc_html_e('View More Case Studies', 'arqamweb'); ?></button>
				</a>
			</div>
		</div>
	</section>
</main>


<?php get_footer(); ?>