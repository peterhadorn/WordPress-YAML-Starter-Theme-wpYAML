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
							<p class="copyright">wpYAML is a free theme brought to you by <a href="http://www.bizwp.com/themes/" title="WordPress Business Themes">WordPress Business Themes</a>, <a href="http://www.websitedesign.ch" title="Webdesign">Web Design</a> and <a href="http://www.hadornag.ch" title="Web Agency Switzerland Hadorn AG">Web Agency Switzerland</a>, feel free to use it and fork it.</p>
						<?php else: ?>
							<p class="copyright">wpYAML ist ein Gratis-Theme von <a href="http://www.wordpresstheme.ch" title="WordPress Themes Schweiz">WordPress Themes</a>, <a href="http://www.websitedesign.ch" title="Webdesign">Webdesign</a> und <a href="http://www.hadornag.ch" title="Webagentur Schweiz Hadorn AG">Webagentur Hadorn AG</a>, Du kannst es benutzen und forken.</p>
						<?php endif; ?>
						<?php wp_footer(); ?>
					</div>
				</div>
			</div> 
		</footer>
	</body>
</html> <!-- the end, my friend :) -->