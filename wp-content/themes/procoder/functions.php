<?php 

/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');
 
// Theme Css and jQuery file calling 
function ali_css_js_file_calling(){

    wp_enqueue_style('ali-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri());
    
}

add_action('wp_enqueue_scripts', 'ali_css_js_file_calling');