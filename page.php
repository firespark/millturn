<?php
get_header();
the_post();
$fieldsArr = get_fields();
?>
<div>
    <?php custom_breadcrumbs();?>
    <div class="contact-title">
        <div class="max-width">
            <h1 itemprop="headline"><?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?></h1>
        </div>
    </div>
</div>

<div class="l-main">

    <div class="l-main-h i-cf">

        <main class="l-content" itemprop="mainContentOfPage">

            
            <section class="l-section">
                <div class="l-section-h i-cf">
                    <?php the_content();?>
                
                </div>
            </section>
            
        </main>

        
    </div>
</div>


<?php
get_footer();

?>
