<?php
require_once(__DIR__ . '/functions/common_functions.php');
require_once(__DIR__ . '/functions/styles_js_files.php');
require_once(__DIR__ . '/functions/posts_functions.php');
require_once(__DIR__ . '/functions/theme_functions.php');
require_once(__DIR__ . '/functions/modules_functions.php');
require_once(__DIR__ . '/functions/ajax_functions.php');
require_once(__DIR__ . '/functions/tgm_plugin_functions.php');


add_action( 'after_setup_theme', 'custom_theme_setup');

// Main settings
$optionsArr = get_fields('options');

// Privacy Policy
$mainAgree = get_the_permalink(3);

// Authorised User
$current_user = wp_get_current_user();


// Styles and js files
add_action('wp_enqueue_scripts','custom_styles_js_files');





// Rename posts and categories
add_filter('post_type_labels_post', 'custom_rename_posts_labels');

add_action( 'init', 'custom_rename_category' );


// Events posts
add_action('init', 'custom_events');

// Modules posts
add_action('init', 'custom_moduleblocks');

// Ajax
// Public
add_action( 'wp_ajax_search_products', 'custom_search_products' );
add_action( 'wp_ajax_nopriv_search_products', 'custom_search_products' );

add_action( 'wp_ajax_order_apply', 'custom_order_apply' );
add_action( 'wp_ajax_nopriv_order_apply', 'custom_order_apply' );

add_action( 'wp_ajax_order_message', 'custom_order_message' );
add_action( 'wp_ajax_nopriv_order_message', 'custom_order_message' );

// Tgm Plugin (List of required plugins for this theme)
add_action( 'tgmpa_register', 'custom_register_required_plugins' );