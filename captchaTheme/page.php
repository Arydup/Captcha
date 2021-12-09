<!-- Image à afficher en grand pour la page vie étudiante  -->
<div id="imageClick" style="display: none;">
    <div class="fond" onclick="leFond()">

<div id="imgAffiche"></div>

</div>
</div>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();

?>

<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();

			if(get_the_title()==="Accueil"):
				get_template_part( 'template-parts/content', 'accueil' );
			elseif(get_the_title()==="Stages"):
				get_template_part( 'template-parts/content', 'stages' );
			elseif(get_the_title()==="Avenir"):
				get_template_part( 'template-parts/content', 'avenir' );
			elseif(get_the_title()==="Vie étudiante"):
				get_template_part( 'template-parts/content', 'vies' );
			else :
				get_template_part( 'template-parts/content', 'page' );
			endif;

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();