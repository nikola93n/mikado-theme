<?php
// Register a new section in the customizer
function my_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'font_section' , array(
      'title' => __( 'Fonts', 'my-theme' ),
      'priority' => 30
  ) );
}
add_action( 'customize_register', 'my_theme_customizer' );

// Add a select field for font selection
function my_theme_customizer_settings( $wp_customize ) {
  $wp_customize->add_setting( 'font_setting', array(
      'default' => 'Open Sans',
      'transport' => 'refresh',
  ) );
  $wp_customize->add_control( 'font_setting', array(
      'label' => __( 'Select Font', 'my-theme' ),
      'section' => 'font_section',
      'type' => 'select',
      'choices' => array(
          'Open Sans' => 'Open Sans',
          'Roboto' => 'Roboto',
          'Lato' => 'Lato',
          'Montserrat' => 'Montserrat',
          'Raleway' => 'Raleway',
          'Anton' => 'Anton'
      ),
  ) );
}
add_action( 'customize_register', 'my_theme_customizer_settings' );

// Enqueue the selected font
function my_theme_customizer_css() {
  $font = get_theme_mod( 'font_setting' );
  $font_url = 'https://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $font );
  wp_enqueue_style( 'my_theme_font', $font_url );
  ?>
  <style type="text/css">
      body {
          font-family: '<?php echo $font; ?>', sans-serif;
      }
  </style>
  <?php
}
add_action( 'wp_head', 'my_theme_customizer_css' );

function my_theme_enqueue_fonts() {
  wp_enqueue_style( 'my-theme-font-name', get_template_directory_uri() . '/fonts/font-anton.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_fonts' );