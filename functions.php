<?php 

//Requiring Theme Customizer
require get_template_directory() . '/inc/customizer.php';

// Requring TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Including stylesheet and script files
function load_scripts() {
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',  array(), '4.5.0', 'all' );
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css',  array(), '1.0', 'all' );
  wp_enqueue_script( 'fitvids', get_template_directory() . '/js/fitvids.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


function new_config() {

  // Registering our menus
  register_nav_menus(
    array(
      'my_main_menu' => __( 'Main Menu', 'newtheme' ),
      'footer_menu'  => __( 'Footer Menu', 'newtheme' )
    )
  );

  $args = array(
    'height' => 225,
    'width'  => 1920
  );
  add_theme_support( 'custom-header', $args );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'video', 'image' ) );
  add_theme_support( 'tite-tag' );
  add_theme_support( 'custom-logo', array(
    'height' => 60,
    'width'  => 100 
  ) );

  $textdomain = 'newtheme';
  load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages' );
  load_theme_textdomain( $textdomain, get_template_directory() . '/languages' );

  // Support for new block page builder
  add_theme_support( 'align-wide' );


}
add_action( 'after_setup_theme', 'new_config', 0 );

//Register sidebars
function new_sidebar_init() {

  $args = array(
    'name'          => 'Home page sidebar',
    'id'            => 'sidebar-1',
    'description'   => 'This is homepage sidebar',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  );
  register_sidebar( $args );

  $args_blog = array(
    'name'          => 'Blog sidebar',
    'id'            => 'sidebar-2',
    'description'   => 'This is Blog sidebar',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  );
  register_sidebar( $args_blog );

  register_sidebar( 
    array(
      'name'          => 'Service 1',
      'id'            => 'services-1',
      'description'   => 'First service area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );

  register_sidebar( 
    array(
      'name'          => 'Service 2',
      'id'            => 'services-2',
      'description'   => 'Second service area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );

  register_sidebar( 
    array(
      'name'          => 'Service 3',
      'id'            => 'services-3',
      'description'   => 'Third service area.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );

  register_sidebar( 
    array(
      'name'          => 'Social Media Icons',
      'id'            => 'social-media',
      'description'   => 'Social media icons widget area!',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );


}
add_action( 'widgets_init', 'new_sidebar_init' );




 ?>