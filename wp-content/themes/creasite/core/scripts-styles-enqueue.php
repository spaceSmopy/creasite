<?php
/**
 * Enqueue scripts and styles
 * */
function essity_scripts(){
    wp_enqueue_style('essity-style', get_stylesheet_uri());
    wp_enqueue_style('theme-font', get_template_directory_uri() . '/src/fonts/stylesheet.css');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/build/css/style.min.css');
    wp_enqueue_style('wow-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js", array('jquery'), true);
    wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js");
    wp_enqueue_script('autonumeric-js', "https://cdn.jsdelivr.net/npm/autonumeric@4.5.4", ['jquery', 'slick-js'], '1.0.0', true);
    wp_enqueue_script('wow-js', "https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js", ['jquery', 'slick-js'], '1.0.0', true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/build/js/main.min.js', ['jquery', 'slick-js'], '1.0.0', );
    wp_localize_script(
        'theme-js',
        'js_variables',
        array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_style('slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
}
add_action('wp_enqueue_scripts', 'essity_scripts');