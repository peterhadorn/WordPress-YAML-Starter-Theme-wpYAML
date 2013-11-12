<?php
/*  WP YAML v0.2 - Clean and responsive Wordpress starter theme
 *  URL: http://wpyaml.com
 *  Author: Peter Hadorn @peterhadorn
 *  
 *  License: CC Attribution 3.0 http://creativecommons.org/licenses/by/3.0/
 *   
 *  Pagination function
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
 *
/*********************
PAGINATION function, thanks to http://themes.required.ch/!
*********************/
function wpyaml_pagination() {
	global $wp_query;
	$big = 999999999; // This needs to be an unlikely integer
	// For more options and info view the docs for paginate_links()
	// http://codex.wordpress.org/Function_Reference/paginate_links
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5,
		'prev_next' => True,
	   	'prev_text' => __( '&laquo;', 'wpyaml' ),
	  	'next_text' => __( '&raquo;', 'wpyaml' ),
		'type' => 'list'
	) );
	// Display the pagination if more than one page is found
	if ( $paginate_links ) {
		echo $paginate_links;
	}
}
?>