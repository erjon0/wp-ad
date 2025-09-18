<?php

function wpdevs_customize( $wp_customize ) {
    // Add a section for custom settings
    $wp_customize->add_section
        'sec_copyright', 
        array(
        'title'    =>'Custom Settings',
        'desciption' => 'Customize your theme settings here.',
    ) ;

    $wp_customize->add_setting
        'set_copyright', 
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright © 2024 Your Company',
            'sanitize_callback' => 'sanitize_text_field',
            ) ;


    $wp_customize->add_control( 'wpdevs_custom_text_control', array(
        'label'    => __( 'Custom Text', 'wpdevs' ),
        'section'  => 'wpdevs_custom_section',
        'settings' => 'wpdevs_custom_text',
        'type'     => 'text',
    ) );
}


?>