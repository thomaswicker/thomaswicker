<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-home'); ?>

<?php get_template_part('partials/main-nav/main-nav-home'); ?>

<section id='body-home' role="main">
  <div id='body-home-inner'>
    <div class='body-home-left medium-7 large-8 columns'>
      <h2 class="home-subheader-first">
        A Little About "Work Me"...
      </h2>

      <blockquote>
        Currently working as a Principal UX Designer for <a href="http://info.drillinginfo.com" title="Link to www.drilling.info" aria-label="Link to www.drilling.info">Drilling Info</a> based in Littleton, CO.
      </blockquote>

      <p class="body-text">
        I am a software developer based out of Denver, CO. Jumping into the Wayback Machine... I started off in early 2000 as a fine artist and abstract acrylic painter. After completing my Associates Degree, I quickly began pursuing a career in Graphic/Web Design at the Art Institute of Colorado focusing on the basics of user experience, color theory, layout, typography and more. This built the foundation for what was to become my true passion, UI/UX and Software Development.
      </p>

      <p class="body-text">
        Fast forward to present day, I now have over 15 years of hands-on real world experience in UI/UX design, rapid prototyping and front-end/mid-tier development. I have created websites and applications for a wide range of industries ranging from apparel to health care to the financial industry to oil and gas. I focus my attention on implementing sound design principles basing all of my decisions on a blend of user driven need and clean semantic code.
      </p>

      <p class="body-text">
        In 2005 I opened a small freelance development shop in Denver, <a href="http://www.xiri.io" title="Link to www.xiri.io" aria-label="Link to www.xiri.io">XIRI Media, LLC.</a> Through this company I entertain small and large contracts for businesses around Denver and throughout the US. In the little spare time I seem to have these days... I develop personal software applications and work on open source projects that interest me.
      </p>

      <aside class="how-i-work">
        <section class="hiw--left">
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/office_image.jpg' alt="My Office" style="margin-top: 10px; max-width: 220px;">
        </section>

        <section class="hiw--right">
          <h3 class='shim top xs'>
            How I work
          </h3>
          <ul>
            <li>
              <a href='http://www.apple.com/macbook-pro/' target='blank' title='link to apple spec page on Macbook Pro' aria-label="Link to Apple spec page on Macbook Pro">
                2018 2.6GHz Six Core Intel i7 Space Gray MacBook Pro (32GB RAM and 1TB PCIe-based SSD)
              </a>
              - running MacOs Mojave
            </li>
            <li>
              <a href='https://code.visualstudio.com/' target='blank' title='link to Atom Editor' aria-label="Link to Atom Editor">
                VS Code
              </a>
              is my IDE of choice. I made the switch this year away from Atom Editor and haven't looked back. I do also enjoy using VIM from time to time to appease my inner nerd. :)
            </li>
            <li>
              Command line, command line and more command line...
            </li>
            <li>
              Chrome and Chrome Dev tools for troubleshooting and testing
            </li>
            <li>
              Wireframes with
              <a href='https://www.sketchapp.com/' target='blank' title='link to Sketch app for Mac' aria-label="Link to Sketch app">
                Sketch App
              </a>
              
              and the
              <a href='http://www.invisionapp.com/' target='blank' title='link to Invision App' aria-label="Link to Invision App">
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
            I am also an avid cook and love to experiment with different cuisines. I have a record of my culinary explorations on the <a href="../culinary" title='link to the culinary page' aria-label="Link to the Culinary page">Culinary tab</a> of this site. I enjoy a good Texas Hold'em cash game in Vegas, being out on the golf course or cheering on the Broncos. I also love to travel when time permits, having now covered most of the US including Alaska and Hawaii. I am also actively working my way through Europe with Germany, Netherlands, U.K., Paris and Belgium now off the list. <span class="emphasize">Traveling gives you perspective and inspires creativity.</span>
          </p>

          <p class="body-text">
            I also love to learn, learn and learn more... It's weird, but I can get just as much enjoyment out of studying the newest javascript framework or learning a foreign language than I do out of anything else. Life is a short ride and my motto is <strong>always be learning.</strong>
          </p>
        </div>

        <div class="hbc--right">
          <img src='<?php bloginfo( 'template_directory' ); ?>/img/about-pics-rockies-photo.jpg' alt="Me & My Girls">
        </div>

      </section>
    </div>

    <aside class='body-home-right medium-5 large-4 columns' role="complementary">
      <div class='medium-12' id='lastfm-container'>
        <div id='lastfm-title'>
          <div id='lastfm-title-left'>
            <i class="fa fa-spotify"></i>
          </div>
          <div id='lastfm-title-right'>
            <h4>
              LISTENING TO 🔥
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
              RECENT PHOTOS 📷
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

      <div class='medium-12' id='goat-container'>
        <div id='goat-title'>
          <div id='goat-title-left'>
            <i class="fa fa-instagram"></i>
          </div>
          <div id='goat-title-right'>
            <h4>
              MY TOP 10 📽
            </h4>
          </div>
        </div>

        <section id="goat-sidebar">
          <ul class="movie-list">
            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0151804" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--office-space.png" alt="Favorite Movies - Office Space">
                </div>

                <div class="movie-title">
                  <div>Office Space</div>
                  <div>1999</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0110912" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--pulp-fiction.png" alt="Favorite Movies - Pulp Fiction">
                </div>

                <div class="movie-title">
                  <div>Pulp Fiction</div>
                  <div>1994</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt1156398" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--zombieland.png" alt="Favorite Movies - Zombieland">
                </div>

                <div class="movie-title">
                  <div>Zombieland</div>
                  <div>2009</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0375679" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--crash.png" alt="Favorite Movies - Crash">
                </div>

                <div class="movie-title">
                  <div>Crash</div>
                  <div>2005</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0119396" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--jackie-brown.png" alt="Favorite Movies - Jackie Brown">
                </div>

                <div class="movie-title">
                  <div>Jackie Brown</div>
                  <div>1997</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0319262" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--day-after-tomorrow.png" alt="Favorite Movies - The Day After Tomorrow">
                </div>

                <div class="movie-title">
                  <div>The Day After Tomorrow</div>
                  <div>2004</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0120689" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--green-mile.png" alt="Favorite Movies - The Green Mile">
                </div>

                <div class="movie-title">
                  <div>The Green Mile</div>
                  <div>1999</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0128442" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--rounders.png" alt="Favorite Movies - Rounders">
                </div>

                <div class="movie-title">
                  <div>Rounders</div>
                  <div>1998</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt1028532" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--hachi.png" alt="Favorite Movies - Hachi - A Dog's Tale">
                </div>

                <div class="movie-title">
                  <div>Hachi - A Dog's Tale</div>
                  <div>2010</div>
                </div>
              </a>
            </li>

            <li class="movie-row">
              <a href="https://www.imdb.com/title/tt0111161" target="_blank">
                <div class="movie-img">
                  <img src="http://www.thomaswicker.com/wp-content/themes/thomaswicker/img/goat-movies/goat--shawshank-redemption.png" alt="Favorite Movies - The Shawshank Redemption">
                </div>

                <div class="movie-title">
                  <div>The Shawshank Redemption</div>
                  <div>1994</div>
                </div>
              </a>
            </li>
          </ul>
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
