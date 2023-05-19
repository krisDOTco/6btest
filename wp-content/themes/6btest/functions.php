<?php
function sixbtest_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/dist/css/styles.css');
}
add_action('wp_enqueue_scripts', 'sixbtest_enqueue_styles');
