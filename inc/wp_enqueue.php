<?php
// ----------- css and js file call -------
function torik_css_js_file_call() {

    // ------------------- google fonts ---------
    wp_enqueue_style('torik_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap', false);

    wp_enqueue_style('opensanc_fonts','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap', false);
    // -------- css filie ------
    wp_enqueue_style( 'torik_styele', get_stylesheet_uri());

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');

    wp_enqueue_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.1', 'all');
//   ------------------- js file call ----------
wp_enqueue_script('jquery');

wp_enqueue_script('bootstrap_file', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.0.2', 'all');

wp_enqueue_script('custom_js', get_template_directory_uri( ) . '/js/custom.js', array(), '1.0.2', 'all' );

}
add_action('wp_enqueue_scripts', 'torik_css_js_file_call');