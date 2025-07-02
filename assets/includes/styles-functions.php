<?php

function evban_styles()
{
    wp_enqueue_style('evban-style', get_template_directory_uri() . '/assets/css/styles.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), null, 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Sacramento&display=swap', array(), null, 'all');
    wp_enqueue_style('swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'evban_styles');
