<?php
global $optionsArr;
?>
<div class="contact-us">
    <div class="max-width">
        <h2 class="contact-us__title">
            <?php echo $optionsArr['form_contacts_title'];?>
        </h2>
        <div class="contact-us__subtitle">
            <?php echo $optionsArr['form_contacts_description'];?>
        </div>
        <div>
            <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
            </div>
            <div id="orderMessage">
                <div class="sendmessage"></div>
                <div class="errormessage"></div>
                <form class="wpcf7-form init">
                    
                    <div class="contact-us__form">
                        <div class="contact-us__form__block">
                            <span class="wpcf7-form-control-wrap">
                                <input type="text" name="name" value="" size="40" class="contact-us__input" placeholder="<?php _e('Your name', 'millturn');?>*" required />
                            </span>
                            <br />
                            <span class="wpcf7-form-control-wrap">
                                <input type="tel" name="tel" value="" size="40" class="contact-us__input" placeholder="<?php _e('Your phone', 'millturn');?>*" required/>
                            </span>
                            <br />
                            <span class="wpcf7-form-control-wrap">
                                <input type="email" name="email" value="" size="40" class="contact-us__input" placeholder="<?php _e('Your email', 'millturn');?>" />
                            </span>
                        </div>
                        <div class="contact-us__form__block">
                            <span class="wpcf7-form-control-wrap">
                                <input type="text" name="message" value="" size="40" class="contact-us__input contact-us__input__bigger" placeholder="<?php _e('Your message', 'millturn');?>" />
                            </span>
                            <button class="btn btn__white contact-us__btn"><span class="left-line form-banner__line"><?php _e('Send message', 'millturn');?></span></button>
                        </div>
                        <p class="policy">
                            <?php echo $optionsArr['form_contacts_agreement'];?>
                        </p>
                    </div>
                    <p style="display: none !important;">
                        <input type="hidden" id="ak_js" name="time" value=""/>
                        <script>document.getElementById( "ak_js" ).setAttribute( "value", ( new Date() ).getTime() );</script>
                    </p>
                    
                </form>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/images/bg-3.png" alt="" class="contact-us-bg">
</div>
