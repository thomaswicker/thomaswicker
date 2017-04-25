<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<?php get_template_part('partials/main-nav/main-nav-home'); ?>

<section id='body-home'>
  <div id='body-home-inner'>
    <div class='body-home-left medium-7 large-8 columns'>
      <a href="/blog" class="btn btn-inline btn-view-all">VIEW ALL POSTS <i class="fa fa-arrow-right"></i> </a>
      <?php
        $args = array( 'numberposts' => 5, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        echo '<ul class="post-list">';
         foreach ($postslist as $post) :  setup_postdata($post); ?>
         <li>
           <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
             <?php the_title(); ?>
           </a>
           <div class="post-content">
             <?php the_excerpt(); ?>
             <?php if ( has_post_thumbnail()) the_post_thumbnail('excerpt-thumb'); ?>
           </div>
           <a href="<?php echo get_permalink(); ?>" class="btn btn-secondary btn-mini btn-read-more"> Read More...</a>
        </li>
        <?php endforeach; ?>
    </div>

    <aside class='body-home-right medium-5 large-4 columns'>
      <div class='medium-12' id='lastfm-container'>
        <div id='lastfm-title'>
          <div id='lastfm-title-left'>
            <i class="fa fa-spotify"></i>
          </div>
          <div id='lastfm-title-right'>
            <h4>
              LISTENING TO
            </h4>
          </div>
        </div>

        <section id="lastfm-sidebar">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lastfm')) : else : ?>

          <div class="pre-widget">
            <p><strong>Oops! Looks like there was an error...</strong></p>
              <p>Recent songs are not loading.</p>
          </div>

          <?php endif; ?>
        </section>
      </div>









      <div class='medium-12' id='instagram-container'>
        <div id='instagram-title'>
          <div id='instagram-title-left'>
            <i class="fa fa-instagram"></i>
          </div>
          <div id='instagram-title-right'>
            <h4>
              RECENT PHOTOS
            </h4>
          </div>
        </div>

        <section id="instagram-sidebar">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('instagram')) : else : ?>

          <div class="pre-widget">
              <p><strong>Oops! Looks like there was an error...</strong></p>
              <p>Recent photos are not loading.</p>
          </div>

          <?php endif; ?>
        </section>
      </div>










      <div class='social-feed medium-12'>
        <div id='twitter-title'>
          <div id='twitter-title-left'>
            <i class="fa fa-twitter"></i>
          </div>
          <div id='twitter-title-right'>
            <h4>
              TWITTER FEED
            </h4>
          </div>
        </div>
        <aside id='twitter-feed'>
          <a class='twitter-timeline' data-chrome='noheader nofooter noborders transparent' data-tweet-limit='5' data-widget-id='392388763487182849' href='https://twitter.com/thomasjwicker'>
            Tweets by @thomasjwicker
          </a>
        </aside>
      </div>
    </aside>

  </div>
</section>

<?php get_footer(); ?>
