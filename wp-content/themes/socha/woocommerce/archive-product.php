<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>
<section class="singlepage">
    <div class="leftside">
        <?php get_sidebar('mainmenu'); ?>
        <?php if(ale_get_option('leftsidebarshop')==1){ include THEME_PATH.'/templates/sidebar-shop.php'; } ?>
    </div>
    <?php if(ale_get_option('rightsidebarshop')==1){ ?>
        <div class="rightsidebar">
            <?php include THEME_PATH.'/templates/sidebar-right-shop.php'; ?>
        </div>
    <?php } ?>
    <div class="rightside <?php if(ale_get_option('rightsidebarshop')==1){ echo 'centerside'; } ?>">
        <div class="margincontentbox">
            <div class="pagelayout cf">
                <?php
                    /**
                     * woocommerce_before_main_content hook
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    do_action('woocommerce_before_main_content');
                ?>

                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                    <header class="page-title"><h2 class="a"><?php woocommerce_page_title(); ?></h2></header>
                <?php endif; ?>

                <?php if(ale_get_option('shopslider')){ ?>
                <div class="shopsliderbox">
                    <div class="shopslider cf">
                        <ul class="slides cf">
                            <?php $slider = ale_sliders_get_slider(ale_get_option('shopslider'));  ?>
                            <?php if($slider):?>
                                <?php foreach ($slider['slides'] as $slide) : ?>
                                    <li>
                                        <?php if ($slide['image']) : ?>
                                            <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
                <?php } ?>

                <?php do_action( 'woocommerce_archive_description' ); ?>

                <?php if ( have_posts() ) : ?>
                    <?php
                        /**
                         * woocommerce_before_shop_loop hook
                         *
                         * @hooked woocommerce_result_count - 20
                         * @hooked woocommerce_catalog_ordering - 30
                         */
                        do_action( 'woocommerce_before_shop_loop' );
                    ?>

                    <?php woocommerce_product_loop_start(); ?>

                        <?php woocommerce_product_subcategories(); ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php woocommerce_get_template_part( 'content', 'product' ); ?>

                        <?php endwhile; // end of the loop. ?>

                    <?php woocommerce_product_loop_end(); ?>

                    <?php
                        /**
                         * woocommerce_after_shop_loop hook
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action( 'woocommerce_after_shop_loop' );
                    ?>

                <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

                    <?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

                <?php endif; ?>

                <?php
                    /**
                     * woocommerce_after_main_content hook
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action('woocommerce_after_main_content');
                ?>
            </div>
        </div>
    </div>
    <div class="cf"></div>
</section>
<?php get_footer(); ?>