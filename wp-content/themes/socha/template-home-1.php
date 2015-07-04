<?php
/**
 * Template name: New Home (Variant 1)
 */

get_header();?>
<section id="new-home-one" class="new-home-1 header-top-1 cf">
    <div class="new-home-1-slider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_meta('new-hone-slider'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li>
                        <figure>
                            <?php if ($slide['image']) : ?>
                                <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" width="1050" height="555" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                            <?php endif; ?>
                            <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?>
                                <figcaption>
                                    <?php if($slide['title']){ echo '<div class="mainslidertitle">'.$slide['title'].'</div>'; } ?>
                                    <div class="mainsliderdescription cf">
                                        <?php if($slide['description']){ echo $slide['description']; } ?>
                                        <?php if($slide['html'] and $slide['description']){ echo '<br />'; } ?>
                                        <?php if($slide['html']){ echo $slide['html']; } ?>
                                    </div>
                                    <div class="cf sliderlinkmore">
                                        <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'.__('Read More','aletheme').'</a>'; } ?>
                                    </div>
                                </figcaption><?php } ?>
                        </figure>
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
        <div class="leftbox">
            <?php get_sidebar('mainmenu'); ?>
        </div>
    </div>
</section>

<section id="new-home-1-content" class="cf">
    <aside class="left-sidebar cf">
        <ul class="sidebarul">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left-home-sidebar') ) : endif; ?>
        </ul>
    </aside>
    <section class="home-one-content cf">
        <div class="center-section cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="story cf">
                    <?php if(ale_get_meta('home1-subtitle')){?>
                        <div class="sub-title">
                            <?php echo ale_get_meta('home1-subtitle'); ?>
                        </div>
                    <?php }
                    if(ale_get_meta('home1-title')){ ?>
                        <div class="home-title">
                            <?php echo ale_get_meta('home1-title'); ?>
                        </div>
                    <?php } ?>
                    <?php the_content();?>
                </section>

                <section class="three-boxes cf">
                    <div class="col-item-3">
                        <div class="box-contener">
                            <div class="icon-line">
                                <div class="icon-1"></div>
                            </div>
                            <div class="title-box">
                                <?php echo ale_get_meta('ho1-box-title1'); ?>
                            </div>
                            <div class="descr-box">
                                <?php echo ale_get_meta('ho1-box-desc1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-item-3">
                        <div class="box-contener">
                            <div class="icon-line">
                                <div class="icon-2"></div>
                            </div>
                            <div class="title-box">
                                <?php echo ale_get_meta('ho1-box-title2'); ?>
                            </div>
                            <div class="descr-box">
                                <?php echo ale_get_meta('ho1-box-desc2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-item-3">
                        <div class="box-contener">
                            <div class="icon-line">
                                <div class="icon-3"></div>
                            </div>
                            <div class="title-box">
                                <?php echo ale_get_meta('ho1-box-title3'); ?>
                            </div>
                            <div class="descr-box">
                                <?php echo ale_get_meta('ho1-box-desc3'); ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bottom-about-descr cf">
                    <?php if(ale_get_meta('bottom-photo-link')){ ?>
                    <div class="photo-about">
                        <img src="<?php echo ale_get_meta('bottom-photo-link'); ?>" alt="<?php echo ale_get_meta('bottom-about-title'); ?>" />
                    </div>
                    <?php } ?>
                    <div class="bottom-content-about">
                        <div class="about-box-conteiner">
                            <div class="box-title">
                                <?php echo ale_get_meta('bottom-about-title'); ?>
                            </div>
                            <div class="box-desc cf">
                                <?php echo ale_get_meta('bottom-about-desc'); ?>
                            </div>
                            <?php if(ale_get_meta('bottom-about-link')){?>
                                <div class="read-more-but cf">
                                    <a href="<?php echo ale_get_meta('bottom-about-link'); ?>"><?php _e('Read More','aletheme'); ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
        </div>
    </section>
</section>


<?php get_footer(); ?>