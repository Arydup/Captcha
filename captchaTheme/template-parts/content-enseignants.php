<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

?>

<?php
/*******************************************************************************
 * AFFICHAGE DES ARTICLES/CARTES ENSEIGNANTS DANS LA PAGE
 ******************************************************************************/
?>

<article class="EnseignantsGlobal" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class='enseignants'>
	
		<?php echo the_post_thumbnail();?>
		<?php the_title( '<h3>', '</h3>' );?>
		
</section>	
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/*******************************************************************************
 * AFFICHAGE DES CARTES POUR CHAQUE NFORMATIONS DES ENSEIGNANTS
 ******************************************************************************/
?>
<section class='InfoEnseignants'>
		
		<button  class="bouton-fermeture">X</button>
			<div class="photoProf"><?php echo the_post_thumbnail();?>
			</div>
			<div class="infoGeneralProf">
				<div class="nomProf"><p><?php the_title( '<h3>', '</h3>' );?></p></div>
				<div class="Cours"><p><?php echo get_field('type_de_cours_donnes')?></p></div>
				<div class="DescriptionEnseignant"><p><?php echo get_field('description_de_lenseignants');?></p></div>
			</div>	
</section>	



