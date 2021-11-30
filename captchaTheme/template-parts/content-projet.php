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
		<?php echo the_post_thumbnail();?>
		<?php the_title( '<h3>', '</h3>' );?>
		<?php 
		$image = get_field('logo_du_logiciel');
		if( !empty( $image ) ): ?>
			<img class="imageLogo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
		<p>Créé par: <?php echo get_field('auteur');?></p>
		<p class="descriptionProjet"><?php echo get_field('description_du_projet');?></p>
		<p class="typeCoursProjet"><?php echo get_field('type_de_cours');?></p>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
     