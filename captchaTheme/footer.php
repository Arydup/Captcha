<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

<footer id="colophon" class="site-footer">

	<div class="site-info">
		<div class="pied">
		<div class="reseaux">
<a href="https://fr-ca.facebook.com/maisonneuvetim/" title="Facebook (TIM)"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/maisonneuvetim/?hl=fr" title="Instagram (TIM)"><i class="fab fa-instagram"></i></a>
<a href="https://twitter.com/cdemaisonneuve?lang=fr" title="Twitter (Collège)"><i class="fab fa-twitter"></i></a>
<a href="https://www.youtube.com/channel/UCEP_4G7I40t6if8BAu0TNMA" title="YouTube (TIM)"><i class="fab fa-youtube"></i></a>
</div>
		<div class="addresse">
			<p>3800, rue sherbrooke est</p>
			<p>Montréal, Qc</p>
			<p>H1X 2A2</p>
		</div>

</div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'under' ) ); ?>">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'under' ), 'WordPress' );
				?>
		</a>
		<!--<span class="sep"> | </span>-->
		<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'under' ), 'under', '<a href="http://underscores.me/">Abinassh</a>' );
				?>
		<p>Un thème de : <span class="nomAuteurs">Aryane Duperron, Stéphanie Plante, Abinassh Kanesh et Cyrile Tanguay</span></p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
