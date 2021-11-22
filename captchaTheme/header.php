<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/310974b645.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>


<?php 
	$darkmodeActive=false; 
?>

<body <?php body_class();?>>
<?php wp_body_open(); ?>
<div id="page" class="site <?php if(get_the_title()==="Accueil"):?>accueil<?php endif;?>" >
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'under' ); ?></a>

	<div class="couleurArriere"></div>
	<header id="masthead" class="site-header">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill-opacity="1" d="M0,32L60,37.3C120,43,240,53,360,53.3C480,53,600,43,720,74.7C840,107,960,181,1080,224C1200,267,1320,277,1380,282.7L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path  fill="$color__header-fond_nuit" fill-opacity="1" d="M0,300L80,300C160,300,320,300,480,250.3C640,200,800,117,960,69.3C1120,21,1280,11,1360,5.3L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				if (is_category(10)):
				?>
				<!--<video src=""></video>-->
				<!--<img width="290" height="300" src="http://localhost:81/Captcha/wp-content/uploads/2021/11/background-flow_loop_4sec.mp4" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="http://localhost:81/Captcha/wp-content/uploads/2021/10/MicrosoftTeams-image-5-290x300.jpg 290w, http://localhost:81/Captcha/wp-content/uploads/2021/10/MicrosoftTeams-image-5.jpg 337w" sizes="(max-width: 290px) 100vw, 290px">**>

				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			endif;
			$under_description = get_bloginfo( 'description', 'display' );
			if ( $under_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $under_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>

			<!--Le toggle du mode sombre-->
			<label class="modeSombre">
				<input id="modeSombre" class="modeSombre-checkbox" type="checkbox" onclick="darkmode.toggle();">
				<!--<php? if(darkmode.toogle){#modeSombre.checked}>-->
				<div class="modeSombreToggle"></div>
			</label>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'under' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill-opacity="1" d="M0,64L30,53.3C60,43,120,21,180,58.7C240,96,300,192,360,192C420,192,480,96,540,64C600,32,660,64,720,85.3C780,107,840,117,900,112C960,107,1020,85,1080,101.3C1140,117,1200,171,1260,170.7C1320,171,1380,117,1410,90.7L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<script>
    </script>
	<!--Librairie JS pour le darkmode-->
	<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
	<script>const darkmode = new Darkmode();</script>
	