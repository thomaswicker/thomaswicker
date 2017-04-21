<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<?php get_template_part('partials/main-nav/main-nav-home'); ?>

<section id='body-home'>
  <div id='body-home-inner'>
    <div class='my-info-mobile show-for-small-only'>
      <h1>
        Thomas Wicker
      </h1>
      <h2>
        Senior Front End Developer
      </h2>
      <p class='quote'>
        Code monkey, $AAPL enthusiast, lifelong learner, entrepreneur, gambler, fine artist, photographer and father of two healthy girls
      </p>
    </div>
    <div class='body-home-left medium-7 large-8 columns'>
      <?php
        $args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        echo '<ul class="post-list">';
         foreach ($postslist as $post) :  setup_postdata($post); ?>
         <li><strong><?php the_date(); ?></strong><br />
         <a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a>
         <div class="post-content">
           <?php the_excerpt(); ?>
         </div>
         <a href="<?php echo get_permalink(); ?>"> Read More...</a>
        </li>
        <?php endforeach; ?>
    </div>
    <aside class='body-home-right medium-5 large-4 columns'>
      <div class='medium-12' id='lastfm-container'>
        <div id='lastfm-title'>
          <div id='lastfm-title-left'>
            <img src='<?php bloginfo( 'template_directory' ); ?>/img/spotify_logo.png'>
          </div>
          <div id='lastfm-title-right'>
            <h4>
              LISTENING TO
            </h4>
          </div>
        </div>
        <article id="thomaswicker-sidebar">
          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('lastfm')) : else : ?>

          <div class="pre-widget">
              <p><strong>Widgetized Area</strong></p>
              <p>Something went wrong... widgets are not loading.</p>
          </div>

          <?php endif; ?>
        </article>
      </div>
      <div class='social-feed medium-12'>
        <div id='twitter-title'>
          <div id='twitter-title-left'>
            <img src='<?php bloginfo( 'template_directory' ); ?>/img/twitter_logo.png'>
          </div>
          <div id='twitter-title-right'>
            <h4>
              TWITTER FEED
            </h4>
          </div>
        </div>
        <aside id='twitter-feed'>
          <a class='twitter-timeline' data-chrome='noheader nofooter noborders transparent' data-tweet-limit='7' data-widget-id='392388763487182849' href='https://twitter.com/thomasjwicker'>
            Tweets by @thomasjwicker
          </a>
        </aside>
      </div>
    </aside>
  </div>
</section>

<?php get_footer(); ?>
