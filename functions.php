<?php
function add_theme_scripts()
{
    if (!is_admin()) wp_deregister_script('jquery');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/dist/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/dist/assets/js/main.bundle.js', array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

if (function_exists('acf_add_options_page')) {
    $args = array(
        'page_title' => 'Параметры',
        'menu_title' => 'Параметры',
        'menu_slug' => 'Options',
        'post_id' => 'options',
    );
    acf_add_options_page($args);
}
?>