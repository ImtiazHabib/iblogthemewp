<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function ibwp_attachments($attachments){
    $fields = array(
       array(
           'name'      => 'title',
           'type'      => 'text',
           'label'     => __( 'Title', 'ibwp' ),
       ),
    );

    $args = array(

        'label'         => 'Featured Slider',
        'post_type'     => array( 'post'),
        'filetype'      => array("image"),
        'note'          => 'Add Slider Images',
        'button_text'   => __( 'Attach Files', 'ibwp' ),
        'fields'        => $fields,
    );

    $attachments->register( 'slider', $args );
}
add_action( 'attachments_register', 'ibwp_attachments' );

// For testimonial section on About Page start
function ibwp_testimonial_attachments($attachments){
    $fields = array(
       array(
           'name'      => 'name',
           'type'      => 'text',
           'label'     => __( 'Name', 'ibwp' ),
       ),
       array(
           'name'      => 'position',
           'type'      => 'text',
           'label'     => __( 'Position', 'ibwp' ),
       ),
       array(
           'name'      => 'testimonial',
           'type'      => 'textarea',
           'label'     => __( 'Testimonial', 'ibwp' ),
       ),
    );

    $args = array(

        'label'         => 'Testimonial Slider',
        'post_type'     => array( 'page'),
        'filetype'      => array("image"),
        'note'          => 'Add Slider Images',
        'button_text'   => __( 'Attach Files', 'ibwp' ),
        'fields'        => $fields,
    );

    $attachments->register( 'testimonial', $args );
}
add_action( 'attachments_register', 'ibwp_testimonial_attachments' );
// For testimonial section on About Page end
