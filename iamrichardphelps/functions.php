<?php

/**
 * This will allow data to be passed that will be put in a print_r
 * THIS SHOULD BE REMOVED BEFORE GOING LIVE
 */
function web_debug ($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * This will remove jquery from the head (WP puts it there by default) and load jquery in the footer instead
 */
add_action('wp_enqueue_scripts', 'starter_scripts');
function starter_scripts () {
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
    wp_enqueue_script('jquery');
}

/**
 * Enqueue files for theme
 */
add_action('wp_enqueue_scripts', 'iamrichardphelps_enqueue_scripts');
function iamrichardphelps_enqueue_scripts () {
    // Sylesheets
    wp_enqueue_style('iamrichardphelps', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
    wp_enqueue_style('dashicons', get_stylesheet_uri(), 'dashicons');
    wp_enqueue_style('iamrichardphelps-styles', get_template_directory_uri() . '/css/styles.css');

    // Scripts
    wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '', true);
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('iamrichardphelps', get_template_directory_uri() . '/js/iamrichardphelps.js', array('jquery'), '', true);
}

/**
 * Adds the ability to upload featured images against posts / pages
 */
add_theme_support('post-thumbnails');

/**
 * This will add the ability to set the logo in the theme customiser
 */
add_action('customize_register', 'iamrichardphelps_theme_customizer');
function iamrichardphelps_theme_customizer ($wp_customize) {
    // Create section for logo upload
    $wp_customize->add_section('iamrichardphelps_logo_section', array(
        'title'       => 'Logo',
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));

    // Register new setting
    $wp_customize->add_setting('iamrichardphelps_logo');

    // Tell customiser to use image uploader for setting the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'iamrichardphelps_logo', array(
        'label'    => 'Logo',
        'section'  => 'iamrichardphelps_logo_section',
        'settings' => 'iamrichardphelps_logo',
    )));
}

/**
 * This will disable the WordPress admin bar
 */
add_filter('show_admin_bar', '__return_false');

?>
