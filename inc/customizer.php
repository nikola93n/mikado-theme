<?php

function mikado_customizer($wp_customize) {
    // Copyright
    $wp_customize -> add_section(
        'sec_footer', array(
            'title' => 'Footer Settings',
            'description' => 'Add a copyright and social links to your profiles on social networks.'
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

    //Fourth Social Icon
    $wp_customize -> add_setting(
        'set_social_four', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_four', array(
            'label' => 'Social Icon Four',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //Fourth Social Icon URL
    $wp_customize -> add_setting(
        'set_social_four_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_four_url', array(
            'label' => 'Social Icon Four URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );   

    //Fifth Social Icon
    $wp_customize -> add_setting(
        'set_social_five', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_five', array(
            'label' => 'Social Icon Five',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //Fifth Social Icon URL
    $wp_customize -> add_setting(
        'set_social_five_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_five_url', array(
            'label' => 'Social Icon Five URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );  

    //Six Social Icon
    $wp_customize -> add_setting(
        'set_social_six', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_six', array(
            'label' => 'Social Icon Six',
            'description' => 'Enter a class for an icon',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );
    
    //Six Social Icon URL
    $wp_customize -> add_setting(
        'set_social_six_url', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize -> add_control(
        'set_social_six_url', array(
            'label' => 'Social Icon Six URL',
            'description' => 'Enter a link to your profile',
            'section' => 'sec_footer',
            'type' => 'text'
        )
    );  

}
add_action('customize_register', 'mikado_customizer');  