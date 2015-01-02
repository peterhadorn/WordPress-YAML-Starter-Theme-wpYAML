<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 * Template for displaying comments
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
?><div id="comments">
	<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
			<p class="error box"><?php _e("This post is password protected. Enter the password to view comments.", "wpyaml"); ?></p>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	<h3><?php comments_number(__('<span>No</span> Comments', 'wpyaml'), __('<span>One</span> Comment', 'wpyaml'), _n('<span>%</span> Comment', '<span>%</span> Comments', get_comments_number(),'wpyaml') );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav">
			<ul>
				<li><?php previous_comments_link( __( '&larr; Older Comments', 'wpyaml' ) ); ?></li>
				<li><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpyaml' ) ); ?></li>
			</ul>
		</nav>
	<?php endif; // check for comment navigation ?>
	<ol>
		<?php wp_list_comments('type=comment&callback=wpyaml_comments'); ?>
	</ol>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav">
			<ul>
				<li><?php previous_comments_link( __( '&larr; Older Comments', 'wpyaml' ) ); ?></li>
				<li><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpyaml' ) ); ?></li>
			</ul>
		</nav>
	<?php endif; // check for comment navigation ?>
	<?php else : // this is displayed if there are no comments so far ?>
		<?php if ( comments_open() ) : ?>
			<p><?php _e("No comments yet.", "wpyaml"); ?></p>
		<?php else : // comments are closed ?>
			<p><?php _e("Comments are closed.", "wpyaml"); ?></p>
		<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<h3><?php comment_form_title( __('Leave a Reply', 'wpyaml'), __('Leave a Reply to %s', 'wpyaml' )); ?></h3>
	<p class="small"><?php cancel_comment_reply_link(); ?></p>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p class="box info"><?php printf( __('You must be %1$slogged in%2$s to post a comment.', 'wpyaml'), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="ym-full" >
	<?php if ( is_user_logged_in() ) : ?>
	<p><?php _e("Logged in as", "wpyaml"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "wpyaml"); ?>"><?php _e("Log out", "wpyaml"); ?> <?php _e("&raquo;", "wpyaml"); ?></a></p>
	<?php else : ?>
		<div class="ym-fbox-text">
			<label for="author"><?php _e("Name", "wpyaml"); ?> <sup class="ym-required"><?php if ($req) _e("(required)"); ?></sup></label>
			<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e('Your Name*', 'wpyaml'); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
        		</div>
		<div class="ym-fbox-text">
			<label for="email"><?php _e("Mail", "wpyaml"); ?> <sup class="ym-required"><?php if ($req) _e("(required)"); ?></sup> <small><?php _e("(will not be published)", "wpyaml"); ?></small></label>
			<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Your E-Mail*', 'wpyaml'); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			
        		</div>
		<div class="ym-fbox-text">
			<label for="url"><?php _e("Website", "wpyaml"); ?></label>
			<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e('Got a website?', 'wpyaml'); ?>" tabindex="3" />
        		</div>
	<?php endif; ?>
		<div class="ym-fbox-text">
			<label for="comment"><?php _e("Comment", "wpyaml"); ?></label>
			<textarea name="comment" id="comment" placeholder="<?php _e('Your Comment here...', 'wpyaml'); ?>" tabindex="4"></textarea>
        		</div>
		<div class="ym-fbox-button">
			<input name="submit" type="submit" id="submit" class="ym-button ym-next" tabindex="5" value="<?php _e('Submit', 'wpyaml'); ?>" />
		</div>
		<?php comment_id_fields(); ?>
		<p class="box warning small"><strong>XHTML:</strong> <?php _e('You can use these tags', 'wpyaml'); ?>: <code><?php echo allowed_tags(); ?></code></p>
	<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>