<?php
// Includes
require get_template_directory().'/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'dab_theme_scripts');
add_action('after_setup_theme', 'dab_after_setup');