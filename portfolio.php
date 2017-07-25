<?php
/*
Template Name: Portfolio Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-portfolio'); ?>

<?php get_template_part('partials/main-nav/main-nav-portfolio'); ?>


<section class='medium-12 columns' id='body-portfolio'>
  <div class='medium-12 columns' id='body-portfolio-inner' role='main'>
    <div class='masonry-container transitions-enabled infinite-scroll clearfix' id='masonry-container'>

      <?php

          $args = array(
              'post_type' => 'portfolio_item',
              'posts_per_page' => -1
          );

          $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article class='portfolio-item'>
        <h3>
          <?php the_field( 'itemtype' ); ?>
        </h3>

        <h4>
          <span><?php the_field( 'itemcompany' ); ?></span>
          <span style="padding-left: 2px; padding-right: 2px;">-</span>
          <span><?php the_field( 'itemcompanylocation' ); ?></span>
        </h4>

        <h5>
          <?php the_field( 'itemcategories' ); ?>
        </h5>

        <img class='image' src='<?php the_field( 'itemimage' ); ?>'>

        <div class='buttons'>
          <a class='btn btn-mini btn-portfolio btn-link--behance margin right xs' href='<?php the_field( 'itemlinkbehance' ); ?>' target='blank'>View on Behance</a>
          <a class='btn btn-mini btn-portfolio btn-link--site' href='<?php the_field( 'itemlinkurl' ); ?>' target='blank'>View Site</a>
          <a class='btn btn-mini btn-portfolio btn-link--github' href='<?php the_field( 'itemlinkgithub' ); ?>' target='blank'>View on Github</a>
        </div>

        </article>

        <?php endwhile; else: ?>
          <article class='portfolio-item'>
            <p style="padding: 20px 40px; color: black; font-size: 22px; font-family: Arial, san-serif; font-weight: 600;">There are no portfolio items available to view or something went wrong. Please try again later.</p>
          </article>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
