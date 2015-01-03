<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Template for displaying the index page
 *
 * @package WP YAML
 * @version 0.2 
 * @since WP YAML 0.1.0
 */
get_header(); ?>
				<div class="ym-column linearize-level-1">
					<div id="main" class="main ym-col1" role="main">
						<div class="ym-cbox ym-clearfix">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
									<header>
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<p><?php
											printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span> &amp; filed under %4$s.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'wpyaml')), get_the_author(), get_the_category_list(', '));
										?></p>
									</header>
									<section>
										<?php the_content( __( 'Continue reading &rarr;', 'wpyaml' ) ); ?>
									</section>
									<?php // comments_template(); // uncomment if you want to use them on index ?>
								</article>
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
										<p><?php _e("Uh Oh. Something is missing. Try double checking things, or use the navigation.", "wpyaml"); ?></p>
									</section>
								</article>
							<?php endif; ?>
					 		<div class="ym-ie-clearing">&nbsp;</div>	
					 	</div>							
					</div>
					<div class="ym-col3">
							<?php get_sidebar(); ?>	
					</div>	
				</div>
<?php get_footer(); ?>