<?php
/*
Template Name: Blog Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-blog'); ?>

<?php get_template_part('partials/main-nav/main-nav-blog'); ?>

<section id='body-blog'>
  <div id='body-blog-inner'>
    <div class='body-blog-left medium-7 large-8 columns'>
      <?php

        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $custom_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'paged' => $paged
          );

        $custom_query = new WP_Query( $custom_args ); ?>

        <?php if ( $custom_query->have_posts() ) : ?>
          <!-- pagination here -->
          <?php
            if (function_exists(custom_pagination)) {
              custom_pagination($custom_query->max_num_pages,"",$paged);
            }
          ?>
          <!-- the loop -->
          <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <article class="blog-entry">
              <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                <?php the_title(); ?>
              </a>
              <div class="post-content">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php echo get_permalink(); ?>" class="btn btn-secondary btn-read-more"> Read More...</a>
            </article>
          <?php endwhile; ?>
          <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      <?php get_footer(); ?>
    </div>

    <aside class='body-blog-right medium-5 large-4 columns'>
      <section class="alt-sidebar">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('alt-sidebar')) : else : ?>

				<div class="pre-widget">
						<p><strong>Widgetized Area</strong></p>
						<p>Something went wrong... widgets are not loading.</p>
				</div>

				<?php endif; ?>
			</section>
    </aside>

  </div>
</section>

<?php get_footer(); ?>
