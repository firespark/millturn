<?php
$moduleOptions = get_module_options('features');
?>

<div class="advantages-banner section">
    <div class="max-width">
        <h2><?php echo $moduleOptions['features_title'];?></h2>
        <?php if(!empty($moduleOptions)):?>
        <div class="advantages-banner__container">
            <?php foreach($moduleOptions['features'] as $feature):?>
            <div class="advantages__item">
                <img class="advantages__item__img" src="<?php echo $feature['img']['url'];?>" alt="<?php echo $feature['img']['alt'];?>">
                <div class="advantages__item__value">
                    <?php echo $feature['description'];?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <?php endif;?>
    </div>
</div>