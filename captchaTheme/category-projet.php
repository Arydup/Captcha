<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
get_header();
?>

	<main id="primary" class="site-main pageProjet">

		<?php if ( have_posts() ) : ?>

			<div id="filtres">
				
				<?php
				$typeCours = ['Web', 'Jeu', '3D', 'Video', 'Design'];

					for($i=0; $i<count($typeCours); $i++):?>
						<div>
						
					<label for="checkbox<?php echo $typeCours[$i]?>"><?php echo $typeCours[$i]?>
						<input type="checkbox" id="checkbox<?php echo $typeCours[$i]?>"
						name="logiciels" value="<?php echo $typeCours[$i]?>" onclick="validerCours()">
						<span class="marqueCheck"></span>
					</label>
						</div>
					<?php endfor;?>
			</div>





			<div class="listeProjets">

			<?php

			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
		
			get_template_part( 'template-parts/content', 'projet' );

			endwhile;?>
			</div>
			<a href="#" class="boutonRetourHaut">Retour vers le haut ↑</a>
			<?php
		endif;
		?>
	

	</main><!-- #main -->
<?php
get_sidebar();
get_footer();

