<?php

function ica_assets(){
    wp_enqueue_style(
        'ica_stylesheet',
        get_template_directory_uri().'/style.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'ica_wp_stylesheet',
        get_template_directory_uri().'/assets/css/wpcore.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'ica_bootstrap_stylesheet',
        get_template_directory_uri().'/assets/css/bootstrap.css',
        array(),
        '1.0.0',
        'all'
    );

    wp_enqueue_script(
        'ica_bootstrap_script',
        get_template_directory_uri().'/assets/js/bootstrap.js',
        array(),
        '1.0.0',
        true
    );
    
    wp_enqueue_style(
        'ica_custom_stylesheet',
        get_template_directory_uri().'/assets/css/custom.css',
        array(),
        '1.0.0',
        'all'
    );
}

add_action('wp_enqueue_scripts','ica_assets')

?>