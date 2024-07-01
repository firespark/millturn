<div class="plainmodal plainmodal-modal" id="order-modal">
    <div class="plainmodal-close">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 1L1 21M1 1L21 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>                
    </div>
    <div>
        <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
        </div>
        <div id="orderApply">
            
            <form class="wpcf7-form init">
                <div class="plainmodal-form">
                    <div class="plainmodal-title">
                        <?php echo $optionsArr['form_apply_title'];?>
                    </div>
                    <p class="policy">
                        <?php echo $optionsArr['form_apply_description'];?>
                    </p>
                    <div class="sendmessage"></div>
                    <div class="errormessage"></div>
                    <div class="modalInner plainmodal-form">
                        <p>
                            <label for="name" class="plainmodal-input">
                                <br />
                                <span class="wpcf7-form-control-wrap">
                                    <input type="text" name="name" value="" size="40" class="plainmodal-input" placeholder="<?php _e('Your name', 'millturn');?>*" required />
                                </span>
                                <br />
                            </label>
                            <br />
                            <label for="tel-333">
                                <br />
                                <span class="wpcf7-form-control-wrap">
                                    <input type="tel" name="tel" value="" size="40" class="plainmodal-input" placeholder="<?php _e('Your phone', 'millturn');?>*" required />
                                </span>
                                <br />
                            </label>
                            <br />
                            <button class="plainmodal-btn btn">
                                <span class="left-line"><?php _e('Order', 'millturn');?></span>
                            </button>
                        </p>
                        <p class="policy">
                            <?php echo $optionsArr['form_apply_agreement'];?>
                        </p>
                    </div>
                </div>
                <p style="display: none !important;">
                    <input type="hidden" id="ak_js" name="time" value="17"/>
                    <script>document.getElementById( "ak_js" ).setAttribute( "value", ( new Date() ).getTime() );</script>
                </p>
                
            </form>
        </div>
    </div>
</div>