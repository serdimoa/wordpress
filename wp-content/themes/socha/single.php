<?php get_header(); ?>
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
            <?php if(ale_get_option('topblogbox')==1){ ?>
            <div class="postnavigation cf">
                <div class="categoriesbox">
                    <div class="title"><?php _e('BLOG CATEGORIES', 'aletheme')?>:</div>
                    <div class="scrollcategory">
                        <ul class="categorieslist">
                            <?php
                                $catlist = get_categories();

                                echo '<li><a href="'.home_url().'/blog" >'.__('All').'</a></li>';
                                foreach($catlist as $cat){
                                    echo '<li><a href="'.get_category_link( $cat->term_id ).'">'.$cat->cat_name.'</a></li>';
                                }
                            ?>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="reachsinglbox">
                    <div class="title"><?php _e('SEARCH THE BLOG', 'aletheme')?>:</div>
                    <div class="searchform">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <?php } else { echo "<br />"; } ?>
            <div id="post" class="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php ale_part('posthead');?>
                    <?php ale_part('postpreview' );?>
                    <?php ale_part('postfull');?>
                    <?php ale_part('postfooter');?>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
            <?php ale_part('archives'); ?>
        </div>
    </div>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>