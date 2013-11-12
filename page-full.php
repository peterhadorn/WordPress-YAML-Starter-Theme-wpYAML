<?php
/**
 * WP YAML - Clean and responsive Wordpress starter theme
 *
 * Template Name: Full-Width Page Template
 *
 * @package WP YAML
 * @version 0.2 
 * @since WP YAML 0.1.0
 **/
get_header(); ?>
					<div id="main" class="fullwidth main" role="main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<header>
									<h1 itemprop="headline"><?php the_title(); ?></h1>
									<p><?php
										printf(__('Posted <time datetime="%1$s">%2$s</time> by <span>%3$s</span>.', 'wpyaml'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'wpyaml')), wpyaml_get_the_author_posts_link());
									?></p>
								</header> 
								<section itemprop="articleBody">
									<?php the_content(); ?>
								</section> 
								<?php // comments_template(); uncomment if you want to use them! ?>
							</article> 
						<?php endwhile; else : ?>
							<article id="post-not-found">
								<header>
									<h1><?php _e("Oops, Post Not Found!", "wpyaml"); ?></h1>
								</header>
								<section>
									<p><?php _e("Uh Oh. Something is missing. Try double checking things, or use the navigation.", "wpyaml"); ?></p>
								</section>
							</article>
						<?php endif; ?>
					</div> 
<?php get_footer(); ?>