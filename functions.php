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

function load_resources()
{
    wp_enqueue_style("bootstrap", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    wp_enqueue_style("slick", "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");

    wp_register_script('jquery3', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true); // jQuery v3
    wp_enqueue_script('jquery3');
    wp_script_add_data( 'jquery3', array( 'integrity', 'crossorigin' ) , array( 'sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n', 'anonymous' ) );

    wp_register_script('Bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('Bootstrap4');
    wp_script_add_data( 'Bootstrap4', array( 'integrity', 'crossorigin' ) , array( 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', 'anonymous' ) );

    wp_enqueue_script("ajax", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js");

/*     wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");

    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), true); */
}
add_action("wp_enqueue_scripts", "load_resources");


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
 * Remove breadcrumbs for Storefront theme
 */
add_action( 'init', 'wc_remove_storefront_breadcrumbs');

function wc_remove_storefront_breadcrumbs() {
  remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
}



/**
 * Makes the navigation menu sticky
 * and players and coaches work
 */

function wpb_hook_javascript() {
  ?>
  <script type="text/javascript">
      console.log('javascript works');

      function toggleHamburger() {
        const nav = document.querySelector('.nav');
        nav.classList.toggle('nav-open');
        
      }
      
      
      window.onscroll = function() {myFunction()};

      let animationElements = document.querySelectorAll('.fadeUpOnSeen');
      
      function myFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {         
          document.querySelector("nav").classList.add("minified");
          document.querySelector("body").classList.add("minified");
        } else {
          document.querySelector("nav").classList.remove("minified");
          document.querySelector("body").classList.remove("minified");
        }
        animationElements.forEach(element => {
          let elementPosition = element.getBoundingClientRect().top;
          let screenPosition = window.innerHeight + window.scrollY;
          if (elementPosition < screenPosition) {
            element.classList.add('fadeUpSeen');
          }
        });


      }
      myFunction();

      

      function updatePlayerHero(event) {
          const playerHero = document.querySelector('.player-hero');
          const playerNumber = playerHero.querySelector('.player-hero-info__number');
          const playerName = playerHero.querySelector('.player-hero-info__name');
          const playerNameLast = playerHero.querySelector('.player-hero-info__lastname');
          const playerAge = playerHero.querySelector('.player-hero-info__age');
          const playerPosition = playerHero.querySelector('.player-hero-info__position');
          const playerStickside = playerHero.querySelector('.player-hero-info__stickside');
          const playerCountry = playerHero.querySelector('.player-hero-info__country');
          const playerImg = playerHero.querySelector('img');

          const playerTarget = event.target.parentElement;

          playerNumber.innerText = playerTarget.getAttribute('data-number');
          playerName.innerText = playerTarget.getAttribute('data-name');
          playerNameLast.innerText = playerTarget.getAttribute('data-lastname');
          playerAge.innerText = playerTarget.getAttribute('data-age');
          playerPosition.innerText = playerTarget.getAttribute('data-position');
          playerStickside.innerText = playerTarget.getAttribute('data-stickside');
          playerCountry.innerText = playerTarget.getAttribute('data-country');
          playerImg.src = playerTarget.querySelector('img').src;

      }

      const playerIcons = document.querySelectorAll('.player-icon');
      playerIcons.forEach(playerIcon => {
          playerIcon.addEventListener('click', updatePlayerHero);
      });

      function toggleTeamView(choice) {
          const teamPlayers = document.querySelector('.player-container');
          const teamCoaches = document.querySelector('.coach-container');
          const teamSelector = document.querySelectorAll('.team-selector span');
          teamSelector.forEach(selector => {
              selector.classList.remove('active');
          });
          window.event.target.classList.add('active');

          if (choice === 'player') {
              teamPlayers.classList.remove('hidden');
              teamCoaches.classList.add('hidden');
          } else {
              teamPlayers.classList.add('hidden');
              teamCoaches.classList.remove('hidden');
          }
      }

  </script>
  <?php


}

function slide_partners(){
  ?>
  <script type="text/javascript">
    console.log("works");
		$(document).ready(function() {
 		  $('.customer-logos').slick({
   			slidesToShow: 6,
    		slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1000,
			arrows: true,
			dots: false,
			pauseOnHover: false,
			responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 4
			}
			}, {
			breakpoint: 520,
			settings: {
				slidesToShow: 3
			}
			}]
		});
		});
    </script>
  <?php
}