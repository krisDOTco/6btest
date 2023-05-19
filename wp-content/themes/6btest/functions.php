<?php
function sixbtest_enqueue_assets() {
    wp_enqueue_style('tailwindCSS', get_template_directory_uri() . '/assets/dist/css/styles.css');
    wp_enqueue_script('tailwindJS', get_template_directory_uri() . '/assets/dist/js/scripts.js', NULL, NULL, true);
}
add_action('wp_enqueue_scripts', 'sixbtest_enqueue_assets');
