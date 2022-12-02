<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

/**
 *removes the storefront sidebar
 */ 
function tk_remove_storefront_sidebar() {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
  }
  add_action( 'get_header', 'tk_remove_storefront_sidebar' );

  /**
 * Disable the Search Box in the Storefront Theme
 */
add_action( 'init', 'jk_remove_storefront_header_search' );
function jk_remove_storefront_header_search() {
remove_action( 'storefront_header', 'storefront_product_search',             40 );

}
/**
 * Disable the Cart in the Storefront Theme
 */
add_action( 'init', 'jk_remove_storefront_header_cart' );
function jk_remove_storefront_header_cart() {
remove_action( 'storefront_header', 'storefront_header_cart',             60 );
}

/**
 * disable the storefront header
 */
add_action( 'init', 'jk_remove_storefront_header' );
function jk_remove_storefront_header() {
remove_action( 'storefront_header', 'storefront_header_container',             0 );
}

/**
 * disable the storefront footer
 */
add_action( 'init', 'jk_remove_storefront_footer' );
function jk_remove_storefront_footer() {
remove_action( 'storefront_footer', 'storefront_footer_widgets',             10 );
remove_action( 'storefront_footer', 'storefront_credit',             20 );
}

/**
 * disable the storefront primary navigation
 */
add_action( 'init', 'jk_remove_storefront_primary_navigation' );
function jk_remove_storefront_primary_navigation() {
remove_action( 'storefront_header', 'storefront_primary_navigation',             50 );
}

/**
 * disable the storefront footer cart
 */
add_action( 'init', 'jk_remove_storefront_footer_cart' );
function jk_remove_storefront_footer_cart() {
remove_action( 'storefront_footer', 'storefront_handheld_footer_bar',             999 );
}

/**
 * disable site-branding
 */

add_action( 'init', 'jk_remove_storefront_site_branding' );
function jk_remove_storefront_site_branding() {
remove_action( 'storefront_header', 'storefront_site_branding',             20 );
}

/**
 * disable the hfeed site
 */
add_action( 'init', 'jk_remove_storefront_hfeed' );
function jk_remove_storefront_hfeed() {
remove_action( 'storefront_header', 'storefront_skip_links',             0 );
}



    


/**
 * Makes the navigation menu sticky
 */

function wpb_hook_javascript() {
    ?>
    <script type="text/javascript">
        console.log('javascript works');
        
        window.onscroll = function() {myFunction()};
        
        function myFunction() {
          if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            console.log('if');
            document.querySelector("nav").classList.add("minified");
          } else {
            console.log('else');
            document.querySelector("nav").classList.remove("minified");
          }
        }

    </script>
    <?php
}