<?php /* Template Name: Consultation */ ?>

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
        <section class="py-20 lg:py-28 bg-[#14110b] relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute w-96 h-96 rounded-full bg-gradient-to-br from-primary/10 to-transparent blur-3xl" style="top: -10%; right: -5%;"></div>
                <div class="absolute w-64 h-64 rounded-full bg-gradient-to-tl from-primary/5 to-transparent blur-2xl" style="bottom: 10%; left: 5%;"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-3xl mx-auto"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Expert Guidance', 'arqamweb'); ?></span>
                    <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Consultation %1$sService%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h1>
                    <p class="text-gray-300 text-lg leading-relaxed"><?php esc_html_e('Transform your marketing strategy with expert consultation from Dr. Rabab Mohamed, with over 15 years of practical experience.', 'arqamweb'); ?></p>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-background">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div class="relative">
                        <div class="relative aspect-[4/3] rounded-2xl overflow-hidden border-2 border-primary/30"><img src="https://www.arqamweb.com/wp-content/uploads/2025/12/width_800.webp" alt="<?php esc_attr_e('Dr. Rabab Mohamed - Marketing and Sales Consultant', 'arqamweb'); ?>" class="w-full h-full object-cover object-top">
                            <div class="absolute bottom-4 left-4 md:bottom-8 md:left-8 bg-gradient-to-br from-[#d0ad68] to-[#a88a4a] p-2 md:p-6 rounded-2xl shadow-2xl animate-pulse-glow">
                                <div class="text-center"><span class="block text-4xl md:text-5xl font-bold text-white">15</span><span class="text-sm md:text-base font-medium text-white/90"><?php esc_html_e('Years of Experience', 'arqamweb'); ?></span></div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-24 h-24 border-2 border-primary/30 rounded-2xl -z-10"></div>
                    </div>
                    <div><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('About Dr. Rabab Mohamed', 'arqamweb'); ?></span>
                        <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Marketing & Sales %1$sConsultant%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                        <p class="text-muted-foreground text-lg leading-relaxed mb-8"><?php esc_html_e('Dr. Rabab Mohamed is a Marketing and Sales Consultant with over 15 years of practical experience in developing marketing strategies, coaching professionals, and supporting projects. She has built a strong reputation for transforming complex marketing concepts into clear, applicable steps that generate measurable results.', 'arqamweb'); ?></p>
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-foreground font-medium"><?php esc_html_e('Marketing Strategies', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-foreground font-medium"><?php esc_html_e('Sales Coaching', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-foreground font-medium"><?php esc_html_e('Project Support', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-primary rounded-full"></div><span class="text-foreground font-medium"><?php esc_html_e('Professional Training', 'arqamweb'); ?></span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3 mb-6">
                            <a href="https://www.linkedin.com/in/dr-rabab-mohamed-75989a91/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/DrRababMohamed11?mibextid=wwXIfr&rdid=RbkIuANriOlxQ8Q8&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F17MTmt8UDn%2F%3Fmibextid%3DwwXIfr#" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                </svg>
                            </a>
                            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fdr_rabab_mohamed%3Ffbclid%3DIwZXh0bgNhZW0CMTAAYnJpZBExdTE5cnoxZXNRYkY2NnhlU3NydGMGYXBwX2lkEDIyMjAzOTE3ODgyMDA4OTIAAR63hztmLI-wGjE9tpiIZRE59x_lik-Q-ndG7Nsyxsq2c62IaP2IybkuvXAWZg_aem_STw8AsGOzHoXidtPfGEI2Q&h=AT0g-D-semRiq8H_hzjJ6Jka55W_gPB57oedHGKxacOKQPTj1FK20yVo_LXbH8wonixfdAcwe1cxNlYW62o6XxkjDkfTSzDBmM4VwxJ8T0FQnZ4X3S2xIMd6nzVh7Ptvt_NX" class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/@doctorrababmohamed11?si=z6DG3-Pp4GGIvMFS " class="w-10 h-10 rounded-lg bg-[#262626] flex items-center justify-center text-white hover:text-white hover:bg-[#c69c48] transition-all duration-300" aria-label="TikTok">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.498 6.186a2.995 2.995 0 0 0-2.108-2.117C19.548 3.5 12 3.5 12 3.5s-7.548 0-9.39.569A2.995 2.995 0 0 0 .502 6.186C0 8.045 0 12 0 12s0 3.955.502 5.814a2.995 2.995 0 0 0 2.108 2.117C4.452 20.5 12 20.5 12 20.5s7.548 0 9.39-.569a2.995 2.995 0 0 0 2.108-2.117C24 15.955 24 12 24 12s0-3.955-.502-5.814z" />
                                    <path d="M9.75 15.568V8.432L15.818 12 9.75 15.568z" fill="#000" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Expertise', 'arqamweb'); ?></span>
                        <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Marketing & Sales %1$sConsultation%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                    </div>
                    <div class="bg-gray-50 border border-gray-200 rounded-2xl p-8 lg:p-12 mb-12">
                        <p class="text-gray-600 text-lg leading-relaxed mb-8"><?php esc_html_e('She specializes in providing tailored consultation for:', 'arqamweb'); ?></p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></div><span class="text-gray-900"><?php esc_html_e('Marketing Strategy Development', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></div><span class="text-gray-900"><?php esc_html_e('Sales Funnel Optimization', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></div><span class="text-gray-900"><?php esc_html_e('Brand Positioning & Messaging', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></div><span class="text-gray-900"><?php esc_html_e('Digital Presence Enhancement', 'arqamweb'); ?></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0"></div><span class="text-gray-900"><?php esc_html_e('Customer Experience & Engagement Planning', 'arqamweb'); ?></span>
                            </div>
                        </div>
                        <p class="text-gray-600 mt-8 leading-relaxed"><?php esc_html_e('Her consultations help businesses identify growth opportunities, refine their brand voice, and build sustainable marketing structures.', 'arqamweb'); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28" style="background-color: rgb(20, 17, 11);">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Background', 'arqamweb'); ?></span>
                        <h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Practical %1$sExpertise%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="gradient-card border border-border/50 rounded-2xl p-6 hover-glow">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-6 h-6 text-primary">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg></div>
                            <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('SME Marketing Frameworks', 'arqamweb'); ?></h3>
                            <p class="text-muted-foreground text-sm"><?php esc_html_e('Building marketing frameworks for SMEs and startups', 'arqamweb'); ?></p>
                        </div>
                        <div class="gradient-card border border-border/50 rounded-2xl p-6 hover-glow">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-6 h-6 text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg></div>
                            <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Personal Branding', 'arqamweb'); ?></h3>
                            <p class="text-muted-foreground text-sm"><?php esc_html_e('Coaching individuals on personal branding and self-marketing', 'arqamweb'); ?></p>
                        </div>
                        <div class="gradient-card border border-border/50 rounded-2xl p-6 hover-glow">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-6 h-6 text-primary">
                                    <path d="M12 7v14"></path>
                                    <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                </svg></div>
                            <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Training Programs', 'arqamweb'); ?></h3>
                            <p class="text-muted-foreground text-sm"><?php esc_html_e('Designing practical training programs that bridge theory and real-world application', 'arqamweb'); ?></p>
                        </div>
                        <div class="gradient-card border border-border/50 rounded-2xl p-6 hover-glow">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-primary">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                </svg></div>
                            <h3 class="font-heading text-lg font-semibold text-foreground mb-2"><?php esc_html_e('Women Entrepreneurs', 'arqamweb'); ?></h3>
                            <p class="text-muted-foreground text-sm"><?php esc_html_e('Supporting women entrepreneurs with actionable marketing roadmaps', 'arqamweb'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Education', 'arqamweb'); ?></span>
                            <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Academic %1$sBackground%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                            <p class="text-gray-600 leading-relaxed mb-6"><?php esc_html_e('Dr. Rabab combines her practical experience with a solid academic foundation in:', 'arqamweb'); ?></p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 text-primary flex-shrink-0">
                                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                        <circle cx="12" cy="8" r="6"></circle>
                                    </svg><span class="text-gray-900"><?php esc_html_e('Marketing & Business Development', 'arqamweb'); ?></span></li>
                                <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 text-primary flex-shrink-0">
                                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                        <circle cx="12" cy="8" r="6"></circle>
                                    </svg><span class="text-gray-900"><?php esc_html_e('Digital Marketing Principles', 'arqamweb'); ?></span></li>
                                <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-5 h-5 text-primary flex-shrink-0">
                                        <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                                        <circle cx="12" cy="8" r="6"></circle>
                                    </svg><span class="text-gray-900"><?php esc_html_e('Consumer Behavior & Market Research', 'arqamweb'); ?></span></li>
                            </ul>
                            <p class="text-gray-600 mt-6 leading-relaxed"><?php esc_html_e('Her academic background enhances her ability to deliver structured, insightful, and well-grounded marketing programs.', 'arqamweb'); ?></p>
                        </div>
                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-8 lg:p-10">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mic w-7 h-7 text-primary">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                    <line x1="12" x2="12" y1="19" y2="22"></line>
                                </svg></div>
                            <h3 class="font-heading text-xl font-semibold text-gray-900 mb-4"><?php esc_html_e('Marketing Prescription Podcast', 'arqamweb'); ?></h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4"><?php esc_html_e('She is the founder of the initiative "Marketing Prescription (Rocheta El Tasweeq)", created to offer simplified and accessible marketing education for women and beginners entering the digital marketing field.', 'arqamweb'); ?></p>
                            <p class="text-primary text-sm italic"><?php esc_html_e('"Just like every illness has its prescription, every business has its marketing prescription."', 'arqamweb'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28" style="background-color: rgb(19, 17, 10);">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center"><span class="text-primary font-medium tracking-wider uppercase text-sm"><?php esc_html_e('Purpose', 'arqamweb'); ?></span>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-foreground mt-3 mb-8"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Her %1$sMission%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                    <blockquote class="text-xl md:text-2xl text-foreground italic leading-relaxed mb-8"><?php esc_html_e('"To empower individuals and women entrepreneurs with the marketing knowledge, tools, and confidence they need to create sustainable growth and real professional impact."', 'arqamweb'); ?></blockquote>
                    <p class="text-muted-foreground text-lg"><?php esc_html_e('She believes marketing should be accessible, simplified, and aligned with each person\'s or business\'s actual needs.', 'arqamweb'); ?></p>
                </div>
            </div>
        </section>
        <section class="py-20 lg:py-28 bg-white">
            <div class="container mx-auto px-4">
                <div class="bg-gray-50 border border-gray-200 rounded-2xl p-8 lg:p-16 text-center max-w-4xl mx-auto relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                    <div class="relative z-10">
                        <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?php /* translators: %1$s: opening span tag, %2$s: closing span tag */ printf(esc_html__('Book %1$sConsultation Now%2$s', 'arqamweb'), '<span class="text-gradient-gold">', '</span>'); ?></h2>
                        <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto"><?php esc_html_e('Ready to transform your marketing strategy? Book a consultation with Dr. Rabab and take the first step toward sustainable business growth.', 'arqamweb'); ?></p>
                        <a href="<?php echo ($book_page = get_page_by_path('book-consultation')) ? get_permalink($book_page->ID) : ''; ?>">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-to-r from-gold to-gold-dark text-primary-foreground font-semibold hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 h-14 rounded-lg px-10 text-base"><?php esc_html_e('Book Your Session', 'arqamweb'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div><!-- #primary -->




<?php get_footer(); ?>