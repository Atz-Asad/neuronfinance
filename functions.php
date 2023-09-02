<?php



function neurone_theme_files(){
    // css add
    wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('owl.carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.carousel',get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('bootsnav',get_template_directory_uri().'/assets/css/bootsnav.css');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');


    // js add
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('bootsnav-js',get_template_directory_uri().'/assets/js/bootsnav.js',array('jquery'), '1.0.0',true );
    wp_enqueue_script('owl.carousel.min-js',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('wow-js',get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('ajaxchimp-js',get_template_directory_uri().'/assets/js/ajaxchimp.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('ajaxchimp-config-js',get_template_directory_uri().'/assets/js/ajaxchimp-config.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('script-js',get_template_directory_uri().'/assets/js/script.js', array('jquery'),'1.0.0', true );
}
add_action('wp_enqueue_scripts','neurone_theme_files');


?>
