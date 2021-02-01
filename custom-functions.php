<?php

/**
 * Enqueue scripts and styles.
 */
function enqueue_styles_scripts() {
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;700&display=swap', false  );
  // wp_enqueue_style( 'font-awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', false  );

  wp_enqueue_style( 'collagen-coffee-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
  wp_enqueue_script( 'collagen-coffee-main-script', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );

/**
 * Custom Functions by Natthaphon
 */
function set_exception_length() {
	return 25;
}
add_filter( 'excerpt_length', 'set_exception_length' );

// $myvar = "Hello World";
// add_action('wp_footer', function($arguments) use ($myvar) { 
//   echo $myvar;
// }, $priority_integer, $accepted_arguments_integer);

add_action('wp_head', function() { ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<?php });