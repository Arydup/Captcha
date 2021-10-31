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
		<?php the_title( '<p>', '</p>' );
		//echo $chaine_titre;
		?>
	</header><!-- .entry-header -->

	
	<section class='cours'>

	
	<div class="entry-content">
	<?php the_content();
	 ?>
	

	</div><!-- .entry-content -->
	<?php if(has_post_thumbnail())
	{
		the_post_thumbnail('medium');
	}
	else{
		echo '<img width="300" height="198" src="http://localhost/captcha/wp-content/uploads/2021/10/a20c5321f8d456e310e20063ae7d93a5.jpg" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy">';
	}
	?>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
