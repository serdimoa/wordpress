<?php
/**
 * Template Name: Template About 3
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
                    <div class="contentaboutbox aboutthree">
                        <div class="leftboxabout">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="theprevieabout">
                                    <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                </div>
                                <h2 class="abouttheetitle"><?php the_title(); ?></h2>
                                <div class="aboutdescr"><?php the_content(); ?></div>
                            <?php endwhile;  endif; ?>
                        </div>
                        <div class="rightboxabout">
                            <div class="abouttoggle">
                                <?php if(ale_get_meta('abtogimg1')){ ?>
                                <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg1'); ?>); background-size: cover; background-position: 50% 50%;">
                                    <div class="titletog"><span class="iconplu">-</span> <?php if(ale_get_meta('abtoglink1')){ echo '<a href="'.ale_get_meta('abtoglink1').'">';} ?><?php echo ale_get_meta('abtogtit1'); ?><?php if(ale_get_meta('abtoglink1')){ echo '</a>';}?></div>
                                    <div class="titlecontent" style="display: block;">
                                        <p><?php echo ale_get_meta('abtogdesc1'); ?></php></p>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg2')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg2'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink2')){ echo '<a href="'.ale_get_meta('abtoglink2').'">';} ?><?php echo ale_get_meta('abtogtit2'); ?><?php if(ale_get_meta('abtoglink2')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc2'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg3')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg3'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink3')){ echo '<a href="'.ale_get_meta('abtoglink3').'">';} ?><?php echo ale_get_meta('abtogtit3'); ?><?php if(ale_get_meta('abtoglink3')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc3'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg4')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg4'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink4')){ echo '<a href="'.ale_get_meta('abtoglink4').'">';} ?><?php echo ale_get_meta('abtogtit4'); ?><?php if(ale_get_meta('abtoglink4')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc4'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg5')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg5'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink5')){ echo '<a href="'.ale_get_meta('abtoglink5').'">';} ?><?php echo ale_get_meta('abtogtit5'); ?><?php if(ale_get_meta('abtoglink5')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc5'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg6')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg6'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink6')){ echo '<a href="'.ale_get_meta('abtoglink6').'">';} ?><?php echo ale_get_meta('abtogtit6'); ?><?php if(ale_get_meta('abtoglink6')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc6'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if(ale_get_meta('abtogimg7')){ ?>
                                    <div class="itemtoggle cf" style="background-image: url(<?php echo ale_get_meta('abtogimg7'); ?>); background-size: cover; background-position: 50% 50%;">
                                        <div class="titletog"><span class="iconplu">+</span> <?php if(ale_get_meta('abtoglink7')){ echo '<a href="'.ale_get_meta('abtoglink7').'">';} ?><?php echo ale_get_meta('abtogtit7'); ?><?php if(ale_get_meta('abtoglink7')){ echo '</a>';}?></div>
                                        <div class="titlecontent">
                                            <p><?php echo ale_get_meta('abtogdesc7'); ?></php></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="cf"></div>
                </div>
                <?php ale_part('pagefooter');?>
                <header class="page-title" style="margin-top: 40px;"><h2 class="a"><?php echo ale_get_meta('meetteamtitle'); ?></h2></header>
                <div class="ourteambox aboutthreeteam cf">
                    <?php if(ale_get_meta('firstphotoperson')){ ?>
                        <div class="itemteam">
                            <div class="teamphotobox">
                                <img src="<?php echo ale_get_meta('firstphotoperson'); ?>" />
                                <div class="masktemphoto">
                                    <?php if(ale_get_meta('mb1fb')){ echo '<a href="'.ale_get_meta('mb1fb').'" target="_blank" class="fbiconteam">Facebook</a>';} ?>
                                    <?php if(ale_get_meta('mb1twi')){ echo '<a href="'.ale_get_meta('mb1twi').'" target="_blank" class="twiiconteam">Twitter</a>';} ?>
                                    <?php if(ale_get_meta('mb1g')){ echo '<a href="'.ale_get_meta('mb1g').'" target="_blank" class="giconteam">Google+</a>';} ?>
                                    <?php if(ale_get_meta('mb1pin')){ echo '<a href="'.ale_get_meta('mb1pin').'" target="_blank" class="piniconteam">Pinterest</a>';} ?>
                                </div>
                            </div>
                            <div class="teamdesc">
                                <div class="title">
                                    <?php echo ale_get_meta('firstnameperson'); ?>
                                </div>
                                <div class="prof">
                                    <?php echo ale_get_meta('firstprofperson'); ?>
                                </div>
                                <div class="descteam">
                                    <?php echo ale_get_meta('firstdescperson'); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('secondphotoperson')){ ?>
                        <div class="itemteam">
                            <div class="teamphotobox">
                                <img src="<?php echo ale_get_meta('secondphotoperson'); ?>" />
                                <div class="masktemphoto">
                                    <?php if(ale_get_meta('mb2fb')){ echo '<a href="'.ale_get_meta('mb2fb').'" target="_blank" class="fbiconteam">Facebook</a>';} ?>
                                    <?php if(ale_get_meta('mb2twi')){ echo '<a href="'.ale_get_meta('mb2twi').'" target="_blank" class="twiiconteam">Twitter</a>';} ?>
                                    <?php if(ale_get_meta('mb2g')){ echo '<a href="'.ale_get_meta('mb2g').'" target="_blank" class="giconteam">Google+</a>';} ?>
                                    <?php if(ale_get_meta('mb2pin')){ echo '<a href="'.ale_get_meta('mb2pin').'" target="_blank" class="piniconteam">Pinterest</a>';} ?>
                                </div>
                            </div>
                            <div class="teamdesc">
                                <div class="title">
                                    <?php echo ale_get_meta('secondnameperson'); ?>
                                </div>
                                <div class="prof">
                                    <?php echo ale_get_meta('secondprofperson'); ?>
                                </div>
                                <div class="descteam">
                                    <?php echo ale_get_meta('seconddescperson'); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(ale_get_meta('thirdphotoperson')){ ?>
                        <div class="itemteam">
                            <div class="teamphotobox">
                                <img src="<?php echo ale_get_meta('thirdphotoperson'); ?>" />
                                <div class="masktemphoto">
                                    <?php if(ale_get_meta('mb3fb')){ echo '<a href="'.ale_get_meta('mb3fb').'" target="_blank" class="fbiconteam">Facebook</a>';} ?>
                                    <?php if(ale_get_meta('mb3twi')){ echo '<a href="'.ale_get_meta('mb3twi').'" target="_blank" class="twiiconteam">Twitter</a>';} ?>
                                    <?php if(ale_get_meta('mb3g')){ echo '<a href="'.ale_get_meta('mb3g').'" target="_blank" class="giconteam">Google+</a>';} ?>
                                    <?php if(ale_get_meta('mb3pin')){ echo '<a href="'.ale_get_meta('mb3pin').'" target="_blank" class="piniconteam">Pinterest</a>';} ?>
                                </div>
                            </div>
                            <div class="teamdesc">
                                <div class="title">
                                    <?php echo ale_get_meta('thirdnameperson'); ?>
                                </div>
                                <div class="prof">
                                    <?php echo ale_get_meta('thirdprofperson'); ?>
                                </div>
                                <div class="descteam">
                                    <?php echo ale_get_meta('thirddescperson'); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <header class="page-title" style="margin-top: 40px;"><h2 class="a"><?php echo ale_get_meta('ourskillstitle'); ?></h2></header>
                <div class="pieboxes cf">
                    <?php if(ale_get_meta('pietit1')){ ?>
                    <div class="pieitem">
                        <span class="chart" data-percent="<?php echo ale_get_meta('pieper1'); ?>">
                            <span class="percent"></span>
                        </span>
                        <div class="pietitle"><?php echo ale_get_meta('pietit1'); ?></div>
                    </div>
                    <?php } ?>
                    <?php if(ale_get_meta('pietit2')){ ?>
                    <div class="pieitem">
                        <span class="chart" data-percent="<?php echo ale_get_meta('pieper2'); ?>">
                            <span class="percent"></span>
                        </span>
                        <div class="pietitle"><?php echo ale_get_meta('pietit2'); ?></div>
                    </div>
                    <?php } ?>
                    <?php if(ale_get_meta('pietit3')){ ?>
                    <div class="pieitem">
                        <span class="chart" data-percent="<?php echo ale_get_meta('pieper3'); ?>">
                            <span class="percent"></span>
                        </span>
                        <div class="pietitle"><?php echo ale_get_meta('pietit3'); ?></div>
                    </div>
                    <?php } ?>
                    <?php if(ale_get_meta('pietit4')){ ?>
                    <div class="pieitem">
                        <span class="chart" data-percent="<?php echo ale_get_meta('pieper4'); ?>">
                            <span class="percent"></span>
                        </span>
                        <div class="pietitle"><?php echo ale_get_meta('pietit4'); ?></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="cf"></div>
    </section>
<?php get_footer(); ?>