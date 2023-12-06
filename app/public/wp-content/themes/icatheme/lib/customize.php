<?php

    function ica_customize_register($wp_customize){
        $wp_customize ->add_section('ica_header_options', array(
            'title' => 'Header Options',
            'description' => 'You can change header options here'
        )); 

        //Background
        $wp_customize -> add_setting('ica_theme_header_bg', array(
            'default' => '#A264A8 ',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'ica_theme_header_bg', array(
                'label' => 'Choose Theme Header Background Color',
                'section' => 'ica_header_options',
                'settings' => 'ica_theme_header_bg'
            ))
        );


        // Text
        $wp_customize->add_setting('ica_header_text_color', array(
            'default' => '#000000',
        ));
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control($wp_customize, 'ica_header_text_color', array(
                'label' => 'Choose Theme Header Text Color',
                'section' => 'ica_header_options',
                'settings' => 'ica_header_text_color'
            ))
        );

        //Logo
        $wp_customize -> add_setting('ica_header_logo', array(
            'default' => '',
        )); 

        $wp_customize -> add_control(
            new WP_Customize_Image_Control($wp_customize, 'ica_header_logo', array(
                'label' => 'Choose Theme Header Logo',
                'section' => 'ica_header_options',
                'settings' => 'ica_header_logo'

            ))
        );


        //Footer
        $wp_customize ->add_section('ica_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        )); 

        //First Footer
        $wp_customize -> add_setting('ica_footer1_colour', array(
            'default' => '#ebebeb',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'ica_footer1_colour', array(
                'label' => 'Choose First Footer Background Color',
                'section' => 'ica_footer_options',
                'settings' => 'ica_footer1_colour'
            ))
        );

        //First Text
        $wp_customize->add_setting('ica_footer1_text_colour', array(
            'default' => '#000000',
        ));
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control($wp_customize, 'ica_footer1_text_colour', array(
                'label' => 'Choose First Footer Text Color',
                'section' => 'ica_footer_options',
                'settings' => 'ica_footer1_text_colour'
            ))
        );

        // Second Footer
        // $wp_customize->add_setting('ica_footer2_colour', array(
        //     'default' => '#000043',
        // ));
        
        // $wp_customize->add_control(
        //     new WP_Customize_Color_Control($wp_customize, 'ica_footer2_colour', array(
        //         'label' => 'Choose Second Footer Background Color',
        //         'section' => 'ica_footer_options',
        //         'settings' => 'ica_footer2_colour'
        //     ))
        // );

         //Second Text
        //  $wp_customize->add_setting('ica_footer2_text_colour', array(
        //     'default' => '#ffffff',
        // ));
        
        // $wp_customize->add_control(
        //     new WP_Customize_Color_Control($wp_customize, 'ica_footer2_text_colour', array(
        //         'label' => 'Choose Second Footer Text Color',
        //         'section' => 'ica_footer_options',
        //         'settings' => 'ica_footer2_text_colour'
        //     ))
        // );

        //Footer Widgets
        $wp_customize -> add_setting('ica_firstfooter_widget_count', array(
            'default' => '2',
            'sanitize_callback' => 'sanitize_text_field' /*A callback is what is going to happen after the function runs, makes sure that everything runs safe*/

        ));

        $wp_customize -> add_control('ica_firstfooter_widget_count', array(
            'type' => 'select',
            'label' => 'Footer Widget Count',
            'choices' => array(
                '1' => '1 Widget',
                '2' => '2 Widgets',
                '3' => '3 Widgets',
            ),
            'section' => 'ica_footer_options'

        ));

        $wp_customize -> add_setting('ica_secondfooter_widget_count', array(
            'default' => '2',
            'sanitize_callback' => 'sanitize_text_field' /*A callback is what is going to happen after the function runs, makes sure that everything runs safe*/

        ));

        $wp_customize -> add_control('ica_secondfooter_widget_count', array(
            'type' => 'select',
            'label' => 'Footer Widget Count',
            'choices' => array(
                '1' => '1 Widget',
                '2' => '2 Widgets',
                '3' => '3 Widgets',
            ),
            'section' => 'ica_footer_options'

        ));

    }

    add_action('customize_register','ica_customize_register');

?>