<?php	
/**
 * Mikado's functions and definitions
 *
 * @package Mikado
 * @since MikadoTheme 0.7
 */
 
function load_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendors/css/bootstrap-icons.css', array(), '1.10.3', 'all');   
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendors/css/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('my-project-style', get_template_directory_uri() . '/assets/css/project-style.css', array(), '1.0', 'all');    
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');   
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/js/bootstrap.bundle.min.js', array(), '5.0.2', 'all');
    wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . '/assets/vendors/js/vanilla-tilt.min.js', array(), '1.0', 'all');
    wp_enqueue_script('pure-counter', get_template_directory_uri() . '/assets/vendors/js/purecounter.js', array(), '1.0', 'all');
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/vendors/js/swiper-bundle.min.js', array(), '8.0.7', 'all');    
    wp_enqueue_script('isotope-loading-img-first', get_template_directory_uri() . '/assets/vendors/js/images-Loaded.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendors/js/isotope.min.js', array('jquery'), '1.0', 'all');  
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', 'all');
    
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Logo
function mikado_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
    // add_theme_support( 'title-tag' );
} 
add_action( 'after_setup_theme', 'mikado_custom_logo_setup' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),          
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

//  Disable emojis - Please keep in mind that disabling the emojis feature may affect other functionality that rely on it, such as comments or posts that contain emojis.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Hide ACF menu if not local
 */
//  add_filter('acf/settings/show_admin', '__return_false');


// Enqueue editing the Footer from customizer
require_once get_template_directory() . '/inc/customizer.php';

//Required plugins via TGMP library
require_once get_template_directory() . '/tgmp/class-tgm-plugin-activation.php';

function mikado_theme_register_required_plugins() {
  $plugins = array(    
    array(
			'name'     => 'One Click Demo Import',
			'slug'     => 'one-click-demo-import',
			'required' => true,
		),
  );
  tgmpa( $plugins);
}
add_action( 'tgmpa_register', 'mikado_theme_register_required_plugins' );

// Required plugins with OCDI plugin 
function ocdi_register_plugins($plugins) {
  $theme_plugins = [     
      [
          'name'      => 'Contact Form 7',
          'slug'      => 'contact-form-7',
          'required'  => true,
      ],
      [
          'name'      => 'Advanced Custom Fields',
          'slug'      => 'advanced-custom-fields',
          'required'  => true,
      ],
    ];
  return array_merge($plugins, $theme_plugins);
}
add_filter( 'ocdi/register_plugins', 'ocdi_register_plugins' );

// Import Demo content with OCDI
add_filter( 'pt-ocdi/import_custom_fields', 'mikadoacf_import_custom_fields' );
function mikadoacf_import_custom_fields() {
    return 'https://mikadotheme.nnweb.net/demo-content/acf.json';
}

add_filter( 'pt-ocdi/import_files', 'mikadotheme_import_files' );
function mikadotheme_import_files() {
    return array(
        array(
            'import_file_name'             => 'Demo Import',
            'import_file_url'              => 'https://mikadotheme.nnweb.net/demo-content/mikadotheme.xml',
            'import_customizer_file_url'   => 'https://mikadotheme.nnweb.net/demo-content/customizer.dat',
        ),
    );
}

// Swiper control for related projects
  function enqueue_slides_number_script() {
    wp_enqueue_script( 'script-no-slides', get_template_directory_uri() . '/assets/js/swiper-control.js', array(), '1.0', true );
    $slides_per_view_extra_small_screen = get_field('slides_per_view_extra_small_screen');
    $slides_per_view_small_screen = get_field('slides_per_view_small_screen');  
    $slides_per_view_medium_screen = get_field('slides_per_view_medium_screen');  
    $slides_per_view_large_screen = get_field('slides_per_view_large_screen');  
    wp_localize_script( 'script-no-slides', 'slides_per_view_extra_small_screen', $slides_per_view_extra_small_screen);
    wp_localize_script( 'script-no-slides', 'slides_per_view_small_screen', $slides_per_view_small_screen);  
    wp_localize_script( 'script-no-slides', 'slides_per_view_medium_screen', $slides_per_view_medium_screen);  
    wp_localize_script( 'script-no-slides', 'slides_per_view_large_screen', $slides_per_view_large_screen);  
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_slides_number_script' );