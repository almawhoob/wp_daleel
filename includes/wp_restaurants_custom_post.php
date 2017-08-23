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
        'show_in_rest'          => true,
        'rest_base'             => 'restaurants-api'
    ];
    register_post_type( 'wp_restaurants', $args );
}
add_action( 'init', 'wp_daleel_restaurants_custom_post');



/**
* Add featured image urls to post response
* Default is to show media ID, but then you have to do another http request to get the image for an app. This allows you to just use the url.
* Sample usage would be post.featured_image_urls.thumbnail
*/
add_action( 'rest_api_init', 'wp_daleel_add_featured_urls' );
function wp_daleel_add_featured_urls() {
	register_rest_field( array( 'post', 'restaurant' ),
	    'featured_image_urls',
	    array(
	        'get_callback'    => 'wp_daleel_featured_images',
	        'update_callback' => null,
            'schema'          => null,
	    )
	);
}

function wp_daleel_featured_images( $post ) {

    $featured_id = get_post_thumbnail_id( $post['id'] );
	$sizes = wp_get_attachment_metadata( $featured_id );
	$size_data = new stdClass();
			
	if ( ! empty( $sizes['sizes'] ) ) {

		foreach ( $sizes['sizes'] as $key => $size ) {
			// Use the same method image_downsize() does
			$image_src = wp_get_attachment_image_src( $featured_id, $key );

			if ( ! $image_src ) {
				continue;
			}
			
			$size_data->$key = $image_src[0];
		}
	}
	return $size_data;
}