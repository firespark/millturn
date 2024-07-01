                        <div class="footer-list-vertical footer-list-contacts">
                            <div class="footer-list__title footer-list__title-collapse">
                                <?php echo $optionsArr['footer_title_contacts'];?>
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="#E84B0F"></path>
                                </svg>
                                <div class="border"></div>
                            </div>
                            <div class="collapse footer-list-contacts__block">
                                <ul class="footer-list">
                                    <?php if($optionsArr['main_address']):?>
                                    <li class="footer-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri();?>/images/icons/map-mark.svg" alt="<?php echo $optionsArr['main_address'];?>"><?php echo $optionsArr['main_address'];?>
                                    </li>
                                    <?php endif;?>
                                    <?php if($optionsArr['main_email']):?>
                                    <li class="footer-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri();?>/images/icons/mail.svg" alt="info@millturn.ru"><a href="mailto:<?php echo $optionsArr['main_email'];?>"><?php echo $optionsArr['main_email'];?></a>
                                    </li>
                                    <?php endif;?>
                                </ul>
                                <a href="tel:+<?php echo get_numbers_from_str($optionsArr['main_phone']);?>" class="footer-list__title">
                                    <?php echo $optionsArr['main_phone'];?>
                                </a>
                                <a href="javascript:void(0);" class="footer-list__title left-line left-line__footer btn-callback">
                                    <?php _e('Order ring', 'millturn');?>
                                </a>
                            </div>
                        </div>