<?php

    function ica_sidebar_widgets(){
        // register_sidebar(array(
        //     'id' => 'primary-sidebar',
        //     'name' => 'Primary Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));

        register_sidebar(array(
            'id' => 'second-sidebar',
            'name' => 'Second Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));

    }

    function ica_courses_widgets(){
        register_sidebar(array(
            'id' => 'courses-sidebar',
            'name' => 'Courses Filter Sidebar',
            'description' => 'Sidebar for courses page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
            'after_widget' => '</section>'
        ));

        // register_sidebar(array(
        //     'id' => 'second-sidebar',
        //     'name' => 'Second Sidebar',
        //     'description' => 'Sidebar for blog posts page',
        //     'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">', //generates id
        //     'after_widget' => '</section>'
        // ));

    }

    function ica_footer_sidebars(){
        $footer_layout = get_theme_mod('ica_footer_widget_count', '2');

        for($i=0;$i<$footer_layout; $i++){
            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Sidebar '.($i+1),
                'description' => 'Footer Widget Section',
                'before_widget' => '<section id="%1$s" class="footer-widget %2$s">', //generates id
                'after_widget' => '</section>'
            ));
        }
    }
    add_action('widgets_init', 'ica_sidebar_widgets');
    add_action('widgets_init', 'ica_footer_sidebars');
    add_action('widgets_init', 'ica_courses_widgets');


?>