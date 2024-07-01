<?php
$moduleOptions = get_module_options('sertificates');
?>
<div class="slider-any section">
    <div class="max-width">
        <h2 class="slider-any__title">
            <?php echo $moduleOptions['sertificates_title'];?>
        </h2>
        <?php if(!empty($moduleOptions['sertificates_list'])):?>
        <div class="slider-any__container">
            <?php foreach($moduleOptions['sertificates_list'] as $sertificate):?>
            <a href="<?php echo $sertificate['url'];?>" target="_blank" class="slider-any__item" data-fancybox="image">
                <img src="<?php echo $sertificate['url'];?>" class="slider-any__img" alt="<?php echo $sertificate['alt'];?>">
            </a>
            <?php endforeach;?>
        </div>
        <?php endif;?>
    </div>
</div>