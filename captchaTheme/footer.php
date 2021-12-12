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
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill-opacity="1" d="M0,224L80,197.3C160,171,320,117,480,90.7C640,64,800,64,960,96C1120,128,1280,192,1360,224L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill-opacity="1" d="M0,224L60,224C120,224,240,224,360,213.3C480,203,600,181,720,149.3C840,117,960,75,1080,64C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill-opacity="1" d="M0,96L60,96C120,96,240,96,360,117.3C480,139,600,181,720,213.3C840,245,960,267,1080,261.3C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
	
	<div class="texteFooter">
			<div class="reseaux">
				<a href="https://fr-ca.facebook.com/maisonneuvetim/" title="Facebook (TIM)"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/maisonneuvetim/?hl=fr" title="Instagram (TIM)"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/cdemaisonneuve?lang=fr" title="Twitter (Collège)"><i class="fab fa-twitter"></i></a>
				<a href="https://www.youtube.com/channel/UCEP_4G7I40t6if8BAu0TNMA" title="YouTube (TIM)"><i class="fab fa-youtube"></i></a>
			</div>
			<div class="adresse">
				<p>3800, rue sherbrooke est, Montréal,Qc, H1X 2A2</p>
			
				<div class="piedPageLogo" style="background-image: url('<?php echo esc_url( home_url( '/' ).'wp-content/uploads/2021/11/College_de_Maisonneuve_logo.png');?>')">
				<a  href="https://www.cmaisonneuve.qc.ca/" ></a>
				</div>
			</div>

		<p class="nomAuteurs">Conception et développement web par l'équipe Captcha</p>
		<p class="droitsReserve">Tous droits réservés ©2021 - Techniques d'intégration multimédia - Collège de Maisonneuve</p>
	</div>
	
	</div><!-- .site-info -->
	
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
