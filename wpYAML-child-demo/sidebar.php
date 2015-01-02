<?php
/**
 * WP YAML Wordpress starter theme
 *
 * Template for displaying the sidebar
 *
 * @package WP YAML
 * @version 0.2 
 * @since WP YAML 0.1.0
 */
?>
	<div id="sidebar1" class="ym-cbox sidebar" role="complementary">
		<h4><?php _e( 'Language selection', 'wpyaml' ); ?></h4>
		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar1' ); ?>
		<?php else : ?>
		<!-- This content shows up if there are no widgets defined in the backend. -->
			<div class="alert">
				<p class="box warning"><?php _e("Please activate some Widgets.", "yaml");  ?></p>
			</div>
		<?php endif; ?>
		<!-- <?php wpyaml_wpsearch(); ?>-->
	</div>