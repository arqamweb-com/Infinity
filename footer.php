<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- container -->
</div><!-- #content -->
<footer class="bg-[#1f180b] border-t border-border/50">
	<div class="container mx-auto px-4 py-16">
		<div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8">
			<div class="lg:col-span-1">
				<h4 class="font-heading text-xl font-bold text-primary mb-6 uppercase tracking-wide"><?php esc_html_e('INFINITY CONSULTATION', 'arqamweb'); ?></h4>
				<p class="text-muted-foreground leading-relaxed"><?php esc_html_e('Infinity Consultations is a strategic business &amp; marketing consultancy dedicated to empowering SMEs in Egypt and the Middle East.', 'arqamweb'); ?></p>
			</div>
			<div>
				<h4 class="font-heading text-lg font-semibold text-foreground mb-6"><?php esc_html_e('Main Pages', 'arqamweb'); ?></h4>
				<ul class="space-y-3">
					<li><a href="<?php echo home_url(); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Home', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('consultation'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Consultation', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('about-us'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('About Us', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('services'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Services', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('our-clients'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Our Clients', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('blog'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Blog', 'arqamweb'); ?></a></li>
				</ul>
			</div>
			<div>
				<h4 class="font-heading text-lg font-semibold text-foreground mb-6"><?php esc_html_e('Our Services', 'arqamweb'); ?></h4>
				<ul class="space-y-3">
					<?php if (has_nav_menu('footer-services')) :
						wp_nav_menu([
							'theme_location' => 'footer-services',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'depth'          => 1,
							'fallback_cb'    => false,
						]);
					else : ?>
						<li><a href="https://infinity-consultation.com/service/social-media-management/" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Social Media Management', 'arqamweb'); ?></a></li>
						<li><a href="https://infinity-consultation.com/service/advertising-campaigns/" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Advertising Campaigns', 'arqamweb'); ?></a></li>
						<li><a href="https://infinity-consultation.com/service/content-creation/" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Content Creation', 'arqamweb'); ?></a></li>
						<li><a href="https://infinity-consultation.com/service/graphic-design/" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Graphic Design', 'arqamweb'); ?></a></li>
						<li><a href="https://infinity-consultation.com/service/website-services/" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Website Services', 'arqamweb'); ?></a></li>
					<?php endif; ?>
					<li><a href="<?php echo get_page_url_by_slug('services'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('View More Services', 'arqamweb'); ?></a></li>
				</ul>
			</div>
			<div>
				<h4 class="font-heading text-lg font-semibold text-foreground mb-6"><?php esc_html_e('Contact Us', 'arqamweb'); ?></h4>
				<ul class="space-y-3">
					<li><a href="<?php echo get_page_url_by_slug('contact-us'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Our Contacts', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('contact-us'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Our Maps Location', 'arqamweb'); ?></a></li>
					<li><a href="<?php echo get_page_url_by_slug('contact-us'); ?>" class="text-muted-foreground hover:text-primary transition-colors"><?php esc_html_e('Join Our Team', 'arqamweb'); ?></a></li>
				</ul>
			</div>
			<div>
				<h4 class="font-heading text-lg font-semibold text-foreground mb-6"><?php esc_html_e('Follow Us', 'arqamweb'); ?></h4>
				<div class="flex flex-wrap gap-3 mb-6">
					<a href="https://www.linkedin.com/company/infinity-consultations/" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="LinkedIn">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
							<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
						</svg>
					</a>
					<a href="https://www.facebook.com/infinityconsultation" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="Facebook">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
							<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
						</svg>
					</a>
					<a href="https://www.instagram.com/infinity_consultations" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="Instagram">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
						</svg>
					</a>
					<a href="https://www.tiktok.com/@infinity.consulta" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="TikTok">
						<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"></path>
						</svg>
					</a>
				</div>
				<div class="p-4 bg-muted/50 rounded-lg border border-border/50">
					<p class="text-sm text-muted-foreground mb-1"><?php esc_html_e('Tax Registration Number:', 'arqamweb'); ?></p>
					<p class="text-primary font-semibold">417 - 339 - 757</p>
				</div>
			</div>
		</div>
	</div>
	<div class="border-t border-border/50 bg-[#1c160b]" style="border-top-style: solid;">
		<div class="container mx-auto px-4 py-6">
			<p class="text-center text-sm text-muted-foreground mb-0"><?php /* translators: %1$s: opening link tag, %2$s: closing link tag */ printf(esc_html__('Copyrights © 2026 Infinity Consultation - Designed and Developed by %1$sArqam Web%2$s', 'arqamweb'), '<a href="https://www.arqamweb.com" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline">', '</a>'); ?></p>
		</div>
	</div>
</footer>
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>