<?php
$moduleOptions = get_module_options('slider');
?>

<div class="front">
    <?php if(!empty($moduleOptions['slider_slides'])):?>
    <div class="front-fornt__slider">
        <?php foreach($moduleOptions['slider_slides'] as $slide):?>
        <div class="front-section__container">
            <div class="front-section bg1" style="background: url('<?php echo $slide['img']['url'];?>');">
                <div class="mob-bg front-front"></div>
                <div class="max-width">
                    <div class="slider-front__container slider">
                        <div class="slider-front__container__item">
                            <div class="front-h1">
                                <?php echo $slide['title'];?>
                            </div>
                            <div class="front-subtitle">
                                <?php echo $slide['description'];?>
                            </div>
                            <?php if($slide['button_show']):?>
                            <a href="<?php echo $slide['button_url'];?>" class="btn slider-front__btn">
                                <span class="left-line">
                                    <?php echo $slide['button_text'];?>
                                </span>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <div class="max-width">
        <div class="front-fornt__slider__controlls controls-block controls-block__front">
            <button class="arrow-slider arrow-slider__left">
                <img src="<?php echo get_template_directory_uri();?>/images/icons/arrow-slider-left.svg" alt="arrow">
            </button>
            <button class="arrow-slider arrow-slider__right">
                <img src="<?php echo get_template_directory_uri();?>/images/icons/arrow-slider-right.svg" alt="arrow">
            </button>
        </div>
    </div>
    <?php endif;?>
</div>