<?php
global $optionsArr;
global $mainAgree;
global $globalMenu;
$footer_menu = get_custom_menu(268);


?>

<footer class="footer-section" itemscope itemtype="https://schema.org/WPFooter">
  <div class="max-width">
        <div class="footer-footer">
            <div class="footer-container">
                <div class="footer-block">
                    <?php require_once( __DIR__ . '/inc/footer_menu1.php');?>
                </div>
                <div class="footer-block__column__wrapper">
                    <div class="footer-block__column">
                        <?php require_once( __DIR__ . '/inc/footer_menu2.php');?>
                        <?php require_once( __DIR__ . '/inc/footer_socials.php');?>
                    </div>
                    <div class="footer-block__column">
                        <?php require_once( __DIR__ . '/inc/footer_contacts.php');?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-credits">
            <div class="max-width">
                <?php require_once( __DIR__ . '/inc/footer_bottom.php');?>
            </div>
        </div>
  </div>
</footer>
<?php require_once( __DIR__ . '/inc/modal_callback.php');?>
<?php require_once( __DIR__ . '/inc/modal_apply.php');?>


<script src="<?php echo get_template_directory_uri();?>/js/modalInit.js" defer></script>
<script type='text/javascript' id='wc-single-product-js-extra'>
/* <![CDATA[ */
var wc_single_product_params = {};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/js/single-product.min.js' id='wc-single-product-js'></script>

<?php wp_footer();?>

</body>
</html>
