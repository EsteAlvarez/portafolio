<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />
    <?php wp_head(); ?>
</head>

<body id="body_page" class="ea-body-page overflow-preload">
    <div class="preload" id="preload">
        <span class="loader"></span>
    </div>

    <header style="display: none"></header>