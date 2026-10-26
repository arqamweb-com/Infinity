<?php

/**
 * Register Custom Image Sizes for Resources Link Post
 */
add_image_size('client-image', 600, 400, true);



/**
 * Remove Flex in Container
 */
add_filter('astra_apply_flex_based_css', '__return_false');

/**
 * Add Svg To Media Library
 */

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');


/**
 * Footer Services Menu Link Classes
 */
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'footer-services') {
        $atts['class'] = 'text-muted-foreground hover:text-primary transition-colors';
    }
    return $atts;
}, 10, 3);


/**
 * Helper function
 * Get Page URL By Slug With WPML Support
 */

if (!function_exists('get_page_url_by_slug')) {
    function get_page_url_by_slug(string $slug, ?string $lang = null): ?string
    {

        if (defined('ICL_SITEPRESS_VERSION')) {
            $target_lang = $lang ?? apply_filters('wpml_current_language', null);
            $default_lang = apply_filters('wpml_default_language', null);

            do_action('wpml_switch_language', $default_lang);
            $page = get_page_by_path($slug, OBJECT, 'page');
            do_action('wpml_switch_language', $target_lang);

            if (!$page) {
                return null;
            }

            $translated_id = apply_filters('wpml_object_id', (int) $page->ID, 'page', true, $target_lang);

            return $translated_id ? get_permalink($translated_id) : null;
        }

        $page = get_page_by_path($slug, OBJECT, 'page');
        return $page ? get_permalink($page->ID) : null;
    }
}
