<?php
/**
 * Template name: New Blog 2
 */

get_header();
//Set the page ID
$blog_page_id = $post->ID;
?>
    <section class="singlepage">
        <div class="leftside">
            <?php get_sidebar('mainmenu'); ?>
            <?php if(ale_get_option('leftsidebarblog')==1){ get_sidebar(); } ?>
        </div>
        <?php if(ale_get_option('rightsidebarblog')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-blog.php'; ?>
            </div>
        <?php } ?>
        <div class="rightside <?php if(ale_get_option('rightsidebarblog')==1){ echo 'centerside'; } ?>">
            <div class="margincontentbox">
                <div class="pagelayout new-blog-2 cf">
                    <?php
                    if(ale_get_meta('itemblogcategory')){ $showcategoriesitems = '&cat='.ale_get_meta('itemblogcategory'); } else { $showcategoriesitems =''; }
                    query_posts('&post_type=post'.$showcategoriesitems.'&posts_per_page='.ale_get_meta('itemblogpage','true',$blog_page_id).'&paged='.$paged); ?>
                    <header class="page-title">
                        <h2 class="a"><?php the_title(); ?></h2>
                        <div class="toppagination">
                            <div class="pagpages">
                                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                                <?php echo $paged; ?> of <?php echo $wp_query->max_num_pages; ?>
                            </div>
                            <div class="paglinks">
                                <?php posts_nav_link(' / ',__('NEWER'),__('OLDER')); ?>
                            </div>
                        </div>
                    </header>

                    <div class="blog-list fullwidth cf">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            ale_part('new-blog-2');
                        endwhile; else:
                            ale_part('notfound');
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cf"></div>
    </section>

<?php get_footer(); ?>