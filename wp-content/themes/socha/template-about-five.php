<?php
/**
 * Template name: Template About 5
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
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
                <div class="about-5 content cf">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="about-content-box cf">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif; ?>
                    <div class="three-top-boxes cf">
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-3box-icon1')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-3box-icon1'); ?>" alt="<?php echo ale_get_meta('about-3box-title1'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title">
                                <?php if(ale_get_meta('about-3box-link1')){ echo '<a href="'.ale_get_meta('about-3box-link1').'">'; } ?>
                                    <?php echo ale_get_meta('about-3box-title1'); ?>
                                <?php if(ale_get_meta('about-3box-link1')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-3box-desc1'); ?></div>
                            </div>
                        </div>
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-3box-icon2')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-3box-icon2'); ?>" alt="<?php echo ale_get_meta('about-3box-title2'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title">
                                <?php if(ale_get_meta('about-3box-link2')){ echo '<a href="'.ale_get_meta('about-3box-link2').'">'; } ?>
                                    <?php echo ale_get_meta('about-3box-title2'); ?>
                                <?php if(ale_get_meta('about-3box-link2')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-3box-desc2'); ?></div>
                            </div>
                        </div>
                        <div class="item-col-3 cf">
                            <div class="icon-box">
                                <?php if(ale_get_meta('about-3box-icon3')){?>
                                    <div class="icon-image">
                                        <span></span><img src="<?php echo ale_get_meta('about-3box-icon3'); ?>" alt="<?php echo ale_get_meta('about-3box-title3'); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="content-box">
                                <div class="title"><?php if(ale_get_meta('about-3box-link3')){ echo '<a href="'.ale_get_meta('about-3box-link3').'">'; } ?>
                                    <?php echo ale_get_meta('about-3box-title3'); ?>
                                <?php if(ale_get_meta('about-3box-link3')){ echo '</a>'; } ?>
                                </div>
                                <div class="description"><?php echo ale_get_meta('about-3box-desc3'); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php if(ale_get_meta('about-man-boxtitle')){ ?>
                        <section class="collections-box menagement-box cf">
                            <div class="galleriestitle cf"><?php echo ale_get_meta('about-man-boxtitle'); ?></div>
                            <div class="items-list cf">
                                <?php if(ale_get_meta('about-man-image1')){ ?>
                                    <div class="member-item">
                                        <div class="image-member">
                                            <img src="<?php echo ale_get_meta('about-man-image1'); ?>" alt="<?php echo ale_get_meta('about-man-name1') ?>" />
                                        </div>
                                        <div class="member-name title">
                                            <?php echo ale_get_meta('about-man-name1') ?>
                                        </div>
                                        <div class="work-member title">
                                            <?php echo ale_get_meta('about-man-work1') ?>
                                        </div>
                                        <div class="desc-member">
                                            <?php echo ale_get_meta('about-man-desc1') ?>
                                        </div>
                                        <div class="social-member">
                                            <?php if(ale_get_meta('about-man-twitter1')){ echo '<a href="'.ale_get_meta('about-man-twitter1').'" target="_blank" class="twitter-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-facebook1')){ echo '<a href="'.ale_get_meta('about-man-facebook1').'" target="_blank" class="facebook-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-pinterest1')){ echo '<a href="'.ale_get_meta('about-man-pinterest1').'" target="_blank" class="pinterest-icon new-social"></a>'; } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if(ale_get_meta('about-man-image2')){ ?>
                                    <div class="member-item">
                                        <div class="image-member">
                                            <img src="<?php echo ale_get_meta('about-man-image2'); ?>" alt="<?php echo ale_get_meta('about-man-name2') ?>" />
                                        </div>
                                        <div class="member-name title">
                                            <?php echo ale_get_meta('about-man-name2') ?>
                                        </div>
                                        <div class="work-member title">
                                            <?php echo ale_get_meta('about-man-work2') ?>
                                        </div>
                                        <div class="desc-member">
                                            <?php echo ale_get_meta('about-man-desc2') ?>
                                        </div>
                                        <div class="social-member">
                                            <?php if(ale_get_meta('about-man-twitter2')){ echo '<a href="'.ale_get_meta('about-man-twitter2').'" target="_blank" class="twitter-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-facebook2')){ echo '<a href="'.ale_get_meta('about-man-facebook2').'" target="_blank" class="facebook-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-pinterest2')){ echo '<a href="'.ale_get_meta('about-man-pinterest2').'" target="_blank" class="pinterest-icon new-social"></a>'; } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if(ale_get_meta('about-man-image3')){ ?>
                                    <div class="member-item">
                                        <div class="image-member">
                                            <img src="<?php echo ale_get_meta('about-man-image3'); ?>" alt="<?php echo ale_get_meta('about-man-name3') ?>" />
                                        </div>
                                        <div class="member-name title">
                                            <?php echo ale_get_meta('about-man-name3') ?>
                                        </div>
                                        <div class="work-member title">
                                            <?php echo ale_get_meta('about-man-work3') ?>
                                        </div>
                                        <div class="desc-member">
                                            <?php echo ale_get_meta('about-man-desc3') ?>
                                        </div>
                                        <div class="social-member">
                                            <?php if(ale_get_meta('about-man-twitter3')){ echo '<a href="'.ale_get_meta('about-man-twitter3').'" target="_blank" class="twitter-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-facebook3')){ echo '<a href="'.ale_get_meta('about-man-facebook3').'" target="_blank" class="facebook-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-pinterest3')){ echo '<a href="'.ale_get_meta('about-man-pinterest3').'" target="_blank" class="pinterest-icon new-social"></a>'; } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if(ale_get_meta('about-man-image4')){ ?>
                                    <div class="member-item">
                                        <div class="image-member">
                                            <img src="<?php echo ale_get_meta('about-man-image4'); ?>" alt="<?php echo ale_get_meta('about-man-name4') ?>" />
                                        </div>
                                        <div class="member-name title">
                                            <?php echo ale_get_meta('about-man-name4') ?>
                                        </div>
                                        <div class="work-member title">
                                            <?php echo ale_get_meta('about-man-work4') ?>
                                        </div>
                                        <div class="desc-member">
                                            <?php echo ale_get_meta('about-man-desc4') ?>
                                        </div>
                                        <div class="social-member">
                                            <?php if(ale_get_meta('about-man-twitter4')){ echo '<a href="'.ale_get_meta('about-man-twitter4').'" target="_blank" class="twitter-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-facebook4')){ echo '<a href="'.ale_get_meta('about-man-facebook4').'" target="_blank" class="facebook-icon new-social"></a>'; } ?>
                                            <?php if(ale_get_meta('about-man-pinterest4')){ echo '<a href="'.ale_get_meta('about-man-pinterest4').'" target="_blank" class="pinterest-icon new-social"></a>'; } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>
                    <?php if(ale_get_meta('about-org-boxtitle')){ ?>
                    <section class="collections-box organization-box cf">
                        <div class="galleriestitle cf"><?php echo ale_get_meta('about-org-boxtitle'); ?></div>
                        <div class="org-items-list cf">
                            <div class="item-post-org">
                                <div class="title"><?php echo ale_get_meta('about-org-posttitle1');  ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-org-postdesc1');  ?></div>
                                <?php if(ale_get_meta('about-org-postlink1')){?>
                                    <div class="read-link">
                                        <a href="<?php echo ale_get_meta('about-org-postlink1'); ?>" ><?php _e('Read More','aletheme'); ?> ›</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="item-post-org">
                                <div class="title"><?php echo ale_get_meta('about-org-posttitle2');  ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-org-postdesc2');  ?></div>
                                <?php if(ale_get_meta('about-org-postlink2')){?>
                                    <div class="read-link">
                                        <a href="<?php echo ale_get_meta('about-org-postlink2'); ?>" ><?php _e('Read More','aletheme'); ?> ›</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="item-post-org">
                                <div class="title"><?php echo ale_get_meta('about-org-posttitle3');  ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-org-postdesc3');  ?></div>
                                <?php if(ale_get_meta('about-org-postlink3')){?>
                                    <div class="read-link">
                                        <a href="<?php echo ale_get_meta('about-org-postlink3'); ?>" ><?php _e('Read More','aletheme'); ?> ›</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="item-post-org">
                                <div class="title"><?php echo ale_get_meta('about-org-posttitle4');  ?></div>
                                <div class="desc"><?php echo ale_get_meta('about-org-postdesc4');  ?></div>
                                <?php if(ale_get_meta('about-org-postlink4')){?>
                                    <div class="read-link">
                                        <a href="<?php echo ale_get_meta('about-org-postlink4'); ?>" ><?php _e('Read More','aletheme'); ?> ›</a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="item-post-org">
                                <form method="post" class="about-form" action="<?php the_permalink();?>">
                                    <?php if (isset($_GET['success'])) : ?>
                                        <p class="success"><?php _e('Your email was sent successfully. Thank you for your message!', 'aletheme')?></p>
                                    <?php endif; ?>
                                    <?php if (isset($error) && isset($error['msg'])) : ?>
                                        <p class="error"><?php echo $error['msg']?></p>
                                    <?php endif; ?>
                                    <div class="tamar cf">
                                        <input type="text" name="contact[name]" placeholder="<?php _e('Name', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                                    </div>
                                    <div class="tamar cf">
                                        <input type="email" name="contact[email]" placeholder="<?php _e('Email', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                                    </div>
                                    <div class="tamar cf">
                                        <textarea name="contact[message]" placeholder="<?php _e('Message', 'aletheme')?>*"  id="contact-form-message" cols="40" rows="5" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                                    </div>
                                    <div class="tamar cf">
                                        <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>" />
                                    </div>
                                    <?php wp_nonce_field() ?>
                                </form>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>