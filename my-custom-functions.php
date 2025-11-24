<?php
/*
Plugin Name: My Custom Functions
Description: A boilerplate plugin for adding custom scripts, styles, and future functionality.
Version: 1.0
Author: Your Name
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function mcf_enqueue_scripts() {

    wp_enqueue_script(
        'mcf-custom-js',
        plugin_dir_url(__FILE__) . 'assets/js/custom.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_style(
        'mcf-custom-css',
        plugin_dir_url(__FILE__) . 'assets/css/custom.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mcf_enqueue_scripts');
