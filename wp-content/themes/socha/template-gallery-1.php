<?php
/**
 * Template Name: New Gallery 1
 */
get_header();
//Set the page ID
$gallery_page_id = $post->ID;
?>
    <section class="singlepage">
        <div class="leftside">
            <?php get_sidebar('mainmenu'); ?>
            <?php if(ale_get_option('leftsidebargallery')==1){ include 'templates/sidebar-gallery.php'; } ?>
        </div>
        <?php if(ale_get_option('rightsidebargallery')==1){ ?>
            <div class="rightsidebar">
                <?php include 'templates/sidebar-right-gallery.php'; ?>
            </div>
        <?php } ?>
        <div class="rightside <?php if(ale_get_option('rightsidebargallery')==1){ echo 'centerside'; } ?>">
            <div class="margincontentbox">
                <div class="pagelayout gallerygrid <?php if(ale_get_meta('galcolumnsnumpag','true',$gallery_page_id)=='twocol') { echo 'gallerytwo';} elseif(ale_get_meta('galcolumnsnumpag','true',$gallery_page_id)=='threecol'){ echo 'gallerythree';} elseif(ale_get_meta('galcolumnsnumpag','true',$gallery_page_id)=='fourcol') { echo 'galleryfour';}?> cf">

                    <?php
                    if(ale_get_meta('itemgalcategory')){
                        $termname = get_term(ale_get_meta('itemgalcategory'),'gallery-category');
                        $postscatshow = '&gallery-category='.$termname->name;
                    } else { $postscatshow =''; }

                    query_posts('&post_type=gallery&orderby=menu_order date&order=DESC'.$postscatshow.'&posts_per_page='.ale_get_meta('itemgalpage','true',$gallery_page_id).'&paged='.$paged); ?>
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

                    <div class="new-gallery-1 three-boxes-cont cf">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="item-col-3">
                                <figure>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if(get_the_post_thumbnail($post->ID)){
                                            echo get_the_post_thumbnail($post->ID,'gallery-newthumb');
                                        } else {
                                            echo '<img src="http://placehold.it/344x555&text=No+Thumb" alt="'.get_the_title().'" />';
                                        } ?>
                                    </a>
                                    <div class="link-box">
                                        <a href="<?php the_permalink(); ?>"></a>
                                        <figcaption class="mask-text">
                                            <div class="mask-title"><?php echo ale_truncate(get_the_title(),15); ?></div>
                                            <div class="mask-desc"><?php echo ale_truncate(get_the_excerpt(),40); ?></div>
                                        </figcaption>
                                    </div>

                                </figure>
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