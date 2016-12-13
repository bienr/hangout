<?php

function hangout_styles() {
    // Bootstrap
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    // Stroke Gap Icons
    wp_enqueue_style('stroke-gap-style', get_template_directory_uri() . '/vendors/Stroke-Gap-Icons-Webfont/style.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.min.css');

    // Owl Carousel
    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.css');
    wp_enqueue_style('jq-ui-style', get_template_directory_uri() . '/vendors/jquery-ui-1.11.4/jquery-ui.min.css');

    // Main Style
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('override', get_template_directory_uri() . '/css/override.css');
}
add_action('wp_enqueue_scripts', 'hangout_styles');

// Load jQuery with version incuded in the theme
function hangout_scripts_jquery() {
    // Deregister the included library
    wp_deregister_script('jquery');

    // Register the library again from relative path
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), null, true);
    wp_enqueue_script('jquery');
}
// Add jquery with increased priority
add_action('wp_enqueue_scripts', 'hangout_scripts_jquery', 5);

// Load js components
function hangout_scripts_components() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jq-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), null, true);

    // Register owl carousel components
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/vendors/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-scroll', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-zebradate', get_template_directory_uri() . '/js/zebra_datepicker.js', array('jquery'), null, true);

    // Register appear
    wp_enqueue_script('jq-appear', get_template_directory_uri() . '/vendors/jquery-appear/jquery.appear.js', array('jquery'), null, true);

    // Register countTo
    wp_enqueue_script('jq-countto', get_template_directory_uri() . '/vendors/jquery-countTo/jquery.countTo.js', array('jquery'), null, true);
    wp_enqueue_script('jq-form', get_template_directory_uri() . '/js/jquery.form.js', array('jquery'), null, true);
    wp_enqueue_script('jq-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), null, true);
    wp_enqueue_script('jq-mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), null, true);
    wp_enqueue_script('jq-ui', get_template_directory_uri() . '/vendors/jquery-ui-1.11.4/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('jq-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hangout_scripts_components');

// Theme setup
function hangout_setup() {
    // Register navigation menus
    register_nav_menus(array(
        "contact" => "Contact Menu",
        "header" => "Header Menu"
    ));

    // Add featured image support
    add_theme_support("post-thumbnails");

    // Add image sizes
    add_image_size("rooms-thumbnail", 270, 228, true);
}
add_action("after_setup_theme", "hangout_setup");

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// Create room post type
function create_post_type_rooms() {

    // UI labels for Room post type
    $labels = array(
        'name'                  => _x('Rooms', 'Post Type General Name', 'hangout'),
        'singular_name'         => _x('Room', 'Post Type Singular Name', 'hangout'),
        'menu_name'             => __('Rooms', 'hangout'),
        'parent_item_colon'     => __('Parent Room', 'hangout'),
        'all_items'             => __('All Rooms', 'hangout'),
        'view_item'             => __('View Room', 'hangout'),
        'add_new_item'          => __('Add New Room', 'hangout'),
        'add_new'               => __('Add New', 'hangout'),
        'edit_item'             => __('Edit Room', 'hangout'),
        'update_item'           => __('Update Room', 'hangout'),
        'search_items'          => __('Search Room', 'hangout'),
        'not_found'             => __('Not Found'),
        'not_found_in_trash'    => __('Not Found in Trash')
    );

    // Set other options for Room post type
    $args = array(
        'label'                 => __('rooms', 'hangout'),
        'description'           => __('Hangout rooms and suits', 'hangout'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies'            => array('facilities'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page'
    );

    // Registering Room post type
    register_post_type('rooms', $args);
}
add_action('init', 'create_post_type_rooms');

// Let Room types be queryable
//function add_room_post_types_to_query($query) {
//    if (is_home() && $query->is_main_query()) {
//        $query->set('post_type', array('post', 'rooms'));
//    }
//    return $query;
//}