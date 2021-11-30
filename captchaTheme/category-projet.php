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

	<main id="primary" class="site-main">
		

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<ol class="pagination">
				<li><a href="#" class="precedent">Précédent</a></li>

				<li><a href="" class="suivant">Suivant</a></li>
			</ol
			
			>
			<div class="listeProjets">
			<?php $chaine_bouton_radio = '';
			$nombre_projets = 0;
			?>
		
			<section class="ctrl-chiffre">
				<a href="#" class="precedent">Précédent</a>
				<?php for ($x = 0; $x <= 2; $x++) {?>
			<button><?= $x+1; ?></button>
			<?php }
			?>
			<a href="" class="suivant">Suivant</a>
								<?php echo $chaine_bouton_radio;
								$chaine_bouton_radio = '';
								$chaine_bouton_radio .= '<button class="boutons-chiffre">';
								 ?>		
							</section>
			<?php

			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 * 
				 * https://www.w3schools.com/howto/howto_js_filter_elements.asp
				 */?>
				 
				 

							<?php
			get_template_part( 'template-parts/content', 'projet' );
			$chaine_bouton_radio .= '<input class="rad-carrousel"  type="radio" name="rad-projets">';

			endwhile;?>
			<div id="filtres">
				<div>
				<input type="checkbox" id="3D"
				name="logiciels" value="3D">
				<label for="3D">3D</label>
				</div>

				<div>
				<input type="checkbox" id="web"
				name="logiciels" value="web">
				<label for="web">Web</label>
				</div>

				<div>
				<input type="checkbox" id="jeu"
				name="logiciels" value="jeu">
				<label for="jeu">Jeu</label>
				</div>

				<div>
				<input type="checkbox" id="session1"
				name="session" value="1">
				<label for="session1">Session1</label>
				</div>


				<button class="btn active" onclick="filterSelection('all')"> Show all</button>
				<button class="btn" onclick="filterSelection('cars')"> Cars</button>
				<button class="btn" onclick="filterSelection('animals')"> Animals</button>
				<button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
				<button class="btn" onclick="filterSelection('colors')"> Colors</button>
			</div>
			<?php
		endif;
		?>
		 </div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
