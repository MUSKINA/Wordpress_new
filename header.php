<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" >
</head>

<body>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary-menu',
            'menu_id'        => 'primary-menu',
            'container'      => 'div',
            'container_class' => 'main-navigation',
            'menu_class'     => 'nav-menu',
        )
    );
    ?>