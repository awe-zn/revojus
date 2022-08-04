<?php 

// Register css and javascript

function revojus_scripts () {
    wp_register_script('main', get_template_directory_uri() . '/dist/js/index.js', [], false, true);

    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'revojus_scripts');

function revojus_styles () {
    wp_register_style('revojus-style', get_template_directory_uri(). '/dist/css/style.css', [], false, true);
}

add_action('wp_enqueue_scripts', 'revojus_styles');