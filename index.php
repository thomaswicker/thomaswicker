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
      <ul class='post-list medium-12' ng-repeat='post in posts'>
        <li class='medium-12'>
          <div class='medium-12'>
            <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>
          </div>
          <div class='medium-12'>
            <?php
              $args = array( 'numberposts' => 6, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
              $postslist = get_posts( $args );
              echo '<ul id="latest_posts">';
               foreach ($postslist as $post) :  setup_postdata($post); ?>
               <li><strong><?php the_date(); ?></strong><br />
               <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a>
               <?php the_excerpt(); ?>
               <a href="<?php echo get_permalink(); ?>"> Read More...</a>
              </li>
              <?php endforeach; ?>
            </ul>

          </div>
          <div class='medium-12 admin-buttons'>
            <a class='btn btn-secondary' href=''>View</a>
          </div>
        </li>
      </ul>
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
        <ul id='lastfm'></ul>
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
