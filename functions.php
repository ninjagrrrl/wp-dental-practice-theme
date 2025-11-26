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
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/assets/img/favicon/favicon-backend2.png" />';
}
add_action('admin_head', 'custom_admin_favicon');


function custom_frontend_favicons() {
  $template_uri = get_template_directory_uri();

  echo '<link rel="icon" type="image/png" sizes="16x16" href="' . $template_uri . '/assets/img/favicon/favicon-16.png">';
  echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $template_uri . '/assets/img/favicon/favicon-32.png">';
  echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $template_uri . '/assets/img/favicon/favicon-64.png">';
  echo '<link rel="icon" type="image/svg+xml" href="' . $template_uri . '/assets/img/favicon/favicon.svg">';
}
add_action('wp_head', 'custom_frontend_favicons');


// Enqueue the main stylesheet
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');


?>