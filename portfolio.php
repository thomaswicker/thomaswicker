<?php
/*
Template Name: Portfolio Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-portfolio'); ?>

<?php get_template_part('partials/main-nav/main-nav-portfolio'); ?>

<section class='medium-12 columns body-portfolio' role="main">
  <?php get_template_part('partials/portfolio-tiles'); ?>
</section>

<?php get_footer(); ?>
