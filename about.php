<?php
/*
Template Name: About Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-about'); ?>

<?php get_template_part('partials/main-nav/main-nav-about'); ?>


<section id='body-about'>
  <div id='body-about-inner'>
    <section class='grid-row' id='about-me'>
      <section class='bai--left'>
        <h2>
          A Little About Me...
        </h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </section>

      <section class='columns bai--right'>
        <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
      </section>
    </section>

    <section class='grid-row how-i-work' id='how-i-work'>
      <div class='large-3 medium-4 columns hiw--left'>
        <img src='<?php bloginfo( 'template_directory' ); ?>/img/office_image.jpg'>
      </div>

      <div class='large-9 medium-8 columns hiw--right'>
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
          </li>
        </ul>

        <h3 class='shim top sm'>
          About this site
        </h3>

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
      </div>
    </section>
  </div>
</section>

<?php get_footer(); ?>
