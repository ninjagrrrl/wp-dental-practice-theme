<?php

function my_custom_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));


// Function to add the site title to the head section

    add_theme_support('title-tag');

register_nav_menus(array(
    'header-menu' => __('Header Menu', 'my-custom-theme'),
));


}
add_action('after_setup_theme', 'my_custom_theme_setup');


// WordPress Favicon überschreiben
function custom_admin_favicon() {
    echo '<link rel="icon" type="image/svg+xml" href="' . get_template_directory_uri() . '/img/my-favicon/favicon.svg" />';
    echo '<link rel="alternate icon" href="' . get_template_directory_uri() . '/img/my-favicon/favicon-96x96.png" />';
}
add_action('admin_head', 'custom_admin_favicon');

    // Enqueue the main stylesheet
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');



?>