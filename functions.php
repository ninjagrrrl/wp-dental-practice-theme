<?php
function my_custom_theme_setup() {
// Support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

// Register navigation menu
    register_nav_menus(array(
    'header-menu' => __('Header Menu', 'my-custom-theme'),
));

// Support for dynamic title tag
    add_theme_support('title-tag');

}
    add_action('after_setup_theme', 'my_custom_theme_setup');


// Custom favicon for admin area
function custom_admin_favicon() {
    echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/img/my-favicon/favicon.ico" />';
}

add_action('admin_head', 'custom_admin_favicon');

// Enqueue the main stylesheet
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');


?>