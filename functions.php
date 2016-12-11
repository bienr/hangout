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
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), null, true);
}
// Add jquery with increased priority
add_action('wp_enqueue_scripts', 'hangout_scripts_jquery', 5);

// Load js components
function hangout_scripts_components() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
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
}
add_action("after_setup_theme", "hangout_setup");

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
