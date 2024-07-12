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
            <ul>
                <li class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </li>
            </ul>
            <a href="#" id="openBtn">
                    <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <div id="menu_burger" class="nav_burger">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="title_burger"><?php bloginfo( 'name' ); ?></a>
                <a id="closeBtn" href="#" class="close">×</a>
                <ul class="burger">
                    <!-- Logo -->
                    <li>
                        <img class="logo_burger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_burger.png" alt="Logo Fleurs d'oranger & Chats Errants">
                    </li>
                    <li class="story_burger title_anim">
                        <a class="lien_burger" href="#story">Histoire</a>
                    </li>
                    <li class="personnages_burger title_anim">
                        <a class="lien_burger" href="#characters">Personnages</a>
                    </li>
                    <li class="lieu_burger title_anim">
                        <a class="lien_burger" href="#place">Lieu</a>
                    </li>
                    <li class="studio_burger title_anim">
                        <a class="lien_burger" href="#studio">Studio Koukaki</a>
                    </li>
                    <!-- Studio Koukaki -->
                     <li>
                        <img class="studio_koukaki" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/studio_koukaki.png" alt="Studio Koukaki">
                    </li>
                </ul>
            </div>
        </nav>
        <!-- #site-navigation -->
	</header>
    <!-- #masthead -->
</div>
