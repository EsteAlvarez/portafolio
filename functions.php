<?php

if (! function_exists('evban_setup')) :

    function evban_setup()
    {
        // Soporte para imágenes destacadas
        add_theme_support('post-thumbnails');

        // Manejo automático del <title> por WordPress
        add_theme_support('title-tag');

        // Soporte HTML5 para scripts y estilos encolados
        add_theme_support('html5', ['style', 'script']);
    }

endif;
add_action('after_setup_theme', 'evban_setup');

include get_template_directory() . '/assets/assets.php';
