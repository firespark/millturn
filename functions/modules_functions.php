<?php

// Modules output
function get_post_modules($modules) {

    if(!empty($modules)) {
        foreach($modules as $module) {
            require_once( __DIR__ . '/../modules/' . $module->post_name . '.php');
        }
    }
}

function get_post_module_id_by_slug($slug) {
    if ( $post = get_page_by_path( $slug, OBJECT, 'moduleblocks' ) )
    return $post->ID;
    else return 0;
}

function get_module_options($slug) {
    $module_id = get_post_module_id_by_slug($slug);
    if(!$module_id) return null;
    return get_fields($module_id);
}