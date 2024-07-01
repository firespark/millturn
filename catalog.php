<?php
/*
    Template Name: Catalog

*/

get_header();
the_post();
$fieldsArr = get_fields();

$allCats = get_categories(['exclude' => 1, 'hide_empty' => 0]);
$catalogs = [];

    if(!empty($allCats)){
        foreach ($allCats as $category_item) {

            $cat_key = (isset($category_item->parent) && $category_item->parent) ? $category_item->parent : 0;
            
            $catalogs[$cat_key][] = [
                'id' => $category_item->term_id,
                'title' => $category_item->name,
                'url' => get_category_link($category_item->term_id),
                'catFiles' => get_field('cat_files','category_' . $category_item->term_id),
            ];
            
            
        }
    }

    if(!empty($catalogs)){
        foreach($catalogs as $key => $catalog) {
            foreach($catalog as $key_item => $catalog_item){                

                $shown = false;

                if(!empty($catalog_item['catFiles'])) {
                $shown = true;
                }
                else {

                    if(isset($catalogs[$catalog_item['id']])){

                        $shown = check_cat_files($catalogs, $catalog_item, $shown);

                        
                            
                    }
                }

                if(!$shown) {
                    unset($catalogs[$key][$key_item]);
                }

            }
            

        }
    }

    //print_r($catalogs);
?>

<div class="category-section">
    <div class="max-width">
        <?php custom_breadcrumbs();?>
        <div class="front-section__category">
            <div class="slider-front__container__single">
                <h1 class="front-h1__category">
                    <div class="text-bg"><?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?></div>
                </h1>
            </div>
        </div>
        <div class="catalog-section">
            <?php if(isset($catalogs[0]) && !empty($catalogs[0])):?>
            <?php foreach($catalogs[0] as $cat_item):?>

            <div class="catalog__item catalog__item__category">
                <span class="catalog__item__header">
                    <div class="catalog__item__title">
                        <?php echo $cat_item['title'];?>
                    </div>
                </span>
                

                <div class="catalog__item__subcategories-1">
                    <?php show_cat_files($cat_item['catFiles']);?>
                    <?php if(isset($catalogs[$cat_item['id']])):?>
                    <ul class="subcategories-list">
                        <?php foreach($catalogs[$cat_item['id']] as $cat_second):?>
                        
                        <li class="subcategories-item subcategories-item-drop">
                            <a class="subcategories-link chevr-catalog-open" href="#"><?php echo $cat_second['title'];?></a>
                            <?php if(isset($catalogs[$cat_second['id']])):?>
                            <svg class="chevr-catalog" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="chevr-catalog"
                                d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z"
                                fill="#333333">
                            </path>
                            </svg>
                            <?php show_cat_files($cat_second['catFiles']);?>

                            <ul class="subcategories-list-dropbox is-hidden">
                                <?php show_catalog_category_files($catalogs, $cat_second);?>
                            </ul>
                            <?php endif;?>


                        </li>
                        
                        
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>

                

            </div>

            <?php endforeach;?>
            <?php endif;?>                    
        </div>

        <div class="front-subtitle front-subtitle__category">
            <div class="term-description">
                <?php the_content();?>
            </div>
        </div>
        <button class="btn slider-front__btn btn-order">
            <span class="left-line">
                <?php _e('Leave apply', 'millturn');?>
            </span>
        </button>
        <div class="category-section_desc section">
            <div class="max-width">
            </div>
        </div>
    </div>
</div>


<?php
get_post_modules($fieldsArr['page_modules']);

get_footer();

?>
