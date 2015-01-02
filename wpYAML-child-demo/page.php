<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Default Page Template
 *
 * @package WP YAML
 * @version 0.2 
 * @since WP YAML 0.1.0
 **/
get_header(); ?>
				<div class="ym-column linearize-level-1">
					<div id="main" class="main ym-col1" role="main">
						<div class="ym-cbox ym-clearfix">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<header>
										<?php if (is_front_page() ) : ?>
											<h2 itemprop="headline"><?php the_title(); ?></h2>
										<?php else : ?>
											<h1 itemprop="headline"><?php the_title(); ?></h1>
										<?php endif; ?>
										<p><?php printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span>.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'wpyaml')), get_the_author()); ?></p>
									</header> 
									<section itemprop="articleBody">
										<?php the_content(); ?>
										<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wpyaml' ) . '</span>', 'after' => '</div>' ) ); ?>
									</section> 
									<?php // comments_template(); // uncomment if you want to use comments in pages ?>
								</article> 
							<?php endwhile; else : ?>
								<article id="post-not-found">
									<header>
										<h1><?php _e("Oops, Page Not Found!", "wpyaml"); ?></h1>
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