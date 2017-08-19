<?php


function wp_daleel_restaurants_custom_post() {

    $labels = [
        'name'               => _x('Restaurants', 'Post Type General Name', 'gourmet-artist'),
        'singular_name'      => _x('Restaurant', 'Post Type Singular Name', 'gourmet-artist'),
        'menu_name'          => __('Restaurants', 'gourmet-artist'),
        'all_items'          => __('All Restaurants', 'gourmet-artist'),
        'view_items'         => __('View Restaurants', 'gourmet-artist'),
        'add_new_item'       => __('Add New Restaurant', 'gourmet-artist'),
        'add_new'            => __('Add New Restaurant', 'gourmet-artist'),
        'edit_item'          => __('Edit Restaurant', 'gourmet-artist'),
        'update_item'        => __('Update Restaurant', 'gourmet-artist'),
        'search_items'       => __('Search Restaurants', 'gourmet-artist'),
        'not_found'          => __('No Restaurants found.', 'gourmet-artist'),
        'not_found_in_trash' => __('No Restaurants found in trash.', 'gourmet-artist'),
    ];
    
    $args = [
        'labels'                => $labels,
        'public'                => true,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail' ),
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'rewrite'               => ['slug' => 'restaurants'], //my custom slug
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true, 
        'menu_position'         => 5, //menu order; show_in_menu must be true; 5 means below Posts
        'menu_icon'             => 'dashicons-carrot', //uses an icon from Dashicons
        'can_export'            => true,
    ];
    register_post_type( 'wp_restaurants', $args );
}
add_action( 'init', 'wp_daleel_restaurants_custom_post');