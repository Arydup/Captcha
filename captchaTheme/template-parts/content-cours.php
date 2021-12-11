<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

?>


	<!-- header class="entry-header" -->
		<?php 
		//echo $chaine_titre;
		?>
	<!--/header> .entry-header -->

	


<?php
	$typeCar = substr(get_the_title(),5,1);
	switch($typeCar){
		case 'J': $class = 'jeu'; break;
		case 'W': $class = 'web'; break;
		case 'P': $class = 'web'; break;
		case 'N': $class = 'specifique'; break;
		case 'C': $class = 'specifique'; break;
		case 'E': $class = 'specifique'; break;
		case 'M': $class = '2D-3D-video'; break; 
	} 
	//echo $class;
	?> 	
	<section class='cours affiche-cours <?php echo $class ?>'>
	<div class="text">
	
	<h2> 
	<?php switch(get_field('type_de_cours')){
		case 'jeu': '<i class="fas fa-gamepad"></i>'; break;
		case 'web': echo'<i class="fab fa-internet-explorer"></i>'; break;
		case 'specifique': '<i class="fas fa-book"></i>'; break;
		case 'video': echo '<i class="fas fa-video"></i>'; break;
		case 'design': '<i class="fas fa-paint-brush"></i>'; break;
		case '3d': '<i class="fas fa-cube"></i>'; break;
		default : echo '<i class="fas fa-video"></i>' ;
	} 
	the_title( '<span>', '</span>');
	?>
	</h2>
	<?php
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
			<a href="https://eddym11.sg-host.com/category/projet/">Voir plus de projets</a>
			</figcaption>
		</figure>
	<?php endif ?>




	</section>

