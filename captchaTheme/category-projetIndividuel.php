<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 * 
 * OLD - A SUPPRIMER
 */
get_header();
?>

	<main id="primary" class="site-main">

	
	<?php
		// Get the ID of a given category
		$category_id = get_cat_ID('projet');
		// Get the URL of this category
		$category_link = get_category_link( $category_id );
		?>
		<a href="<?php echo esc_url( $category_link ); ?>" title="projet">Retour aux projets</a>

		
		<?php
			if(isset($_GET["auteurProjet"])) {
				setcookie("auteurProjet", $auteurProjet, time() + 5*365*24*60*60);
			  }
		?>
		
		<?php if ( have_posts() ) : ?>




			<div class="listeProjets">

			<?php

			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
		
			get_template_part( 'template-parts/content', 'projet' );

			endwhile;?>
			</div>
			<?php
		endif;
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
