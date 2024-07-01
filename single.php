<?php
get_header();
the_post();
$fieldsArr = get_fields();

?>

<?php if(isset($fieldsArr['product_template']) && $fieldsArr['product_template'] === 'service'):?>
<div>
    <?php custom_breadcrumbs();?>
    <div class="contact-title">
        <div class="max-width">
            <h1 itemprop="headline"><?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?></h1>
        </div>
    </div>
</div>

<div class="l-main">

    <div class="l-main-h i-cf">

        <main class="l-content" itemprop="mainContentOfPage">

            
            <section class="l-section">
                <div class="l-section-h i-cf">
                    <?php the_content();?>
                
                </div>
            </section>
            
        </main>

        
    </div>
</div>
<?php require_once( __DIR__ . '/modules/contacts.php');?>
<?php else:?>

<div class="product-section section product-flex">
    <div class="woocommerce-notices-wrapper"></div>
    <?php require_once( __DIR__ . '/inc/product_categories_slider.php');?>

    <?php custom_breadcrumbs();?>
    <div id="product-10547" class="product-main flex-product__container" >

        <div class="max-width product-main__wrapper">
            <?php require_once( __DIR__ . '/inc/product_images.php');?>
            <h1 class="product-main__title grid-title__container">
                <?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?>
            </h1>
            <?php require_once( __DIR__ . '/inc/product_share_button_mobile.php');?>
            
            <div class="product-main__info grid-info__container">
                <div class="product-main__detail">
                    <?php echo $fieldsArr['product_description'];?>
                </div>
                
                <div class="product-main__buttons-block">
                    <div class="btn product-main__btn-order btn-order">
                        <span class="left-line">
                            <?php _e('Leave apply', 'millturn');?>
                        </span>
                    </div>
                    <?php require_once( __DIR__ . '/inc/product_download.php');?>
                    
                </div>
            </div>
        </div>
                    
        <?php require_once( __DIR__ . '/inc/product_tabs.php');?>
    </div>

</div>

<?php 
require_once( __DIR__ . '/modules/populars.php');
require_once( __DIR__ . '/modules/capture.php');
?>

<?php endif;?>

<?php

get_footer();

?>
