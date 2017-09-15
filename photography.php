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
    <div class='photo-strip-left'></div>
    <div class='photo-strip-middle'>

      <ul class="photo-toggle-tabs" id="photo-toggle-tabs">
        <li class="toggle-title instagram-toggle-btn toggle-active"><a href="/">Instagram</a></li>
        <li class="toggle-title flickr-toggle-btn"><a href="/">Flickr</a></li>
      </ul>

      <div class="photo-toggle-tabs-content" id="photo-toggle-content">
        <section class="psm--instagram toggle-panel active" id="toggle-panel-instagram">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
          <?php endif; ?>
        </section>

        <section class="psm--flickr toggle-panel" id="toggle-panel-flickr">
          <?php echo do_shortcode("[flickr_set id='72157689057962685']"); ?>
        </section>
      </div>
    </div>
    <div class='photo-strip-right'></div>
  </div>
</section>

<?php get_footer(); ?>
