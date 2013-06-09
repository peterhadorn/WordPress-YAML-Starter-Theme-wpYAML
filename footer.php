<?php
/**
 * WP YAML Wordpress starter theme
 *
 * Template for displaying the footer
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
?>
			</div> <!-- close ym-wrapper from header.php -->
		</div> <!-- close #content from header.php -->
		<!-- footer navigation bar using YAML hlist -->
		<nav role="navigation" class="ym-hlist footernav">
			<div class="ym-wrapper"> 
				<?php wpyaml_footer_nav(); ?>
			</div> 
		</nav>					
		<footer role="contentinfo">
			<div class="ym-wrapper">
				<div class="footer">
					<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
					<?php wp_footer(); ?>
				</div>
			</div> 
		</footer>
	</body>
</html> <!-- this is the end, my friend :) -->