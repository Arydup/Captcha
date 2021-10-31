<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<p> </p>' );
		//$chaine_titre.= get_the_title(); 
		//echo $chaine_titre;
		?>
	</header><!-- .entry-header -->

	<?php //under_post_thumbnail(); ?>

	<div class="entry-content">

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
