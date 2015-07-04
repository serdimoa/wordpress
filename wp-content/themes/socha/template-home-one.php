<?php
/**
 * Template name: Home Advanced Template
 */

get_header(); ?>
<section class="singlepage">
    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
    </div>
    <div class="rightside">
        <div class="margincontentbox">
            <div class="slider-wrapper theme-default">
                <?php
                //If the Advanced Template slider is not selected, the theme will get the Default Template slider.
                if(ale_get_option('sliderslug2')){ $gettheslider = ale_get_option('sliderslug2');} else {$gettheslider = ale_get_option('sliderslug');}
                $slider = ale_sliders_get_slider($gettheslider);  ?>
                <?php if($slider):?>
                <div id="slider" class="nivoSlider">
                    <?php $i=0; ?>
                    <?php foreach ($slider['slides'] as $slide) : ?>
                        <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" data-thumb="<?php echo $slide['image'] ?>" data-transition="<?php echo ale_get_meta('slidereffect'); ?>" alt="<?php echo $slide['title']; ?>" title="<?php if($slide['title']){ echo '#'.$i; }?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                <?php $j=0; ?>
                    <?php foreach ($slider['slides'] as $slide) : ?>
                        <?php if($slide['title']){ ?>
                            <div id="<?php echo $j; ?>" class="nivo-html-caption">
                                <?php if($slide['title']){ ?><div class="mainslidertitle"><?php echo $slide['title']; ?></div><?php } ?>
                                <div class="mainsliderdescription">
                                    <?php if($slide['description']){ echo $slide['description']; } ?>
                                    <?php if($slide['html'] and $slide['description']){ echo '<br />'; } ?>
                                    <?php if($slide['html']){ echo $slide['html']; } ?>
                                    <br />
                                    <?php if($slide['url']){ echo '<a href="'.$slide['url'].'" class="sliderlinkmore">'.__('Read More').'</a>'; } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php $j++;?>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>
            <div class="cf"></div>
        </div>
    </div>
    <div class="cf"></div>
    <?php if(ale_get_meta('showtypehome')=='gallery') {

        include 'templates/home_gallery.php';

    } elseif (ale_get_meta('showtypehome')=='post') {

        include 'templates/home_blogposts.php';

    } elseif (ale_get_meta('showtypehome')=='content') {

        include 'templates/home_customcontent.php';

    } else {

        include 'templates/home_gallery.php';

    } ?>
</section>

<?php get_footer(); ?>