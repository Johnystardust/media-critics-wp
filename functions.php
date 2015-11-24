<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:53 PM
 *
 * @package Media Critics
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the scripts.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_scripts');
function add_my_custom_scripts(){
    // de-register stock jquery
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script('my_jquery', get_stylesheet_directory_uri().'/assets/jquery/jquery.1.11.3.min.js');
    wp_register_script('count_to', get_stylesheet_directory_uri().'/assets/jquery/jquery.countTo.js');
    wp_register_script('waypoints', get_stylesheet_directory_uri().'/assets/jquery/jquery.waypoints.min.js');
    wp_register_script('bootstrap_js', get_stylesheet_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');

    wp_register_script('slider', get_stylesheet_directory_uri().'/assets/javascript/slider.js');
    wp_register_script('menu', get_stylesheet_directory_uri().'/assets/javascript/menu.js');
    wp_register_script('javascript', get_stylesheet_directory_uri().'/assets/javascript/javascript.js');

    // enqueue scripts
    wp_enqueue_script('my_jquery');
    wp_enqueue_script('count_to');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('slider');
    wp_enqueue_script('menu');
    wp_enqueue_script('javascript');
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Add the stylesheets.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', 'add_my_custom_styles');
function add_my_custom_styles(){
    // register styles
    wp_register_style('bootstrap_css', get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_register_style('animate', get_stylesheet_directory_uri().'/assets/animate-css/animate.css');
    wp_register_style('google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,700,500');
    wp_register_style('fontello', get_stylesheet_directory_uri().'/assets/fontello/fontello-embedded.css');

    wp_register_style('stylesheet', get_stylesheet_directory_uri().'/assets/stylesheet/style.css');

    // enqueue styles
    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('animate');
    wp_enqueue_style('google_fonts');
    wp_enqueue_style('fontello');
    wp_enqueue_style('stylesheet');
}