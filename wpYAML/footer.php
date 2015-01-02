<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 * Template for displaying the footer
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
?>
				</div> <!--  ym-gbox -->
			</div> <!--  ym-wrapper -->
		</div> <!-- #content -->
		<nav role="navigation" class="ym-hlist footernav">
			<div class="ym-wrapper"> 
				<div class="ym-gbox">
					<?php wpyaml_footer_nav(); ?>
				</div>
			</div> 
		</nav>					
		<footer role="contentinfo">
			<div class="ym-wrapper">
				<div class="ym-gbox">				
					<div class="footer">
						<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><?php _e( ', all rights reserved.', 'wpyaml' ); ?></p>
						<?php wp_footer(); ?>
					</div>
				</div>
			</div> 
		</footer>
	</body>
</html> <!-- the end, my friend :) -->