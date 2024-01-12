<?php

if (!function_exists('notie_setup')) {

    function notie_setup()
    {
        /* 
        * Internalization
        */
        load_theme_textdomain('notie', get_template_directory() . './languages');

        /* 
        * Add default post and comment RSS feed to head
        */
        add_theme_support('automatic-feed-links');

        /* 
        * Let WordPress handle title tag automatically
        */
        add_theme_support('title-tag');

        /* 
        * Add the blog section to include featured image to blog posts
        */
        add_theme_support('post-thumbnails');

        /* 
        * Enables site owner to upload custom logo
        */
        add_theme_support('custom-logo', array(
            'height' => 480,
            'width'  => 720,
        ));

        /* 
        * Enables site owner to customize site background color or image
        */
        add_theme_support('custom-background', array(
            'default-color' => '#ffffff',
            'default-image' => ''
        ));

        /* 
        * Enables site owner to choose custom post format
        */
        add_theme_support('post-formats', array('aside', 'gallery', 'image', 'video'));

        /* 
        * Enables site owner to add a custom header background
        */
        add_theme_support('custom-header');

        /* 
        * Enables site owner to add a custom navigation menu
        */
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'notie'),
            'footer' => esc_html__('Footer', 'notie')
        ));
    }
}

add_action('after_setup_theme', 'notie_setup');
