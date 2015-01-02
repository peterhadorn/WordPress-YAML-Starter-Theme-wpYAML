<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 *  Template for displaying 404 error pages
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
get_header(); ?>
				<div class="ym-grid  ym-equalize linearize-level-1">  <!-- open main grid with equal heights around content and sidebar -->
					<div id="main" class="ym-g75 ym-gl main" role="main">  <!-- open content container -->
						<article id="post-not-found">
							<header>
								<h1><?php _e("Sorry, Not Found", "wpyaml"); ?></h1>									
							</header> <!-- end article header -->
							<section>
								<p><?php _e("This is an epic 404 error, please try to use the navigation or the search feature to find what you're looking for...", "wpyaml"); ?></p>
							</section> <!-- end article section -->
						</article> <!-- end article -->
					</div> <!-- end #main -->
					<?php get_sidebar(); ?>
				</div> <!-- end #content -->
<?php get_footer(); ?>