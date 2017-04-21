<?php
/*
Template Name: About Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-about'); ?>

<?php get_template_part('partials/main-nav/main-nav-about'); ?>


<section class='page-body' id='about-body'>
  <div class='page-body-inner'>
    <section class='grid-row' id='about-me'>
      <section class='large-10 medium-9 columns'>
        <h2>
          About Me
        </h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

        <?php endif; ?>
      </section>

      <div class='large-2 medium-3 columns'>
        <img src='<?php bloginfo( 'template_directory' ); ?>/img/me_with_the_girls.jpg'>
      </div>
    </section>
    <section class='grid-row' id='how-i-work'>
      <div class='large-2 medium-3 columns'>
        <img src='<?php bloginfo( 'template_directory' ); ?>/img/office_image.jpg'>
      </div>
      <div class='large-10 medium-9 columns'>
        <h3 class='shim top xs'>
          How I work
        </h3>
        <ul>
          <li>
            <a href='http://www.apple.com/mac-pro/' target='blank'>
              Late 2013 3.5GHz Intel Xeon E5 6-core Mac Pro (24GB of 1866MHz DDR3 ECC memory and 512GB PCIe-based SSD)
            </a>
            - running El Capitan with 16TB of Drobo redundant NAS storage
          </li>
          <li>
            <a href='http://www.apple.com/macbook-pro/' target='blank'>
              2016 2.7GHz Space Gray MacBook Pro(16GB RAM and 512GB PCIe-based SSD
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
            <a href='https://www.adobe.com/products/illustrator.html?promoid=KLXLT' target='blank'>
              Adobe Illustrator
            </a>
            or the
            <a href='http://www.invisionapp.com/' target='blank'>
              Invision Prototyping App
            </a>
          </li>
          <li>
            Code in HTML5 or
            <a href='http://haml.info/' target='blank'>
              HAML
            </a>
          </li>
          <li>
            Style with SASS/CSS3 and my custom framework
          </li>
          <li>
            <a href='https://github.com/thomaswicker/potion-css' target='blank'>
              Potion CSS Framework
            </a>
            <h3 class='shim top sm'>
              About this site
            </h3>
          </li>
          <ul>
            <li>
              Built with
              <a href='http://haml.info/' target='blank'>
                HAML
              </a>
              &amp;
              <a href='http://sass-lang.com' target='blank'>
                SASS
              </a>
            </li>
            <li>
              Built on top of my custom SASS framework
              <a href='https://github.com/thomaswicker/potion-css' target='blank'>
                Potion
              </a>
            </li>
          </ul>
        </ul>
      </div>
    </section>
  </div>
</section>

<?php get_footer(); ?>
