<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 * Template for displaying the sidebar
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
?>
	<div id="sidebar1" class="ym-cbox sidebar" role="complementary">
		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar1' ); ?>
		<?php else : ?>
		<!-- This content shows up if there are no widgets defined in the backend. -->
			<div class="alert">
				<p class="box warning"><?php _e("Please activate some Widgets.", "yaml");  ?></p>
			</div>
		<?php endif; ?>
	</div>