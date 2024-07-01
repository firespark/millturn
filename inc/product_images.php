<?php
$product_img_url = get_the_post_thumbnail_url($post->ID);
?>                
                <?php if($product_img_url):?>
                <div class="product-main__gallery grid-gallery__container">
                            
                    <button class="product-main__share">
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-curtain data-shape="round" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp">
                        </div>
                    </button>
                    <?php if(!empty($fieldsArr['product_gallery'])):?>
                    <?php if(count($fieldsArr['product_gallery']) > 4):?>
                    <button class="arrow-slider arrow-slider__top slick-arrow thumbs_arrow" style="">
                        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.93934 13.0607C0.353553 12.4749 0.353553 11.5251 0.93934 10.9393L10.4853 1.3934C11.0711 0.807612 12.0208 0.807612 12.6066 1.3934C13.1924 1.97918 13.1924 2.92893 12.6066 3.51472L4.12132 12L12.6066 20.4853C13.1924 21.0711 13.1924 22.0208 12.6066 22.6066C12.0208 23.1924 11.0711 23.1924 10.4853 22.6066L0.93934 13.0607ZM3 13.5H2V10.5H3V13.5Z" fill="#C4C4C4"></path>
                        </svg>
                    </button>
                    <?php endif;?>
                    <div class="product-gallery__thumbs">
                        <?php foreach($fieldsArr['product_gallery'] as $galleryItem):?>
                        <span data-fancybox="gallery" data-src="<?php echo $galleryItem['url'];?>" class="product-gallery__thumb">
                        <img class="product-gallery__thumb-img" src="<?php echo $galleryItem['url'];?>" alt="" width="90" height="80">
                        </span>
                        <?php endforeach;?>
                    </div>
                    <?php if(count($fieldsArr['product_gallery']) > 4):?>
                    <button class="arrow-slider arrow-slider__bot slick-arrow thumbs_arrow" style="">
                        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0607 13.0607C13.6464 12.4749 13.6464 11.5251 13.0607 10.9393L3.51472 1.3934C2.92893 0.807612 1.97918 0.807612 1.3934 1.3934C0.807612 1.97918 0.807612 2.92893 1.3934 3.51472L9.87868 12L1.3934 20.4853C0.807612 21.0711 0.807612 22.0208 1.3934 22.6066C1.97918 23.1924 2.92893 23.1924 3.51472 22.6066L13.0607 13.0607ZM11 13.5H12V10.5H11V13.5Z" fill="#C4C4C4"></path>
                        </svg>                                                      
                    </button>
                    <?php endif;?>
                    <?php endif;?>
            
                    <div class="product-gallery__main__container ">
                        <span data-fancybox="gallery" data-src="<?php echo $product_img_url;?>" class="product-gallery__main">
                            <img src="<?php echo $product_img_url;?>" alt="">
                        </span>
                    </div>
                </div>
                <?php endif;?>