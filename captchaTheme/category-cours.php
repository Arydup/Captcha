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

	<main id="primary" class="site-main categoryCours">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			<nav class='session'>		<!-- Menu des sessions -->
				<a id="session_0" href="#"><i class="fas fa-caret-right"></i>Toutes les sessions&nbsp;</a>
				<a id="session_1" title="session 1" href="#">1</a>
				<a id="session_2" title="session 2"href="#">2</a>
				<a id="session_3" title="session 3"href="#">3</a>
				<a id="session_4" title="session 4"href="#">4</a>
				<a id="session_5" title="session 5"href="#">5</a>
				<a id="session_6" title="session 6"href="#">6</a>
			</nav>

			<hr class="ligne"> </hr>

			<nav class='session_cours'> <!-- Sous menu des sessions -->
				<a href="#" class='tous'>Tous</a>
				<a href="#" class='2D-3D-video'>2D/3D/Video</a>
				<a href="#"class='web'>Web</a>
				<!--<a href="#">Vidéo</a>-->
				<a href="#"class='jeu'>Jeu</a>
				<a href="#"class='specifique'>Spécifique</a>
			</nav>
			<hr class="lignedeux"> </hr>

			</header><!-- .page-header -->

			
			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content', 'cours' );

			endwhile;

		endif;
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();