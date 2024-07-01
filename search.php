<?php

get_header();
the_post();

if(isset($_GET['s']) && $_GET['s']){
	$search = $_GET['s'];
  $results_per_page = get_option('posts_per_page');
  $paged = ( isset($_GET['show']) ) ? $_GET['show'] : 1;

  $total_posts = $wpdb->get_var("SELECT COUNT(*) FROM " . $wpdb->prefix. "posts WHERE post_type = 'post' AND post_status = 'publish' AND post_title LIKE '%" . $search . "%'");
  $total_pages = ceil($total_posts/$results_per_page);

  $posts_args = [
    'posts_per_page' => $results_per_page,
    'paged' => $paged,
    's'     => $search,
                         
  ];

    $products = get_posts($posts_args);

}

?>
<div class="category-section">
    <div class="max-width">
        <?php custom_breadcrumbs();?>
        <div class="front-section__category">
            <div class="slider-front__container__single">
                <h1 class="front-h1__category">
                    <div class="text-bg"><?php _e('Search results with query', 'millturn');?> <?php echo $_GET['s'];?></div>
                </h1>
            </div>
        </div>
            
        
        <?php if(!empty($products)):?>
        
        <div class="catalog-section">
            
            <?php foreach($products as $product):?>
            
            <div class="catalog__item catalog__item__category categoru-customozed">
                <a href="<?php echo get_the_permalink($product->ID);?>" class="catalog__item__header" style="width: 100%;">
                    <div class="catalog__item__title">
                        <?php echo $product->post_title;?>
                    </div>
                    <div class="catalog__item__category__img" width="160" height="160">
                        <?php echo get_the_post_thumbnail( $product->ID );?>
                    </div>
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
        <?php else:?>
        <p><?php _e('Nothing found with this query', 'millturn');?></p>
        <?php endif;?>
        
    </div>
</div>



<?php
get_footer();

?>