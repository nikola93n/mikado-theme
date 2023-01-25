<?php

function mikado_customizer($wp_customize) {
    // Copyright
    $wp_customize -> add_section(
        'sec_footer', array(
            'title' => 'Footer Settings',
            'description' => 'Footer Section'
        )
    );

    $wp_customize -> add_setting(
        'set_footer', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize -> add_control(
        'set_footer', array(
            'label' => 'Copyright',
            'description' => 'Please, enter your copyright info here',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );

    //First Social Icon
    $wp_customize -> add_setting(
        'set_social_one', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_one', array(
            'label' => 'Social Icon One',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //First Social Icon URL
    $wp_customize -> add_setting(
        'set_social_one_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_one_url', array(
            'label' => 'Social Icon One URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );

    //Second Social Icon
    $wp_customize -> add_setting(
        'set_social_two', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_two', array(
            'label' => 'Social Icon Two',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //Second Social Icon URL
    $wp_customize -> add_setting(
        'set_social_two_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_two_url', array(
            'label' => 'Social Icon Two URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );

    //Third Social Icon
    $wp_customize -> add_setting(
        'set_social_three', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_three', array(
            'label' => 'Social Icon Three',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //Third Social Icon URL
    $wp_customize -> add_setting(
        'set_social_three_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_three_url', array(
            'label' => 'Social Icon Three URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );

}
add_action('customize_register', 'mikado_customizer');  