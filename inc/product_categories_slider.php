<?php global $globalMenu;?>
<?php if($fieldsArr['product_categories_slider_cat'] && isset($globalMenu[$fieldsArr['product_categories_slider_cat'][0]]) && !empty($globalMenu[$fieldsArr['product_categories_slider_cat'][0]])):?>
    <div class="slider-category flex-slider__container" id="slider-category">
        <div class="max-width">
            <button class="arrow-slider arrow-slider__left">
                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.93934 13.0607C0.353553 12.4749 0.353553 11.5251 0.93934 10.9393L10.4853 1.3934C11.0711 0.807612 12.0208 0.807612 12.6066 1.3934C13.1924 1.97918 13.1924 2.92893 12.6066 3.51472L4.12132 12L12.6066 20.4853C13.1924 21.0711 13.1924 22.0208 12.6066 22.6066C12.0208 23.1924 11.0711 23.1924 10.4853 22.6066L0.93934 13.0607ZM3 13.5H2V10.5H3V13.5Z" fill="#C4C4C4"/>
                </svg>
            </button>
            <div class="slider-category__container" id="slider-category__container">
                <?php foreach($globalMenu[$fieldsArr['product_categories_slider_cat'][0]] as $cat_item):?>
                <?php if($cat_item['img']['url']):?>
                <a href="<?php echo $cat_item['img']['url'];?>" class="slider-category__item">
                    <img class="slider-category__img" src="<?php echo $cat_item['img']['url'];?>" alt="<?php echo $cat_item['img']['alt'];?>" width="100" height="100">
                </a>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            <button class="arrow-slider arrow-slider__right">
                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM11 13.5H12V10.5H11V13.5Z" fill="#C4C4C4"/>
                </svg>                                                      
            </button>
        </div>
    </div>
<?php endif;?>