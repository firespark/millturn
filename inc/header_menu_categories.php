

                <?php if(isset($globalMenu[0]) && !empty($globalMenu[0])):?>
                <ul class="menu-categories" id="menu-categories menu-0">
                    <?php foreach($globalMenu[0] as $menu_item):?>
                    <?php if(isset($globalMenu[$menu_item['id']])):?>
                    <li class="menu__item menu__item__collapse">
                                        
                        <div class="menu__item_link__wrapper">
                            <a href="<?php echo $menu_item['url'];?>" class="menu__item_link"><?php echo $menu_item['title'];?></a>
                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#333333"></path>
                            </svg>
                        </div>
                        <div class="menu-bg">
                            <ul class="menu__item__collapse-list">
                                <?php foreach($globalMenu[$menu_item['id']] as $menu_second):?>
                                <?php if(isset($globalMenu[$menu_second['id']])):?>
                                <li class="menu__item_link menu__item_link__child  menu__item_link__child__first">
                                    <a class="has-child" href="<?php echo $menu_second['url'];?>"><?php echo $menu_second['title'];?></a>
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.53033 6.53033C6.82322 6.23744 6.82322 5.76256 6.53033 5.46967L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L4.93934 6L0.696699 10.2426C0.403806 10.5355 0.403806 11.0104 0.696699 11.3033C0.989593 11.5962 1.46447 11.5962 1.75736 11.3033L6.53033 6.53033ZM5 6.75H6V5.25H5V6.75Z" fill="#C4C4C4"></path>
                                    </svg>
                                    <ul class="menu__item__collapse-list menu__item__collapse-list__child">
                                        <?php show_top_menu_children($globalMenu, $menu_second);?>
                                    </ul>
                                </li>
                                <?php else:?>
                                <li class="menu__item_link menu__item_link__child">
                                    <a href="<?php echo $menu_second['url'];?>"><?php echo $menu_second['title'];?></a>
                                </li>
                                <?php endif;?>
                                <?php endforeach;?>
                            </ul>
                            <img loading="lazy" src="<?php echo get_template_directory_uri();?>/images/icons/close-menu.svg" alt="<?php _e('Close', 'millturn');?>" class="close-menu">
                        </div>
                    </li>
                    <?php else:?>
                    <li class="menu__item menu__item__collapse">
                        <a href="<?php echo $menu_item['url'];?>" class="menu__item_link"><?php echo $menu_item['title'];?></a>
                    </li>
                    <?php endif;?>
                    <?php endforeach;?>
                    
                </ul>
                <?php endif;?>