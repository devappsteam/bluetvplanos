<?php

function dab_theme_scripts(){
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '4.6.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/vendor/animate/animate.min.css', array('bootstrap'), '3.7.0', 'all');
    wp_enqueue_style('lineicons', get_template_directory_uri() . '/assets/vendor/lineicons/css/LineIcons.css', array('bootstrap','animate'), '1.0.0', 'all');
    wp_enqueue_style('bluetvplanos', get_template_directory_uri() . '/assets/css/app.css', array('bootstrap','animate', 'lineicons'), '1.0.0', 'all');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'),'4.6.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendor/wow/dist/wow.min.js', array('jquery', 'bootstrap'),'1.3.0', true);
    wp_enqueue_script('bluetvplanos', get_template_directory_uri() .'/assets/js/app.js', array('jquery','bootstrap','wow'), '1.0.0', true);
}

function dab_after_setup(){

    // Suporte a logo
    $logo_default = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $logo_default );

    // Suporte a menu
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'bluetvplanos'));

    // Suporte a titulo
    add_theme_support('title-tag');

    // Thumbnais
    add_theme_support('post-thumbnails');
}