<?php
/**
 *  wpYAML v1.0 - Free Wordpress Starter Theme
 *  URL:  http://www.hadornag.ch/wpYAML/
 *  Author: Peter Hadorn @peterhadorn
 *  License: GNU General Public License v3.0
 *   
 *  This is the functions.php file, short and sweet. You can drop your custom functions on
 *  the bottom or use your own includes.
 *
 * @package WP YAML
 * @since WP YAML 0.1.0
 * 
 *
 *********************
 * Include wpYAML components - DO NOT REMOVE
 *********************/

require_once('lib/init.php'); // Theme initialization and cleanup - if you remove this, the theme will break!

require_once('lib/scripts.php'); // register and enqueue scripts - add any additional JS scripts in scripts.php not in header.php!

require_once('lib/menus.php'); // menu & navigation functions

require_once('lib/comments.php'); // comments functions

require_once('lib/pagination.php'); // pagination function

// require_once('lib/custom-post-type.php'); //  Uncomment this and edit custom-post-type.php if you need custom post types, turned off by default  */

// require_once('lib/thumbnails.php'); //  Uncomment this and edit thumbnails.php if you need custom thumbnail sizes, turned off by default  */

// require_once('lib/admin.php'); // to do, turned off by default

// require_once('lib/translation/translation.php'); // to do, turned off by default

?>