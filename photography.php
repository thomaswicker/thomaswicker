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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
      <?php endif; ?>
    </div>
    <div class='photo-strip-right'></div>
  </div>
</section>

<?php get_footer(); ?>
