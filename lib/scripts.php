<?php
/*  Welcome to WP-YAML :)
 *  URL: http://wpyaml.com
 *  Author: Peter Hadorn @peterhadorn
 *  
 *  See style.css in main theme folder for all credits
 *  
 *  Registering and enqueuing of all scripts
 *  
 * @package WP YAML
 * @since WP YAML 0.1.0
 *
*********************
SCRIPTS
*********************/

add_action('wp_enqueue_scripts', 'wpyaml_scripts_and_styles', 999);

// loading modernizr and jquery, and reply script
function wpyaml_scripts_and_styles() {
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  if (!is_admin()) {

    // modernizr - uncomment if you need it, and replace with own custom build if required http://modernizr.com/download/
    // wp_register_script( 'wpyaml-modernizr', get_stylesheet_directory_uri() . '/lib/vendor/custom.modernizr.js', array(), '2.6.2', false );

    // selectivizr - uncomment if you need it
    // wp_register_script( 'wpyaml-selectivizr', get_stylesheet_directory_uri() . '/lib/vendor/selectivizr-min.js', array(), '1.0.2', false );    

    // register main stylesheet
    wp_register_style( 'wpyaml-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );

    // ie-only style sheet from YAML Core, iehacks.min.css
    wp_register_style( 'wpyaml-ie-only', get_stylesheet_directory_uri() . '/yaml/core/iehacks.min.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    //adding scripts file in the footer
   /* REGISTER ANY JQUERY SCRIPTS HERE!! wp_register_script( 'wpyaml-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );  */

    // enqueue styles and scripts
    // wp_enqueue_script( 'wpyaml-modernizr' );
    // wp_enqueue_script( 'wpyaml-selectivizr' );   
    wp_enqueue_style( 'wpyaml-stylesheet' );
    wp_enqueue_style('wpyaml-ie-only');

    $wp_styles->add_data( 'wpyaml-ie-only', 'conditional', 'lt IE 7' ); // add conditional wrapper around ie stylesheet


    /* Enqueue Wordpress jQuery - uncomment below line if you need jQuery! If you wish to use the Google CDN version of jQuery it's better to use a plugin.
    /* wp_enqueue_script( 'jquery' );  /* Enqueue jQuery */

    /*   REGISTER AND ENQUEUE ANY OTHER JS AND JQUERY SCRIPTS HERE */

  }
}

/**
 * Enqueue Google Fonts, thanks to https://gist.github.com/gregrickaby/4444021
 * 
 */
function load_google_fonts() {
 
    $protocol = is_ssl() ? 'https' : 'http';
    $query_args = array(
      'family' => 'Droid+Serif:400,400italic,700|Droid+Sans:700' // Change this to whatever font you'd like
    );
 
  wp_enqueue_style( 'gfonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
}
add_action( 'wp_enqueue_scripts', 'load_google_fonts' );


// Add <IE9 conditional html5 shim to header 
function add_ie_html5_shim () {
      echo '<!--[if lt IE 9]>';
      echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
      echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

?>