<?php
/**
 * Template Name: New Gallery 3
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

                    <div class="new-gallery-3 cf">
                        <?php $gal_item_count=0; if (have_posts()) : while (have_posts()) : the_post(); $gal_item_count++; ?>
                            <?php if($gal_item_count==1 or $gal_item_count==4 or $gal_item_count==7){?>
                                <div class="item-col big-item">
                                    <figure>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if(get_the_post_thumbnail($post->ID)){
                                                echo get_the_post_thumbnail($post->ID,'gallery-bigitemthumb');
                                            } else {
                                                echo '<img src="http://placehold.it/1032x370&text=No+Thumb" alt="'.get_the_title().'" />';
                                            } ?>
                                        </a>
                                        <figcaption class="mask-text cf">
                                            <div class="mask-title title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),25); ?></a></div>
                                            <div class="mask-cat title">
                                                <?php
                                                $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
                                                if($current_category) {
                                                    foreach($current_category as $curcat){
                                                        echo $curcat->name.' ';
                                                    }
                                                } ?>
                                            </div>
                                            <div class="mask-desc"><?php echo ale_truncate(get_the_excerpt(),120); ?></div>
                                        </figcaption>
                                        <div class="link-box">
                                            <a href="<?php the_permalink(); ?>"></a>
                                        </div>
                                    </figure>
                                </div>
                            <?php } else { ?>
                                <div class="item-col small-item">
                                    <figure>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if(get_the_post_thumbnail($post->ID)){
                                                echo get_the_post_thumbnail($post->ID,'gallery-smallitemthumb');
                                            } else {
                                                echo '<img src="http://placehold.it/505x370&text=No+Thumb" alt="'.get_the_title().'" />';
                                            } ?>
                                        </a>
                                        <figcaption class="mask-text">
                                            <div class="mask-title title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),25); ?></a></div>
                                            <div class="mask-cat title">
                                                <?php
                                                $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
                                                if($current_category) {
                                                    foreach($current_category as $curcat){
                                                        echo $curcat->name.' ';
                                                    }
                                                } ?>
                                            </div>
                                        </figcaption>
                                        <div class="link-box">
                                            <a href="<?php the_permalink(); ?>"></a>
                                        </div>
                                    </figure>
                                </div>
                            <?php } ?>
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