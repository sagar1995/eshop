<?php
	get_header();
	get_header();
	while ( have_posts() ) :
	the_post();
	$image = get_the_post_thumbnail_url();
?>
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm" id="myhead">
	<a href="<?php echo get_site_url(); ?>" class="s-text16">
		Home
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>
	<a href="<?php echo get_site_url().'/blog' ?>" class="s-text16">
		Blog
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>
	<span class="s-text17">
		<?php the_title() ?>
	</span>
</div>
<!-- content page -->
<section class="bgwhite p-t-60 p-b-25">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-9 p-b-80">
				<div class="p-r-50 p-r-0-lg">
					<div class="p-b-40">
						<div class="blog-detail-img wrap-pic-w">
							<img src="<?php echo $image; ?>" alt="IMG-BLOG">
						</div>
						<div class="blog-detail-txt p-t-33">
							<h4 class="p-b-11 m-text24">
							<?php the_title() ?>
							</h4>
							<div class="s-text8 flex-w flex-m p-b-21">
								<span>
									<?php eshop_posted_by(); ?>
									<span class="m-l-3 m-r-6">|</span>
								</span>
								<span>
									<?php eshop_posted_on(); ?>
									<span class="m-l-3 m-r-6">|</span>
								</span>
								<span>
									<?php echo get_comments_number(); ?> Comments
								</span>
							</div>
							<p class="p-b-25">
								<?php the_content(); ?>
							</p>
						</div>
						<div class="flex-m flex-w p-t-20">
							<span class="s-text20 p-r-20">
								Tags
							</span>
							<div class="wrap-tags flex-w">
								<?php
									$post_tags = get_the_tags();
									if ( $post_tags ) {
									foreach( $post_tags as $tag ) {
										echo '<p class="tag-item" href="">'.$tag->name.'</p>';
									}
									}
								?>
							</div>
						</div>
						<div class="flex-m flex-w p-t-20">
							<span class="s-text20 p-r-20">
								Category:-
							</span>
							<div class="wrap-tags flex-w">
								<?php
									$categories = get_the_category();
									if ( ! empty( $categories ) ) {
										echo esc_html( $categories[0]->name );
									};
								?>
							</div>
						</div>
					</div>
					<!-- Leave a comment -->
					<?php  
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 p-b-80">
				<div class="rightbar">
					<!-- Search -->
					<div class="pos-relative bo11 of-hidden">
						<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">
						<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
						<i class="fs-13 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					<!-- Categories -->
					<h4 class="m-text23 p-t-56 p-b-34">
					Categories
					</h4>
					<ul>
						<?php
							$categories = get_categories('taxonomy=category&post_type=post');
							
							$count = count($categories);
						foreach ($categories as $category) { ?>
						<li class="p-t-6 p-b-8 bo6">
							<?php echo "<a class='s-text13 p-t-5 p-b-5' href='".get_category_link($category->cat_ID)."'>".$category->name."</a><br>"; ?>
						</li>
						<?php
						}
						?>
					</ul>
					<!-- Featured Products -->
					<h4 class="m-text23 p-t-65 p-b-34">
					Featured Products
					</h4>
					<ul class="bgwhite">
						<li class="flex-w p-b-20">
							<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
								<img src="<?php echo get_template_directory_uri(); ?>/images/item-16.jpg" alt="IMG-PRODUCT">
							</a>
							<div class="w-size23 p-t-5">
								<a href="product-detail.html" class="s-text20">
									White Shirt With Pleat Detail Back
								</a>
								<span class="dis-block s-text17 p-t-6">
									$19.00
								</span>
							</div>
						</li>
					</ul>
					<!-- Archive -->
					<h4 class="m-text23 p-t-50 p-b-16">
					Archive
					</h4>
					<ul>
						<li class="flex-sb-m">
							<a href="#" class="s-text13 p-t-5 p-b-5">
								<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
							</a>
						</li>
					</ul>
					<!-- Tags -->
					<h4 class="m-text23 p-t-50 p-b-25">
					Tags
					</h4>
					<?php
						$tags = get_tags();
						$html = '<div class="wrap-tags flex-w">';
								foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
								
								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug} tag-item'>";
								$html .= "{$tag->name}</a>";
								}
						$html .= '</div>';
						echo $html;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endwhile;
get_footer();