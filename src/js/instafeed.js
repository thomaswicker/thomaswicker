/*
 ___ _   _ ____ _____  _    _____ _____ _____ ____        _ ____
|_ _| \ | / ___|_   _|/ \  |  ___| ____| ____|  _ \      | / ___|
 | ||  \| \___ \ | | / _ \ | |_  |  _| |  _| | | | |  _  | \___ \
 | || |\  |___) || |/ ___ \|  _| | |___| |___| |_| | | |_| |___) |
|___|_| \_|____/ |_/_/   \_\_|   |_____|_____|____/   \___/|____/

*/

var $navItems = $('.superhero-nav li a');

$navItems.on('click', function () {
  alert('test');
});


function instagramFeed() {
  var userFeed = new Instafeed({
        get: 'user',
        userId: '187394513',
        accessToken: '187394513.566a3a4.bda225779b204cec8ce823dc4394a1a9'
    });
    userFeed.run();
}
setTimeout(instagramFeed, 300);
