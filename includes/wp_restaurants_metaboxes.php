<?php

function wp_daleel_add_restaurant_metaboxes() {
    add_meta_box( 'wp-resturant-address-meta-box', 'Restaurant Address', '_wp_restaurant_address_input_text', 'wp_restaurants', 'normal');
}
add_action( 'add_meta_boxes', 'wp_daleel_add_restaurant_metaboxes');

function _wp_restaurant_address_input_text() {
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");    
    echo 'Hello World! <br/>';
    ?>

    <div>
        <label for="metaboxes-address-label">Address: </label>
        <input type="text" name="metabox-address-input" value="<?php echo get_post_meta($post->ID, "metabox-address-input", true); ?>" />

        <br/>
        <hr/>
        
        <div>
            <h2>Working Hours: </h2>
            <label>Monday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>

            <label>Tuesday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>

            <label>Wednesday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>
            
            <label>Thursday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>

            <label>Friday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>

            <label>Saturday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>

            <label>Sunday: From </label><input type="time" name="monday-working-hours-start" /> 
            <label>To: </label><input type="time" name="monday-working-hours-end" /> <br/>
        </div>
        <hr/>
    </div>
    
    <?php
    echo '<label>Address: </label> <input name="google_maps_address_text"/> <br/>';
    // echo '<img src="http://placehold.it/100X100" alt="Smiley face" height="42" width="42"> <br/>';
}
