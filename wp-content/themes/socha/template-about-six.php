<?php
/**
 * Template name: Template About 6
 */
get_header(); ?>
    <section class="singlepage cf">
        <div class="leftside cf">
            <?php get_sidebar('mainmenu'); ?>

            <aside class="left-sidebar sidebar margin-top-25 cf">
                <ul class="sidebarul">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left-sidebar-template') ) : endif; ?>
                </ul>
            </aside>
        </div>
        <div class="rightside cf">
            <div class="margincontentbox cf">
                <header class="page-title">
                    <h2 class="a"><?php the_title(); ?></h2>
                </header>
                <div class="about-5 about-6 content cf">
                    <div class="subtitle title">
                        <?php echo ale_get_meta('about-6-subtitle'); ?>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="about-content-box cf">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif; ?>
                    <div class="three-top-boxes cf">
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-6box-icon1')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-6box-icon1'); ?>" alt="<?php echo ale_get_meta('about-6box-title1'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title">
                                    <?php if(ale_get_meta('about-6box-link1')){ echo '<a href="'.ale_get_meta('about-6box-link1').'">'; } ?>
                                    <?php echo ale_get_meta('about-6box-title1'); ?>
                                    <?php if(ale_get_meta('about-6box-link1')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-6box-desc1'); ?></div>
                            </div>
                        </div>
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-6box-icon2')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-6box-icon2'); ?>" alt="<?php echo ale_get_meta('about-6box-title2'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title">
                                    <?php if(ale_get_meta('about-6box-link2')){ echo '<a href="'.ale_get_meta('about-6box-link2').'">'; } ?>
                                    <?php echo ale_get_meta('about-6box-title2'); ?>
                                    <?php if(ale_get_meta('about-6box-link2')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-6box-desc2'); ?></div>
                            </div>
                        </div>
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-6box-icon3')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-6box-icon3'); ?>" alt="<?php echo ale_get_meta('about-3box-title3'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title"><?php if(ale_get_meta('about-6box-link3')){ echo '<a href="'.ale_get_meta('about-6box-link3').'">'; } ?>
                                    <?php echo ale_get_meta('about-6box-title3'); ?>
                                    <?php if(ale_get_meta('about-6box-link3')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-6box-desc3'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php if(ale_get_meta('about-6box-mapimage')){ ?>
                        <div class="about-map-image">
                            <img src="<?php echo ale_get_meta('about-6box-mapimage'); ?>" alt="<?php the_title(); ?>" />
                        </div>
                    <?php } ?>

                    <div class="two-places-box cf">
                        <div class="half-box">
                            <div class="place-item cf">
                                <?php if(ale_get_meta('about-6place-image1')){ ?>
                                    <img src="<?php echo ale_get_meta('about-6place-image1'); ?>" alt="" />
                                <?php } ?>
                                <div class="title"><?php echo ale_get_meta('about-6place-title1'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-6place-desc1'); ?></div>
                                <div class="toggle-box">
                                    <?php if(ale_get_meta('about-6place-togle1-title')){?>
                                        <div class="toggle-title toggle1">
                                            <div class="toggle-head"><span class="go-but"></span> <?php echo ale_get_meta('about-6place-togle1-title'); ?></div>
                                            <div class="toggle-body"><?php echo ale_get_meta('about-6place-togle1-desc'); ?></div>
                                        </div>
                                    <?php } ?>
                                    <?php if(ale_get_meta('about-6place-togle2-title')){?>
                                        <div class="toggle-title toggle2">
                                            <div class="toggle-head"><span class="go-but"></span> <?php echo ale_get_meta('about-6place-togle2-title'); ?></div>
                                            <div class="toggle-body"><?php echo ale_get_meta('about-6place-togle2-desc'); ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="half-box">
                            <div class="place-item cf">
                                <?php if(ale_get_meta('about-6place-image2')){ ?>
                                    <img src="<?php echo ale_get_meta('about-6place-image2'); ?>" alt="" />
                                <?php } ?>
                                <div class="title"><?php echo ale_get_meta('about-6place-title2'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-6place-desc2'); ?></div>
                                <div class="toggle-box">
                                    <?php if(ale_get_meta('about-6place-togle3-title')){?>
                                        <div class="toggle-title toggle1">
                                            <div class="toggle-head"><span class="go-but"></span> <?php echo ale_get_meta('about-6place-togle3-title'); ?></div>
                                            <div class="toggle-body"><?php echo ale_get_meta('about-6place-togle3-desc'); ?></div>
                                        </div>
                                    <?php } ?>
                                    <?php if(ale_get_meta('about-6place-togle4-title')){?>
                                        <div class="toggle-title toggle2">
                                            <div class="toggle-head"><span class="go-but"></span> <?php echo ale_get_meta('about-6place-togle4-title'); ?></div>
                                            <div class="toggle-body"><?php echo ale_get_meta('about-6place-togle4-desc'); ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(ale_get_meta('about-6partner-title')){ ?>
                        <section class="collections-box partners-home3 cf">
                            <div class="galleriestitle"><?php echo ale_get_meta('about-6partner-title'); ?></div>
                            <div class="partners-description">
                                <?php echo ale_get_meta('about-6partner-desc'); ?>
                            </div>
                            <div class="partners-items-h3">
                                <?php if(ale_get_meta('about-6partner-image1')){?>
                                    <?php if(ale_get_meta('about-6partner-link1')){ echo '<a href="'.ale_get_meta('about-6partner-link1').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-6partner-image1'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-6partner-link1')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-6partner-image2')){?>
                                    <?php if(ale_get_meta('about-6partner-link2')){ echo '<a href="'.ale_get_meta('about-6partner-link2').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-6partner-image2'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-6partner-link2')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-6partner-image3')){?>
                                    <?php if(ale_get_meta('about-6partner-link3')){ echo '<a href="'.ale_get_meta('about-6partner-link3').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-6partner-image3'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-6partner-link3')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-6partner-image4')){?>
                                    <?php if(ale_get_meta('about-6partner-link4')){ echo '<a href="'.ale_get_meta('about-6partner-link4').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-6partner-image4'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-6partner-link4')){ echo '</a>';} ?>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>