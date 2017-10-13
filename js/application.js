/*
     _    ____  ____  _     ___ ____    _  _____ ___ ___  _   _       _ ____
    / \  |  _ \|  _ \| |   |_ _/ ___|  / \|_   _|_ _/ _ \| \ | |     | / ___|
   / _ \ | |_) | |_) | |    | | |     / _ \ | |  | | | | |  \| |  _  | \___ \
  / ___ \|  __/|  __/| |___ | | |___ / ___ \| |  | | |_| | |\  | | |_| |___) |
 /_/   \_\_|   |_|   |_____|___\____/_/   \_\_| |___\___/|_| \_|  \___/|____/
*/


console.log('connection to application.js successful!!!');

// js controlling width of resume skills bars

$(document).ready(function() {
  $('.html').css('width', '98%');
  $('.haml').css('width', '98%');
  $('.css').css('width', '98%');
  $('.sass').css('width', '98%');
  $('.javascript').css('width', '80%');
  $('.react').css('width', '60%');
  $('.angular').css('width', '60%');
  $('.wordpress').css('width', '90%');

  $('.ui').css('width', '100%');
  $('.ux').css('width', '100%');
  $('.zurb').css('width', '100%');
  $('.rwd').css('width', '98%');
  $('.agile').css('width', '90%');
  $('.rapidproto').css('width', '100%');
  $('.adobe').css('width', '98%');
  $('.sketch').css('width', '100%');

  $('.rails').css('width', '50%');
  $('.php').css('width', '60%');
  $('.heroku').css('width', '90%');
  $('.git').css('width', '85%');
  $('.db').css('width', '30%');
  $('.commandline').css('width', '75%');
  $('.git').css('width', '85%');
  $('.aws').css('width', '50%');

  var $homeBTN = $(".main-nav-home"),
      $portfolioBTN = $(".main-nav-portfolio"),
      $photographyBTN = $(".main-nav-photography"),
      $culinaryBTN = $(".main-nav-culinary"),
      $resumeBTN = $(".main-nav-resume"),
      $contactBTN = $(".main-nav-contact"),
      $svgBGColor = $(".svg-bg-color"),
      $svgContainer = $(".svg-container .pixel-me .left-eye, .svg-container  .pixel-me .right-eye"),
      $siteNav = $(".superhero-nav"),
      $navToggle = $("#nav-toggle"),
      $siteNavUL = $(".superhero-nav ul"),
      $instagramToggleBtn = $('.instagram-toggle-btn'),
      $flickrToggleBtn = $('.flickr-toggle-btn'),
      $instagramToggleContent = $('.psm--instagram'),
      $flickrToggleContent = $('.psm--flickr'),
      $instagramSuperheroBtn = $('.superheo-btn-instagram'),
      $flickrSuperheroBtn = $('.superheo-btn-flickr');


    $homeBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-home-is-active');
      $svgBGColor.toggleClass('svg-bg-home');
    });

    $portfolioBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-portfolio-is-active');
      $svgBGColor.toggleClass('svg-bg-portfolio');
    });

    $photographyBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-photography-is-active');
      $svgBGColor.toggleClass('svg-bg-photography');
    });

    $culinaryBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-culinary-is-active');
      $svgBGColor.toggleClass('svg-bg-culinary');
    });

    $resumeBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-resume-is-active');
      $svgBGColor.toggleClass('svg-bg-resume');
    });

    $contactBTN.hover(function() {
      $svgContainer.toggleClass('main-nav-contact-is-active');
      $svgBGColor.toggleClass('svg-bg-contact');
    });

    $navToggle.on('click', function () {
      console.log('toggle clicked!');
      $siteNav.toggleClass('active-main');
      $siteNavUL.toggleClass('active-nav');
    });

    $instagramToggleBtn.click(function(e) {
      e.preventDefault();
      $instagramToggleBtn.addClass('toggle-active');
      $flickrToggleBtn.removeClass('toggle-active');
      $flickrToggleContent.removeClass('active');
      $instagramToggleContent.addClass('active');
      $flickrSuperheroBtn.removeClass('active');
      $instagramSuperheroBtn.addClass('active');
    });

    $flickrToggleBtn.click(function(e) {
      e.preventDefault();
      $instagramToggleBtn.removeClass('toggle-active');
      $flickrToggleBtn.addClass('toggle-active');
      $instagramToggleContent.removeClass('active');
      $flickrToggleContent.addClass('active');
      $instagramSuperheroBtn.removeClass('active');
      $flickrSuperheroBtn.addClass('active');
    });
});
