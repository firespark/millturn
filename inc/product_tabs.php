        <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="product-tabs flex-tabs__container tabs wc-tabs" role="tablist">
                <div class="max-width">
                    <?php if($fieldsArr['product_specifics']):?>
                    <li class="tekhnicheskie-kharakteristiki_tab" id="tab-title-tekhnicheskie-kharakteristiki" role="tab" aria-controls="tab-tekhnicheskie-kharakteristiki">
                        <a href="#tab-tekhnicheskie-kharakteristiki"><?php _e('Specifications', 'millturn');?></a>
                    </li>
                    <?php endif;?>
                    <?php if($fieldsArr['product_complectation']):?>
                    <li class="standartnaya-komplektatsiya_tab" id="tab-title-standartnaya-komplektatsiya" role="tab" aria-controls="tab-standartnaya-komplektatsiya">
                        <a href="#tab-standartnaya-komplektatsiya"><?php _e('Equipment', 'millturn');?></a>
                    </li>
                    <?php endif;?>
                    <?php if($post->post_content):?>
                    <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                        <a href="#tab-description"><?php _e('Description', 'millturn');?></a>
                    </li>
                    <?php endif;?>
                </div>
            </ul>
            <div class="max-width">
                <?php if($fieldsArr['product_specifics']):?>
                <div class="tab-content flex-tab__containerwoocommerce-Tabs-panel woocommerce-Tabs-panel--tekhnicheskie-kharakteristiki panel entry-content wc-tab" id="tab-tekhnicheskie-kharakteristiki" role="tabpanel" aria-labelledby="tab-title-tekhnicheskie-kharakteristiki">
                    <?php echo $fieldsArr['product_specifics'];?>                    
                </div>
                <?php endif;?>
                <?php if($fieldsArr['product_complectation']):?>
                <div class="tab-content flex-tab__containerwoocommerce-Tabs-panel woocommerce-Tabs-panel--standartnaya-komplektatsiya panel entry-content wc-tab" id="tab-standartnaya-komplektatsiya" role="tabpanel" aria-labelledby="tab-title-standartnaya-komplektatsiya">
                    <?php echo $fieldsArr['product_complectation'];?>
                </div>
                <?php endif;?>
                <?php if($post->post_content):?>
                <div class="tab-content flex-tab__containerwoocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                    
                    <?php echo $post->post_content;?>
                </div>
                <?php endif;?>
            </div>

        </div>