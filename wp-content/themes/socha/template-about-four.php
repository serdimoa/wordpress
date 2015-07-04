<?php
/**
 * Template name: Template About 4
 */
get_header(); ?>
<div class="about-page-style4">
    <?php if(ale_get_meta('a4-bg-option')=="on"){ ?><div class="bg-about-4"></div><?php } ?>
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
                <div class="about-4 content cf">
                    <div class="vidoe-section-about cf">
                        <div class="half-box left">
                            <div class="video-embed-box" <?php if(ale_get_meta('a4-video-image')){ echo 'style="background:url('.ale_get_meta('a4-video-image').') center center;"';} else { echo 'style="background:#000;"';} ?>>
                                <div class="open-video">
                                    <a class="popup-video" href="<?php echo ale_get_meta('a4-video-link'); ?>"></a>
                                </div>
                                <div class="video-text">
                                    <span class="title-video"><?php echo ale_get_meta('a4-video-title'); ?></span><br />
                                    <?php echo ale_get_meta('a4-video-desc'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="half-box right">
                            <div class="presentation-box cf <?php if(ale_get_meta('a4-bg-option')=="on"){ ?>white-color<?php } ?>">
                                <div class="subtitle title"><?php echo ale_get_meta('a4-videopre-subtitle'); ?></div>
                                <div class="pre-title title"><?php echo ale_get_meta('a4-videopre-title'); ?></div>
                                <div class="divider-line"></div>
                                <div class="text-conteiner">
                                    <div class="column1">
                                        <?php echo ale_get_meta('a4-videopre-text1'); ?>
                                    </div>
                                    <div class="column2">
                                        <?php echo ale_get_meta('a4-videopre-text2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if(ale_get_meta('about-4partner-title')){ ?>
                        <section class="collections-box partners-home3 cf">
                            <div class="galleriestitle"><?php echo ale_get_meta('about-4partner-title'); ?></div>
                            <div class="partners-description">
                                <?php echo ale_get_meta('about-4partner-desc'); ?>
                            </div>
                            <div class="partners-items-h3">
                                <?php if(ale_get_meta('about-4partner-image1')){?>
                                    <?php if(ale_get_meta('about-4partner-link1')){ echo '<a href="'.ale_get_meta('about-4partner-link1').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-4partner-image1'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-4partner-link1')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-4partner-image2')){?>
                                    <?php if(ale_get_meta('about-4partner-link2')){ echo '<a href="'.ale_get_meta('about-4partner-link2').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-4partner-image2'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-4partner-link2')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-4partner-image3')){?>
                                    <?php if(ale_get_meta('about-4partner-link3')){ echo '<a href="'.ale_get_meta('about-4partner-link3').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-4partner-image3'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-4partner-link3')){ echo '</a>';} ?>
                                <?php } ?>

                                <?php if(ale_get_meta('about-4partner-image4')){?>
                                    <?php if(ale_get_meta('about-4partner-link4')){ echo '<a href="'.ale_get_meta('about-4partner-link4').'" target="_blank">';} ?>
                                    <img src="<?php echo ale_get_meta('about-4partner-image4'); ?>" alt=""/>
                                    <?php if(ale_get_meta('about-4partner-link4')){ echo '</a>';} ?>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>

                    <section class="about-4-toggles cf">
                        <div class="toggle-subtitle title"><?php echo ale_get_meta('about-4toggle-subtitle'); ?></div>
                        <div class="toggle-sec cf">
                            <div class="half-box">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div class="text-conteiner"><?php the_content(); ?></div>
                                <?php endwhile; endif; ?>
                            </div>
                            <div class="half-box">
                                <div  class="toggles-conteiner">
                                    <?php if(ale_get_meta('about-4toggle-image')){ ?>
                                        <img src="<?php echo ale_get_meta('about-4toggle-image'); ?>" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                    <div class="toggles-list">
                                        <?php if(ale_get_meta('about-4toggle-title1')){?>
                                            <div class="toggle-title toggle1">
                                                <div class="toggle-head"><span class="go-but toggle-with-nav">-</span> <?php echo ale_get_meta('about-4toggle-title1'); ?></div>
                                                <div class="toggle-body"><?php echo ale_get_meta('about-4toggle-desc1'); ?></div>
                                            </div>
                                        <?php } ?>
                                        <?php if(ale_get_meta('about-4toggle-title2')){?>
                                            <div class="toggle-title toggle1">
                                                <div class="toggle-head"><span class="go-but toggle-with-nav">+</span> <?php echo ale_get_meta('about-4toggle-title2'); ?></div>
                                                <div class="toggle-body"><?php echo ale_get_meta('about-4toggle-desc2'); ?></div>
                                            </div>
                                        <?php } ?>
                                        <?php if(ale_get_meta('about-4toggle-title3')){?>
                                            <div class="toggle-title toggle1">
                                                <div class="toggle-head"><span class="go-but toggle-with-nav">+</span> <?php echo ale_get_meta('about-4toggle-title3'); ?></div>
                                                <div class="toggle-body"><?php echo ale_get_meta('about-4toggle-desc3'); ?></div>
                                            </div>
                                        <?php } ?>
                                        <?php if(ale_get_meta('about-4toggle-title4')){?>
                                            <div class="toggle-title toggle1">
                                                <div class="toggle-head"><span class="go-but toggle-with-nav">+</span> <?php echo ale_get_meta('about-4toggle-title4'); ?></div>
                                                <div class="toggle-body"><?php echo ale_get_meta('about-4toggle-desc4'); ?></div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="services-items cf">
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon1')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon1'); ?>" alt="<?php echo ale_get_meta('about-4serv-title1'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title1'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc1'); ?></div>
                            </div>
                        </div>
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon2')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon2'); ?>" alt="<?php echo ale_get_meta('about-4serv-title2'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title2'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc2'); ?></div>
                            </div>
                        </div>
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon3')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon3'); ?>" alt="<?php echo ale_get_meta('about-4serv-title3'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title3'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc3'); ?></div>
                            </div>
                        </div>
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon4')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon4'); ?>" alt="<?php echo ale_get_meta('about-4serv-title4'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title4'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc4'); ?></div>
                            </div>
                        </div>
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon5')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon5'); ?>" alt="<?php echo ale_get_meta('about-4serv-title5'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title5'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc5'); ?></div>
                            </div>
                        </div>
                        <div class="serv-item">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-4serv-icon6')){?>
                                    <img src="<?php echo ale_get_meta('about-4serv-icon6'); ?>" alt="<?php echo ale_get_meta('about-4serv-title6'); ?>" />
                                <?php } ?>
                            </div>
                            <div class="text-box">
                                <div class="title"><?php echo ale_get_meta('about-4serv-title6'); ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-4serv-desc6'); ?></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>