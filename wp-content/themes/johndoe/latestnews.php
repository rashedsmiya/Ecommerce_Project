<?php 
    
    if(!function_exists('custmythemeoption5')){
        function custmythemeoption5($wp_customize){
            $wp_customize->add_section(
                'theme_section_id5',
                array(
                    'title' => __("LatestNews", 'text_domain'),
                    'priority' => 30,
                )
            );
            $wp_customize->add_setting(
                'theme_setting_hero_banner',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            $wp_customize->add_control(new WP_Customize_Image_Control(
                $wp_customize,
                'theme_control_id5',
                array(
                    'label' => __('Upload Banner Image', 'textdomain'),
                    'description' => __('Upload Banner Image', 'textdomain'),
                    'section' => 'theme_section_id5',
                    'settings' => 'theme_setting_hero_banner',
                      
                )
            ));

            $wp_customize->add_setting(
                'theme_setting_designation5',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_designation5',
                array(
                    'label' => __('header Description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id5',
                    'settings' => 'theme_setting_designation5',
                    'type' => 'text',  
                )
            ));

            // CV Setting

            $wp_customize->add_setting(
                'theme_setting_cv5',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv5',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id5',
                    'settings' => 'theme_setting_cv5',
                    'type' => 'text',  
                )
            )); 


            $wp_customize->add_setting(
                'theme_setting_cv25',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
             
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv25',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id5',
                    'settings' => 'theme_setting_cv25',
                    'type' => 'text',  
                )
            )); 
            
        }
    }
    add_action('customize_register', 'custmythemeoption5');

?>


  
 