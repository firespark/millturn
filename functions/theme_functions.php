<?php
function show_top_menu_children($menu, $menu_item) {
    foreach($menu[$menu_item['id']] as $item){
        if(isset($menu[$item['id']])){
            echo '<li class="menu__item_link menu__item_link__child menu__item_link__child__child">';
            echo '<a class="has-child" href="' . $item['url'] . '">' . $item['title'] . '</a>';
            echo '<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">';
            echo '<path d="M6.53033 6.53033C6.82322 6.23744 6.82322 5.76256 6.53033 5.46967L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L4.93934 6L0.696699 10.2426C0.403806 10.5355 0.403806 11.0104 0.696699 11.3033C0.989593 11.5962 1.46447 11.5962 1.75736 11.3033L6.53033 6.53033ZM5 6.75H6V5.25H5V6.75Z" fill="#C4C4C4"></path>';
            echo '</svg>';
            echo '<ul class="menu__item__collapse-list menu__item__collapse-list__child">';
            show_top_menu_children($menu, $item);
            echo '</ul>';
            echo '</li>';
        }
        else{
            echo '<li class="menu__item_link menu__item_link__child">';
            echo '<a href="' . $item['url'] . '">' . $item['title'] . '</a>';
            echo '</li>';
        }
    }
        
}

function show_catalog_category_children($menu, $menu_item) {
    foreach($menu[$menu_item['id']] as $item){
        
        echo '<li class="subcategories-item subcategories-item-dropbox subcategories-item-drop">';
        echo '<a class="subcategories-link-dropbox" href="' . $item['url'] . '">' . $item['title'] . '</a>';
        if(isset($menu[$item['id']])){
            echo '<svg class="chevr-catalog" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">';
            echo '<path class="chevr-catalog" d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#333333"></path>';
            echo '</svg>';
            echo '<ul class="subcategories-list-dropbox is-hidden">';
            show_catalog_category_children($menu, $item);
            echo '</ul>';
                
        }
        echo '</li>';
        
    }
        
}

// Check if category has files
function check_cat_files($catalogs, $catalog_item, $shown) {
    if($shown) return true;
    
    foreach($catalogs[$catalog_item['id']] as $catalog_item2){
        if(!empty($catalog_item2['catFiles'])) {
            $shown = true;
        }
        else {
            if(isset($catalogs[$catalog_item2['id']])){
                $shown = check_cat_files($catalogs, $catalog_item2, $shown);
            }
        }
    }
    return $shown;  
}

function show_catalog_category_files($catalog, $catalog_item) {
    foreach($catalog[$catalog_item['id']] as $item){


        
        echo '<li class="subcategories-item subcategories-item-dropbox subcategories-item-drop">';
        echo '<a class="subcategories-link-dropbox chevr-catalog-open" href="#">' . $item['title'] . '</a>';
        show_cat_files($item['catFiles']);
        
        if(isset($catalog[$item['id']])){
            echo '<svg class="chevr-catalog" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">';
            echo '<path class="chevr-catalog" d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#333333"></path>';
            echo '</svg>';
            echo '<ul class="subcategories-list-dropbox is-hidden">';
            show_catalog_category_files($catalog, $item);
            echo '</ul>';
                
        }
        echo '</li>';
        
    }
        
}

function show_cat_files($catFiles) {
    if(!empty($catFiles)){
            //print_r($item['catFiles']);
            echo '<ul class="catalog_download_files">';
            foreach($catFiles as $catFile){
                echo '<li><a href="' . $catFile['file']['url'] . '" target="_blank">' . $catFile['file']['name'] . '</a></li>';
            }
            echo '</ul>';
        }
}