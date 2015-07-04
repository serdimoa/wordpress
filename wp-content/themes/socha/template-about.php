<?php
/**
 * Template Name: Template About 1
 */
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
            <div class="content aboutpage cf">
                <div class="quotebox">
                    <figure>
                        <?php echo get_the_post_thumbnail(); ?>
                        <figcaption>
                            <p><?php echo ale_get_meta('aboutquote'); ?></p>
                        </figcaption>
                    </figure>
                </div>
                <div class="contentaboutbox">
                    <div class="leftboxabout">
                        <div class="paddingbox">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; else: ?>
                                <?php ale_part('notfound')?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="rightboxabout">
                        <div class="paddingbox">
                            <div class="seconddata">
                                <?php echo do_shortcode(ale_get_meta('aboutinfo')); ?>
                            </div>
                            <?php if(ale_get_meta('aboutslideon')=="on") { ?>
                            <div class="aboutslider ta">
                                <ul class="slides">
                                    <?php
                                    $args = array(
                                        'post_type' => 'attachment',
                                        'numberposts' => -1,
                                        'post_status' => null,
                                        'order'				=> 'ASC',
                                        'orderby'			=> 'menu_order ID',
                                        'meta_query'		=> array(
                                            array(
                                                'key'		=> '_ale_hide_from_gallery',
                                                'value'		=> 0,
                                                'type'		=> 'DECIMAL',
                                            ),
                                        ),
                                        'post_parent' => $post->ID
                                    );
                                    $attachments = get_posts( $args );
                                    if ( $attachments ) {
                                        foreach ( $attachments as $attachment ) {
                                            echo "<li>".wp_get_attachment_image( $attachment->ID, 'page-slider' )."</li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="cf"></div>
                <?php if(ale_get_meta('aboutvideo')){ ?>
                      <div class="videoaboutbox">
                          <div class="videotitle cf">
                              <div class="text"><?php _e('Video  Presentation', 'aletheme')?></div>
                              <div class="plus">+</div>
                          </div>
                          <div class="videocode" <?php if(ale_get_meta('aboutvideotog')=='open'){ echo 'style="display:block;"';} ?> >
                              <?php echo wp_oembed_get(ale_get_meta('aboutvideo'), array('width'=>1000)); ?>
                          </div>
                      </div>
                <?php } ?>
            </div>
            <?php ale_part('pagefooter');?>
        </div>
    </div>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>