<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Template for displaying the footer
 *
 * @package WP YAML
 * @version 0.2 
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
						<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>, all rights reserved.</p>
						<?php wp_footer(); ?>
					</div>
				</div>
			</div> 
		</footer>
	</body>
</html> <!-- the end, my friend :) -->