<?php get_header(); ?>
<?php
	defined( 'ABSPATH' ) || exit;
?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/heading-pages-01.jpg);">
	<h2 class="l-text2 t-center">
	Cart
	</h2>
</section>
<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<?php do_action( 'woocommerce_before_cart' ); ?>
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<?php do_action( 'woocommerce_before_cart_table' ); ?>
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1"></th>
						<th class="column-2"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
						<th class="column-3"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
						<th class="column-4 p-l-70"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
						<th class="column-5"><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
					</tr>
					
					
					<tbody>
						<?php do_action( 'woocommerce_before_cart_contents' ); ?>
						<?php
						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
							$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
							if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
								$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<tr class="table-row <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
							
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
									if ( ! $product_permalink ) {
										echo $thumbnail; // PHPCS: XSS ok.
									} else {
										printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
									}
									?>
								</div>
							</td>
							<td class="column-2" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
								<?php
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
								} else {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								}
								do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
								// Meta data.
								echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
								// Backorder notification.
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
								}
								?>
							</td>
							<td class="column-3" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>
							<td class="column-4" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
								<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input( array(
										'input_name'   => "cart[{$cart_item_key}][qty]",
										'input_value'  => $cart_item['quantity'],
										'max_value'    => $_product->get_max_purchase_quantity(),
										'min_value'    => '0',
										'product_name' => $_product->get_name(),
									), $_product, false );
								}
								?>
								<ul class="product-actions clearfix">
									<?php
										echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
									?>
								</ul>
							</td>
							<td class="column-5" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>
							<td class="product-remove">
								<?php
									// @codingStandardsIgnoreLine
									echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									), $cart_item_key );
								?>
							</td>
						</tr>
						<?php
						}
						}
						?>
						<?php do_action( 'woocommerce_cart_contents' ); ?>
						
					</tbody>
				</table>
			</table>
		</div>
	</div>
	<?php if ( wc_coupons_enabled() ) { ?>
	<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
		<div class="flex-w flex-m w-full-sm">
			<?php do_action( 'woocommerce_after_cart_table' ); ?>
			<div class="size11 bo4 m-r-10">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
			</div>
			<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
				Apply coupon
				</button>
			</div>
		</div>
		<div class="size10 trans-0-4 m-t-10 m-b-10">
			<button type="submit" class="button flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="update-cart-btn" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
		</div>
		<?php do_action( 'woocommerce_cart_actions' ); ?>
		<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
	</div>
	<?php } ?>
	<!-- Total -->
	<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
		<h5 class="m-text20 p-b-24">
		Cart Totals
		</h5>
		<!--  -->
		<div class="flex-w flex-sb-m p-b-12">
			<span class="s-text18 w-size19 w-full-sm">
				Subtotal:
			</span>
			<span class="m-text21 w-size20 w-full-sm">
				$39.00
			</span>
		</div>
		<!--  -->
		<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
			<span class="s-text18 w-size19 w-full-sm">
				Shipping:
			</span>
			<div class="w-size20 w-full-sm">
				<p class="s-text8 p-b-23">
					There are no shipping methods available. Please double check your address, or contact us if you need any help.
				</p>
				<span class="s-text19">
					Calculate Shipping
				</span>
				<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
					<select class="selection-2" name="country">
						<option>Select a country...</option>
						<option>US</option>
						<option>UK</option>
						<option>Japan</option>
					</select>
				</div>
				<div class="size13 bo4 m-b-12">
					<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
				</div>
				<div class="size13 bo4 m-b-22">
					<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
				</div>
				<div class="size14 trans-0-4 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
					Update Totals
					</button>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="flex-w flex-sb-m p-t-26 p-b-30">
			<span class="m-text22 w-size19 w-full-sm">
				Total:
			</span>
			<span class="m-text21 w-size20 w-full-sm">
				$39.00
			</span>
		</div>
		<div class="size15 trans-0-4">
			<!-- Button -->
			<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
			Proceed to Checkout
			</button>
		</div>
		<?php do_action( 'woocommerce_after_cart' ); ?>
	</div>
</div>
</section>
<?php get_footer(); ?>