<?php
/**
* Product Loop Start
*
* This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
								* @see 	    https://docs.woocommerce.com/document/template-structure/
								* @package 	WooCommerce/Templates
* @version     3.3.0
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- <ul class="products columns-<?php //echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>"> -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/heading-pages-02.jpg);">
	<h2 class="l-text2 t-center">
	Alpas Collection
	</h2>
	<p class="m-text13 t-center">
		New Arrivals for Fashion Lover
	</p>
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
					Categories
					</h4>
					<ul class="p-b-54">
						<li class="p-t-4">
							<?php get_sidebar(); ?>
						</li>
						<section class="widget woocommerce">
							<a href="<?php echo get_site_url().'/shop'; ?>" class="btn btn-primary" style="width: 100% !important">Clear Filter</a>
						</section>
					</ul>
					
				</div>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<?php
							do_action( 'woocommerce_before_shop_loop' );
						?>
					</div>
				</div>
			</div>
		<div class="row">