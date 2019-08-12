<?php
/**
* The template for displaying product content within loops
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce/Templates
* @version 3.6.0
*/
defined( 'ABSPATH' ) || exit;
global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$item_col = "col-sm-12 col-md-6 col-lg-4 p-b-50";
?>
<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
	<div class="block2">
		<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			<div class="block2-overlay trans-0-4">
				<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
					<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
					<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
				</a>
				<div class="block2-btn-addcart w-size1 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
					<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
					</button>
					
				</div>
			</div>
			<?php
			/**
			* Hook: woocommerce_before_shop_loop_item.
			*
			* @hooked woocommerce_template_loop_product_link_open - 10
			*/
			// do_action( 'woocommerce_before_shop_loop_item' );
			/**
			* Hook: woocommerce_before_shop_loop_item_title.
			*
			* @hooked woocommerce_show_product_loop_sale_flash - 10
			* @hooked woocommerce_template_loop_product_thumbnail - 10
			*/
			// do_action( 'woocommerce_before_shop_loop_item_title' );
			/**
			* Hook: woocommerce_shop_loop_item_title.
			*
			* @hooked woocommerce_template_loop_product_title - 10
			*/
			// do_action( 'woocommerce_shop_loop_item_title' );
			/**
			* Hook: woocommerce_after_shop_loop_item_title.
			*
			* @hooked woocommerce_template_loop_rating - 5
			* @hooked woocommerce_template_loop_price - 10
			*/
			// do_action( 'woocommerce_after_shop_loop_item_title' );
			/**
			* Hook: woocommerce_after_shop_loop_item.
			*
			* @hooked woocommerce_template_loop_product_link_close - 5
			* @hooked woocommerce_template_loop_add_to_cart - 10
			*/?>
		</div>
		<div class="block2-txt p-t-20" style="text-align: center;">
			<span class="block2-price m-text6 p-r-5">
				<a href="<?php the_permalink(); ?>"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></a>
				<?php do_action( 'woocommerce_after_shop_loop_item_title' );
				remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash', 10);
				?>
			</span>
		</div>
	</div>
</div>