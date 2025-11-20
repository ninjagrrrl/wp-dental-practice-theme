<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">

<!-- Fallback PNG für alte Browser -->

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/my-favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/my-favicon/favicon.svg" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/my-favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/my-favicon/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Zahnarzt" />
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/my-favicon/site.webmanifest" />


    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header class="header-container">
        <div class="my-logo">
            <?php
            if ( function_exists('the_custom_logo') && has_custom_logo() ) {
                the_custom_logo();
            } else {
                // Fallback image
                ?>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-logo.png" alt="<?php bloginfo('name'); ?>" class="custom-logo" width="100px">
                </a>
                <?php
            }
            ?>
        </div>
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'header-menu',
                'fallback_cb'    => 'wp_page_menu',
            )); ?>
        </nav>
    </header>