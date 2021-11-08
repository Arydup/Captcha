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
	
	<section class='projet'>
		<?php the_title( '<h3>', '</h3>' );?>
		<div class="">
			<p><?php echo get_field('auteur');?></p>
			<?php echo the_post_thumbnail();?>
		</div>

	</section>
</article><!-- #post-<?php the_ID(); ?> -->
