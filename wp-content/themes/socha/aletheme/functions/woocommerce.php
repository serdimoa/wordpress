<?php
//WooCommerce Code
//================
add_theme_support( 'woocommerce' );

//Remove Breadcrumbs
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

//Define image sizes WooCommerce
function alethemes_woocommerce_image_dimensions() {
    $catalog = array(
        'width' 	=> '325',	// px
        'height'	=> '415',	// px
        'crop'		=> 1 		// true
    );

    $single = array(
        'width' 	=> '500',	// px
        'height'	=> '460',	// px
        'crop'		=> 1 		// true
    );

    $thumbnail = array(
        'width' 	=> '120',	// px
        'height'	=> '120',	// px
        'crop'		=> 1 		// true
    );

    // Image sizes
    update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
    update_option( 'shop_single_image_size', $single ); 		// Single product image
    update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
add_action( 'init', 'alethemes_woocommerce_image_dimensions', 1 );

//Make 3 Columns products grid
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3;
    }
}

