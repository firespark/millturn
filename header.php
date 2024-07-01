<?php
global $optionsArr;
global $globalMenu;
$header_menu = get_custom_menu(267);

$allCategories = get_categories(['exclude' => 1, 'hide_empty' => 1]);
$globalMenu = [];

    if(!empty($allCategories)){
        foreach ($allCategories as $category_item) {
            $cat_key = (isset($category_item->parent) && $category_item->parent) ? $category_item->parent : 0;
            
            $globalMenu[$cat_key][] = [
                'id' => $category_item->term_id,
                'title' => $category_item->name,
                'url' => get_category_link($category_item->term_id),
                'img' => get_field('cat_image', 'category_' . $category_item->term_id)
            ];
            
            
        }
    }

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <?php wp_head(); ?>

</head>
<body itemscope itemtype="https://schema.org/WebPage" <?php body_class() ?>>
<?php wp_body_open(); ?>	
<header class="header header-section">
	<div class="w-search" style="display: none;"></div>
	<div class="max-width header-container">
		<?php require_once( __DIR__ . '/inc/header_logo.php');?>
		<div class="header-content">
			<div class="header-content__top">
				<?php require_once( __DIR__ . '/inc/header_topmenu.php');?>
				<?php require_once( __DIR__ . '/inc/header_form.php');?>
				<div class="header-mobile">
					<?php require_once( __DIR__ . '/inc/header_search_mobile.php');?>
					<?php require_once( __DIR__ . '/inc/header_hamburger.php');?>
                </div>
			
			</div>			
			<div class="header-content_bot">
				<?php require_once( __DIR__ . '/inc/header_menu_categories.php');?>
				<?php require_once( __DIR__ . '/inc/header_search.php');?>
				
				
			</div>
		</div>
	</div>
	<div class="mobile-menu" id="mobile-menu">
		<div class="mobile-menu__header">
			<?php require_once( __DIR__ . '/inc/header_mobile_logo.php');?>
			<?php require_once( __DIR__ . '/inc/header_mobile_hamburger.php');?>
		</div>
		<?php require_once( __DIR__ . '/inc/header_mobile_top_menu.php');?>
		<?php require_once( __DIR__ . '/inc/header_mobile_form.php');?>
	</div>
</header>