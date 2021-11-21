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
	<!-- header class="entry-header" -->
		<?php 
		//echo $chaine_titre;
		?>
	<!--/header> .entry-header -->

	
	<section class='cours'>

	
	<div class="entry-content">
	<?php 
	the_title( '<h2><i class="fas fa-video"></i><span>', '</span> </h2>');
	the_content();
	 ?>
	</div><!-- .entry-content -->
	<?php if(has_post_thumbnail()): ?>
	    <figure>
			<?php the_post_thumbnail('medium'); ?>
			<figcaption>
			 <a href="http://localhost:81/Captcha/projets">Voir plus de projets</a>
			</figcaption>
		</figure>
	<?php else : ?>	
		<figure>
			<img width="300" height="198" src="http://localhost/captcha/wp-content/uploads/2021/10/a20c5321f8d456e310e20063ae7d93a5.jpg" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy">	
			<a href="http://localhost:81/Captcha/projets">Voir plus de projets</a>
			</figcaption>
		</figure>
	<?php endif ?>




	</section>
</article><!-- #post-<?php the_ID(); ?> -->
