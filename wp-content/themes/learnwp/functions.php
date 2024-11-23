<?php 

    add_action('after_setup_theme', 'wplerntheme'); 

    if(!function_exists('wplerntheme')){
        function wplerntheme(){

            load_theme_textdomain('learnwp', get_template_directory() . '/language');
            // add_theme_support('post-thumbnails');
            add_theme_support('post-thumbnails',array('post', 'service', 'page'));

          
            add_theme_support('post-formats', array('aside', 'gallery','quate', 'image', 'video', 'audio'));

            add_action('wp_enqueue_scripts', 'mywpscript');   
            
            if(!function_exists('mywpscript')){   
                function mywpscript(){ 

                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="css/bootstrap.min.css">
                    <!-- Nice Select CSS -->
                    <link rel="stylesheet" href="css/nice-select.css">
                    <!-- Font Awesome CSS -->
                    <link rel="stylesheet" href="css/font-awesome.min.css">
                    <!-- icofont CSS -->
                    <link rel="stylesheet" href="css/icofont.css">
                    <!-- Slicknav -->
                    <link rel="stylesheet" href="css/slicknav.min.css">
                    <!-- Owl Carousel CSS -->
                    <link rel="stylesheet" href="css/owl-carousel.css">
                    <!-- Datepicker CSS -->
                    <link rel="stylesheet" href="css/datepicker.css">
                    <!-- Animate CSS -->
                    <link rel="stylesheet" href="css/animate.min.css">
                    <!-- Magnific Popup CSS -->
                    <link rel="stylesheet" href="css/magnific-popup.css">
                    
                    <!-- Medipro CSS -->
                    <link rel="stylesheet" href="css/normalize.css">
                    <link rel="stylesheet" href="style.css">
                    <link rel="stylesheet" href="css/responsive.css">
                   
                    wp_enqueue_style("unique_id", get_stylesheet_uri());

                    wp_enqueue_style("main_css", 
                    get_parent_theme_file_uri('assets/css/main.css'),
                    array(),
                    wp_get_theme()->get('Version'),'all'); 

                    wp_add_inline_style(
                    'unique_id',
                    'body{background: red;}'   
                    );   
                   
                    wp_enqueue_script(
                        "main",
                        get_template_directory_uri()."/assets/js/main.js",
                        array(),
                        wp_get_theme()->get('Version'),
                        true
                    ); 

                    wp_add_inline_script('main',
                    'console.log("allah all time help us")',);
               } 
            } 
        }
    }
   
 ?>