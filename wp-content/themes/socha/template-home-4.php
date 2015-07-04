<?php
/**
 * Template name: New Home (Variant 4)
 */


get_header();?>
    <section id="new-home-two" class="new-home-2 header-top-2 cf">
        <div class="leftbox cf">
            <?php get_sidebar('mainmenu'); ?>
        </div>
        <div class="new-home-2-top home-4-top-posts cf">
            <div class="posts-boxes">
                <?php query_posts('post_type=post&posts_per_page=4');
                $current_item = 0;
                if (have_posts()) : while (have_posts()) : the_post(); $current_item++;
                    if($current_item==1){ ?>
                        <div class="post-newhome-top post-one cf">
                            <div class="image-box">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-new-home'); ?></a>
                                <div class="mask">
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                            </div>
                            <div class="post-data-text">
                                <div class="title-post"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                                <div class="category-post"><?php the_category(', '); ?></div>
                                <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
                            </div>
                        </div>
                    <?php } elseif($current_item==2){?>
                        <div class="post-newhome-top post-two cf">
                            <div class="post-data-twobox">
                                <div class="post-data-text">
                                    <div class="title-post"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                                    <div class="category-post"><?php the_category(', '); ?></div>
                                    <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
                                </div>
                            </div>
                            <div class="image-box">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-new-home'); ?></a>
                                <div class="mask">
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                            </div>

                        </div>
                    <?php } elseif($current_item==3){ ?>
                        <div class="post-newhome-top post-three cf">
                            <div class="image-box">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-new-home'); ?></a>
                                <div class="mask">
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                            </div>
                            <div class="post-data-text">
                                <div class="title-post"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                                <div class="category-post"><?php the_category(', '); ?></div>
                                <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
                            </div>
                        </div>
                    <?php } elseif($current_item==4){ ?>
                        <div class="post-newhome-top post-four cf">
                            <div class="post-data-text">
                                <div class="title-post"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                                <div class="category-post"><?php the_category(', '); ?></div>
                                <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
                            </div>
                            <div class="image-box">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-new-home'); ?></a>
                                <div class="mask">
                                    <a href="<?php the_permalink(); ?>"></a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="mobile-posts-list cf">
                <?php query_posts('post_type=post&posts_per_page=4');
                if (have_posts()) : while (have_posts()) : the_post();  ?>
                    <div class="mobile-post cf">
                        <div class="image-box">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-new-home'); ?></a>
                            <div class="mask">
                                <a href="<?php the_permalink(); ?>"></a>
                            </div>
                        </div>
                        <div class="post-data-twobox">
                            <div class="post-data-text">
                                <div class="title-post"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a></div>
                                <div class="category-post"><?php the_category(', '); ?></div>
                                <div class="desc-post"><?php echo ale_truncate(get_the_excerpt(),110); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
    </div>
    </section>

    <section id="new-home-1-content" class="cf">
        <?php if(ale_get_meta('h4-adventures-title')){ ?>
            <section class="collections-box adventures-box cf">
                <div class="galleriestitle cf"><?php echo ale_get_meta('h4-adventures-title'); ?></div>
                <div class="map-adv-conteiner cf">
                    <div class="half-box">
                        <?php echo do_shortcode('[ale_map address="'.ale_get_meta('h4-adventures-address').'" width="100%" height="605px"]'); ?>
                    </div>
                    <div class="half-box">
                        <div class="info-adv" <?php if(ale_get_meta('h4-adventures-bg')){ echo 'style="background-image:url('.ale_get_meta('h4-adventures-bg').');"';} ?>>
                            <div class="info-title"><?php echo ale_get_meta('h4-adventures-infotitle'); ?></div>
                            <div class="info-desc"><?php echo ale_get_meta('h4-adventures-infodesc'); ?></div>
                            <?php if(ale_get_meta('h4-adventures-infolink')){?>
                                <div class="info-link">
                                    <a href="<?php echo ale_get_meta('h4-adventures-infolink'); ?>"><?php _e('Read More','aletheme'); ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } if(ale_get_meta('h4-team-title')){?>
            <section class="collections-box our-team-box cf">
                <div class="galleriestitle cf"><?php echo ale_get_meta('h4-team-title'); ?></div>
                <div class="list-team cf">
                    <?php if(ale_get_meta('h4-team-photo1')){ ?>
                        <div class="item-member">
                            <div class="photo-box"><img src="<?php echo ale_get_meta('h4-team-photo1'); ?>" alt="<?php echo ale_get_meta('h4-team-name1'); ?>" /> </div>
                            <div class="name-box"><?php echo ale_get_meta('h4-team-name1'); ?></div>
                            <div class="type-box"><?php echo ale_get_meta('h4-team-type1'); ?></div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('h4-team-photo2')){ ?>
                        <div class="item-member">
                            <div class="photo-box"><img src="<?php echo ale_get_meta('h4-team-photo2'); ?>" alt="<?php echo ale_get_meta('h4-team-name2'); ?>" /> </div>
                            <div class="name-box"><?php echo ale_get_meta('h4-team-name2'); ?></div>
                            <div class="type-box"><?php echo ale_get_meta('h4-team-type2'); ?></div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('h4-team-photo3')){ ?>
                        <div class="item-member">
                            <div class="photo-box"><img src="<?php echo ale_get_meta('h4-team-photo3'); ?>" alt="<?php echo ale_get_meta('h4-team-name3'); ?>" /> </div>
                            <div class="name-box"><?php echo ale_get_meta('h4-team-name3'); ?></div>
                            <div class="type-box"><?php echo ale_get_meta('h4-team-type3'); ?></div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('h4-team-photo4')){ ?>
                        <div class="item-member">
                            <div class="photo-box"><img src="<?php echo ale_get_meta('h4-team-photo4'); ?>" alt="<?php echo ale_get_meta('h4-team-name4'); ?>" /> </div>
                            <div class="name-box"><?php echo ale_get_meta('h4-team-name4'); ?></div>
                            <div class="type-box"><?php echo ale_get_meta('h4-team-type4'); ?></div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('h4-team-photo5')){ ?>
                        <div class="item-member">
                            <div class="photo-box"><img src="<?php echo ale_get_meta('h4-team-photo5'); ?>" alt="<?php echo ale_get_meta('h4-team-name5'); ?>" /> </div>
                            <div class="name-box"><?php echo ale_get_meta('h4-team-name5'); ?></div>
                            <div class="type-box"><?php echo ale_get_meta('h4-team-type5'); ?></div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </section>


<?php get_footer(); ?>