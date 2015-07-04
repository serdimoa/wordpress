<?php
/**
 * Template name: Blog Full Width Centered
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
                <div class="pagelayout gallerygrid cf">
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

                    <div class="blogpost fullwidth cf">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="itemblog">
                                <?php if(get_the_post_thumbnail($post->ID)){?>
                                    <figure>
                                        <?php echo get_the_post_thumbnail($post->ID,'post-fullwidth'); ?>
                                    </figure>
                                <?php } ?>
                                <div class="itemboxwhite centeredpost cf">
                                    <div class="newtitle"><h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2></div>
                                    <div class="newdate"><span class="datebox"><?php echo get_the_date(); ?></span></div>
                                    <div class="newexcerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="bottomblogitem cf">
                                        <div class="leftdatablog">
                                            <?php echo get_comments_number(); ?> <?php _e('comments', 'aletheme')?> / <?php if(get_post_meta($post->ID, "votes_count", true)==""){ echo "0";} else { echo get_post_meta($post->ID, "votes_count", true);};?> <?php _e('votes', 'aletheme')?>
                                        </div>
                                        <div class="readmoreblog">
                                            <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'aletheme')?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                            <?php ale_part('notfound')?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cf"></div>
    </section>

<?php get_footer(); ?>