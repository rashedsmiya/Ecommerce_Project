<?php 
    
    if(!function_exists('custmythemeoption3')){
        function custmythemeoption3($wp_customize){
            $wp_customize->add_section(
                'theme_section_id3',
                array(
                    'title' => __("myServices", 'text_domain'),
                    'priority' => 30,
                )
            );
            $wp_customize->add_setting(
                'theme_setting_id3',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_id3',
                array(
                    'label' => __('Headin Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id3',
                    'settings' => 'theme_setting_id3',
                    'type' => 'text',  
                )
            ));

            $wp_customize->add_setting(
                'theme_setting_designation3',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_designation3',
                array(
                    'label' => __('header Description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id3',
                    'settings' => 'theme_setting_designation3',
                    'type' => 'text',  
                )
            ));

            // CV Setting

            $wp_customize->add_setting(
                'theme_setting_cv3',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv3',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id3',
                    'settings' => 'theme_setting_cv3',
                    'type' => 'text',  
                )
            )); 


            $wp_customize->add_setting(
                'theme_setting_cv23',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv23',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id3',
                    'settings' => 'theme_setting_cv23',
                    'type' => 'text',  
                )
            )); 
            
        }
    }
    add_action('customize_register', 'custmythemeoption3');

?>


  
 