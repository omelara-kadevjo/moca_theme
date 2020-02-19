<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailwindcss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<style>
		@font-face {
			font-family: MuseoLight;
			src: url('<?= get_template_directory_uri() ?>/fonts/MuseoSansRounded-300.otf')
		}
		@font-face {
			font-family: MuseoRegular;
			src: url('<?= get_template_directory_uri() ?>/fonts/MuseoSansRounded-500.otf')
		}
		@font-face {
			font-family: MuseoBold;
			src: url('<?= get_template_directory_uri() ?>/fonts/MuseoSansRounded-700.otf')
		}
		@font-face {
			font-family: MuseoExtrabold;
			src: url('<?= get_template_directory_uri() ?>/fonts/MuseoSansRounded-900.otf')
		}
	</style>
</head>

<body>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tailwindcss' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title  block font-bold leading-loose tracking-wide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$tailwindcss_description = get_bloginfo( 'description', 'display' );
			if ( $tailwindcss_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tailwindcss_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<nav id="site-navigation" class="main-navigation mx-0 my-0 py-3 fixed w-full">
			<div class="container mx-auto flex items-center justify-between">
				<div>
					<?= the_custom_logo();?>
				</div>
				<div class="w-1/2">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
