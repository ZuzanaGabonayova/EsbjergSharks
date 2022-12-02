<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary-stop" class="content-area-stop">
		<main id="main-stop" class="site-main-stop" role="main-stop">
        
		<?php
		if ( have_posts() ) :

			

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="player-box">
        <div class="player-headline">
            <p>team</p>
            <div class="players-coaches">
                <p>player</p>
                <p>coaches</p>
            </div>
        </div>

        <div class="player-info">
            
            <img src="<?php the_field('player_img'); ?>" />
            <div class="player-text">

                <p><?php the_field("p_number") ?></p>
                <p><?php the_field("p_name") ?></p>
                <p><?php the_field("p_age") ?></p>
                <p>---</p>
                <p><?php the_field("p_posis") ?></p>
                <p><?php the_field("p_stick") ?></p>
                <p><?php the_field("p_country") ?></p>
                

            </div>
            <div></div>


        </div>

        <div class="player-box-img">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">
            <img src="http://myesbjergsharks.local/wp-content/uploads/2022/12/DSCCCC_1801.png" alt="">


    </div>

    </div>



<?php
do_action( 'storefront_sidebar' );
get_footer();
