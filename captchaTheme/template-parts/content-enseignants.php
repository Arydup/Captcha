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
	<section class='enseignants'>
		<?php echo the_post_thumbnail();?>
		<?php the_title( '<h3>', '</h3>' );?>
		
	</section>
	<section class='InfoEnseignants'>
		<div>
			<p><?php echo get_field('description_de_lenseignant');?></p>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->