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
			<nav class='session'>
				<a href="#">Session 1</a>
				<a href="#">Session 2</a>
				<a href="#">Session 3</a>
				<a href="#">Session 4</a>
				<a href="#">Session 5</a>
				<a href="#">Session 6</a>
			</nav>
			<nav class='session'>
				<a href="#">1M1</a>
				<a href="#">1M2</a>
				<a href="#">1W1</a>
				<a href="#">1J1</a>
			</nav>
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
			get_template_part( 'template-parts/content', 'projet' );

			endwhile;

		endif;
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
