<?php
function theme_scripts() {
    // Enqueue style.css stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

    // Enqueue Header stylesheet
    wp_enqueue_style('header-styles', get_template_directory_uri() . '/assets/css/header.css');

    // Enqueue Footer stylesheet
    wp_enqueue_style('footer-styles', get_template_directory_uri() . '/assets/css/footer.css');

    // Enqueue Homepage stylesheet
    wp_enqueue_style('homepage-styles', get_template_directory_uri() . '/assets/css/homepage.css');

    // Enqueue Contact Form stylesheet
    wp_enqueue_style('contact-form-styles', get_template_directory_uri() . '/assets/css/contact-form.css');

    // Enqueue Project stylesheet
    wp_enqueue_style('project-page-styles', get_template_directory_uri() . '/assets/css/project.css');

    // Enqueue main script
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/scripts/main.js', array(), '1.0.0', true);

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function portfolio_theme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )
    );
}
add_action('init', 'portfolio_theme_register_menus');


// Add custom post type for projects
function create_project_post_type() {
    register_post_type('project',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Project'),
                'edit_item' => __('Edit Project'),
                'new_item' => __('New Project'),
                'view_item' => __('View Project'),
                'search_items' => __('Search Projects'),
                'not_found' => __('No projects found'),
                'not_found_in_trash' => __('No projects found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'menu_icon' => 'dashicons-portfolio',
            'show_in_rest' => true,
            'rest_base' => 'projects',
            'rest_controller_class' => 'WP_REST_Posts_Controller'
        )
    );
}

add_action('init', 'create_project_post_type');
add_theme_support( 'post-thumbnails' );


// Load Dashicons
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' ); 
function load_dashicons_front_end() { 
wp_enqueue_style( 'dashicons' ); 
}