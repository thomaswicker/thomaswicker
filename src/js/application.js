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

  var siteNav = $(".superhero-nav"),
      navToggle = $("#nav-toggle"),
      siteNavUL = $(".superhero-nav ul");

    navToggle.on('click', function () {
      console.log('toggle clicked!');
      siteNav.toggleClass('active-main');
      siteNavUL.toggleClass('active-nav');
    });
});
