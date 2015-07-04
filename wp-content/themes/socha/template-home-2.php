<?php
/**
 * Template name: New Home (Variant 2)
 */


get_header();?>
    <section id="new-home-two" class="new-home-2 header-top-2 cf">
        <div class="leftbox cf">
            <?php get_sidebar('mainmenu'); ?>
        </div>
        <div class="new-home-2-top cf">
            <div class="three-boxes-cont">
                <div class="item-col-3">
                    <figure>
                        <a href="<?php echo ale_get_meta('h2-box-1-link'); ?>">
                            <img src="<?php echo ale_get_meta('h2-box-1-image'); ?>" alt="<?php echo ale_get_meta('h2-box-1-title'); ?>" />
                        </a>
                        <div class="link-box">
                            <a href="<?php echo ale_get_meta('h2-box-1-link'); ?>"></a>
                        </div>
                        <figcaption class="mask-text">
                            <div class="mask-title"><?php echo ale_get_meta('h2-box-1-title'); ?></div>
                            <div class="mask-desc"><?php echo ale_get_meta('h2-box-1-desc'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-col-3">
                    <figure>
                        <a href="<?php echo ale_get_meta('h2-box-2-link'); ?>">
                            <img src="<?php echo ale_get_meta('h2-box-2-image'); ?>" alt="<?php echo ale_get_meta('h2-box-2-title'); ?>" />
                        </a>
                        <div class="link-box">
                            <a href="<?php echo ale_get_meta('h2-box-2-link'); ?>"></a>
                        </div>
                        <figcaption class="mask-text">
                            <div class="mask-title"><?php echo ale_get_meta('h2-box-2-title'); ?></div>
                            <div class="mask-desc"><?php echo ale_get_meta('h2-box-2-desc'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-col-3">
                    <figure>
                        <a href="<?php echo ale_get_meta('h2-box-3-link'); ?>">
                            <img src="<?php echo ale_get_meta('h2-box-3-image'); ?>" alt="<?php echo ale_get_meta('h2-box-3-title'); ?>" />
                        </a>
                        <div class="link-box">
                            <a href="<?php echo ale_get_meta('h2-box-3-link'); ?>"></a>
                        </div>
                        <figcaption class="mask-text">
                            <div class="mask-title"><?php echo ale_get_meta('h2-box-3-title'); ?></div>
                            <div class="mask-desc"><?php echo ale_get_meta('h2-box-3-desc'); ?></div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="new-home-1-content" class="cf">
        <section class="map-about-box cf">
            <div class="conteiner-map cf">
                <div class="one-half-box cf">
                    <div class="three-counts cf">
                        <div class="one-third-box">
                            <div class="count">
                                <span class="count-font"><?php echo ale_get_meta('h2-about-1-num'); ?></span> <br/>
                                <span class="count-title"><?php echo ale_get_meta('h2-about-1-title'); ?></span>
                             </div>
                        </div>
                        <div class="one-third-box">
                            <div class="count">
                                <span class="count-font"><?php echo ale_get_meta('h2-about-2-num'); ?></span> <br/>
                                <span class="count-title"><?php echo ale_get_meta('h2-about-2-title'); ?></span>
                            </div>
                        </div>
                        <div class="one-third-box">
                            <div class="count">
                                <span class="count-font"><?php echo ale_get_meta('h2-about-3-num'); ?></span> <br/>
                                <span class="count-title"><?php echo ale_get_meta('h2-about-3-title'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="about-title">
                        <?php echo ale_get_meta('h2-about-title'); ?>
                    </div>
                    <div class="about-desc">
                        <?php echo ale_get_meta('h2-about-desc'); ?>
                    </div>
                    <?php if(ale_get_meta('h2-about-link')){ ?>
                        <div class="about-link">
                            <a href="<?php echo ale_get_meta('h2-about-link'); ?>"><?php _e('Read More','aletheme'); ?></a>
                        </div>
                    <?php } ?>
                </div>
                <div class="one-half-box">
                    <div class="video-embed-box" <?php if(ale_get_meta('h2-video-image')){ echo 'style="background:url('.ale_get_meta('h2-video-image').') center center;"';} else { echo 'style="background:#000;"';} ?>>
                        <div class="open-video">
                            <a class="popup-video" href="<?php echo ale_get_meta('h2-video-link'); ?>"></a>
                        </div>
                        <div class="video-text">
                            <span class="title-video"><?php echo ale_get_meta('h2-video-title'); ?></span><br />
                            <?php echo ale_get_meta('h2-video-desc'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="collections-box cf">
            <div class="galleriestitle"><?php echo ale_get_meta('h2-col-title'); ?></div>
            <div class="col-conteiner cf">
                <div class="item-box">
                    <img src="<?php echo ale_get_meta('h2-box1-image'); ?>" />
                    <div class="info-box">
                        <div class="title-info">
                            <?php echo ale_get_meta('h2-box1-title') ?>
                        </div>
                        <div class="loc-info">
                            <?php echo ale_get_meta('h2-box1-loc') ?>
                        </div>
                        <div class="desc-info">
                            <?php echo ale_get_meta('h2-box1-desc') ?>
                        </div>
                    </div>
                    <div class="mask">
                        <a href="<?php echo ale_get_meta('h2-box1-link'); ?>"></a>
                    </div>
                </div>
                <div class="item-box">
                    <img src="<?php echo ale_get_meta('h2-box2-image'); ?>" />
                    <div class="info-box">
                        <div class="title-info">
                            <?php echo ale_get_meta('h2-box2-title') ?>
                        </div>
                        <div class="loc-info">
                            <?php echo ale_get_meta('h2-box2-loc') ?>
                        </div>
                        <div class="desc-info">
                            <?php echo ale_get_meta('h2-box2-desc') ?>
                        </div>
                    </div>
                    <div class="mask">
                        <a href="<?php echo ale_get_meta('h2-box2-link'); ?>"></a>
                    </div>
                </div>
                <div class="item-box">
                    <img src="<?php echo ale_get_meta('h2-box3-image'); ?>" />
                    <div class="info-box">
                        <div class="title-info">
                            <?php echo ale_get_meta('h2-box3-title') ?>
                        </div>
                        <div class="loc-info">
                            <?php echo ale_get_meta('h2-box3-loc') ?>
                        </div>
                        <div class="desc-info">
                            <?php echo ale_get_meta('h2-box3-desc') ?>
                        </div>
                    </div>
                    <div class="mask">
                        <a href="<?php echo ale_get_meta('h2-box3-link'); ?>"></a>
                    </div>
                </div>
                <div class="item-box">
                    <img src="<?php echo ale_get_meta('h2-box4-image'); ?>" />
                    <div class="info-box">
                        <div class="title-info">
                            <?php echo ale_get_meta('h2-box4-title') ?>
                        </div>
                        <div class="loc-info">
                            <?php echo ale_get_meta('h2-box4-loc') ?>
                        </div>
                        <div class="desc-info">
                            <?php echo ale_get_meta('h2-box4-desc') ?>
                        </div>
                    </div>
                    <div class="mask">
                        <a href="<?php echo ale_get_meta('h2-box4-link'); ?>"></a>
                    </div>
                </div>
            </div>
        </section>
    </section>


<?php get_footer(); ?>