<?php
/*
Template Name: Contact Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-contact'); ?>

<?php get_template_part('partials/main-nav/main-nav-contact'); ?>

<section class='medium-12' id='body-contact'>
  <div id='body-contact-inner' role='main'>
    <section class='body-contact-left medium-4 columns'>
      <div class='contact-info-container'>
        <h3>
          My Contact Info
        </h3>
        <p class="name">
          <strong>
            Thomas Wicker
          </strong>
        </p>
        <p class="title">
          Senior Software Developer
        </p>
        <p class="address">
          Aurora / CO 80016
        </p>

        <div class='medium-12 margin bottom md contact-email'>
          <a class='' href='mailto:thomas@thomaswicker.com'></a>
        </div>

        <div class='google-map'><iframe frameborder='0' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24571.598854494034!2d-104.8441364!3d39.662094100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c880a27879cbb%3A0x52429aef1755f930!2sAurora%2C+CO+80014!5e0!3m2!1sen!2sus!4v1413480283525'></iframe></div>
      </div>
    </section>

    <section class='body-contact-right medium-8 columns'>
      <h2 class='contact-header columns'>
        Send me an Email
      </h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; else: ?>

      <?php endif; ?>

    </section>
  </div>
</section>

<?php get_footer(); ?>
