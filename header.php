<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <ul class="nav-menu">
                <li class="menu-mobile">
                    <a href="#story">Histoire</a></li>
                <li class="menu-mobile">
                    <a href="#characters">Personnages</a></li>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <li class="menu-mobile">
                    <a href="#place">Lieu</a></li>
                <li class="menu-mobile">
                    <a href="#studio">Studio Koukaki</a></li>
            </ul>
            <div id="menu_burger" class="nav_burger">
                <a id="closeBtn" href="#" class="close"></a>
                <ul class="burger">
                    <!-- Logo -->
                     <img class="logo_burger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_burger.png" alt="Logo Fleurs d'oranger & Chats Errants">
                     <!-- Violet orchid -->
                     <img class="orchid_burger menu_animation"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orchid.png" alt="Image d'une orchidée violette">
                     <!-- Purple cat -->
                     <img class="purple_cat_burger menu_animation" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purple_cat" alt="Image d'un chat violet">
                     <!-- Daisy flower -->
                     <img class="daisy_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="Image d'une marguerite">
                     <!-- Orange flower -->
                     <img class="flower_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Flower.png" alt="Image d'une fleur orange">
                     <!-- Grey cat -->
                     <img class="grey_cat_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/grey_cat.png" alt="Image d'un chat gris">
                     <!-- Pink flower -->
                     <img class="random_flower_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/random_flower_burger.png" alt="Image d'une fleur rose">
                     <!-- Orange cat -->
                     <img class="orange_cat_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/orange_cat.png" alt="Image d'un chat orange">
                     <!-- Hibiscus flower -->
                     <img class="hibiscus_burger menu_animations" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus.png" alt="Image d'une fleur d'hibiscus">
                     <!-- Logo Studio Koukaki -->
                     <img class="logo_burger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/studio_koukaki.png" alt="Logo Studio Koukaki">
                     <li class="story_burger title_anim"><a class="lien_burger" href="#story">Histoire</a></li>
                     <li class="title_anim"><a class="lien_burger" href="#characters">Personnages</a></li>
                     <li class="lieu_burger title_anim"><a class="lien_burger" href="#place">Lieu</a></li>
                     <li class="studio_burger title_anim"><a class="lien_burger" href="#studio">Studio Koukaki</a></li>
                </ul>
            </div>
            <a href="#" id="openBtn"></a>
		</nav>
        <!-- #site-navigation -->
	</header>
    <!-- #masthead -->
