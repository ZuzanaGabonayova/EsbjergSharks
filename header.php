<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>


<div id="page" class="hfeed site">
	<nav class="nav">
			<div class="nav-left">
				
				<a href="/esbjerg-sharks/#team">Team</a>
				<a href="https://zuzana-gabonayova.com/esbjerg-sharks/shop/">Fanshop</a>
				<a href="https://zuzana-gabonayova.com/esbjerg-sharks/cart/">Cart</a>
			</div>
			<div class="nav-center">
				<a href="/esbjerg-sharks/"><img src="https://zuzana-gabonayova.com/esbjerg-sharks/wp-content/uploads/2022/12/logo_for_light_mode.png" alt=""></a>
				<button onclick="toggleHamburger()" class="hamburger-btn"><img src="https://zuzana-gabonayova.com/esbjerg-sharks/wp-content/uploads/2022/12/Hamburger.png" alt=""></button>	
			</div>
			<div class="nav-right">
				<a href="">Gallery</a>
				<a href="/esbjerg-sharks/#news">News</a>
				<a href="#contact">Contact</a>
			</div>
</nav>

	<?php do_action( 'storefront_before_header' ); ?>
	




	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );


