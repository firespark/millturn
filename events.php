<?php
/*
    Template Name: Events

*/

get_header();
the_post();
$fieldsArr = get_fields();


$results_per_page = get_option('posts_per_page');
$paged = ( isset($_GET['show']) ) ? $_GET['show'] : 1;

$total_posts = $wpdb->get_var("SELECT COUNT(*) FROM " . $wpdb->prefix. "posts WHERE post_type = 'events' AND post_status = 'publish'");
$total_pages = ceil($total_posts/$results_per_page);

$posts_args = [
    'posts_per_page' => $results_per_page,
    'paged' => $paged,
    'post_type' => 'events'
                         
];

$events = get_posts($posts_args);

?>


<div size_medium="" color_alternate="">
    <?php custom_breadcrumbs();?>
    <div class="contact-title">
        <div class="max-width">
            <h1 itemprop="headline"><?php echo ($fieldsArr['main_h1']) ? $fieldsArr['main_h1'] : $post->post_title;?></h1>
        </div>
    </div>
</div>

<div class="posts-content section">
    <div class="max-width"></div>
    <div class="max-width posts">
        <?php if(!empty($events)):?>
        <?php foreach ($events as $event):?>
        <div class="post">
            <a href="<?php echo get_the_permalink($event->ID);?>" class="post-link">
                <div class="post-thumb">
                    <?php echo get_the_post_thumbnail( $event->ID );?>
                </div>
                <div class="post-date">
                    <span><?php echo date("d.m.Y", strtotime($event->post_date));?></span>
                </div>
                <h2 class="post-title">
                    <?php echo $event->post_title;?>
                </h2>
            </a>
            <div class="post-excerpt">
                <?php echo get_field('event_description', $event->ID);?>
            </div>
        </div>
        <?php endforeach;?>
        
        <?php endif;?>

        <div class="front-subtitle front-subtitle__category">
            <div class="pagination">
                <?php
                if (function_exists('custom_pagination')) {
                    custom_pagination($total_pages,"",$paged);
                }
                ?>
            </div>
            <div class="term-description">
                <?php the_content();?>
            </div>
        </div>                  
    </div>

</div>

<?php
get_post_modules($fieldsArr['page_modules']);

get_footer();

?>
