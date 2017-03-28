<?php
/*
Template Name: Contact Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-contact'); ?>

<?php get_template_part('partials/main-nav/main-nav-contact'); ?>


<script src='js/wufoo.js'></script>

<section class='medium-12' id='body-contact'>
  <div id='body-contact-inner' role='main'>
    <div class='my-info-mobile show-for-small-only'>
      <h2>
        Contact Me
      </h2>
    </div>
    <div class='body-contact-left medium-4 columns'>
      <div class='contact-info-container'>
        <h2>
          My Contact Info
        </h2>
        <p>
          <strong>
            Thomas Wicker
          </strong>
        </p>
        <p>
          Senior Software Developer
        </p>
        <p>
          Aurora / CO 80016
        </p>
        <div class='medium-12 margin bottom md hide-for-small-only'>
          <a class='contact-email' href='mailto:thomas@thomaswicker.com'>
            thomas@thomaswicker.com
          </a>
        </div>
        <div class='medium-12 show-for-small-only contact-page-email-btn'>
          <a class='btn btn-primary btn-mini' href='mailto:thomas@thomaswicker.com'>
            Email Me
          </a>
        </div>
        <div class='google-map'><iframe frameborder='0' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24571.598854494034!2d-104.8441364!3d39.662094100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c880a27879cbb%3A0x52429aef1755f930!2sAurora%2C+CO+80014!5e0!3m2!1sen!2sus!4v1413480283525'></iframe></div>
      </div>
    </div>
    <div class='body-contact-right medium-8 columns'>
      <h2 class='contact-header columns'>
        Send me an Email
      </h2>
      <div class='body-text margin bottom md columns'>
        Whether it's design or development, websites, ui/ux, apps, or photography — I'd love to work with you. I'm always interesting in hearing about new opportunities for either full time or contract work. Just hit me up with the form below and include as many details as you can about your project. I will endeavor to get back to you with you within 24-48 hours. Thanks for stopping by!
      </div>
      <form accept-charset='UTF-8' action='https://xirimedia.wufoo.com/forms/mz9kc670713w35/#public' autocomplete='off' class='wufoo topLabel page contact-form' enctype='multipart/form-data' id='form2' method='post' name='form2' novalidate=''>
        <ul>
          <li class='notranslate' id='foli1'>
            <label class='desc' for='Field1' id='title1'>
              Name
              <span class='req' id='req_1'>*</span>
            </label>
            <input class='field text medium' id='Field1' maxlength='255' name='Field1' onkeyup='' required='' tabindex='1' type='text' value=''>
          </li>
          <li class='notranslate' id='foli2'>
            <label class='desc' for='Field2' id='title2'>
              Phone
            </label>
            <input class='field text medium' id='Field2' maxlength='255' name='Field2' onkeyup='' required='' tabindex='2' type='text' value=''>
          </li>
          <li class='notranslate' id='foli3'>
            <label class='desc' for='Field3' id='title3'>
              Email
              <span class='req' id='req_2'>*</span>
            </label>
            <input class='field text medium' id='Field3' maxlength='255' name='Field3' onkeyup='' tabindex='3' type='text' value=''>
          </li>
          <li class='notranslate' id='foli4'>
            <label class='desc' for='Field4' id='title4'>
              Message
            </label>
            <textarea class='field textarea medium' cols='50' id='Field4' name='Field4' onkeyup='' rows='10' spellcheck='true' tabindex='4'></textarea>
          </li>
          <li class='buttons'>
            <input class='btn btn-secondary submit' id='saveForm' name='saveForm' type='submit' value='Submit'>
          </li>
          <li class='hide'>
            <label for='comment'>Do Not Fill This Out</label>
            <textarea cols='1' id='comment' name='comment' rows='1'></textarea>
            <input id='idstamp' name='idstamp' type='hidden' value='RxL2jE1a5D0kl9iXo9mk5e0BJwiXVLgNS9qgOwXHEy4='>
          </li>
        </ul>
      </form>
    </div>
  </div>
</section>
