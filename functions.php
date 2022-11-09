<?php

require_once get_template_directory() . '/core/must-install-plugins.php';

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/core/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/core/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// Load Composer’s autoloader
require plugin_dir_path( __FILE__ ) . 'core/vendor/autoload.php';

//Register Theme Functions

include_once( get_stylesheet_directory() . '/core/' . 'register-post-type.php' );
include_once( get_stylesheet_directory() . '/core/' . 'register-taxonomy.php' );
include_once( get_stylesheet_directory() . '/core/' . 'gutenberg-blocks.php' );
include_once( get_stylesheet_directory() . '/core/custom-fields/' . 'setup-fields.php' );

function setup_image_sizes() {
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'single-course-image', 264, 141, true );
}

add_action( 'after_setup_theme', 'setup_image_sizes' );

//Register CSS
add_action( 'wp_enqueue_scripts', 'register_theme_css' );
function register_theme_css() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' , __FILE__ );
    wp_enqueue_style( 'bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css' , __FILE__ );
}

//Register JS
add_action( 'wp_enqueue_scripts', 'register_theme_js' );
function register_theme_js() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' , __FILE__ );
    wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/js/bootstrap.bundle.min.js' , __FILE__ );
}

function register_google_fonts_poppins() {
    wp_enqueue_style( 'google_font_poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'register_google_fonts_poppins' );


function filter_terms_call( $tax_name ) {
  $taxonomies = array(
    $tax_name
  );
  $args = array(
      'order_by' => 'name',
      'order' => 'ASC',
      'number' => 0,
      'hide_empty' => false
  );
  $terms = get_terms( $taxonomies , $args);
  foreach ($terms as $term ) {
    $last_html .= '<div class="singleOption" id="'. $term->slug .'">';
    $last_html .= '<input type="checkbox" id="option-'. $term->slug .'" value="'. $term->name .'"/>';
    $last_html .= '<label for="option-'. $term->slug .'">'. $term->name .'</label>';
    $last_html .= '</div>';
  }
    return $last_html;
}

?>
