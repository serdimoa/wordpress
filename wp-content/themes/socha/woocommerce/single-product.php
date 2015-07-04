<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
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

            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <header class="page-title"><h2 class="a"><?php woocommerce_page_title(); ?></h2></header>
            <?php endif; ?>

            <?php
                /**
                 * woocommerce_before_main_content hook
                 *
                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                 * @hooked woocommerce_breadcrumb - 20
                 */
                do_action('woocommerce_before_main_content');
            ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

            <?php endwhile; // end of the loop. ?>

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