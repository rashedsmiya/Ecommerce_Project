<?php 
    
    if(!function_exists('custmythemeoption')){
        function custmythemeoption($wp_customize){

            $wp_customize->add_panel(
                'theme_option_id',
                array(
                    'title' => __('Theme Option','text_domain'),
                    'priority' => 30,
                )
            );

            $wp_customize->add_section(
                'theme_section_id',
                array(
                    'title' => __("slider Section", 'text_domain'),
                    'priority' => 30,
                    'panel' => 'theme_option_id',
                )
            );
            $wp_customize->add_setting(
                'theme_setting_id',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_id',
                array(
                    'labels' => __('Enter Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id',
                    'settings' => 'theme_setting_id',
                    'type' => 'text',  
                )
            ));

            $wp_customize->add_setting(
                'theme_setting_designation',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_designation',
                array(
                    'labels' => __('Enter Description Name', 'textdomain'),
                    'description' => __('description', 'textdomain'),
                    'section' => 'theme_section_id',
                    'settings' => 'theme_setting_designation',
                    'type' => 'text',  
                )
            ));

            // CV Setting

            $wp_customize->add_setting(
                'theme_setting_cv',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv',
                array(
                    'label' => __('Enter CV URL Name', 'textdomain'),
                    'description' => __('CV URL', 'textdomain'),
                    'section' => 'theme_section_id',
                    'settings' => 'theme_setting_cv',
                    'type' => 'text',  
                )
            ));
            
        }
    }
    add_action('customize_register', 'custmythemeoption');

?>


 
 