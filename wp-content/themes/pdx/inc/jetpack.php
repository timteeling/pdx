<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package pdx
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pdx_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'pdx_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function pdx_jetpack_setup
add_action( 'after_setup_theme', 'pdx_jetpack_setup' );

function pdx_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function pdx_infinite_scroll_render