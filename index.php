<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<?php get_template_part('partials/main-nav/main-nav-home'); ?>

<section id='body-home'>
  <div id='body-home-inner'>
    <div class='body-home-left medium-7 large-8 columns'>
      <h2 class="home-subheader-first">
        A Little About "Work Me"...
      </h2>

      <blockquote>
        Currently working as a Principal Software Architect for <a href="http://info.drillinginfo.com">Drilling Info</a> based in Littleton, CO.
      </blockquote>

      <p class="body-text">
        I am a software developer based out of Denver, CO. Jumping into the Wayback Machine... I started off in early 2000 as a fine artist and abstract acrylic painter. After completing my Associates Degree, I quickly began pursuing a career in Graphic/Web Design at the Art Institute of Colorado focusing on the basics of user experience, color theory, layout, typography and more. This built the foundation for what was to become my true passion, UI/UX and Software Development.
      </p>

      <p class="body-text">
        Fast forward to present day, I now have over 15 years of hands-on real world experience in UI/UX design, rapid prototyping and front-end/mid-tier development. I have created websites and applications for a wide range of industries ranging from apparel to health care to the financial industry to oil and gas. I focus my attention on implementing sound design principles basing all of my decisions on a blend of user driven need and clean semantic code. In 2005 I opened a small freelance development shop in Denver, <a href="http://www.xiri.io">XIRI Media, LLC.</a> Through this company I entertain small and large contracts for businesses around Denver and throughout the US. In the little spare time I seem to have these days... I develop personal software applications and work on open source projects that interest me.
      </p>

      <aside class="how-i-work">
        <section class="hiw--left">
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/office_image.jpg'>
        </section>

        <section class="hiw--right">
          <h3 class='shim top xs'>
            How I work
          </h3>
          <ul>
            <li>
              <a href='http://www.apple.com/mac-pro/' target='blank'>
                Late 2013 3.5GHz Intel Xeon E5 6-core Mac Pro (24GB of 1866MHz DDR3 ECC memory and 512GB PCIe-based SSD)
              </a>
              - running MacOs Sierra with 16TB of Drobo dual redundant NAS storage
            </li>
            <li>
              <a href='http://www.apple.com/macbook-pro/' target='blank'>
                2016 2.7GHz Space Gray MacBook Pro (16GB RAM and 512GB PCIe-based SSD)
              </a>
              - running MacOs Sierra
            </li>
            <li>
              <a href='http://www.atom.io/' target='blank'>
                Atom Editor
              </a>
              is my IDE of choice although I use VIM now and again to appease my inner nerd
            </li>
            <li>
              Command line, command line and more command line...
            </li>
            <li>
              Chrome and Chrome Dev tools for troubleshooting and testing
            </li>
            <li>
              Wireframes with
              <a href='https://www.sketchapp.com/' target='blank'>
                Sketch App
              </a>
              ,
              <a href='https://www.adobe.com/products/illustrator.html?promoid=KLXLT' target='blank'>
                Adobe Illustrator
              </a>
              and the
              <a href='http://www.invisionapp.com/' target='blank'>
                Invision Prototyping App
              </a>
            </li>
          </ul>
        </section>

      </aside>

      <h2 class="home-subheader">
        A Little About "Other Me"...
      </h2>

      <section class="home-body-content">
        <div class="hbc--left">
          <p class="body-text">
            Aside from all the work stuff... I am a father of two beautiful and healthy girls that keep me on my toes and my life well balanced and meaningful. I love spending every free moment I have with them reading, playing a game on XBOX/PS4, watching some TV, or just chilling out playing a game from our extensive board game collection.
          </p>

          <p class="body-text">
            I am also an avid cook and love to experiment with different cuisines. I have a record of my culinary explorations on the <a href="../culinary">Culinary tab</a> of this site. I enjoy a good Texas Hold'em cash game in Vegas or being out on the golf course. I also love to travel when time permits, having now covered most of the US including Alaska and Hawaii. I am also actively working my way through Europe with Germany, Netherlands, U.K., Paris and Belgium now off the list. <span class="emphasize">Traveling gives you perspective and inspires creativity.</span>
          </p>

          <p class="body-text">
            I also love to learn, learn and learn more... It's weird, but I can get just as much enjoyment out of studying the newest javascript framework or learning a foreign language than I do out of anything else. Life is a short ride and my motto is <strong>always be learning.</strong>
          </p>
        </div>

        <div class="hbc--right">
          <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
        </div>

      </section>
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
