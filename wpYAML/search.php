<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 * Search Results Page
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
get_header(); ?>
				<div id="content" class="ym-grid  ym-equalize">	<!-- open main grid with equal heights around content and sidebar -->
					<div id="main" class="ym-g75 ym-gl main" role="main">  <!-- open content container -->
						<h1><span><?php _e('Search Results for:', 'wpyaml'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" role="article">
								<header>
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p><?php
										printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span> &amp; filed under %4$s.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'wpyaml')), wpyaml_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>
								</header> <!-- end article header -->
								<section>
										<?php the_excerpt('<span class="read-more">' . __('Read more &raquo;', 'wpyaml') . '</span>'); ?>
								</section> <!-- end article section -->
							</article> <!-- end article -->

						<?php endwhile; ?>
						<?php if ( function_exists( 'wpyaml_pagination' ) ) {
							wpyaml_pagination();
						} ?>
						<?php else : ?>
							<article id="post-not-found">
								<header>
									<h1><?php _e("Sorry, No Results.", "wpyaml"); ?></h1>
								</header>
								<section>
									<p><?php _e("Try your search again.", "wpyaml"); ?></p>
								</section>
							</article>
						<?php endif; ?>
					</div> <!-- end #main -->
					<?php get_sidebar(); ?>
				</div> <!-- end #content -->
<?php get_footer(); ?>
