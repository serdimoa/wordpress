<?php
/**
 * Template Name: Template Contact 3
 */
// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header(); ?>
    <section class="singlepage">
        <div class="leftside">
            <?php get_sidebar('mainmenu'); ?>
            <?php if(ale_get_meta('leftsidebarcustom')=='on'){ ?>
                <aside class="sidebar cf">
                    <ul class="sidebarul">
                        <?php
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('left-sidebar-template') ) :
                        endif; ?>
                    </ul>
                </aside>
            <?php } ?>
        </div>
        <?php if(ale_get_meta('rightsidebarcustom')=='on'){ ?>
            <div class="rightsidebar">
                <aside class="sidebar cf">
                    <ul class="sidebarul">
                        <?php
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-sidebar-template') ) :
                        endif; ?>
                    </ul>
                </aside>
            </div>
        <?php } ?>
        <div class="rightside <?php if(ale_get_meta('rightsidebarcustom')=='on'){ echo 'centerside'; } ?>">
            <div class="margincontentbox">
                <?php ale_part('pagehead');?>
                <div class="content contactpage contact-style-3 cf">
                    <div class="left-70 cf">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <section class="story cf">
                                <?php the_content();?>
                            </section>
                            <section class="contact-data cf">
                                <div class="item-col-3">
                                    <div class="icon-box icon-one"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact3-photo-title'); ?><br />
                                        <span class="bold"><?php echo ale_get_meta('contact3-photo-number'); ?></span>
                                    </div>
                                </div>
                                <div class="item-col-3">
                                    <div class="icon-box icon-two"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact3-address-title'); ?><br />
                                        <span><?php echo ale_get_meta('contact3-address'); ?></span>
                                    </div>
                                </div>
                                <div class="item-col-3">
                                    <div class="icon-box icon-three"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact3-email-title'); ?><br />
                                        <span><?php echo ale_get_meta('contact3-email-address'); ?></span>
                                    </div>
                                </div>
                            </section>
                        <?php endwhile; endif; ?>
                    </div>
                    <div class="right-30 cf">
                        <div class="contact-form cf">
                            <div class="title"><?php echo ale_get_meta('contact3-form-title'); ?></div>
                            <form method="post" action="<?php the_permalink();?>">
                                <?php if (isset($_GET['success'])) : ?>
                                    <p class="success"><?php _e('Your email was sent successfully. Thank you for your message!', 'aletheme')?></p>
                                <?php endif; ?>
                                <?php if (isset($error) && isset($error['msg'])) : ?>
                                    <p class="error"><?php echo $error['msg']?></p>
                                <?php endif; ?>
                                <p class="ta cf">
                                    <input type="text" name="contact[name]" placeholder="<?php _e('Name', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                                </p>
                                <p class="ta cf">
                                    <input type="email" name="contact[email]" placeholder="<?php _e('Email', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                                </p>

                                <p class="commcont ta cf">
                                    <textarea name="contact[message]" placeholder="<?php _e('Message', 'aletheme')?>*"  id="contact-form-message" cols="40" rows="5" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                                </p>
                                <p class="ta buttonbox cf">
                                    <input type="submit" class="submit-black" value="<?php _e('Send', 'aletheme')?>" />
                                </p>
                                <?php wp_nonce_field() ?>
                            </form>
                        </div>
                    </div>
                    <div class="cf"></div>
                    <?php if(ale_get_meta('contact3-map-address')){ ?>
                        <div class="contact3-map">
                            <?php echo do_shortcode('[ale_map address="'.ale_get_meta('contact3-map-address').'" width="100%" height="370px"]'); ?>
                        </div>
                    <?php } ?>
                </div>
                <?php ale_part('pagefooter');?>
            </div>
        </div>
        <div class="cf"></div>
    </section>
<?php get_footer(); ?>