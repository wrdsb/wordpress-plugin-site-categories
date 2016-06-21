<?php

// Register Custom Taxonomy
function syndication_categories_taxonomy() {

	$labels = array(
		'name'                       => 'Syndication Categories',
		'singular_name'              => 'Syndication Category',
		'menu_name'                  => 'Syndication',
		'all_items'                  => 'All Categories',
		'parent_item'                => 'Parent Category',
		'parent_item_colon'          => 'Parent Category:',
		'new_item_name'              => 'New Category Name',
		'add_new_item'               => 'Add New Syndication Category',
		'edit_item'                  => 'Edit Syndication Category',
		'update_item'                => 'Update Category',
		'view_item'                  => 'View Category',
		'separate_items_with_commas' => 'Separate names with commas',
		'add_or_remove_items'        => 'Add or remove categories',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Categories',
		'search_items'               => 'Search Syndication Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No categories',
		'items_list'                 => 'Categories list',
		'items_list_navigation'      => 'Categories list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'syndication_categories', array( 'post', ' page' ), $args );

}
add_action( 'init', 'syndication_categories_taxonomy', 0 );
