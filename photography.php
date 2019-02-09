<?php
/*
Template Name: Photography Template
*/

?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-photography'); ?>

<?php get_template_part('partials/main-nav/main-nav-photography'); ?>


<section id='body-photography' role="main">
  <div id='body-photography-inner'>
    <div class='photo-strip-left'></div>
    <div class='photo-strip-middle'>

      <div class="photo-toggle-tabs-content" id="photo-toggle-content">
        <section class="psm--instagram toggle-panel active" id="toggle-panel-instagram">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
          <?php endif; ?>
        </section>
      </div>
    </div>
    <div class='photo-strip-right'></div>
  </div>
</section>

<?php get_footer(); ?>
