<?php
function neurone_theme_setup() {

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
    // register menu
    register_nav_menus(array(
        'primary_menu' => __( 'Primary Menu' ),
        'footer_menu'  => __( 'Footer Menu' ),
    ) );
    
    // slider custom post type
    register_post_type('slider',array(
        'labels' => array(
            'name' => 'Slider',
            'add_new' => 'Add New Slider',
            'add_new_item' => 'Add New Slider',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field','page-attributes'),
        'menu_icon' => 'dashicons-welcome-view-site',
    ));
	
}
add_action( 'after_setup_theme', 'neurone_theme_setup' );


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

// acf options register
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-Options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Theme Settings',
        'menu_title'    => 'Header Optons',
        'parent_slug'   => 'theme-general-Options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Theme Options',
        'menu_title'    => 'Footer Optons',
        'parent_slug'   => 'theme-general-Options',
    ));

}


?>
