<?php


function wp_daleel_custom_post() {

    $labels = [
        'name'               => _x('Daleel', 'Post Type General Name', 'gourmet-artist'),
        'singular_name'      => _x('Daleel', 'Post Type Singular Name', 'gourmet-artist'),
        'menu_name'          => __('Daleel', 'gourmet-artist'),
        'all_items'          => __('All Items', 'gourmet-artist'),
        'view_items'         => __('View Items', 'gourmet-artist'),
        'add_new_item'       => __('Add New Item', 'gourmet-artist'),
        'add_new'            => __('Add New Item', 'gourmet-artist'),
        'edit_item'          => __('Edit Item', 'gourmet-artist'),
        'update_item'        => __('Update Item', 'gourmet-artist'),
        'search_items'       => __('Search Items', 'gourmet-artist'),
        'not_found'          => __('No items found.', 'gourmet-artist'),
        'not_found_in_trash' => __('No items found in trash.', 'gourmet-artist'),
    ];
    
    $args = [
        'labels'                => $labels,
        'public'                => true,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail' ),
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'rewrite'               => ['slug' => 'daleel'], //my custom slug
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true, 
        'menu_position'         => 5, //menu order; show_in_menu must be true; 5 means below Posts
        'menu_icon'             => 'dashicons-location', //uses an icon from Dashicons
        'can_export'            => true,
    ];
    register_post_type( 'wp_daleel', $args );
}
add_action( 'init', 'wp_daleel_custom_post');