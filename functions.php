<?php
/*  WP YAML - Clean and responsive Wordpress starter theme
 *  URL: http://wpyaml.com
 *  Author: Peter Hadorn @peterhadorn
 *  
 *  License: CC Attribution 3.0 http://creativecommons.org/licenses/by/3.0/
 *   
 *  See style.css in main theme folder for all credits.
 *  
 *  This is the functions.php file, short and sweet, where you can drop your custom functions or
 *  just edit things like thumbnail sizes, header images, comments layout, etc.
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
 *
 *********************
INCLUDE NEEDED FILES - DO NOT REMOVE
*********************/

require_once('lib/init.php'); // Theme initialization and cleanup - if you remove this, the theme will break

require_once('lib/scripts.php'); // register and enqueue scripts, add any additional JS scripts in scripts.php not in header.php!

require_once('lib/menus.php'); // menu & navigation functions

// require_once('lib/mce.php'); // Tiny MCE styles - to do */

// require_once('lib/custom-post-type.php'); //  Uncomment this and edit custom-post-type.php if you need custom post types  */

// require_once('lib/admin.php'); // to do, this comes turned off by default

// require_once('lib/translation/translation.php'); // to do, this comes turned off by default

/*********************
THUMBNAIL SIZE OPTIONS
*********************/
// Thumbnail sizes
add_image_size( 'wpyaml-thumb-600', 600, 600, false );
add_image_size( 'wpyaml-thumb-300', 300, 300, false );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'wpyaml-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'wpyaml-thumb-600' ); ?>
*/

/*********************
COMMENTS 
*********************/
/**
 * add a default-gravatar to options - thanks to Frank Bueltge http://bueltge.de/avatare-zum-standard-von-wordpress-hinzufuegen/852/
 */

if ( !function_exists('fb_addgravatar') ) {
	function fb_addgravatar( $avatar_defaults ) {
		$myavatar = get_bloginfo('template_directory') . '/lib/images/wy.jpg';
		$avatar_defaults[$myavatar] = 'WP-YAML Gravatar';
		return $avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'fb_addgravatar' );
}

// Custom comments layout function
function wpyaml_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header>
				<?php echo get_avatar($comment,32) ?>
				<?php printf(__('<cite>%s</cite>', 'wpyaml'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'wpyaml')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'wpyaml'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<p class="box info"><?php _e('Your comment is awaiting moderation.', 'wpyaml') ?></p>
			<?php endif; ?>
			<section>
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
<?php
}

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