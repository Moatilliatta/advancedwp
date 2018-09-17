<?php
/**
Plugin Name: Gourmet Artistry Post Types and Taxonomies.
Plugin URI:
Description: Adds Custom Post Types to site.
Author: Edgar García.
Version: 1.0
Author URI: http://edgarcia.org
License: GPL2 https://www.gnu.org

@package GourMet Artistry
 */

add_action( 'init', 'ga_recipe_post_type' );
add_action( 'init', 'ga_event_post_type' );

/**
 * Register customized post type Recipe
 */
function ga_recipe_post_type() {

	// Labels for the post type.
	$labels = [
		'name'               => _x(
			'Recipes',
			'Post Type General Name',
			'gourmet-artist'
		),
		'singular_name'      => _x(
			'Recipe',
			'Post Type Singular Name',
			'gourmet-artist'
		),
		'menu_name'          => __( 'Recipes', 'gourmet-artist' ),
		'parent_item_colon'  => __( 'Parent Recipe', 'gourmet-artist' ),
		'all_items'          => __( 'All Recipes', 'gourmet-artist' ),
		'view_item'          => __( 'View Recipe', 'gourmet-artist' ),
		'add_new_item'       => __( 'Add New Recipe', 'gourmet-artist' ),
		'add_new'            => __( 'Add New Recipe', 'gourmet-artist' ),
		'edit_item'          => __( 'Edit Recipe', 'gourmet-artist' ),
		'update_item'        => __( 'Update Recipe', 'gourmet-artist' ),
		'search_items'       => __( 'Search Recipe', 'gourmet-artist' ),
		'not_found'          => __( 'No Recipe Found', 'gourmet-artist' ),
		'not_found_in_trash' => __(
			'No Recipe Found In Trash',
			'gourmet-artist'
		),
	];

	// Another Customizations.
	$args = [
		'label'                => __( 'Recipes', 'gourmet-artist' ),
		'description'          => __(
			'Recipies for Gourmet Artistry',
			'gourmet-artist'
		),
		'labels'               => $labels,
		'supports'             => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'comments',
			'revisions',
			'custom-fields',
		],
		'hierarchichal'        => false,
		'public'               => true,
		'show_ui_in_menus'     => true,
		'show_ui_in_nav_menus' => true,
		'show_ui_in_admin_bar' => true,
		'menu_position'        => 5,
		'menu_icon'            => 'dashicons-carrot',
		'can_export'           => true,
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'capability_type'      => 'page',
	];

	// Register the post type.
	register_post_type( 'recipes', $args );
}

/**
 * Register customized post type Recipe
 */
function ga_event_post_type() {

	// Labels for the post type.
	$labels = [
		'name'               => _x(
			'Events',
			'Post Type General Name',
			'gourmet-artist'
		),
		'singular_name'      => _x(
			'Event',
			'Post Type Singular Name',
			'gourmet-artist'
		),
		'menu_name'          => __( 'Events', 'gourmet-artist' ),
		'parent_item_colon'  => __( 'Parent Event', 'gourmet-artist' ),
		'all_items'          => __( 'All Events', 'gourmet-artist' ),
		'view_item'          => __( 'View Event', 'gourmet-artist' ),
		'add_new_item'       => __( 'Add New Event', 'gourmet-artist' ),
		'add_new'            => __( 'Add New Event', 'gourmet-artist' ),
		'edit_item'          => __( 'Edit Event', 'gourmet-artist' ),
		'update_item'        => __( 'Update Event', 'gourmet-artist' ),
		'search_items'       => __( 'Search Event', 'gourmet-artist' ),
		'not_found'          => __( 'No Event Found', 'gourmet-artist' ),
		'not_found_in_trash' => __(
			'No Event Found In Trash',
			'gourmet-artist'
		),
	];

	// Another Customizations.
	$args = [
		'label'                => __( 'Events', 'gourmet-artist' ),
		'description'          => __(
			'Recipies for Gourmet Artistry',
			'gourmet-artist'
		),
		'labels'               => $labels,
		'supports'             => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'comments',
			'revisions',
			'custom-fields',
		],
		'hierarchichal'        => false,
		'public'               => true,
		'show_ui_in_menus'     => true,
		'show_ui_in_nav_menus' => true,
		'show_ui_in_admin_bar' => true,
		'menu_position'        => 6,
		'menu_icon'            => 'dashicons-calendar',
		'can_export'           => true,
		'has_archive'          => true,
		'exclude_from_search'  => false,
		'capability_type'      => 'page',
	];

	// Register the post type.
	register_post_type( 'events', $args );
}
