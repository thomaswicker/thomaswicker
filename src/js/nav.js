/*
 _   _    ___     __      _ ____
| \ | |  / \ \   / /     | / ___|
|  \| | / _ \ \ / /   _  | \___ \
| |\  |/ ___ \ V /   | |_| |___) |
|_| \_/_/   \_\_/     \___/|____/

*/

$(document).ready(function() {
 $('#nav-open').on('click', function () {
    $('#nav-modal').removeClass('hide-nav-modal');
    $('#nav-modal').addClass('show-nav-modal');
    $('#nav-mobile').removeClass('hide-it');
    $('#nav-mobile').addClass('show-it');
  });

  $('#nav-close').on('click', function () {
    $('#nav-modal').removeClass('show-nav-modal');
    $('#nav-modal').addClass('hide-nav-modal');
    $('#nav-mobile').removeClass('show-it');
    $('#nav-mobile').addClass('hide-it');
  });
});
