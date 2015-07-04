<?php
/**
 * Template name: New Home (Variant 3)
 */


get_header();?>
    <div class="new-home-3-slider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_meta('new-hone3-slider'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li <?php if($slide['image']){ echo 'style="background-image:url('.$slide['image'].');"'; } ?>></li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
    </div>

    <div class="boxes-home-three">
        <section id="new-home-two" class="new-home-2 header-top-2 cf">
            <div class="leftbox cf">
                <?php get_sidebar('mainmenu'); ?>
            </div>
            <div class="new-home-2-top cf">
                <div class="home-3-syncbox">
                    <div class="new-home-3-slider-sync">
                        <ul class="slides">
                            <?php $slider = ale_sliders_get_slider(ale_get_meta('new-hone3-slider'));  ?>
                            <?php if($slider):?>
                                <?php foreach ($slider['slides'] as $slide) : ?>
                                    <li>
                                        <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?>
                                    <div class="home-3-sliderdata">
                                        <?php if($slide['html']){ echo '<div class="sliderhtml">'.$slide['html'].'</div>'; } ?>
                                        <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" target="_blank">'; } ?>
                                            <?php if($slide['title']){ echo '<div class="slidertitle">'.$slide['title'].'</div>'; } ?>
                                        <?php if($slide['url']){ echo '</a>'; } ?>
                                        <?php if($slide['description']){ echo '<div class="sliderdesc">'.$slide['description'].'</div>'; } ?>
                                    </div>
                                <?php }  ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="new-home-1-content" class="home-3-destinations cf">
            <div class="inspirations-box-home3 cf" <?php if(ale_get_meta('h3-ins-bg')){ echo 'style="background: url('.ale_get_meta('h3-ins-bg').') center center no-repeat;"';} ?>>
                <div class="ins-slider-conteiner">
                    <div class="ins-home3-slider">
                        <ul class="slides">
                            <?php $slider_count = 3;
                            if(ale_get_meta('h3-ins-slider-count')){
                                $slider_count = ale_get_meta('h3-ins-slider-count');
                            }
                            query_posts('post_type=inspiration&posts_per_page='.$slider_count);

                            if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li>
                                <div class="ins-title"><?php echo ale_truncate(get_the_title(),40); ?></div>
                                <div class="ins-desc"><?php echo ale_truncate(get_the_excerpt(),280); ?></div>
                                <div class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Read More','aletheme'); ?></a></div>
                                <?php if(ale_get_meta('ins-map-icon')){ ?><div class="map-icon"><img src="<?php echo ale_get_meta('ins-map-icon'); ?>" alt="<?php the_title(); ?>" /></div><?php } ?>
                                </li>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="new-home-two" class="cf">
        <?php if(ale_get_meta('h3-subscribe-option')=='on'){ ?>
            <div class="subscribe-plugin-box">
                <div class="form-desc">
                    <?php _e('Subscribe','aletheme'); ?><br />
                    <?php _e('To Our Newsletter','aletheme'); ?>
                </div>
                <div class="form-conteiner">
                    <?php echo do_shortcode('[mc4wp_form]'); ?>
                </div>
            </div>
        <?php } ?>
        <?php if(ale_get_meta('h3-partners-title')){ ?>
            <section class="collections-box partners-home3 cf">
                <div class="galleriestitle"><?php echo ale_get_meta('h3-partners-title'); ?></div>
                <div class="partners-items-h3">
                    <?php if(ale_get_meta('h3-partner-1img')){?>
                        <?php if(ale_get_meta('h3-partner-1link')){ echo '<a href="'.ale_get_meta('h3-partner-1link').'" target="_blank">';} ?>
                            <img src="<?php echo ale_get_meta('h3-partner-1img'); ?>" alt=""/>
                        <?php if(ale_get_meta('h3-partner-1link')){ echo '</a>';} ?>
                    <?php } ?>

                    <?php if(ale_get_meta('h3-partner-2img')){?>
                        <?php if(ale_get_meta('h3-partner-2link')){ echo '<a href="'.ale_get_meta('h3-partner-2link').'" target="_blank">';} ?>
                        <img src="<?php echo ale_get_meta('h3-partner-2img'); ?>" alt=""/>
                        <?php if(ale_get_meta('h3-partner-2link')){ echo '</a>';} ?>
                    <?php } ?>

                    <?php if(ale_get_meta('h3-partner-3img')){?>
                        <?php if(ale_get_meta('h3-partner-3link')){ echo '<a href="'.ale_get_meta('h3-partner-3link').'" target="_blank">';} ?>
                        <img src="<?php echo ale_get_meta('h3-partner-3img'); ?>" alt=""/>
                        <?php if(ale_get_meta('h3-partner-3link')){ echo '</a>';} ?>
                    <?php } ?>

                    <?php if(ale_get_meta('h3-partner-4img')){?>
                        <?php if(ale_get_meta('h3-partner-4link')){ echo '<a href="'.ale_get_meta('h3-partner-4link').'" target="_blank">';} ?>
                        <img src="<?php echo ale_get_meta('h3-partner-4img'); ?>" alt=""/>
                        <?php if(ale_get_meta('h3-partner-4link')){ echo '</a>';} ?>
                    <?php } ?>

                    <?php if(ale_get_meta('h3-partner-5img')){?>
                        <?php if(ale_get_meta('h3-partner-5link')){ echo '<a href="'.ale_get_meta('h3-partner-5link').'" target="_blank">';} ?>
                        <img src="<?php echo ale_get_meta('h3-partner-5img'); ?>" alt=""/>
                        <?php if(ale_get_meta('h3-partner-5link')){ echo '</a>';} ?>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </section>




<?php get_footer(); ?>