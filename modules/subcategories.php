<?php
$moduleOptions = get_module_options('subcategories');
$catFields = get_fields('category_' . $moduleOptions['subcategories_category'][0]);

?>
<?php if(isset($globalMenu[$moduleOptions['subcategories_category'][0]]) && !empty($globalMenu[$moduleOptions['subcategories_category'][0]])):?>
<div class="arrow-bg-section section">
    <div class="max-width">
        <div class="arrow-bg-left"></div>
        <h2><?php echo $moduleOptions['subcategories_title'];?></h2>
        <div class="products-front section">
            <div class="arrow-bg-left arrow-bg-left-2"></div>
            <?php foreach($globalMenu[$moduleOptions['subcategories_category'][0]] as $subcategory):?>
            <a href="<?php echo $subcategory['url'];?>" class="catalog__item popular-slider__front">
                <?php if($subcategory['img']['url']):?>
                <div class="catalog__item__img">
                    <img src="<?php echo $subcategory['img']['url'];?>" alt="<?php echo $subcategory['img']['alt'];?>">
                </div>
                <?php endif;?>
                <div class="catalog__item__title">
                    <?php echo $subcategory['title'];?>
                </div>
                <div class="catalog__item__link left-line catalog__item__line">
                    <?php _e('Go to Catalog', 'millturn');?>
                </div>
            </a>
            <?php endforeach;?>
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
                        <?php _e('Go to Catalog', 'millturn');?>
                    </div>
                </div>
                <!-- <div class="catalog__item__img">
                    <img src="images/p/10.jpg" alt="">
                </div> -->
            </a>
            <?php endif;?>
            <div class="arrow-bg-right"></div>
        </div>
    </div>
</div>

<?php endif;?>