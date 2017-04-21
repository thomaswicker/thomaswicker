<?php

// BEGIN - Load jQuery for thomaswicker.com

if ( !is_admin() ) {
   wp_deregister_script('jquery');
    wp_register_script( 'jqueryJS', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array('jquery') );
    wp_enqueue_script('jqueryJS');
}

// BEGIN LOAD THEME CSS

function theme_styles() {
  wp_enqueue_style( 'main1', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/components-font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'foundation-motion', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.css' );
  wp_enqueue_style( 'lightbox2', get_template_directory_uri() . '/bower_components/lightbox2/dist/css/lightbox.min.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/application.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// BEGIN - LOAD THEME JS

add_action( 'wp_enqueue_scripts', 'theme_js' );

function theme_js() {
    wp_register_script( 'motion-ui', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.js',array('jquery') );
    wp_register_script( 'foundationjs', get_template_directory_uri() . '/js/foundation.min.js',array('jquery') );
    wp_register_script( 'lightboxjs', get_template_directory_uri() . '/bower_components/lightbox2/dist/js/lightbox.min.js',array('jquery') );
    wp_register_script( 'masonryjs', get_template_directory_uri() . '/bower_components/masonry/dist/masonry.pkgd.min.js',array('jquery') );
    wp_register_script( 'appjs', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

    wp_enqueue_script( 'foundationjs' );
    wp_enqueue_script( 'motion-ui' );
    wp_enqueue_script( 'lightboxjs' );
    wp_enqueue_script( 'masonryjs' );
    wp_enqueue_script( 'appjs' );

}

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Changing excerpt length for posts on home page...
function new_excerpt_length($length) {
return 150;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'lastfm',
    'id'   => 'thomaswicker-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');

?>
