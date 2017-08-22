<?php

function wp_daleel_add_restaurant_metaboxes() {
    // add_meta_box( 'wp-resturant-address-meta-box', 'Restaurant Address', '_wp_restaurant_address_input_text', 'wp_restaurants', 'normal');
    add_meta_box( 'wp-resturant-working-hours-metabox', 'Restaurant Working Hours', '_wp_restaurant_working_hours_metabox_content', 'wp_restaurants', 'normal');
}
add_action( 'add_meta_boxes', 'wp_daleel_add_restaurant_metaboxes');


/*  */
function _wp_restaurant_working_hours_metabox_content() {
    wp_nonce_field(basename(__FILE__), "restaurant-working-hours-metabox-nonce");    
    ?>
        <table>
            <tr>
                <th>Working Day</th>
                <th>From: </th>
                <th>To: </th>
                <th>Closed? </th>
            </tr>
            <tr>
                <td>Monday</td>
                <td></label><input type="time" name="monday-working-hours-start" value="<?php echo get_post_meta($post->ID, "monday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="monday-working-hours-end" value="<?php echo get_post_meta($post->ID, "monday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="monday-closed" /></td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td></label><input type="time" name="tuesday-working-hours-start" value="<?php echo get_post_meta($post->ID, "tuesday-working-hours-start", true); ?> "/></td>
                <td></label><input type="time" name="tuesday-working-hours-end" value="<?php echo get_post_meta($post->ID, "tuesday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="tuesday-closed" /></td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td></label><input type="time" name="wednesday-working-hours-start" value="<?php echo get_post_meta($post->ID, "wednesday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="wednesday-working-hours-end" value="<?php echo get_post_meta($post->ID, "wednesday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="wednesday-closed" /></td>                
            </tr>                
            <tr>
                <td>Thursday</td>
                <td></label><input type="time" name="thursday-working-hours-start" value="<?php echo get_post_meta($post->ID, "thursday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="thursday-working-hours-end" value="<?php echo get_post_meta($post->ID, "thursday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="thursday-closed" /></td>                
            </tr>
            <tr>
                <td>Friday</td>
                <td></label><input type="time" name="friday-working-hours-start" value="<?php echo get_post_meta($post->ID, "friday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="friday-working-hours-end" value="<?php echo get_post_meta($post->ID, "friday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="friday-closed" /></td>                
            </tr>
            <tr>
                <td>Saturday</td>
                <td></label><input type="time" name="saturday-working-hours-start" value="<?php echo get_post_meta($post->ID, "saturday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="saturday-working-hours-end" value="<?php echo get_post_meta($post->ID, "saturday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="saturday-closed" /></td>               
            </tr>
            <tr>
                <td>Sunday</td>
                <td></label><input type="time" name="sunday-working-hours-start" value="<?php echo get_post_meta($post->ID, "sunday-working-hours-start", true); ?>" /></td>
                <td></label><input type="time" name="sunday-working-hours-end" value="<?php echo get_post_meta($post->ID, "sunday-working-hours-end", true); ?>" /></td>
                <td><input type="checkbox" name="sunday-closed" /></td>                
            </tr>                                                
        </table>
    
    <?php
    // echo '<label>Address: </label> <input name="google_maps_address_text"/> <br/>';
    // echo '<img src="http://placehold.it/100X100" alt="Smiley face" height="42" width="42"> <br/>';
}

function _wp_restaurant_address_input_text() {
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");    
    
    //Content here...
    echo 'Resturant Address Metabox';
    ?>

        <div>
        <label for="metaboxes-address-label">Address: </label>
        <input type="text" name="metabox-address-input" value="<?php echo get_post_meta($post->ID, "metabox-address-input", true); ?>" />

        <br/>
        <hr/>
        
        <div>

    <?php     
}
