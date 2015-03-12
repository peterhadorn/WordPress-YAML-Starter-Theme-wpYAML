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
						<?php if ( ICL_LANGUAGE_CODE=='en' ) : ?>
							<p class="copyright">wpYAML is a free <a href="http://www.wordpresstheme.ch" title="WordPress Themes">WordPress Theme</a> theme provided by <a href="http://www.hadornag.ch" title="Web Agency Switzerland Hadorn AG">Hadorn Web Agency</a>, feel free to use it and fork it as you like.</p>
						<?php else: ?>
							<p class="copyright">wpYAML ist ein Gratis <a href="http://www.wordpresstheme.ch" title="WordPress Themes Schweiz">WordPress Theme</a> erstellt von <a href="http://www.hadornag.ch" title="Hadorn AG Webagentur">Hadorn Webagentur</a>, Du kannst es benutzen und forken wie Du willst.</p>
						<?php endif; ?>
						<?php wp_footer(); ?>
					</div>
				</div>
			</div> 
		</footer>
	</body>
</html> <!-- the end, my friend :) -->