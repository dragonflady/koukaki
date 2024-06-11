<!-- Section Personnages -->
<?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key'  => '_main_char_field',
        'orderby'   => 'meta_value_num',
    );
    $characters_query = new WP_Query($args);
?>

<article id="characters">
    <div class="main-character">
        <h3><span class="reveal active">Les personnages</span></h3>
        <?php
        $main_character = $characters_query->posts[0];
        echo '<div class="swiper mySwiper">';
        echo '<div class="swiper-wrapper">';
        echo '<div class="swiper-slide">';
        echo '<figure>';
        echo get_the_post_thumbnail( $main_character->ID, 'full' );
        echo '<figcaption>'. $main_character->post_title . '</figcaption>';
        echo '</figure>';
        echo '</div>';
        echo '</div>'; 
        echo '</div>';
        
        $characters_query->next_post();
        ?>
    </div>
    <div class="other-characters">
        <?php
        while ( $characters_query->have_posts() ) {
            $characters_query->the_post();
            echo '<div class="swiper mySwiper">';
            echo '<div class="swiper-wrapper">';
            echo '<div class="swiper-slide">';
            echo '<figure>';
            echo get_the_post_thumbnail( get_the_ID(), 'full' );
            echo '<figcaption>';
            the_title();
            echo'</figcaption>';
            echo '</figure>';
            echo '</div>';
            echo '</div>'; 
            echo '</div>';
        }
        ?>
    </div>
</article>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>