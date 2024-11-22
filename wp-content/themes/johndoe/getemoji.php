<?php 
    
    if(!function_exists('custmythemeoption4')){
        function custmythemeoption4($wp_customize){
            $wp_customize->add_section(
                'theme_section_id4',
                array(
                    'title' => __("GetEmoji", 'text_domain'),
                    'priority' => 30,
                )
            );
            $wp_customize->add_setting(
                'theme_setting_id4',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_id4',
                array(
                    'label' => __('Headin Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id4',
                    'settings' => 'theme_setting_id4',
                    'type' => 'text',  
                )
            ));

            $wp_customize->add_setting(
                'theme_setting_designation4',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_designation4',
                array(
                    'label' => __('header Description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id4',
                    'settings' => 'theme_setting_designation4',
                    'type' => 'text',  
                )
            ));

            // CV Setting

            $wp_customize->add_setting(
                'theme_setting_cv4',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv4',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id4',
                    'settings' => 'theme_setting_cv4',
                    'type' => 'text',  
                )
            )); 


            $wp_customize->add_setting(
                'theme_setting_cv24',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv24',
                array(
                    'label' => __('Enter description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id4',
                    'settings' => 'theme_setting_cv24',
                    'type' => 'text',  
                )
            )); 
            
        }
    }
    add_action('customize_register', 'custmythemeoption4');

?>


  
 