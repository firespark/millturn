<?php
get_header();
the_post();

$category = get_category($cat);
$catFields = get_fields('category_' . $cat);

$results_per_page = get_option('posts_per_page');

$paged = ( isset($_GET['show']) ) ? $_GET['show'] : 1;

$args = [
    'posts_per_page'   => -1,
    'tax_query'     => [
        [
            'taxonomy'          => 'category',
            'terms'             => [ $cat ],
            'field'             => 'term_id',
            'operator'          => 'AND',
            'include_children'  => false
        ]
    ]
];

$total_posts = count(get_posts($args));
$total_pages = ceil($total_posts/$results_per_page);
$args['posts_per_page'] = $results_per_page;
$args['paged'] = $paged;
$products = get_posts($args);


?>

<div class="category-section">
    <div class="max-width">
        <?php custom_breadcrumbs();?>
        <div class="front-section__category">
            <div class="slider-front__container__single">
                <h1 class="front-h1__category">
                    <div class="text-bg"><?php echo $category->name;?></div>
                </h1>
            </div>
        </div>

        <?php require_once( __DIR__ . '/inc/cat_download.php');?>
            
        <div class="catalog-section">
            
            <?php if(isset($globalMenu[$cat]) && !empty($globalMenu[$cat])):?>
            <?php foreach($globalMenu[$cat] as $cat_item):?>
            <div class="catalog__item catalog__item__category">
                <a href="<?php echo $cat_item['url'];?>" class="catalog__item__header">
                    <?php if($cat_item['img']['url']):?>
                    <div class="catalog__item__category__img" width="160" height="160">
                        <img src="<?php echo $cat_item['img']['url'];?>" alt="<?php echo $cat_item['img']['alt'];?>">
                    </div>
                    <?php endif;?>
                    <div class="catalog__item__title">
                        <?php echo $cat_item['title'];?>
                    </div>
                </a>
                <?php if(isset($globalMenu[$cat_item['id']])):?>

                <div class="catalog__item__subcategories-1">
                    <ul class="subcategories-list">
                        <?php foreach($globalMenu[$cat_item['id']] as $cat_second):?>
                        
                        <li class="subcategories-item subcategories-item-drop">
                            <a class="subcategories-link" href="<?php echo $cat_second['url'];?>"><?php echo $cat_second['title'];?></a>
                            <?php if(isset($globalMenu[$cat_second['id']])):?>
                            <svg class="chevr-catalog" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="chevr-catalog"
                                d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z"
                                fill="#333333">
                            </path>
                            </svg>

                            <ul class="subcategories-list-dropbox is-hidden">
                                <?php show_catalog_category_children($globalMenu, $cat_second);?>
                            </ul>
                            <?php endif;?>

                        </li>
                        
                        
                        <?php endforeach;?>
                    </ul>
                </div>

                <?php endif;?>
            </div>
                                                                
            <?php endforeach;?>

            <?php endif;?>
            <?php if($catFields['cat_show_url']):?>
            <a href="<?php echo $catFields['cat_section_url'];?>" class="catalog__item popular-slider__front popular-slider__front__wide">
                <div class="product-info_block">
                    <div class="product__item__img__max">
                        <img src="<?php echo get_template_directory_uri();?>/images/tick.jpg" alt="">
                    </div>
                    <div class="catalog__item__title">
                        <?php echo $catFields['cat_section_title'];?>
                    </div>
                    <div class="catalog__item__link left-line catalog__item__line">
                        <?php _e('Go to catalog', 'millturn');?>
                    </div>
                </div>
                <!-- <div class="catalog__item__img">
                    <img src="images/p/10.jpg" alt="">
                </div> -->
            </a>
            <?php endif;?>

        </div>
        <?php if(!empty($products)):?>
        <div class="front-section__category">
            <div class="slider-front__container__single">
                <div class="front-h1__category">
                    <div class="text-bg"><?php _e('Production', 'millturn');?></div>
                </div>
            </div>
        </div>
        <div class="catalog-section">
            
            <?php foreach($products as $product):?>
            <?php 
            $attrs = get_field('product_attrs', $product->ID);
            $attrsArr = [];
            if(!empty($attrs)){
                foreach($attrs as $attr) {
                    if($attr['show_in_catalog']) {
                        $attrsArr[] = $attr;
                    }
                }
            }

            ?>
            <div class="catalog__item catalog__item__category categoru-customozed">
                <a href="<?php echo get_the_permalink($product->ID);?>" class="catalog__item__header" style="width: 100%;">
                    <div class="catalog__item__title">
                        <?php echo $product->post_title;?>
                    </div>
                    <div class="catalog__item__category__img" width="160" height="160">
                        <?php echo get_the_post_thumbnail( $product->ID );?>
                    </div>
                    
                    <?php if(!empty($attrsArr)):?>
                    <ul class="subcategories-list">
                        <?php foreach($attrsArr as $attrItem):?>
                        <li class="subcategories-item"><?php echo $attrItem['title'] . ': ' . $attrItem['value'];?></li>
                        <?php endforeach;?>
                        
                    </ul>
                    <?php endif;?>
                </a>
            </div>
                                                                
            <?php endforeach;?>


        </div>
        <div class="pagination">
            <?php
                if (function_exists('custom_pagination')) {
                    custom_pagination($total_pages,"",$paged);
                }
            ?>
        </div>
        <?php endif;?>
        <div class="front-subtitle front-subtitle__category">
            <div class="term-description">
                <?php echo $category->description;?>
                <?php echo $catFields['cat_content'];?>
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
require_once( __DIR__ . '/modules/populars.php');
require_once( __DIR__ . '/modules/contacts.php');

get_footer();

?>
