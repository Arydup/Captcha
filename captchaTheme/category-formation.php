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

			
			<?php

			
			global $chaine_titre;
			$chaine_titre = "";
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$chaine_titre.= get_the_title() . " _ ";
				

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', 'formation' );

			endwhile;
			//echo "-------------------------- <br>";
			echo $chaine_titre;
			echo "-------------------------- <br>";
			

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
