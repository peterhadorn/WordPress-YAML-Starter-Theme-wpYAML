<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *
 * Template for displaying archives
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
get_header(); ?>
				<div  class="ym-grid  ym-equalize linearize-level-1">  <!-- open main grid with equal heights around content and sidebar -->
					<div id="main" class="ym-g75 ym-gl main" role="main">  <!-- open content container -->

						<?php if (is_category()) { ?>
							<h1>
								<span><?php _e("Posts by Category:", "wpyaml"); ?></span> <?php single_cat_title(); ?>
							</h1>
						<?php } elseif (is_tag()) { ?>
							<h1>
								<span><?php _e("Posts by Tag:", "wpyaml"); ?></span> <?php single_tag_title(); ?>
							</h1>
						<?php } elseif (is_author()) {
							global $post;
							$author_id = $post->post_author;
						?>
							<h1>
								<span><?php _e("Posts By:", "wpyaml"); ?></span> <?php the_author_meta('display_name', $author_id); ?>
							</h1>
						<?php } elseif (is_day()) { ?>
							<h1>
								<span><?php _e("Daily Archives:", "wpyaml"); ?></span> <?php the_time('l, F j, Y'); ?>
							</h1>
						<?php } elseif (is_month()) { ?>
							<h1>
								<span><?php _e("Monthly Archives:", "wpyaml"); ?></span> <?php the_time('F Y'); ?>
							</h1>
						<?php } elseif (is_year()) { ?>
							<h1>
								<span><?php _e("Yearly Archives:", "wpyaml"); ?></span> <?php the_time('Y'); ?>
							</h1>
						<?php } ?>					
	
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
								<header>
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p><?php
										printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span> &amp; filed under %4$s.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), wpyaml_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>
								</header> <!-- end article header -->
								<section>
									<?php the_post_thumbnail( 'wpyaml-thumb-300' ); ?>
									<?php the_excerpt('Continue reading &rarr;', 'wpyaml'); ?>
									
								</section> <!-- end article section -->
								<?php // comments_template(); // uncomment if you want to use them here ?>
							</article> <!-- end article -->
						<?php endwhile; ?>
						<?php if ( function_exists( 'wpyaml_pagination' ) ) {
							wpyaml_pagination();
						} ?>
						<?php else : ?>
							<article id="post-not-found">
								<header>
									<h1><?php _e("Oops, Post Not Found!", "wpyaml"); ?></h1>
								</header>
								<section>
									<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "wpyaml"); ?></p>
								</section>
							</article>
						<?php endif; ?>
					
					</div> <!-- end #main -->
					<?php get_sidebar(); ?>
				</div> <!-- end #content -->
<?php get_footer(); ?>