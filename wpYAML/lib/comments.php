<?php
/*
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *   
 *  Comments functions
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
 *
 /*********************
COMMENTS 
*********************/
// add a default-gravatar to options - thanks to Frank Bueltge http://bueltge.de/avatare-zum-standard-von-wordpress-hinzufuegen/852/

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
?>