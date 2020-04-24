<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker() {
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'min-blue' ),
) );

/**
 * Hide Admin Bar
 */
show_admin_bar(false);

/**
 * Registers a widget area.
 */
function min_blue_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'min-blue' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'min-blue' ),
			'before_widget' => '<div class="card mb-3"><div class="card-body">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="card-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'min_blue_widgets_init' );

/**
 * Add class to next_posts_link and previous_posts_link
 */
add_filter('next_posts_link_attributes', 'pagination_link_attributes');
add_filter('previous_posts_link_attributes', 'pagination_link_attributes');

function pagination_link_attributes() {
  return 'class="btn btn-primary"';
}

/**
 * Modify tag cloud widget arguments
 */
add_filter( 'widget_tag_cloud_args', 'modify_widget_tag_cloud_args' );

function modify_widget_tag_cloud_args() {
	$args = array(
		'smallest' 		=> 0.75,
		'largest' 		=> 0.75,
		'unit' 				=> 'em',
		'number' 			=> 20,
		'format' 			=> 'flat',
		'separator'  	=> "\n",
		'orderby'    	=> 'name',
		'order'      	=> 'ASC',
		'link'       	=> 'view',
		'taxonomy'   	=> 'post_tag',
		'echo'       	=> false,
		'show_count' 	=> 0,
	);
	
	return $args;
}