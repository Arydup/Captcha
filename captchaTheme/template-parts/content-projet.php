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
	<?php if(get_field('projet'))
	{
		the_post_thumbnail('medium');
	}
	else{
		$image = get_sub_field('image_du_projet');?>
		<img src="<?php echo $image;?>"
<?php
	}
	?>

	</section>
</article><!-- #post-<?php the_ID(); ?> -->
