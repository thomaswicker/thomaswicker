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
      <div class='large-10 medium-9 columns'>
        <h2>
          About Me
        </h2>
        <blockquote>
          Currently working as a Principal Software Architect for
          <a href='http://info.drillinginfo.com'>Drilling Info</a>
          based in Littleton, CO.
        </blockquote>
        <p class='body-text'>
          I am a software developer based out of Denver, CO. Jumping into the Wayback Machine... I started off in early 2000 as a fine artist and abstract acrylic painter. After completing my Associates Degree, I quickly began pursuing a career in Graphic/Web Design at the Art Institute of Colorado focusing on the basics of user experience, color theory, layout, typography and more. This built the foundation for what was to become my true passion, UI/UX and Software Development.
        </p>
        <p class='body-text'>
          Fast forward to present day, I now have over 15 years of hands-on real world experience in UI/UX design, rapid prototyping and front-end/mid-tier development. I have created websites and applications for a wide range of industries ranging from apparel to health care to the financial industry to oil and gas. I focus my attention on implementing sound design principles basing all my decisions on a blend of user driven need and business requirements backed by clean semantic code.
        </p>
        <p class='body-text'>
          In 2005 I opened a small freelance development business in Denver,
          <a href='http://www.xiri.io'>XIRI Media, LLC</a>
          Through this company I entertain small and large contracts for businesses around Denver and throughout the US. In the little spare time I seem to have these days... I develop personal software applications and work on open source projects that interest me.
        </p>
        <p class='body-text'>
          Aside from all the work stuff, and most importantly in my life... I am a father of two beautiful and healthy girls that keep me on my toes and my life well balanced and meaningful. I love spending every free moment I have with them reading, playing a game on XBOX/PS4, watching some Doctor Who, or just chilling out and painting or playing board games. I have also recently been teaching them HTML/SASS. Unsuprisingly... they are learning at about 10x the speed I learned... ahhh... to be young again.
        </p>
        <p class='body-text'>
          As for me, I enjoy PC or console gaming, a good 1/2 cash game in Vegas or being out on the golf course. I also love to travel when time permits, having now covered most of the US including Alaska and Hawaii. I have yet unfortunatley cracked the US borders. Goal one for this year is to get my passport and make that happen pronto. I also love to learn. It's weird but I can get just as much enjoyment out of studying the newest javascript framework or learning a foreign language than I do out of anything else. Life is a short ride and my motto is always be learning.
        </p>
      </div>
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
              Angular 1.5 App
            </li>
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
