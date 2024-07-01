<?php if(isset($catFields['cat_button_show']) && $catFields['cat_button_show'] && !empty($catFields['cat_files'])):?>
    <div class="mb40">
    <?php if(count($catFields['cat_files']) > 1):?>
                    <button type="button" class="btn product-main__btn-download btn-download btn-download-catalog">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path d="M12 2C12.5523 2 13 2.44772 13 3V13.5858L15.2929 11.2929C15.6834 10.9024 16.3166 10.9024 16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L12.7071 16.7071C12.3166 17.0976 11.6834 17.0976 11.2929 16.7071L7.29289 12.7071C6.90237 12.3166 6.90237 11.6834 7.29289 11.2929C7.68342 10.9024 8.31658 10.9024 8.70711 11.2929L11 13.5858V3C11 2.44772 11.4477 2 12 2ZM5 17C5.55228 17 6 17.4477 6 18V20H18V18C18 17.4477 18.4477 17 19 17C19.5523 17 20 17.4477 20 18V20C20 21.1046 19.1046 22 18 22H6C4.89543 22 4 21.1046 4 20V18C4 17.4477 4.44772 17 5 17Z" fill="#777777"></path>
                        </svg>                                    
                        <?php echo ($catFields['cat_button_text_many']) ? $catFields['cat_button_text_many'] : __('Download catalog', 'millturn');?>
                        <span class="btn-chevrn-down">
                        <svg width="18" height="10" viewBox="0 0 12 7" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z"></path>
                        </svg>
                    </span>
                    <ul class="product-main__drop-list">
                        <?php foreach($catFields['cat_files'] as $file):?>
                        <li class="product-main__item"><a href="<?php echo $file['file']['url'];?>" class="product-main__link" title="<?php echo $file['file']['title'];?>"><?php echo $file['file']['title'];?></a></li>
                        <?php endforeach;?>
                    </ul>
                    </button>

                    
                    
    <?php else:?>
                    <a download href="<?php echo $catFields['cat_files'][0]['file']['url'];?>" class="btn product-main__btn-download btn-download" title="<?php echo $catFields['cat_files'][0]['file']['title'];?>" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path d="M12 2C12.5523 2 13 2.44772 13 3V13.5858L15.2929 11.2929C15.6834 10.9024 16.3166 10.9024 16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L12.7071 16.7071C12.3166 17.0976 11.6834 17.0976 11.2929 16.7071L7.29289 12.7071C6.90237 12.3166 6.90237 11.6834 7.29289 11.2929C7.68342 10.9024 8.31658 10.9024 8.70711 11.2929L11 13.5858V3C11 2.44772 11.4477 2 12 2ZM5 17C5.55228 17 6 17.4477 6 18V20H18V18C18 17.4477 18.4477 17 19 17C19.5523 17 20 17.4477 20 18V20C20 21.1046 19.1046 22 18 22H6C4.89543 22 4 21.1046 4 20V18C4 17.4477 4.44772 17 5 17Z" fill="#777777"></path>
                        </svg>  
                        <?php echo ($catFields['cat_button_text_one']) ? $catFields['cat_button_text_one'] : __('Download catalog', 'millturn');?>
                    </a>

    <?php endif;?>
    </div>
    <?php endif;?>