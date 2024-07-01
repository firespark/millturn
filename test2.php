<?php

/*
    Template Name: Test2

*/

require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');
require_once(ABSPATH . "wp-admin" . '/includes/image.php');

function api_file_basename($image) {
    $filename = basename($image);
    $filename = preg_replace('/\?.*/', '', $filename);

    return $filename;
}

function api_file_exists($filename) {
    global $wpdb;
    
    $attachment_id = intval( $wpdb->get_var( "SELECT post_id FROM " . $wpdb->prefix . "postmeta WHERE meta_key = '_wp_attached_file' AND meta_value = '" . $filename . "'" ) );

    return $attachment_id;
}

function api_file_upload($image, $filename) {

        $upload_file = wp_upload_bits($filename, null, file_get_contents($image));
        if (!$upload_file['error']) {
            // Создаем запись
            $wp_filetype = wp_check_filetype($filename, null );
            $attachment = [
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
                'post_content' => '',
                'post_status' => 'inherit'
            ];
            // Добавляем вложение
            $attachment_id = wp_insert_attachment( $attachment, $upload_file['file']);

            if (!is_wp_error($attachment_id)) {

                // Созадем мета-данные файла
                $attachment_data = wp_generate_attachment_metadata( $attachment_id, $upload_file['file'] );
                wp_update_attachment_metadata( $attachment_id,  $attachment_data );

                return $attachment_id;
            }
            else {
                echo $attachment_id->get_error_message();
            }
 
            
        }
        else {
            echo $upload_file['error'];

        }

        return null;

}

/*$json = file_get_contents('http://mtest/stranits-a-v-razrabotke/');

$data = json_decode($json, true);

foreach ($data as $key => $cat) {

    $parent_id = 0;
    if($cat['parent']) {
        $parent = get_category_by_slug($cat['parent']);
        $parent_id = $parent->term_id;
    }
     
    
    $insert_id = wp_insert_category( [
        'cat_name' => $cat['name'],             
        'category_description' => $cat['description'], 
        'category_nicename' => $cat['slug'],    
        'category_parent' => $parent_id,       
        'taxonomy' => 'category'
    ] );


    


    echo $insert_id . '<br>';

    if($insert_id){
        

        if($cat['image']) {
            $file_filename = api_file_basename($cat['image']);

                $file_id = api_file_exists($file_filename);

                if (!$file_id) {
                    $file_id = api_file_upload($cat['image'], $file_filename);
                }

                if ($file_id) {
                    update_field('field_635511190538d', $file_id, 'category_' . $insert_id );
                }
            
        }

        
    }


}*/

?>
        