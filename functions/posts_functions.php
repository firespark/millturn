<?php
function custom_rename_posts_labels( $labels ){

    $new = [
        'name'                  => __('Products', 'millturn'),
        'singular_name'         => __('Product', 'millturn'),
        'add_new'               => __('Add', 'millturn'),
        'add_new_item'          => __('Add Product', 'millturn'),
        'edit_item'             => __('Edit Product', 'millturn'),
        'new_item'              => __('New Product', 'millturn'),
        'view_item'             => __('View Product', 'millturn'),
        'search_items'          => __('Search Products', 'millturn'),
        'not_found'             => __('Products not found', 'millturn'),
        'not_found_in_trash'    => __('Products not found in trash', 'millturn'),
        'all_items'             => __('All Products', 'millturn'),
        'items_list'            => __('Products', 'millturn'),
        'menu_name'             => __('Products', 'millturn'),
        'name_admin_bar'        => __('Product', 'millturn'),
    ];

    return (object) array_merge( (array) $labels, $new );
}

function custom_rename_category() {


    $labels = [
        'name'                  => __('Categories', 'millturn'),
        'singular_name'         => __('Category', 'millturn'),
        'add_new'               => __('Add', 'millturn'),
        'add_new_item'          => __('Add Category', 'millturn'),
        'edit_item'             => __('Edit Category', 'millturn'),
        'new_item'              => __('New Category', 'millturn'),
        'view_item'             => __('View Category', 'millturn'),
        'search_items'          => __('Categories Search', 'millturn'),
        'not_found'             => __('Categories not found', 'millturn'),
        'not_found_in_trash'    => __('Categories not found in trash', 'millturn'),
        'items_list'            => __('Categories', 'millturn'),
        'menu_name'             => __('Categories', 'millturn'),
        'name_admin_bar'        => __('Category', 'millturn'),
    ];

    global $wp_taxonomies;
    $wp_taxonomies['category']->labels = (object) array_merge( (array) $wp_taxonomies['category']->labels, $labels );
}

function custom_events() {
    $labels = [
        'name' => __('Events', 'millturn'),
        'singular_name' => __('Event', 'millturn'),
        'add_new' => __('Add', 'millturn'),
        'add_new_item' => __('Add Event', 'millturn'),
        'edit_item' => __('Edit Event', 'millturn'),
        'new_item' => __('New Event', 'millturn'),
        'all_items' => __('All Events', 'millturn'),
        'view_item' => __('View Event', 'millturn'),
        'search_items' => __('Search Events', 'millturn'),
        'not_found' => __('Events not found', 'millturn'),
        'not_found_in_trash' => __('Events not found in trash', 'millturn'),
        'menu_name' => __('Events', 'millturn'),
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_position' => 4,
        'show_in_rest' => true,
    ];
    register_post_type('events', $args);


}

function custom_moduleblocks() {
    $labels = [
        'name' => __('Modules', 'millturn'),
        'singular_name' => __('Module', 'millturn'),
        'add_new' => __('Add', 'millturn'),
        'add_new_item' => __('Add Module', 'millturn'),
        'edit_item' => __('Edit Module', 'millturn'),
        'new_item' => __('New Module', 'millturn'),
        'all_items' => __('All Modules', 'millturn'),
        'view_item' => __('View Module', 'millturn'),
        'search_items' => __('Search Modules', 'millturn'),
        'not_found' => __('Modules not found', 'millturn'),
        'not_found_in_trash' => __('Modules not found in trash', 'millturn'),
        'menu_name' => __('Modules', 'millturn'),
    ];
    $args = [
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'supports' => ['title'],
        'menu_position' => 4,

    ];
    register_post_type('moduleblocks', $args);


}