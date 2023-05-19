<?php
// Include local JS and CSS on the frontend
function sixbtest_enqueue_assets() {
    wp_enqueue_style('tailwindCSS', get_template_directory_uri() . '/assets/dist/css/styles.css');
    wp_enqueue_script('tailwindJS', get_template_directory_uri() . '/assets/dist/js/scripts.js', NULL, NULL, true);
}
add_action('wp_enqueue_scripts', 'sixbtest_enqueue_assets');

// Store ACF fields in local JSON folder
add_filter('acf/settings/save_json', 'sixbtest_local_json');
function sixbtest_local_json( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path; 
}