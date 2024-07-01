<?php global $globalMenu;?>

<div class="categories-front section">
    <div class="max-width categories-front__container">
        <?php if(isset($globalMenu[0]) && !empty($globalMenu[0])):?>
        <?php foreach($globalMenu[0] as $cat_item):?>
        
        <a href="<?php echo $cat_item['url'];?>" class="categories-front__item">
            <div class="categories-front__item__img__inner">
                <?php if($cat_item['img']['url']):?>
                <img src="<?php echo $cat_item['img']['url'];?>"  alt="<?php echo $cat_item['img']['alt'];?>" class="categories-front__item__img" />
                <?php endif;?>
            </div>
            <span class="categories-front__item__link"><?php echo $cat_item['title'];?></span>
        </a>
        <?php endforeach;?>
        <?php endif;?>
    </div>
</div>