<?php
$moduleOptions = get_module_options('capture');
?>

<div class="form-banner__wrapper">
    <div class="form-banner">
        <div class="max-width">
            <div class="form-banner__container">
                <h2 class="form-banner__title">
                    <?php echo $moduleOptions['capture_title'];?>
                </h2>
                <div class="form-banner__subtitle">
                    <?php echo $moduleOptions['capture_description'];?>
                </div>
                <?php if($moduleOptions['capture_button_show']):?>
                <div class="btn btn__white form-banner__btn btn-callback">
                    <a href="<?php echo $moduleOptions['capture_button_url'];?>">
                        <span class="left-line form-banner__line">
                            <?php echo $moduleOptions['capture_button_text'];?>
                        </span>
                    </a>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php if($moduleOptions['capture_img']):?>
    <img src="<?php echo $moduleOptions['capture_img']['url'];?>" alt="<?php echo $moduleOptions['capture_img']['alt'];?>" class="form-banner-bg">
    <?php endif;?>
</div>