<?php
get_header();
the_post();
$fieldsArr = get_fields();
?>
<div>
    <?php custom_breadcrumbs([['url' => get_the_permalink(1767), 'title' => get_the_title(1767)]]);?>
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
                    <div class="w-blog-post-meta">

                        <span class="w-blog-post-meta-date date updated" itemprop="datePublished" datetime="2022-02-11 11:10:19"><?php echo date("d.m.Y", strtotime($post->post_date));?></span>
                    </div>

                    <?php the_content();?>
                
                </div>
            </section>
            
        </main>

        
    </div>
</div>


<?php
get_footer();

?>
