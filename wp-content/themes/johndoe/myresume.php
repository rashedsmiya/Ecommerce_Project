<?php 
    
    if(!function_exists('custmythemeoption2')){
        function custmythemeoption2($wp_customize){
            $wp_customize->add_section(
                'theme_section_id2',
                array(
                    'title' => __("MyResume", 'text_domain'),
                    'priority' => 30,
                )
            );
            $wp_customize->add_setting(
                'theme_setting_id2',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_id2',
                array(
                    'label' => __('Headin Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id2',
                    'settings' => 'theme_setting_id2',
                    'type' => 'text',  
                )
            ));

            $wp_customize->add_setting(
                'theme_setting_designation2',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_designation2',
                array(
                    'label' => __('header Description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id2',
                    'settings' => 'theme_setting_designation2',
                    'type' => 'text',  
                )
            ));

            // CV Setting

            $wp_customize->add_setting(
                'theme_setting_cv2',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv2',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id2',
                    'settings' => 'theme_setting_cv2',
                    'type' => 'text',  
                )
            )); 


            $wp_customize->add_setting(
                'theme_setting_cv22',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv22',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id2',
                    'settings' => 'theme_setting_cv22',
                    'type' => 'text',  
                )
            )); 
            
        }
    }
    add_action('customize_register', 'custmythemeoption2');

?>


 
 