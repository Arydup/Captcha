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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'under' ); ?></a>

	<header id="masthead" class="site-header">
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
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!--Librairie JS pour le darkmode-->
	<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
	<script>const darkmode = new Darkmode();</script>