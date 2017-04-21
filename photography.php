<?php
/*
Template Name: Photography Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-photography'); ?>

<?php get_template_part('partials/main-nav/main-nav-photography'); ?>


<section id='body-photography'>
  <div id='body-photography-inner' role='main'>
    <div class='my-info-mobile show-for-small-only'>
      <h1>
        PHOTOGRAPHY
      </h1>
    </div>
    <section id='body-photography-left'>
      <div class='instagram-brand'>
        <a href='http://instagram.com/thomasjwicker' target='_blank'>
          <img class='image' src='<?php echo get_template_directory_uri(); ?>/img/instagram_brand.png'>
        </a>
      </div>
      <div class='photo-strip-left'></div>
      <div class='photo-strip-middle'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

        <?php endif; ?>
      </div>
      <div class='photo-strip-right'></div>
    </section>
    <section id='body-photography-right'>
      <div class='masonry-container-photo' id='masonry-container-photo'>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/aboveTheClouds_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/aboveTheClouds_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/sf_bay_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/sf_bay_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/zanotti_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/zanotti_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/subarubrz1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/subarubrz1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/eagle_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/eagle_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/jdirty_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/jdirty_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/redSkies_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/redSkies_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/joc1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/joc1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/ferryCorsten1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/ferryCorsten1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/scott_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/scott_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/aboveTheClouds_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/aboveTheClouds_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium6_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium6_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/ocean_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/ocean_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/halestorm1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/halestorm1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/joc2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/joc2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/field_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/field_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/subarubrz2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/subarubrz2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium3_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium3_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/iceGlass_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/iceGlass_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/beach_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/beach_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/trees_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/trees_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/imkong1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/imkong1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium4_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium4_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/sunsetHollywood_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/sunsetHollywood_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/naturePhotography1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/naturePhotography1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/guitars1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/guitars1_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/halestorm2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/halestorm2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/naturePhotography2_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/naturePhotography2_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding3_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/hallwedding3_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin3_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/armin3_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium5_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/glassDelirium5_photo_HD.jpg'>
        </a>
        <a class='photo tint' data-lightbox='photography' href='<?php bloginfo( 'template_directory' ); ?>/img/photography/markusSchultz1_photo_HD.jpg'>
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/photography/markusSchultz1_photo_HD.jpg'>
        </a>
      </div>
    </section>
  </div>
</section>

<?php get_footer(); ?>
