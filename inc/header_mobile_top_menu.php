        <div class="mobile-menu__cats-inner" id="mobile-menu-categories"></div>
        <div class="menu-header-menu-container">
            <?php if(!empty($header_menu)):?>
            <ul id="menu-header-menu-1" class="menu">
                <?php foreach($header_menu[0] as $menu_item):?>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $menu_item['url'];?>"><?php echo $menu_item['title'];?></a></li>
                <?php endforeach;?>
            </ul>
            <?php endif;?>
        </div>