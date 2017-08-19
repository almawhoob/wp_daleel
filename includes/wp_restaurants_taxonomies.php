<?php

/**
 * Creates a Taxonomy for Restaurant Categories. 
 */
function wp_daleel_restaurants_category_taxonomy() {

    $labels = [
        'name'              => _x('Restaurant Categories', 'taxonomy general name'),
        'singular_name'     => _x('Item Restaurants', 'taxonomy singular name'),
        'search_items'      => __('Search Restaurant Categories'),
        'all_items'         => __('All Restaurants'),
        'parent_item'       => __('Parent Restaurant Category'),
        'parent_item_colon' => __('Parent Restaurant Category:'),
        'edit_item'         => __('Edit Restaurant Category'),
        'update_item'       => __('Update Restaurant Category'),
        'add_new_item'      => __('Add New Restaurant Category'),
        'new_item_name'     => __('New Restaurant Category Name'),
        'menu_name'         => __('Restaurant Categories'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'restaurant_category'],
    ];
    register_taxonomy( 'restaurant_category', ['wp_restaurants'], $args );
}
add_action( 'init', 'wp_daleel_restaurants_category_taxonomy' );



/**
 * Creates a Taxonomy for Listing Amenities. 
 */
function wp_daleel_restaurants_listing_amenities_taxonomy() {

    $labels = [
        'name'              => _x('Restaurant Amenities', 'taxonomy general name'),
        'singular_name'     => _x('Restaurant Amenities', 'taxonomy singular name'),
        'search_items'      => __('Search Restaurant Amenities'),
        'all_items'         => __('All Amenities'),
        'parent_item'       => __('Parent Restaurant Amenity'),
        'parent_item_colon' => __('Parent Restaurant Amenity:'),
        'edit_item'         => __('Edit Restaurant Amenity'),
        'update_item'       => __('Update Restaurant Amenity'),
        'add_new_item'      => __('Add New Restaurant Amenity'),
        'new_item_name'     => __('New Restaurant Amenity Name'),
        'menu_name'         => __('Restaurant Amenities'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'listing_amenities'],
    ];
    register_taxonomy( 'restaurant_listing_amenities', ['wp_restaurants'], $args );
}
add_action( 'init', 'wp_daleel_restaurants_listing_amenities_taxonomy' );



/**
 * Creates a Taxonomy for Project Categories. 
 */
function wp_daleel_restaurants_meal_type_taxonomy() {

    $labels = [
        'name'              => _x('Meal Types', 'taxonomy general name'),
        'singular_name'     => _x('Meal Type', 'taxonomy singular name'),
        'search_items'      => __('Search Meal Types'),
        'all_items'         => __('All Meal Types'),
        'parent_item'       => __('Parent Meal Type'),
        'parent_item_colon' => __('Parent Meal Type:'),
        'edit_item'         => __('Edit Meal Type'),
        'update_item'       => __('Update Meal Type'),
        'add_new_item'      => __('Add New Meal Type'),
        'new_item_name'     => __('New Meal Type Name'),
        'menu_name'         => __('Meal Types'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'restaurant_meal_type'],
    ];
    register_taxonomy( 'restaurant_meal_type', ['wp_restaurants'], $args );
}
add_action( 'init', 'wp_daleel_restaurants_meal_type_taxonomy' );



/**
 * Creates a Taxonomy for Project Tags. 
 */
function wp_daleel_restaurants_tag_taxonomy() {

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
    register_taxonomy( 'item_tag', ['wp_restaurants'], $args );
}
add_action( 'init', 'wp_daleel_restaurants_tag_taxonomy' );
