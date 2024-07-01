                <div class="credits-container">
                    <span class="credits_title__h1"> &copy;<?php echo date('Y');?> <?php echo $optionsArr['footer_copy'];?> </span>
                    <a class="credits_title" href="<?php echo $mainAgree;?>"><?php _e('Privacy policy', 'millturn');?></a>
                    <?php if($optionsArr['footer_webstudio_show']):?>
                    <a class="credits_title wpnew" target="_blank" href="<?php echo $optionsArr['footer_webstudio_url'];?>" rel="nofollow"><?php echo $optionsArr['footer_webstudio_text'];?></a>
                    <?php endif;?>
                </div>