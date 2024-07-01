<?php
/*
    Template Name: About

*/

get_header();
the_post();
$fieldsArr = get_fields();

?>

<div class="about-section section"  itemprop="mainContentOfPage">

    <?php custom_breadcrumbs();?>
    <div class="title-bg-wrapper">
        <h1 class="about-title">
            <span class="text-bg">
                <?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?>
            </span>
        </h1>
    </div>
</div>
<div class="about-content section">
    <div class="max-width">
        <?php the_content();?>

    </div>
</div>


<?php
get_post_modules($fieldsArr['page_modules']);

get_footer();

?>
