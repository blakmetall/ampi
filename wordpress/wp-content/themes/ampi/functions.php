<?php

date_default_timezone_set('America/Mexico_City');
define('THEME_PATH', get_template_directory_uri());
define('LIVE_SITE', ($_SERVER['HTTP_HOST']=='ampi.clicbrands.com') ? false : false );
define('SITE_DOMAIN', (LIVE_SITE) ? 'https://www.vallartanayaritmls.com' : 'http://ampi.clicbrands.com');
define('THEME_VERSION', (LIVE_SITE) ? 1 : strtotime('now'));
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
define('THEME_ROOT', SITE_ROOT . 'wp-content/themes/ampi/');
define('LANG', (defined('ICL_LANGUAGE_CODE')) ? ICL_LANGUAGE_CODE : 'en' );
define('CAPTCHA', 'tT2AE~@MjDK}c2e=');

/** APPEND GET PARAMETERS */
    function append_get_params(){
        $q = trim($_SERVER['QUERY_STRING']);
        return (!empty($q)) ? '?' . urlencode($q) : '';
    }
/** END **/

/** Disable W3TC footer comment for everyone but Admins (single site) / Super Admins (network mode) **/
    add_filter( 'w3tc_can_print_comment', '__return_false', 10, 1 );
/** END **/

/* CLEAN UP HEAD OPTIONS */
    function clean_up_head () {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );

        remove_action('wp_head', 'wp_generator');                // #1
        remove_action('wp_head', 'wp_shortlink_wp_head'); //removes shortlink.
    }
    add_action('after_setup_theme', 'clean_up_head');

    function wpb_imagelink_setup() {
        $image_set = get_option( 'image_default_link_type' );

        if ($image_set !== 'none') {
            update_option('image_default_link_type', 'none');
        }
    }
    add_action('admin_init', 'wpb_imagelink_setup', 10);
/** END **/

/** Resize uploaded image to fit scale media image sizes **/
    function binary_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
        if ( !$crop ) return null; // let the WordPress default function handle this

        $aspect_ratio = $orig_w / $orig_h;
        $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

        $crop_w = round($new_w / $size_ratio);
        $crop_h = round($new_h / $size_ratio);

        $s_x = floor( ($orig_w - $crop_w) / 2 );
        $s_y = floor( ($orig_h - $crop_h) / 2 );

        return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
    }
    add_filter( 'image_resize_dimensions', 'binary_thumbnail_upscale', 10, 6 );
/** END **/

/* MENU OPTIONS */
    function register_main_menu() {
        register_nav_menu('main', __( 'main' ));
    }
    add_action( 'init', 'register_main_menu' );
/* END */

/** YOAST IMAGE OPENGRAPH OVERRIDE **/
    function filter_wpseo_opengraph_image( $img ) {
        return $img;
    };
    add_filter( 'wpseo_opengraph_image', 'filter_wpseo_opengraph_image', 10, 1 );
/** END **/

/** YOAST SEO OVERRIDE **/
    add_filter('wpseo_title', function($title) {
        return __($title);
    });
    add_filter('wpseo_metadesc', function($desc) {
        return __($desc);
    });
    add_filter('wpseo_canonical', function($canonical) {
        if(!is_home()){
            $canonical = rtrim($canonical, '/');
        }
        return $canonical . append_get_params();
    });
    add_filter('wpseo_prev_rel_link', function($prev) {
        if(!is_home()){
            $prev = str_replace('/"','"',$prev);
        }
        $q = append_get_params();
        return str_replace('" />', $q . '" />' , $prev);
    });
    add_filter('wpseo_next_rel_link', function($next) {
        if(!is_home()){
            $next = str_replace('/"','"',$next);
        }
        $q = append_get_params();
        return str_replace('" />', $q . '" />' , $next);
    });
/** YOAST END **/

/** UNFILTERED UPLOADS FLAG */
    define('ALLOW_UNFILTERED_UPLOADS', true) ;
/** END UNFILTERED UPLOADS */


/** ALLOW SVG UPLOADS **/
add_action('upload_mimes', function($file_types){
    $new_filetypes = ['svg' => 'image/svg+xml'];
    return array_merge($file_types, $new_filetypes );
});
/** ALLOW SVG UPLOADS **/

if(!is_admin()){
    show_admin_bar(true);
    require_once 'includes/app.php';
}
