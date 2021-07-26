<?php

function customThemeFiles(){
    wp_enqueue_style( 'style', get_theme_file_uri().'/assets/css/style.css');
    wp_enqueue_style('normalize',get_theme_file_uri().'/assets/css/normalize.css');
    wp_enqueue_style('bootstrap',get_theme_file_uri().'/assets/css/bootstrap.css');
   
    wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),NULL,'1.0',true);
    wp_enqueue_script('bootstrap.min.js',get_theme_file_uri('/assets/js/bootstrap.min.js'),NULL,'5',true);
}

function add_aos_animation(){
    wp_enqueue_style('aos','https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_script('aos-js','https://unpkg.com/aos@next/dist/aos.js',NULL,'1',true);
    wp_enqueue_script('aos-run', get_theme_file_uri('/assets/js/aos.js'), NULL,'1', true);
}

add_action('wp_enqueue_scripts','customThemeFiles');

add_action('wp_enqueue_scripts','add_aos_animation');

function contonline_features(){
    //register_nav_menu('mainMenuLocation', 'Main Menu Location');
    add_theme_support('title-tag');
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-line-height' );
    add_theme_support( 'custom-units', 'rem', 'em','vh','vw' );
}


add_action('after_setup_theme','contonline_features');