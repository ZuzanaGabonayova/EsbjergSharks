<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer>
		<div class="footer-container">
			<div id="contact" class="footer-column">
				<div>
					<span class="footer-column-header">ESBJERG SHARKS</span>  
					<span class="footer-column-header">FLOORBALL CLUB </span>
				</div>
				<div>
					<span>Engsvinget 30</span>
					<span>Bramming 6740</span> 
					<span>Denmark</span>
				</div>
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2261.8214790616057!2d8.7131267159194!3d55.465778780477606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b3c68c01bfb9b%3A0x3642a1a1ae9187b6!2sEngsvinget%2030%2C%206740%20Bramming!5e0!3m2!1sen!2sdk!4v1670183155856!5m2!1sen!2sdk" 
					width="600" height="450" style="border:0;" allowfullscreen="" 
					loading="lazy" referrerpolicy="no-referrer-when-downgrade">
				</iframe>

			</div>
			<div class="footer-column">
				<div>
					<span class="footer-column-header"> Bestyrelsen </span>
				</div>
				<div>
					<span class="footer-column-subheader">Formand</span>
					<span>Kenneth Falkesgaard</span>
					<span>+45 60 40 95 08</span>
					<span>formand@esbjergsharks.dk</span>     	
				</div>
				<div>
					
					<span class="footer-column-subheader">Næstformand</span>
					<span>Sille Højbo Andersen</span>
					<span>+45 60 14 73 37</span>					
				</div>
				<div>
					<span class="footer-column-subheader">Kasserer</span>
					<span>Nicki Lund Kristensen</span>
					<span>+45 60 40 96 24</span>
					<span>faktura@esbjergsharks.dk</span>	
				</div>
			</div>
			<div class="footer-column">
				<div class="hide-mobile">
					<span class="footer-blue-text">&nbsp;</span>
				</div>
				<div>
					<span class="footer-column-subheader">Bestyrelsesmedlem</span>
					<span>Mette Skærbæk</span>
					<span>+45 40 73 22 11</span>
				</div>
				<div>
					<span class="footer-column-subheader">Bestyrelsesmedlem</span>
					<span>Kian Pedersen </span>
					<span>+45 50 41 48 89</span>
				</div>
				<div>
					<span class="footer-column-subheader">Bestyrelsesmedlem</span>
					<span>Lene Chrestensen</span>
				</div>
			</div>
			<div class="footer-column">
				<div>
					<span class="footer-column-header">Dommere </span>
				</div>		 	
				<div>
					<span class="footer-column-subheader">Dommeransvarlig</span>
					<span>Jeppe Kristensen </span>
					<span>+45 26 22 26 42</span>
					<span>jeaver79@gmail.com</span>

				</div>
				<div>
					<span class="footer-column-subheader">Dommere</span>
					<span>Janni W Nielsen </span>
					<span>Jeppe Kristiansen </span>
					<span>Kaj Andersen</span>
					<span>Johnny Olesen</span>
					<span>Oliver Vejrum</span>
					<span>Martin Klindworth</span>
				</div>									
			</div>

			<div class="footer-column center-content">
				<a href=""><img src="https://zuzana-gabonayova.com/esbjerg-sharks/wp-content/uploads/2022/12/icons8-facebook-500.png" alt=""></a>
				<a href=""><img src="https://zuzana-gabonayova.com/esbjerg-sharks/wp-content/uploads/2022/12/icons8-instagram-500.png" alt=""></a>
			</div>

		</div>
	</footer>

	



	<?php do_action( 'storefront_after_footer' ); ?>
	

</div><!-- #page -->
<?php wpb_hook_javascript(); ?>

<?php wp_footer(); 
?>

</body>
</html>
