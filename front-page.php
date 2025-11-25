<?php get_header(); ?>

<h1>Ihr Zahnarzt in Berlin-Wedding</h1>

<?php
    while(have_posts()) {
        the_post();
        the_content();
}
?>

<?php get_footer(); ?>