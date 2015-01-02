<?php
/*
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *  
 *  Registering and enqueuing of scripts
 *  
 * @package WP YAML
 * @since WP YAML 0.1.0
 *
*********************
SCRIPTS
*********************/

add_action('wp_enqueue_scripts', 'wpyaml_scripts_and_styles', 999);

function wpyaml_scripts_and_styles() {
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  if (!is_admin()) {

    // register main stylesheet
    wp_register_style( 'wpyaml-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );

    //  iehacks.min.css YAML Core,
    wp_register_style( 'wpyaml-ie-only', get_stylesheet_directory_uri() . '/css/iehacks.min.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    // adding scripts file in the footer
    // REGISTER ANY JQUERY SCRIPTS HERE!! wp_register_script( 'wpyaml-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );

    // enqueue styles and scripts  
    wp_enqueue_style( 'wpyaml-stylesheet' );
    wp_enqueue_style('wpyaml-ie-only');

    $wp_styles->add_data( 'wpyaml-ie-only', 'conditional', 'lt IE 8' ); // add conditional wrapper around ie stylesheet


    // Enqueue Wordpress jQuery - uncomment below line if you need jQuery! If you wish to use the Google CDN version of jQuery it's better to use a plugin.
    // wp_enqueue_script( 'jquery' );  /* Enqueue jQuery */

    //   ENQUEUE ANY OTHER JS AND JQUERY SCRIPTS HERE 

  }
}

// Add html5shim and boxsizing.htc to header, conditional for IE6-8
function ie_support () {
        echo '<!--[if lt IE 9]>';
        echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
        echo '<style>*{*behavior: url(' . get_stylesheet_directory_uri() . '/lib/vendor/boxsizing.htc);}</style>';
        echo '<![endif]-->';
        }
add_action('wp_head', 'ie_support');

// Enqueue Google Fonts, thanks to https://gist.github.com/gregrickaby/4444021 !
function load_google_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    $query_args = array(
      'family' => 'Droid+Serif:400,400italic,700|Droid+Sans:700' // YAML default - change this to whatever font you'd like
    );
  wp_enqueue_style( 'gfonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
}
add_action( 'wp_enqueue_scripts', 'load_google_fonts' );
?>