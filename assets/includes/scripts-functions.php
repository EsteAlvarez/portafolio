<?php

function evban_scripts() {
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('evban-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'evban_scripts');