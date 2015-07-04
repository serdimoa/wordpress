<?php
/**
 * Template Name: Template Contact 5
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
                <div class="content contactpage contact-style-5 cf">
                    <div class="top-text cf">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <section class="story cf">
                                <?php the_content();?>
                            </section>
                            <section class="contact-data cf">
                                <div class="item-col-3 first">
                                    <div class="icon"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact5-photo-title'); ?><br />
                                        <span><?php echo ale_get_meta('contact5-photo-number'); ?></span>
                                    </div>
                                </div>
                                <div class="item-col-3 second">
                                    <div class="icon"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact5-address-title'); ?><br />
                                        <span><?php echo ale_get_meta('contact5-address'); ?></span>
                                    </div>
                                </div>
                                <div class="item-col-3 third">
                                    <div class="icon"></div>
                                    <div class="data-box title">
                                        <?php echo ale_get_meta('contact5-email-title'); ?><br />
                                        <span><?php echo ale_get_meta('contact5-email-address'); ?></span>
                                    </div>
                                </div>
                            </section>
                        <?php endwhile; endif; ?>
                        <?php if(ale_get_meta('contact5-image')){ ?>
                            <div class="contact5-image">
                                <img src="<?php echo ale_get_meta('contact5-image'); ?>" alt="" />
                            </div>
                        <?php } ?>
                        <?php if(ale_get_meta('contact5-form-title')){ ?>
                        <section class="collections-box cf">
                            <div class="galleriestitle"><?php echo ale_get_meta('contact5-form-title'); ?></div>
                            <div class="contact-form cf">
                                <form method="post" action="<?php the_permalink();?>">
                                    <?php if (isset($_GET['success'])) : ?>
                                        <p class="success"><?php _e('Your email was sent successfully. Thank you for your message!', 'aletheme')?></p>
                                    <?php endif; ?>
                                    <?php if (isset($error) && isset($error['msg'])) : ?>
                                        <p class="error"><?php echo $error['msg']?></p>
                                    <?php endif; ?>
                                    <p class="ta cf">
                                        <input type="text" name="contact[name]" placeholder="<?php _e('Name', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                                        <input type="email" name="contact[email]" placeholder="<?php _e('Email', 'aletheme')?>*" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                                        <input type="text" class="phone" name="contact[phone]" placeholder="<?php _e('Phone', 'aletheme')?>" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" id="contact-form-phone" />
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
                        </section>
                        <?php } ?>
                    </div>
                </div>
                <?php ale_part('pagefooter');?>
            </div>
        </div>
        <div class="cf"></div>
    </section>
<?php if(ale_get_meta('contact5-map-address')){ ?>
    <div class="contact5-map">
        <?php echo do_shortcode('[ale_map address="'.ale_get_meta('contact5-map-address').'" width="100%" height="480px"]'); ?>
    </div>
<?php } ?>
<?php get_footer(); ?>