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
	<section class="py-20 lg:py-28 relative overflow-hidden">
		<?php
		$bg_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
		?>

		<?php if ($bg_image) : ?>
			<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
		<?php endif; ?>
		<div class="absolute inset-0 bg-black/70"></div>
		<div class="container mx-auto px-4 relative z-10 text-center">
			<h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6"><?php the_title(); ?></h1>
			<p class="text-gray-200 text-lg leading-relaxed max-w-3xl mx-auto"><?php echo get_the_excerpt(); ?></p>
		</div>
	</section>
	<?php if (get_the_content()) : ?>
		<section class="pb-20 lg:pb-28 pt-10 lg:pt-18">
			<div class="container mx-auto px-4">
				<div class="max-w-4xl mx-auto space-y-16">

					<div class="entry-content editor-content">
						<?php the_content(); ?>
					</div>

				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="py-20 lg:py-28 bg-background">
		<div class="container mx-auto px-4">
			<div class="text-center max-w-2xl mx-auto mb-16"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Our Process', 'arqamweb'); ?></span>
				<h2 class="font-heading text-3xl md:text-4xl text-foreground font-bold mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('How It %1$sWorks%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
			</div>

			<?php get_template_part('/template/components/sections/how', 'it-works'); ?>
		</div>
	</section>
	<section class="py-20">
		<div class="container mx-auto px-4 text-center">
			<h2 class="font-heading text-3xl font-bold mb-4"><?php esc_html_e('Ready to Get Started?', 'arqamweb'); ?></h2>
			<p class="mb-8"><?php esc_html_e('Let\'s discuss how we can help grow your brand.', 'arqamweb'); ?></p><a href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : ''; ?>"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Get a Quote', 'arqamweb'); ?></button></a>
		</div>
	</section>
</main>


<?php get_footer(); ?>