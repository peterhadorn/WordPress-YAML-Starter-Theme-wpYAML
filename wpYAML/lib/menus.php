<?php
/*
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *  
 *  Menu functions
 *  
 * @package WP YAML
 * @since WP YAML 0.1.0
 *
*********************
MENUS & NAVIGATION
*********************/

// fallback - info if no menus assigned
function wpyaml_menu_fallback() {
	echo '<div class="box error">';
	// Translators 1: Link to Menus, 2: Link to Customize
  	printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'wpyaml' ),
  		sprintf(  __( '<a href="%s">Menus</a>', 'wpyaml' ),
  			get_admin_url( get_current_blog_id(), 'nav-menus.php' )
  		),
  		sprintf(  __( '<a href="%s">Customize</a>', 'wpyaml' ),
  			get_admin_url( get_current_blog_id(), 'customize.php' )
  		)
  	);
  	echo '</div>';
}

// the main menu
function wpyaml_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'menu' => __( 'Main Navigation', 'wpyaml' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'mainmenu',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'wpyaml_menu_fallback'      // fallback function
	));
} 

// the footer menu (should you choose to use one)
function wpyaml_footer_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => '',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Navigation', 'wpyaml' ),   // nav name
    	'menu_class' => '',      // adding custom nav class
    	'theme_location' => 'footermenu',             // where it's located in the theme
    	'before' => '',                                 // before the menu
      	'after' => '',                                  // after the menu
        	'link_before' => '',                            // before each link
        	'link_after' => '',                             // after each link
        	'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'wpyaml_footer_fallback'  // fallback function
	));
} 

// this is the fallback for header menu
function wpyaml_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    		'menu_class' => '',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// this is the fallback for footer menu
function wpyaml_footer_fallback() {

}
?>