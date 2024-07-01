<?php
function custom_styles_js_files(){
	wp_enqueue_style('general_css', get_template_directory_uri().'/css/general.css');
    wp_enqueue_style('fonts_open_sans_css', 'https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700&#038;subset=latin');
    //wp_enqueue_style('font_awesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
    //wp_enqueue_style('fa_min_css', get_template_directory_uri().'/css/fontawesome/css/fontawesome.min.css');
    wp_enqueue_style('style_min_css', get_template_directory_uri().'/css/style.min.css');
    wp_enqueue_style('woocommerce_min_css', get_template_directory_uri().'/css/plugins/woocommerce.min.css');
    wp_enqueue_style('responsive_min_css', get_template_directory_uri().'/css/responsive.min.css');
    wp_enqueue_style('defaults_css', get_template_directory_uri().'/css/Defaults.css');
    

    wp_enqueue_script('jquery_min_js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('revolution_min_js', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js');

    wp_enqueue_style('main_css', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('slick_css', get_template_directory_uri().'/libs/slick-slider/slick/slick.css');
    wp_enqueue_style('slick_theme_css', get_template_directory_uri().'/libs/slick-slider/slick/slick-theme.css');
    wp_enqueue_style('fancybox_min_css', get_template_directory_uri().'/libs/fancybox/dist/jquery.fancybox.min.css');
    
        
    //wp_enqueue_style('product_css', get_template_directory_uri().'/css/product.css');
    wp_enqueue_style('custom_css', get_template_directory_uri().'/css/custom.css');
    

    wp_enqueue_script('fancybox_min_js', get_template_directory_uri() . '/libs/fancybox/dist/jquery.fancybox.min.js');
    wp_enqueue_script('slick_min_js', get_template_directory_uri() . '/libs/slick-slider/slick/slick.min.js');
    wp_enqueue_script('imask_min_js', get_template_directory_uri() . '/libs/imask/dist/imask.min.js');
    wp_enqueue_script('query_plainmodal_min_js', get_template_directory_uri() . '/libs/jquery-plainmodal/jquery.plainmodal.min.js');
    wp_enqueue_script('jquery_cookie_js', get_template_directory_uri() . '/libs/jquery-cookie.js');
    wp_enqueue_script('imask_init_js', get_template_directory_uri() . '/js/imaskInit.js');
    wp_enqueue_script('slickinit_js', get_template_directory_uri() . '/js/slickinit.js');
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('tabs_init_js', get_template_directory_uri() . '/js/tabsInit.js');
    wp_enqueue_script('custom_js', get_template_directory_uri().'/js/custom.js', [], 2);
    wp_localize_script('custom_js', 'adminAjaxObj', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
    ]);
	
}