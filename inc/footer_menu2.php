                        <div class="footer-list-vertical footer-list-company">
                            <div class="footer-list__title footer-list__title-collapse">
                                <?php echo $optionsArr['footer_menu_title2'];?>
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#E84B0F"></path>
                                </svg>
                                <div class="border"></div>
                            </div>
                            <?php if(!empty($footer_menu)):?>
                            <div class="collapse menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <?php foreach($footer_menu[0] as $menu_item):?>
                                    <li id="menu-item-10112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10112"><a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['title'];?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <?php endif;?>
                        </div>