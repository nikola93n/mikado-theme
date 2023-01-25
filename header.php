<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>    
    <!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title><?php the_field('seo_settings_seo_title'); ?></title>
    <meta name="description" content="<?php the_field('seo_settings_meta_description', false, false); ?>">
    <?php $seo_settings_thumbnail_image = get_field('seo_settings_thumbnail_image'); ?>
    <meta property="og:image" content="<?php echo $seo_settings_thumbnail_image['url']; ?>">

    <?php wp_head(); ?>
</head>

<body>
    <div class="top-container" style="background-color: rgba(0, 0, 0, 0.05);">
        <!-- Start Header Section -->
        <div class="container">
            <div class="row">
                <header class="mt-4 pb-4 d-flex justify-content-between align-items-center">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if ( has_custom_logo() ) {
                    echo ' <a href="'. get_home_url() . '" class="logo" id="home"><img src="' . esc_url( $logo[0] ) . '" alt="Mikado Logo" class="logo"></a>';
                    } else {
                    echo '<h1>' . get_bloginfo('name') . '<br>' . get_bloginfo('description') . '</h1>';
                    }
                ?> 
                <nav class="hide-nav" id="navbar">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class'=> 'd-flex align-items-center main-menu'
                    ) );
                    ?>
                </nav>
                    <button class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </header>
            </div>
        </div>
        <!-- End Header Section -->