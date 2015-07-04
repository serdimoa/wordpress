<?php
/**
 * Template name: New Home (Variant 5)
 */


get_header();?>
    <section id="new-home-two" class="new-home-2 header-top-2 cf">
        <div class="leftbox cf">
            <?php get_sidebar('mainmenu'); ?>
        </div>
        <div class="new-home-2-top home-5-top-data cf">
            <div class="right_article">
                <div class="box-image">
                    <?php if(ale_get_meta('h5-photosession-image')){ ?>
                        <img src="<?php echo ale_get_meta('h5-photosession-image'); ?>" alt="<?php echo ale_get_meta('h5-photosession-title'); ?>" />
                    <?php } ?>
                </div>
                <div class="box-info cf">
                    <div class="box-title cf"><?php echo ale_get_meta('h5-photosession-title'); ?></div>
                    <div class="box-desc cf"><?php echo ale_get_meta('h5-photosession-desc'); ?></div>
                    <?php if(ale_get_meta('h5-photosession-link')){ ?>
                        <div class="box-link cf">
                            <a href="<?php echo ale_get_meta('h5-photosession-link'); ?>"><?php _e('Read More','aletheme'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="center_h5_slider">
                <div class="slider-home5">
                    <ul class="slides">
                        <?php $slider = ale_sliders_get_slider(ale_get_meta('new-hone5-slider'));  ?>
                        <?php if($slider):?>
                            <?php foreach ($slider['slides'] as $slide) : ?>
                                <li>
                                    <figure>
                                        <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
                                        <figcaption>
                                            <div class="slider-desc-box">
                                                <div class="title-box">
                                                    <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" >'; } ?>
                                                        <?php echo $slide['title']; ?>
                                                    <?php if($slide['url']){ echo '</a>'; } ?>
                                                </div>
                                                <div class="desc-box"><?php echo $slide['description']; ?></div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                            <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="new-home-1-content" class="cf">
        <?php if(ale_get_meta('h5-inspire-title')){ ?>
            <section class="collections-box our-team-box cf">
                <div class="galleriestitle cf"><?php echo ale_get_meta('h5-inspire-title'); ?></div>
                <div class="inspire-list cf" <?php if(ale_get_meta('h5-inspire-bg')){ echo 'style="background-image:url('.ale_get_meta('h5-inspire-bg').')"';} ?>>
                    <div class="section-left">
                        <div class="block-insp">
                            <div class="title-box"><?php echo ale_get_meta('h5-inspire-title1') ?></div>
                            <div class="desc-box"><?php echo ale_get_meta('h5-inspire-desc1') ?></div>
                        </div>
                        <div class="block-insp">
                            <div class="title-box"><?php echo ale_get_meta('h5-inspire-title3') ?></div>
                            <div class="desc-box"><?php echo ale_get_meta('h5-inspire-desc3') ?></div>
                        </div>
                    </div>
                    <div class="section-right">
                        <div class="block-insp">
                            <div class="title-box"><?php echo ale_get_meta('h5-inspire-title2') ?></div>
                            <div class="desc-box"><?php echo ale_get_meta('h5-inspire-desc2') ?></div>
                        </div>
                        <div class="block-insp">
                            <div class="title-box"><?php echo ale_get_meta('h5-inspire-title4') ?></div>
                            <div class="desc-box"><?php echo ale_get_meta('h5-inspire-desc4') ?></div>
                        </div>
                    </div>
                </div>
                <div class="bottom-popimages cf">
                    <div class="popup-gallery cf">
                        <?php if(ale_get_meta('h5-popimg-min1')) { ?>
                            <a href="<?php echo ale_get_meta('h5-popimg-max1') ?>"><img src="<?php echo ale_get_meta('h5-popimg-min1'); ?>" alt="" width="320" height="168"></a>
                        <?php } ?>
                        <?php if(ale_get_meta('h5-popimg-min2')) { ?>
                            <a href="<?php echo ale_get_meta('h5-popimg-max2') ?>"><img src="<?php echo ale_get_meta('h5-popimg-min2'); ?>" alt="" width="320" height="168"></a>
                        <?php } ?>
                        <?php if(ale_get_meta('h5-popimg-min3')) { ?>
                            <a href="<?php echo ale_get_meta('h5-popimg-max3') ?>"><img src="<?php echo ale_get_meta('h5-popimg-min3'); ?>" alt="" width="320" height="168"></a>
                        <?php } ?>
                        <?php if(ale_get_meta('h5-popimg-min4')) { ?>
                            <a href="<?php echo ale_get_meta('h5-popimg-max4') ?>"><img src="<?php echo ale_get_meta('h5-popimg-min4'); ?>" alt="" width="320" height="168"></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>

    </section>

    <section class="bottom-timeline cf">
        <div class="blog-items-conteiner cf">
            <?php query_posts('post_type=post&posts_per_page=6');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="line-post cf">
                    <div class="white-box-post cf">
                        <div class="title-box"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),25); ?></a></div>
                        <div class="cat-box"><?php the_category(', '); ?></div>
                        <div class="desc-box"><?php echo ale_truncate(get_the_excerpt(),95); ?></div>
                    </div>
                    <div class="time-box"><?php echo get_the_date(); ?></div>
                    <div class="point">
                        <div class="but"></div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </section>


<?php get_footer(); ?>