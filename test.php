<?php

/*
    Template Name: Test

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

/*$json = file_get_contents('http://mtest/vy-stavka-metalloobrabotka-2021-jekspots-entr/');

$data = json_decode($json, true);

foreach ($data as $key => $product) {
    $cats = [];
    if($product['cat_slugs']) {
        foreach($product['cat_slugs'] as $cat_slug){
            $cat = get_category_by_slug($cat_slug); 
            $cats[] = $cat->term_id;
        }
    }

    $goodArr = wp_slash([
        'comment_status' => 'closed',                                             
        'post_author'    => '1',
        'post_content'   => $product['description'],
        'post_date'      => $product['date_modified'],
        'post_name'      => $product['slug'],
        'post_status'    => $product['status'],
        'post_title'     => $product['name'],
        'post_type'      => 'post',
        'post_category'  => $cats,
    ]);

    

    $good_id = wp_insert_post( $goodArr );

    echo $good_id . '<br>';

    if($good_id){
        if($product['img']){
            $filename = api_file_basename($product['img']);

            $image_id = api_file_exists($filename);

            if (!$image_id) {
                $image_id = api_file_upload($product['img'], $filename);
            }

            if ($image_id) {
                set_post_thumbnail( $good_id, $image_id );
            }
        }

        if(!empty($product['gallery'])){
            $gallery_arr = [];
            foreach($product['gallery'] as $gallery) {
                $gallery_filename = api_file_basename($gallery);

                $gallery_image_id = api_file_exists($gallery_filename);

                if (!$gallery_image_id) {
                    $gallery_image_id = api_file_upload($gallery, $gallery_filename);
                }

                if ($gallery_image_id) {
                    $gallery_arr[] = $gallery_image_id;
                }
            }
            update_field('field_63500ae279fb8', $gallery_arr, $good_id );
        }

        if($product['short_description']) {
            update_field('field_63500afc79fb9', $product['short_description'], $good_id );
        }
        if($product['tech_tab']) {
            update_field('field_63500b1a79fba', $product['tech_tab'], $good_id );
        }
        if($product['komplect_tab']) {
            update_field('field_63500b5779fbb', $product['komplect_tab'], $good_id );
        }


        if($product['file']) {
            $file_filename = api_file_basename($product['file']);

                $file_id = api_file_exists($file_filename);

                if (!$file_id) {
                    $file_id = api_file_upload($product['file'], $file_filename);
                }

                if ($file_id) {
                    update_field('field_6353a8d08cea7', $file_id, $good_id );
                }
            
        }

        
    }


}
*/
$args = [
    'posts_per_page'   => -1,
];

$products = get_posts($args);

if(!empty($products)) {
    foreach($products as $product) {
        /*$product_file = get_field('product_file', $product->ID);
        if(isset($product_file[0]['ID'])){
            echo $product_file[0]['ID'] . '<br>';
            //update_field( 'field_63628bc4d27af', $product_file[0]['ID'], $product->ID );
            $row = [
                'file' => $product_file[0]['ID'],
            ];

            update_row('product_files', $product->ID, $row);
        }*/
        $gallery = get_field('product_gallery', $product->ID);
        if(count($gallery) > 4) {
            echo $product->ID . '<br>';
        }
        
    }
}

?>
        