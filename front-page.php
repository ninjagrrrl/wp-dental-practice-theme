<?php get_header(); ?>

<h1>Für die ganze Familie</h1>

<?php
    while(have_posts()) {
        the_post();
        the_content();
}
?>

<?php get_footer(); ?>