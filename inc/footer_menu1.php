<?php 
$main_category_id = ($optionsArr['main_category']) ? $optionsArr['main_category'][0] : 0;
?>
                    <div class="footer-list-horizontal footer-list-categories">
                        <div class="footer-list__title footer-list__title-collapse">
                            <?php echo $optionsArr['footer_menu_title1'];?>
                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#E84B0F"></path>
                            </svg>
                            <div class="border"></div>
                        </div>
                        <div class="footer-block collapse footer-block__cat">
                            <?php if(isset($globalMenu[$main_category_id]) && !empty($globalMenu[$main_category_id])):?>
                            <ul class="footer-list__cat">
                                <?php foreach($globalMenu[$main_category_id] as $menu_item):?>
                                <li class="footer-item">
                                    <a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['title'];?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <?php endif;?>
                        </div>
                    </div>