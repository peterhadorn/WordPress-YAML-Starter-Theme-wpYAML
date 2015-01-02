<?php
/*
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *   
 *  Optional thumbnail settings.
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
 *
 /*********************
THUMBNAIL SIZE OPTIONS
*********************/
// Thumbnail sizes
add_image_size( 'wpyaml-thumb-600', 600, 600, false );
add_image_size( 'wpyaml-thumb-300', 300, 300, false );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'wpyaml-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'wpyaml-thumb-600' ); ?>
*/
?>