<?php
$moduleOptions = get_module_options('partners');
?>

<div class="arrow-bg-section section">
    <div class="max-width">     
        <div class="partners-section">
            <div class="max-width">
                <h2><?php echo $moduleOptions['partners_title'];?></h2>
                <?php if(!empty($moduleOptions['partners'])):?>
                <div class="partners-slider" id="partners-slider">
                    <div class="partners-slider__block">
                        <button class="arrow-slider arrow-slider__left">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.7886 33.7886C31.0615 36.5157 27.5869 38.3729 23.8043 39.1253C20.0216 39.8777 16.1008 39.4916 12.5377 38.0157C8.97451 36.5397 5.92903 34.0404 3.78634 30.8336C1.64366 27.6269 0.5 23.8567 0.5 20C0.5 16.1433 1.64365 12.3731 3.78634 9.16638C5.92903 5.95962 8.97451 3.46026 12.5377 1.98435C16.1008 0.508441 20.0216 0.122275 23.8043 0.874687C27.5869 1.6271 31.0615 3.48429 33.7886 6.21142" stroke="#CCCCCC"/>
                                <path d="M13.4697 20.5303C13.1768 20.2374 13.1768 19.7626 13.4697 19.4697L18.2426 14.6967C18.5355 14.4038 19.0104 14.4038 19.3033 14.6967C19.5962 14.9896 19.5962 15.4645 19.3033 15.7574L15.0607 20L19.3033 24.2426C19.5962 24.5355 19.5962 25.0104 19.3033 25.3033C19.0104 25.5962 18.5355 25.5962 18.2426 25.3033L13.4697 20.5303ZM39 20.75H14V19.25H39V20.75Z" fill="#777777"/>
                            </svg>
                        </button>
                        <div class="slider-partners__container" id="slider-partners__container">
                            <?php foreach($moduleOptions['partners'] as $partner):?>
                            <div class="partners__item">
                                <?php if($partner['url']):?>
                                <a href="<?php echo $partner['url'];?>" target="_blank" rel="nofollow">
                                <?php endif;?>
                                    <img src="<?php echo $partner['logo']['url'];?>" class="slider-any__img" alt="<?php echo $partner['logo']['alt'];?>">
                                <?php if($partner['url']):?>
                                </a>
                                <?php endif;?>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <button class="arrow-slider arrow-slider__right">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.21142 33.7886C8.93854 36.5157 12.4131 38.3729 16.1957 39.1253C19.9784 39.8777 23.8992 39.4916 27.4623 38.0157C31.0255 36.5397 34.071 34.0404 36.2137 30.8336C38.3563 27.6269 39.5 23.8567 39.5 20C39.5 16.1433 38.3563 12.3731 36.2137 9.16638C34.071 5.95962 31.0255 3.46026 27.4623 1.98435C23.8992 0.508441 19.9784 0.122275 16.1957 0.874687C12.4131 1.6271 8.93854 3.48429 6.21142 6.21142" stroke="#CCCCCC"/>
                                <path d="M26.5303 20.5303C26.8232 20.2374 26.8232 19.7626 26.5303 19.4697L21.7574 14.6967C21.4645 14.4038 20.9896 14.4038 20.6967 14.6967C20.4038 14.9896 20.4038 15.4645 20.6967 15.7574L24.9393 20L20.6967 24.2426C20.4038 24.5355 20.4038 25.0104 20.6967 25.3033C20.9896 25.5962 21.4645 25.5962 21.7574 25.3033L26.5303 20.5303ZM1 20.75H26V19.25H1V20.75Z" fill="#777777"/>
                            </svg>                            
                        </button>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>    
    </div>
</div>