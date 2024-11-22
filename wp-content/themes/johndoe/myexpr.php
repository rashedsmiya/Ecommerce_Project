<?php 
    
    if(!function_exists('custmythemeoption1')){
        function custmythemeoption1($wp_customize){
            $wp_customize->add_section(
                'theme_section_id1',
                array(
                    'title' => __("Slider_Section2.0", 'text_domain'),
                    'priority' => 30,
                )
            );

            $wp_customize->add_setting(
                'theme_setting_id1',
                array(
                    'default' => '',
                    'transport' => 'postMesage'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_id1',
                array(
                    'label' => __('Enter Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id1',
                    'settings' => 'theme_setting_id1',
                    'type' => 'text',  
                )
            ));

            // Description 2nd
            $wp_customize->add_setting(
                'theme_setting_id12',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_three',
                array(
                    'label' => __('Enter Dscription3 Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id1',
                    'settings' => 'theme_setting_id12',
                    'type' => 'text',  
                )
            ));

            // Description 3nd
            $wp_customize->add_setting(
                'theme_setting_id13',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );

            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_four',
                array(
                    'label' => __('Enter Dscription3 Name', 'textdomain'),
                    'description' => __('Dscription', 'textdomain'),
                    'section' => 'theme_section_id1',
                    'settings' => 'theme_setting_id13',
                    'type' => 'text',  
                )
            ));

            // CV Setting2.0

            $wp_customize->add_setting(
                'theme_setting_cv1',
                array(
                    'default' => '',
                    'transport' => 'refresh'
                )
            );
            
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'theme_control_cv1',
                array(
                    'label' => __('Enter CV URL Name', 'textdomain'),
                    'description' => __('CV URL', 'textdomain'),
                    'section' => 'theme_section_id1',
                    'settings' => 'theme_setting_cv1',
                    'type' => 'text',  
                )
            ));
        }
    }

    add_action('customize_register', 'custmythemeoption1');

?>


 
 