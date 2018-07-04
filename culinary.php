<?php
/*
Template Name: Culinary Template
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-culinary'); ?>

<?php get_template_part('partials/main-nav/main-nav-culinary'); ?>

<section id='body-culinary' role="main">
  <div id='body-culinary-inner'>
    <div class='body-culinary-left large-8 medium-12 columns'>
      <section class="bcl--intro-block">

        <div class="bcl--intro-block-left">
          <h2>
            A Few of My Favorites...
          </h2>

          <p class='body-text'>
            Somewhere along the line picked up an extreme passion for cooking. It could be watching my grandmother making pizza by hand in the kitchen growing up or it could be my love for tasty cuisine... but I'm in love with the process and the craft. Cooking is just another way to express your creativity and seeing friends and family enjoy your creations only makes it better.
          </p>

          <p class='body-text'>
            I have listed some of my favorite recipes below that I have made over the years. I am regularly asked for recipes and figured why not just post em here. Share these and post a comment if you enjoyed one!
          </p>
        </div>

        <div class="bcl--intro-block-right">
          <img src="http://www.thomaswicker.com/wp-content/uploads/2017/09/about-pics-cooking.png" alt="Me Cooking">
        </div>

      </section>

      <?php

          $args = array(
              'post_type' => 'culinary',
              'posts_per_page' => 5
          );

          $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <article class='recipe-item'>
          <section class="recipe-rating-and-title">
            <h2>
              <a href="<?php echo get_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <section class="recipe-rating <?php the_field( 'recipe_star_rating' ); ?>">
              <span><i class="fa fa-star star-1"></i></span>
              <span><i class="fa fa-star star-2"></i></span>
              <span><i class="fa fa-star star-3"></i></span>
              <span><i class="fa fa-star star-4"></i></span>
              <span><i class="fa fa-star star-5"></i></span>
            </section>

          </section>

          <section class="recipe-categories">
            <?php the_category(' '); ?>
          </section>

          <section class="recipe-grouped">
            <div class="recipe-image-container">
              <img itemprop="image" class="recipe-feature-image" src="<?php the_field( 'recipe_feature_image' ); ?>" alt="Recipe Feature Image">
            </div>

            <section class="recipe-notes">
              <section class="note-content"><?php the_field( 'recipe_notes' ); ?></section>

              <section class="recipe-details">
                <div class="recipe-prep-time">
                  <h3>Prep Time:</h3>
                  <span class="the-value"><?php the_field( 'recipe_prep_time' ); ?></span>
                </div>

                <div class="recipe-cook-time">
                  <h3>Cook Time:</h3>
                  <span class="the-value"><?php the_field( 'recipe_cook_time' ); ?></span>
                </div>

                <div class="recipe-total-portions">
                  <h3>Portions:</h3>
                  <span class="the-value"><?php the_field( 'total_portions' ); ?></span>
                </div>
              </section>

              <section class="recipe-btn-container">
                <a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-mini">
                  VIEW THIS RECIPE
                </a>
              </section>
            </section>

          </section>


        </article>

        <?php endwhile; else: ?>
        <article class='recipe-item'>
          <p style="padding: 20px 40px; color: black; font-size: 22px; font-family: Arial, san-serif; font-weight: 600;">There are no recipe items available to view or something went wrong. Please try again later.</p>
        </article>
      <?php endif; ?>

    </div>

    <aside class='body-culinary-right large-4 medium-12 columns' role="complementary">
      <section class="alt-sidebar">
        <h3>Search All Recipes</h3>
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('recipes-sidebar')) : else : ?>
  				<div class="pre-widget">
            <h3>Recipes Sidebar</h3>
            <p>Something went wrong... the Recipes Sidebar is not loading right now.</p>
  				</div>
				<?php endif; ?>
			</section>
    </aside>

  </div>
</section>

<?php get_footer(); ?>
