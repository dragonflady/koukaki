<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop id="header_video">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/studio_koukaki.mp4" type="video/mp4">
                <img src="../../assets/images/banner.png" alt="Votre navigateur ne supporte pas les vidéos HTML5.">
            </video>
            <div class="banner__container skrollable skrollable-between" data-0="transform: translateY(0px);" data-500="transform: translateY(250px);">
                <img id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>

        <!--  Section Histoire -->
        <section id="story" class="story anim-section">
            <h2><span class="reveal">L'histoire</span></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
 
            <!--Section Personnages-->
            <?php
            get_template_part('template-parts/characters'); //Appel du fichier characters.php
            ?>
            <!-- Section Lieu -->
            <article id="place">
                <div>
                    <h3><span class="reveal">Le Lieu</span></h3>
                    <img data-1400="left:1100px;" data-top="left:800px;" class="big_cloud skrollable skrollable-between" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/big_cloud.png" alt="Image d'un gros nuage" style="left: 809.029px; opacity: 0.969902;">
                    <img data-1400="left:850px;" data-top="left:550px;" class="little_cloud skrollable skrollable-between" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/little_cloud.png" alt="Image d'un petit nuage" style="left: 559.029px; opacity: 0.969902;">
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>

        <!-- Section Studio -->
        <section id="studio" class="anim-section">
            <h2><span class="reveal">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
            
            <!--Section Nomination aux Oscars-->
            <?php
            get_template_part('template-parts/nomination'); //Appel du fichier nomination.php
            ?>
            
    </main><!-- #main -->

<?php
get_footer();


