<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
$image = get_field('logo_du_logiciel');
?>

<article class="<?php echo get_field('type_de_cours'); ?>"<?php post_class();?>>
	<section class='projet'>
		
		<?php if( has_post_thumbnail()):
		echo the_post_thumbnail('medium');
		else : 
		?>
		<img class="imageLogo" src="http://eddym11.sg-host.com/wp-content/uploads/2021/09/cat.jpg" alt="logo par défaut" />
		<?php endif; ?>

		<?php the_title( '<h3>', '</h3>' );?>
		<?php 
		if( !empty( $image ) ): ?>
			<img class="imageLogo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php
			else :		
			?>
			<img class="imageLogo" src="http://eddym11.sg-host.com/wp-content/uploads/2021/09/cat.jpg" alt="logo par défaut" />
		<?php endif; ?>
		<p>Créé par: <?php echo get_field('auteur');?></p>
		<p class="descriptionProjet"><?php echo get_field('description_du_projet');?></p>
		<p class="typeCoursProjet"><?php echo get_field('type_de_cours');?></p>
	</section>
</article><!-- #post-<?php //the_ID(); ?> -->

	
	<!--Ajout-->
	<div class="boiteProjet">
		<div class="petiteBoite">
			<h2 class="boutonRetour">Retour</h2>
			<!-- Définie l'image placée -->
			<div class="zoomSectionImage">
				<div class="flechePrecedante"></div>
				<?php if(has_post_thumbnail()):
					echo the_post_thumbnail('medium');
				else : 
				?>
				<img src="http://eddym11.sg-host.com/wp-content/uploads/2021/09/cat.jpg" alt="logo par défaut" />
				<?php endif; ?>
				<div class="flecheSuivante"></div>
			</div>
			<?php the_title( '<h1>', '</h1>' );?>
			<p class="descriptionProjet"><?php echo get_field('description_du_projet');?></p>

			<?php
				// Get the ID of a given category
				$category_id = get_cat_ID( 'projetIndividuel' );
				// Get the URL of this category
				$category_link = get_category_link( $category_id );
			?>

			<a href="<?php echo esc_url( $category_link );?>" title="projetIndividuel">Voir plus de projets de <?php echo get_field('auteur');?></a>

			<div class="sectionCoteProjet">
				<p>Réalisation de :<?php echo get_field('auteur');?></p>
				<p>Réalisation en :<?php echo get_field('annee_de_realisation');?></p>
				<p>Dans le cadre du cours de :<?php echo get_field('nom_du_cours');?></p>
				<p>Enseignant :<?php echo get_field('nom_enseigant');?></p>
				<p>Logiciel(s) utilisé(s) :<?php echo get_field('logiciels');?></p>
				
				<?php if( !empty( get_field('lien_vers_le_projet'))):?>
				<a href="<?php echo get_field('lien_vers_le_projet');?>" target="_blank">Lien vers le projet</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

     