<?php
/*
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *  
 *  Theme initialization and cleanup stuff
 *  
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
/*********************
INITIALIZE wpYAML
*********************/
// we're firing all out initial functions at the start
add_action('after_setup_theme','wpyaml_init', 16);

function wpyaml_init() {
    // launching operation cleanup
    add_action('init', 'wpyaml_head_cleanup');
    // remove WP version from RSS
    add_filter('the_generator', 'wpyaml_rss_version');
    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'wpyaml_remove_wp_widget_recent_comments_style', 1 );
    // clean up comment styles in the head
    add_action('wp_head', 'wpyaml_remove_recent_comments_style', 1);
    // clean up gallery output in wp
    add_filter('gallery_style', 'wpyaml_gallery_style');
    // launching this stuff after theme setup
    wpyaml_theme_support();
    // adding sidebars to Wordpress 
    add_action( 'widgets_init', 'wpyaml_register_sidebars' );
    // adding the search form 
    add_filter( 'get_search_form', 'wpyaml_wpsearch' );
    // cleaning up random code around images!!!
    add_filter('the_content', 'wpyaml_filter_ptags_on_images');
    // cleaning up excerpt
    add_filter('excerpt_more', 'wpyaml_excerpt_more');
}

// clean WP Head
function wpyaml_head_cleanup() {
	// category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
  	// remove WP version from css
  	add_filter( 'style_loader_src', 'wpyaml_remove_wp_ver_css_js', 9999 );
  	// remove Wp version from scripts
  	add_filter( 'script_loader_src', 'wpyaml_remove_wp_ver_css_js', 9999 );
}

// remove WP version from RSS
function wpyaml_rss_version() { return ''; }

// remove WP version from scripts
function wpyaml_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

// remove injected CSS for recent comments widget
function wpyaml_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}

// remove injected CSS from recent comments widget
function wpyaml_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

// remove injected CSS from gallery
function wpyaml_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

// add WP 3+ Functions & Theme Support
function wpyaml_theme_support() {
	// wp thumbnails (sizes handled in functions.php)
	add_theme_support('post-thumbnails');
	// default thumb size - SET IF NEEDED
	set_post_thumbnail_size(150, 150, false);	
	// wp custom background (thx to @bransonwerner for update)
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',  // background image default
	    'default-color' => '', // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
	// rss
	add_theme_support('automatic-feed-links');
	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/ and http://make.wordpress.org/themes/2012/04/06/updating-custom-backgrounds-and-custom-headers-for-wordpress-3-4/
	// wp menus
	add_theme_support( 'menus' );
	// registering wp3+ menus
	register_nav_menus(
		array(
			'mainmenu' => __( 'Main Navigation', 'wpyaml' ),   // main nav in header
			'footermenu' => __( 'Footer Navigation', 'wpyaml' ) // secondary nav in footer
		)
	);
} 

// Sidebars & Widgetizes Areas
function wpyaml_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'wpyaml'),
		'description' => __('The first (primary) sidebar.', 'wpyaml'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:
	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'wpyaml'),
		'description' => __('The second (secondary) sidebar.', 'wpyaml'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php
	*/
} 

// Search Form
function wpyaml_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" class="ym-full" action="' . home_url( '/' ) . '" >
	<div class="ym-fbox-text">
		<label for="s" class="hide">' . __('Search for:', 'wpyaml') . '</label>		
		<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search...','wpyaml').'" />
	</div>
        	<div class="ym-fbox-button">
        		<input type="submit" id="searchsubmit" class="ym-next ym-button" value="'. esc_attr__('Search') .'" />
        	</div>
        	</form>';
	return $form;
} 

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function wpyaml_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function wpyaml_excerpt_more($more) {
	global $post;
	// edit here if you like
return '...  <a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'wpyaml') . get_the_title($post->ID).'">'. __('Read more &raquo;', 'wpyaml') .'</a>';
}

/*********************
OTHER CLEANUP ITEMS
*********************/
// This is a modified the_author_posts_link() which just returns the link
function wpyaml_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}

// This removes rel attribute from the category list to ensure HTML5 validation
function remove_category_list_rel( $output ) {
    	return str_replace( ' rel="category tag"', '', $output );
}
add_filter( 'wp_list_categories', 'remove_category_list_rel' );
add_filter( 'the_category', 'remove_category_list_rel' );

// Footer <3
add_action( 'wp_footer', 'wpyaml_credits' );
function wpyaml_credits() {
	_e( '<p>Proudly powered by <a href="http://wordpress.org/">WordPress</a>, the <a href="http://www.hadornag.ch/wpYAML/">free WordPress starter theme</a> wpYAML, and the <a href="http://www.yaml.de" rel="nofollow">YAML CSS framework</a>.</p>', 'wpyaml' );
}
?>