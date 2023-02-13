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


function mikado_custom_fonts() {
  $fonts = array(
      'Nunito Light' => 'Nunito Light',
      'Nunito Medium' => 'Nunito Medium',
      'Nunito ExtraBold' => 'Nunito Extra Bold',
      'Anton' => 'Anton'
  );
  return $fonts;
}
function mikado_custom_font_weight() {
  $font_weight = array(
      '200' => 'Extra Light 200',
      '300' => 'Light 300',
      '400' => 'Regular 400',
      '500' => 'Medium 500',
      '600' => 'Semi Bold 600',
      '700' => 'Bold 700',
      '800' => 'Extra Bold 800',
      '900' => 'Black 900'
  );
  return $font_weight;
}
function mikado_custom_font_controls($wp_customize) {
  $wp_customize -> add_section(
    'mikado_custom_fonts', array(
      'title' => __( 'Custom Fonts' ),
      'description' => 'Choose a custom font',
      'priority' => 30
    ) 
  );

  $wp_customize -> add_setting(
    'mikado_custom_font', array(
      'type' => 'theme_mod',
      'default' => 'Nunito Light',
      'transport' => 'refresh'
    )
  );

  $wp_customize -> add_control( 
    'mikado_custom_font', array(
      'label' => __( 'Select Font' ),
      'description' => 'Please select one of fonts family',
      'section' => 'mikado_custom_fonts',
      'type' => 'select',
      'choices' => mikado_custom_fonts(),
    ) 
  );

  $wp_customize -> add_setting(
    'mikado_custom_font_weight', array(
      'type' => 'theme_mod',
      'default' => '400',
      'transport' => 'refresh'
    )
  );

  $wp_customize -> add_control( 
    'mikado_custom_font_weight', array(
      'label' => __( 'Select Font Weight' ),
      'description' => 'Please select one of font weight',
      'section' => 'mikado_custom_fonts',
      'type' => 'select',
      'choices' => mikado_custom_font_weight(),
    ) 
  );

}
add_action( 'customize_register', 'mikado_custom_font_controls' );

function mikado_custom_fonts_inline_style() {
  $custom_font = get_theme_mod( 'mikado_custom_font', 'Open Sans' );
  $custom_css = "body h1, body h2, body h3 { font-family: '{$custom_font}', sans-serif; }";  
  $custom_font_weight = get_theme_mod( 'mikado_custom_font_weight', 400 );
  $custom_weight_css = "body .hero p { font-weight: {$custom_font_weight}; }";  
  wp_add_inline_style( 'main-style', $custom_css );
  wp_add_inline_style( 'main-style', $custom_weight_css );
  // print_r($custom_css);
  // print_r($custom_weight_css);
}
add_action( 'wp_enqueue_scripts', 'mikado_custom_fonts_inline_style' );




