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
		<p class="descriptionProjet"><?php echo couper_string(get_field('description_du_projet'), 180);?></p>
		<p class="typeCoursProjet"><?php echo get_field('type_de_cours');?></p>
	</section>
</article><!-- #post-<?php //the_ID(); ?> -->

	
	<!--Ajout-->
	<div class="boiteProjet">
		<div class="petiteBoite">
			<div class="informationsVisuelles">
				<h2 class="boutonRetour">Retour</h2>
				<!-- Définie l'image placée -->
				<div class="zoomSectionImage">
					<div class="flechePrecedante"></div>
					<?php if(has_post_thumbnail()):
						echo the_post_thumbnail();
					else : 
					?>
					<img src="http://eddym11.sg-host.com/wp-content/uploads/2021/09/cat.jpg" alt="logo par défaut" />
					<?php endif; ?>
					<div class="flecheSuivante"></div>
				</div>
				<?php the_title( '<h1>', '</h1>' );?>
				<p class="descriptionLongueProjet"><?php echo get_field('description_du_projet');?></p>
			</div>
			<!--<a href="<?php //echo esc_url( $category_link );?>" title="projetIndividuel" class="auteurProjet">Voir plus de projets de <?php //echo get_field('auteur');?></a>-->

			<!--
			<script>
			 	auteur = document.querySelectorAll("article");
				//let auteur = document.querySelectorAll(".article");
				for (let i = 0; i < auteur.length; i++) {
				auteur[i].addEventListener("click",/ function() {
					<?php //$nomAuteur = get_field('auteur');
					 //if(isset($_COOKIE['auteurProjet'])) {
						//setcookie('auteurProjet', $auteurProjet, time()+86400); 
						//}
					 ?>
					console.log($nomAuteur);
					//setcookie("auteurProjet", $nomAuteur, time() + 5*365*24*60*60);
				});
			}
			</script>-->

			<div class="sectionCoteProjet">
				<p>Réalisation de : <span class="break"></span><?php echo get_field('auteur');?></p>
				<p>Réalisation en : <span class="break"></span><?php echo get_field('annee_de_realisation');?></p>
				<p>Dans le cadre du cours de : <span class="break"></span><?php echo get_field('nom_du_cours');?></p>
				<p>Enseignant : <span class="break"></span><?php echo get_field('nom_enseigant');?></p>
				<p>Logiciel(s) utilisé(s) : <span class="break"></span><?php echo get_field('logiciels');?></p>
				
				<?php if( !empty( get_field('lien_vers_le_projet'))):?>
				<a href="<?php echo get_field('lien_vers_le_projet');?>" target="_blank">Lien vers le projet</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

     