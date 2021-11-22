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
		<section class='InfoEnseignants'>
			<div class="carteInfo">
			<div class="InfoProf">
				<div class="nomProf"><p><?php the_title( '<h3>', '</h3>' );?></p></div>
				<div class="Cours"><p><?php echo get_field('type_de_cours_donnes')?></p></div>
			</div>
				<div class="photoProf"><?php echo the_post_thumbnail();?></div>
				<p><?php echo get_field('description_de_lenseignants');?></p>
			</div>
			</section>					
</section>



	
</article><!-- #post-<?php the_ID(); ?> -->

