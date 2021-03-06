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
				
				
			
			</header><!-- .page-header -->
			
			<div class="content">
			<section class='EnseignantsScroll'>
			
			
			<?php

			
			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content', 'enseignants' );

			endwhile;
			
			

			
			?>
			
			
			</section>
			</div>
			<section class="AnimationBulle">
			<div class="shape"></div>
			
			

			<?php

			

			
			
		endif;
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();