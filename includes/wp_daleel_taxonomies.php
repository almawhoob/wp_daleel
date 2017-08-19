<?php

/**
 * Creates a Taxonomy for Project Categories. 
 */
function wp_daleel_category_taxonomy() {

    $labels = [
        'name'              => _x('Item Categories', 'taxonomy general name'),
        'singular_name'     => _x('Item Categories', 'taxonomy singular name'),
        'search_items'      => __('Search Item Categories'),
        'all_items'         => __('All Categories'),
        'parent_item'       => __('Parent Item Category'),
        'parent_item_colon' => __('Parent Item Category:'),
        'edit_item'         => __('Edit Item Category'),
        'update_item'       => __('Update Item Category'),
        'add_new_item'      => __('Add New Item Category'),
        'new_item_name'     => __('New Item Category Name'),
        'menu_name'         => __('Categories'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'item_category'],
    ];
    register_taxonomy( 'item_category', ['wp_daleel'], $args );
}
add_action( 'init', 'wp_daleel_category_taxonomy' );



/**
 * Creates a Taxonomy for Listing Amenities. 
 */
function wp_daleel_listing_amenities_taxonomy() {

    $labels = [
        'name'              => _x('Listing Amenities', 'taxonomy general name'),
        'singular_name'     => _x('Listing Amenities', 'taxonomy singular name'),
        'search_items'      => __('Search Listing Amenities'),
        'all_items'         => __('All Amenities'),
        'parent_item'       => __('Parent Listing Amenity'),
        'parent_item_colon' => __('Parent Listing Amenity:'),
        'edit_item'         => __('Edit Listing Amenity'),
        'update_item'       => __('Update Listing Amenity'),
        'add_new_item'      => __('Add New Listing Amenity'),
        'new_item_name'     => __('New Listing Amenity Name'),
        'menu_name'         => __('Listing Amenities'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'listing_amenities'],
    ];
    register_taxonomy( 'listing_amenities', ['wp_daleel'], $args );
}
add_action( 'init', 'wp_daleel_listing_amenities_taxonomy' );



/**
 * Creates a Taxonomy for Project Tags. 
 */
function wp_daleel_tag_taxonomy() {

    $labels = [
        'name'              => _x('Item Tags', 'taxonomy general name'),
        'singular_name'     => _x('Item Tags', 'taxonomy singular name'),
        'search_items'      => __('Search Item Tags'),
        'all_items'         => __('All Tags'),
        'parent_item'       => __('Parent Item Tag'),
        'parent_item_colon' => __('Parent Item Tag:'),
        'edit_item'         => __('Edit Item Tag'),
        'update_item'       => __('Update Item Tag'),
        'add_new_item'      => __('Add New Item Tag'),
        'new_item_name'     => __('New Item Tag Name'),
        'menu_name'         => __('Tags'),
    ];

    $args = [
        'hierarchical'      => false, //make it non-hierarchical (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project_tag'],
    ];
    register_taxonomy( 'item_tag', ['wp_daleel'], $args );
}
add_action( 'init', 'wp_daleel_tag_taxonomy' );
