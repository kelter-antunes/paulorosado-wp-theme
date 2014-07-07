<?php

/* REGISTER WIDGETS ------------------------------------------------------------*/
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Footer Left',
		'id'   => 'footer-left-widget',
		'description'   => 'Left Footer widget position.',
		'before_widget' => '<div id="%1$s" class="foot">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
		));

	register_sidebar(array(
		'name' => 'Footer Center',
		'id'   => 'footer-center-widget',
		'description'   => 'Centre Footer widget position.',
		'before_widget' => '<div id="%1$s" class="foot">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
		));

	register_sidebar(array(
		'name' => 'Footer Right',
		'id'   => 'footer-right-widget',
		'description'   => 'Right Footer widget position.',
		'before_widget' => '<div id="%1$s" class="foot">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
		));
}


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 306, 250, true );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => '',
		'id' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
		) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );




/**
 * Change the read more text.
 *
 */
function modify_read_more_link() {
	return '<p class="read-more"><a class="more-link" href="' . get_permalink() . '">Continue reading</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


/**
 * Unlimited Search Posts
 */
function jc_limit_search_posts() {
	if ( is_search())
		set_query_var('posts_per_page', -1);
}
add_filter('pre_get_posts', 'jc_limit_search_posts');

?>
