<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Template for displaying the index page
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 */
get_header(); ?>
				<div  class="ym-grid  ym-equalize linearize-level-1">  <!-- open main grid with equal heights around content and sidebar -->
					<div id="main" class="ym-g75 ym-gl main" role="main">  <!-- open content container -->
	
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
								<header>
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p><?php
										printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span> &amp; filed under %4$s.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), wpyaml_get_the_author_posts_link(), get_the_category_list(', '));
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
									<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "wpyaml"); ?></p>
								</section>
							</article>
						<?php endif; ?>
					
					</div>
					<?php get_sidebar(); ?>
				</div>
<?php get_footer(); ?>