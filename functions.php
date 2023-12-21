 <?php

// ==============================
// 1. All CSS and JS file added here
// ==============================


    /**
     * bootsrap css file
     */
function devt_load_css(){
    wp_enqueue_style('boostrap-css',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'devt_load_css');


    /**
     * bootsrap js file
     */
function devt_load_js(){
    wp_enqueue_script('boostrap-js',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'devt_load_js');