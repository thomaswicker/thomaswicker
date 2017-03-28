<?php
/*
Template Name: Resume Template
*/
?>


<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-resume'); ?>

<?php get_template_part('partials/main-nav/main-nav-resume'); ?>


<section class='medium-12 columns' id='body-resume' role='main'>
  <div id='job-status'>
    <p>
      <i class='fa fa-exclamation-circle'></i>
      <span>
        Employment status:
      </span>
      <span>
        Working full time, but always looking for new freelance work.
      </span>
    </p>
  </div>
  <div id='body-resume-inner'>
    <div class='my-info-mobile show-for-small-only'>
      <h2>
        MY RESUME
      </h2>
    </div>
    <section class='medium-12 columns' id='my-resume-container-details'>
      <aside id='my-resume-container-details-left'>
        <div id='my-info-contact'>
          <p class='name-block'>
            Thomas J. Wicker
          </p>
          <p class='title-block'>
            Senior Front End Developer
          </p>
          <a class='website-block' href='mailto:thomas@thomaswicker.com'>
            thomas@thomaswicker.com
          </a>
          <a class='linkedin-block' href='http://www.linkedin.com/in/thomaswicker' target='_blank'>
            <img src='<?php bloginfo( 'template_directory' ); ?>/img/linkedin_logo.png'>
          </a>
        </div>
        <div id='download-resume-btns'>
          <div class='medium-12'>
            <h3>Download Resume</h3>
          </div>
          <div class='medium-12 download-links'>
            <a href='resume.pdf' target='_blank'>
              <i class='fa fa-file-pdf-o download-icons'></i>
            </a>
            <a href='word-resume.zip' target='_blank'>
              <i class='fa fa-file-word-o download-icons'></i>
            </a>
            <a href='javascript:window.print()' target='_blank'>
              <i class='fa fa-print download-icons'></i>
            </a>
          </div>
        </div>
      </aside>
      <section id='my-resume-container-details-right'>
        <div id='my-objective'>
          <h2>
            OBJECTIVE
          </h2>
          <p class='body-text'>
            Hi... I’m Thomas, I make cool things for the interwebs. I am proud to define myself as a UI/UX and Senior Front End Developer. I have over 15 years of hands-on work experience in UI/UX design, rapid prototyping and responsive/responsible front-end development. I am a unique developer as I have a diverse background in development/UI/UX as well as a deep underlying core of fine art and graphic design principles.
          </p>
          <p class='body-text'>
            Whether it be a small start-up or large enterprise, contract or full-time... I am always seeking new and exciting projects to become a part of. I've worked with and for companies both big and small and within a wide variety of industries.
          </p>
          <p class='body-text'>
            I appreciate your consideration of me as an addition to your team, and I look forward to hearing from you. Thanks for stopping by!
          </p>
        </div>
      </section>
    </section>
    <section class='medium-12 columns' id='my-resume-container-skills'>
      <div class='medium-12' id='skills-block'>
        <div class='medium-4 large-4 columns' id='skills-block-left'>
          <h2>
            FRONT END
          </h2>
          <div class='skills-top'>
            html5
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='html progress-bar progress-frontend' role='progressbar' style='width: {{ html5 }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            haml
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='haml progress-bar progress-frontend' role='progressbar' style='width: {{ haml }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            css3/css
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='css progress-bar progress-frontend' role='progressbar' style='width: {{ css }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            sass
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='sass progress-bar progress-frontend' role='progressbar' style='width: {{ sass }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            javascript/jquery
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='javascript progress-bar progress-frontend' role='progressbar' style='width: {{ javascript }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            react
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='react progress-bar progress-frontend' role='progressbar' style='width: {{ react }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            angularjs
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='angular progress-bar progress-frontend' role='progressbar' style='width: {{ angular }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            wordpress
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='wordpress progress-bar progress-frontend' role='progressbar' style='width: {{ wordpress }}'></div>
            </div>
          </div>
        </div>
        <div class='medium-4 large-4 columns' id='skills-block-middle'>
          <h2>
            UI/UX
          </h2>
          <div class='skills-top'>
            (ui) user interface design
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='ui progress-bar progress-uiux' role='progressbar' style='width: {{ ui }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            (ux) user experience
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='ux progress-bar progress-uiux' role='progressbar' style='width: {{ ux }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            bootstrap, foundation, and other frameworks
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='zurb progress-bar progress-uiux' role='progressbar' style='width: {{ zurb }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            responsive design
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='rwd progress-bar progress-uiux' role='progressbar' style='width: {{ rwd }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            agile methodologies
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='agile progress-bar progress-uiux' role='progressbar' style='width: {{ agile }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            rapid prototyping
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='rapidproto progress-bar progress-uiux' role='progressbar' style='width: {{ rapidproto }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            anything adobe
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='adobe progress-bar progress-uiux' role='progressbar' style='width: {{ adobe }}'></div>
            </div>
          </div>
        </div>
        <div class='medium-4 large-4 columns' id='skills-block-right'>
          <h2>
            BACKEND & DEV TOOLS
          </h2>
          <div class='skills-top'>
            ruby on rails
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='rails progress-bar progress-backend' role='progressbar' style='width: {{ rails }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            php
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='php progress-bar progress-backend' role='progressbar' style='width: {{ php }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            heroku
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='heroku progress-bar progress-backend' role='progressbar' style='width: {{ heroku }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            postgres/mongodb/etc
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='db progress-bar progress-backend' role='progressbar' style='width: {{ db }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            command line
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='commandline progress-bar progress-backend' role='progressbar' style='width: {{ commandline }}'></div>
            </div>
          </div>
          <div class='skills-top'>
            git/github/svn
          </div>
          <div class='skills-bottom'>
            <div class='progress'>
              <div class='git progress-bar progress-backend' role='progressbar' style='width: {{ git }}'></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class='medium-12 columns' id='my-resume-container-experience'>
      <div class='medium-7 large-8 columns' id='my-experience'>
        <h2>
          PROFESSIONAL EXPERIENCE
        </h2>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo oppenheimer' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/oppenheimer-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              Senior Front End Developer
            </h3>
            <h4>
              <a href='https://www.oppenheimerfunds.com/investors' target='_blank'>
                Oppenheimer Funds - Centennial, CO
              </a>
            </h4>
            <h5>
              July 2014 - Current
            </h5>
            <p class='body-text'>
              Building with HAML, SASS, jQuery, Javascript, AngularJS and Ruby on Rails to create flexible user interfaces
            </p>
            <p class='body-text'>
              Key part of the Oppenheimer Agile team that is developing the new Investor website for Q4 launch
            </p>
            <p class='body-text'>
              Pair programming with Rails developers to develop and customize UI for the new site
            </p>
            <p class='body-text'>
              Utilizing AngularJS to build out custom site validations and routing
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo davita' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/davita-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              Senior Front End Developer
            </h3>
            <h4>
              <a href='http://www.davita.com' target='_blank'>
                DaVita - Denver, CO
              </a>
            </h4>
            <h5>
              March 2014 - July 2014
            </h5>
            <p class='body-text'>
              Working closely with the BAs, Analysts and the core Davita business team to develop a custom application for use by DaVita clinics world wide.
            </p>
            <p class='body-text'>
              Responsible for leading UI/UX focus groups to gather data and analytics to be used in the design/development process.
            </p>
            <p class='body-text'>
              Leveraging HTML5, CSS, SASS, jQuery, Javascript, and Sharepoint 2013.
            </p>
            <p class='body-text'>
              Utilizing AGILE methodology daily to ensure proper project workflow throughout the SDLC.
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo att' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/att-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              Lead UI/UX Developer
              <span>
                (Project Lead/Mgr)
              </span>
            </h3>
            <h4>
              <a href='https://www.att.com' target='_blank'>
                AT&T Mobility - Denver, CO
              </a>
            </h4>
            <h5>
              November 2013 - March 2014
            </h5>
            <p class='body-text'>
              Collaborating with a variety of teams including developers, BAs, SAs and operations to develop strategies for rich intuitive interfaces that always keep scalability and usability in mind throughout the project lifecycle.
            </p>
            <p class='body-text'>
              Leveraging HTML, CSS, jQuery/Javascript and MVC frameworks to design/develop and maintain complex user interfaces and responsive solutions for a variety of internal and external applications at AT&T.
            </p>
            <p class='body-text'>
              Utilizing methodologies such as Agile and SCRUM and making sure UI/UX is accounted for within those processes.
            </p>
            <p class='body-text'>
              Project lead on design and development of a new tablet design for AT&T's POS and account management systems in stores nationwide.
            </p>
            <p class='body-text'>
              Producing low/high fidelity mock-ups, wireframes, and UI specifications as needed to assist the business team with developing new application enhancements.
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo cricket' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/cricket-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              Software Engineer III
            </h3>
            <h4>
              <a href='http://www.cricketwireless.com' target='_blank'>
                Cricket Communications - Greenwood Village, CO
              </a>
            </h4>
            <h5>
              July 2013 - November 2013
            </h5>
            <p class='body-text'>
              Producing low/high fidelity mock-ups, wireframes, and UI specifications as needed to assist the business team with developing new application enhancements.
            </p>
            <p class='body-text'>
              Collaborating with a variety of teams including developers, BAs, SAs and operations to develop strategies for rich intuitive interfaces that always keep scalability and usability in mind throughout the project lifecycle.
            </p>
            <p class='body-text'>
              Leveraging HTML, CSS, jQuery/Javascript, Adobe Creative Suite and other related technologies to design/develop and maintain complex user interfaces and responsive solutions for a variety of internal and external applications at Cricket.
            </p>
            <p class='body-text'>
              Utilizing methodologies such as Agile and SCRUM and making sure UI/UX is accounted for within those processes.
            </p>
            <p class='body-text'>
              Acted as project lead on design and development of a new interface for Cricket’s POS and account management systems in stores nationwide.
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo regis' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/regis-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              UI/UX Designer & Consultant
            </h3>
            <h4>
              <a href='http://www.regiscompany.com' target='_blank'>
                Regis Learning - Golden, CO
              </a>
            </h4>
            <h5>
              March 2013 - October 2013
            </h5>
            <p class='body-text'>
              Captured details of business requirements via storyboards and prototypes and produced graphics and visuals for hand off to the development team.
            </p>
            <p class='body-text'>
              Provided guidance on usability enhancements and made improvements to functionality of multiple eLearning applications.
            </p>
            <p class='body-text'>
              Mentored and provided guidance to Instructional Designers as needed.
            </p>
            <p class='body-text'>
              Collaborated with teams of other designers, developers, and management to deliver visual assets for use in a variety of eLearning projects for Regis’s clients throughout the world and in a variety of environments and systems.
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo rbsi' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/rbsi-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              UI/UX Developer & Consultant
            </h3>
            <h4>
              <a href='http://www.rbsiconsulting.com' target='_blank'>
                RBSI Consulting - Bartonville, TX
              </a>
            </h4>
            <h5>
              October 2012 - February 2013
            </h5>
            <p class='body-text'>
              Contracted for RBSI Consulting on multiple nationwide contracts delivering UI/UX solutions and front end development.
            </p>
            <p class='body-text'>
              Developed storyboards, wireframes, low/high fidelity prototypes, and detailed design specifications for the team.
            </p>
            <p class='body-text'>
              Responsible for designing/developing mobile app UI in both native and web based formats to mirror and support concurrent desktop application functionality.
            </p>
            <p class='body-text'>
              Translated business requirements into designs working with Product Management, Systems Analysts, Subject Matter Experts, and developers to deliver a final product.
            </p>
          </div>
        </span>
        <span class='resume-experience-block'>
          <div class='large-3 medium-12 columns resume-logo-container'>
            <img class='resume-logo apex' src='<?php bloginfo( 'template_directory' ); ?>/img/resume/apex-logo.jpg'>
          </div>
          <div class='large-9 medium-12 columns'>
            <h3>
              UI/UX Designer & Developer
              <span></span>
              (Project Lead)
            </h3>
            <h4>
              <a href='http://www.apexsystemsinc.com' target='_blank'>
                APEX Systems, Inc. - Denver, CO
              </a>
            </h4>
            <h5>
              July 2011 - July 2013
            </h5>
            <p class='body-text'>
              Designed/developed complex user interfaces and responsive web solutions for a variety of internal and external web applications, mobile applications and general web sites.
            </p>
            <p class='body-text'>
              Collaborated with a variety of teams including developers, business analysts and operations to develop strategies and design schemes for rich interactive interfaces that always kept scalability and usability in mind.
            </p>
            <p class='body-text'>
              Created and managed designs through all phases including initial concept, wireframes, low/high fidelity prototypes and final delivery and implementation.
            </p>
            <p class='body-text'>
              Integrated usability enhancements discovered through research, heuristic evaluations, user acceptance testing and focus groups.
            </p>
          </div>
        </span>
      </div>
      <aside class='medium-5 large-4 columns' id='my-references'>
        <h2>
          REFERENCES
        </h2>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/rob_christie.png'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Rob Christie
              </div>
              <div class='ref-card-p2'>
                Christie Consulting
              </div>
              <div class='ref-card-p3'>
                Owner
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            Thomas is one of those front-end developers that every team hopes to have. He is artistic, can do design, responsive layouts, and UI/UX work. Additionally he knows javascript, ruby, haml, sass, and git. As a mid-tier developer, it was a pleasure to collaborate with Thomas.
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/cody_palmer.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Cody Palmer
              </div>
              <div class='ref-card-p2'>
                Pivotal Labs
              </div>
              <div class='ref-card-p3'>
                Senior Software Engineer
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            Thomas is truly a worker that loves his craft. I've seen him work harder than those hungry first year career employees, despite the fact that he has nothing to prove. Also, this anecdote is not a story of him taking on extra work, it is him loving to learn new things in his own time.
            <br>
            <br>
            His position at Oppenheimer Funds was front end but he loved to take on new challenges such as the VPN server he set up at home or his personal website fully built on Ruby on Rails. I would highly recommend him in any role knowing fully that he will rise to the occasion, and enjoy every moment of it.
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/chris_aron.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Christopher Aron
              </div>
              <div class='ref-card-p2'>
                AT&T Mobility
              </div>
              <div class='ref-card-p3'>
                Product Marketing Manager
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            Thomas is an extremely gifted and creative individual. If you are looking for a quality designer or general marketing professional you cannot go wrong by adding him to your team. Thomas is a highly productive, intelligent, and flexible person who will help raise the quality of any team he is a part of.
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/damon_veazey.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Damon Veazey
              </div>
              <div class='ref-card-p2'>
                RBSI Consulting, Inc.
              </div>
              <div class='ref-card-p3'>
                President
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            RBSI initially hired Thomas for a 2 month project for some web related development we needed for one of our customers. Thomas did such an outstanding job for us that the assignment stretched to 7 months. We plan on using Thomas again on upcoming projects we have slated. Not only did Thomas do exceptionally good work for us - but he has a great attitude and interfaces extremely well with the end customer.
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/richard_cook.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Richard Cook
              </div>
              <div class='ref-card-p2'>
                Cricket Communications
              </div>
              <div class='ref-card-p3'>
                Manager - Software Engineer
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            Thomas is a detail oriented designer with great imagination. He is responsible for the majority of our custom CRM system look and feel redo and manages the UI/UX for just about every front end project here at Cricket. His designs are clean, mirrors what the customer wants and delivered on time.
            <br>
            <br>
            Thomas is such a valuable member of our contracting team that we are bringing him on full time here at Cricket. I would highly recommend Thomas for any UI/UX work.
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/allie_golon.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Allie Golon
              </div>
              <div class='ref-card-p2'>
                Regis Company
              </div>
              <div class='ref-card-p3'>
                Business Development Manager
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            Thomas is very adept at quickly learning what we needed from a graphics perspective, despite hazy directive. He always delivered on-time or ahead of time and his work was top quality. I look forward to asking Thomas to work on future projects...
          </div>
        </section>
        <section class='ref-card'>
          <div class='ref-card-top'>
            <div class='ref-card-top-left'>
              <img src='<?php bloginfo( 'template_directory' ); ?>/img/resume/michael_bowlin.jpg'>
            </div>
            <div class='ref-card-top-right'>
              <div class='ref-card-p1'>
                Michael Bowlin
              </div>
              <div class='ref-card-p2'>
                Arrow Electronics
              </div>
              <div class='ref-card-p3'>
                UI/UX Developer
              </div>
            </div>
          </div>
          <div class='ref-card-bottom'>
            I had the pleasure of working with Thomas Wicker during my time with AT&T, formally Cricket Communications. I was brought on to Thomas's development team in late 2013 and with his guidance as team-lead we successfully delivered a robust, Enterprise User-Interface for Cricket Wireless.
            <br>
            <br>
            Thomas possessed excellent leadership skills as a project-manager, and as a colleague he was essential in excelling the project above and beyond the initial scope. Thomas's rich background in art and design gives him an a eye for intuitive User Experience and he is a excellent Front-End Developer. I would highly recommend him for any UI/UX development project.
          </div>
        </section>
      </aside>
    </section>
  </div>
</section>
