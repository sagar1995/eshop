<div class="col-md-8 col-lg-9 p-b-75">
	<div class="p-r-50 p-r-0-lg">
		<!-- item blog -->
		<div class="item-blog p-b-80">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
				$wp_query = new WP_Query($args);
				while ( have_posts() ) : the_post();
			?>
			<a href="<?php the_permalink(); ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
				<?php eshop_post_thumbnail(); ?>
			</a>
			
			<div class="item-blog-txt p-t-33">
				<h4 class="p-b-11">
				<a href="<?php the_permalink(); ?>" class="m-text24">
					<?php the_title() ?>
				</a>
				</h4>
				<div class="s-text8 flex-w flex-m p-b-21">
					<span>
						<?php eshop_posted_by(); ?>
						<span class="m-l-3 m-r-6">|</span>
					</span>
					<span>
						Cooking, Food
						<span class="m-l-3 m-r-6">|</span>
					</span>
					<span>
						8 Comments
						<span class="m-l-3 m-r-6">|</span>
					</span>
					<span>
						<?php eshop_posted_on(); ?>
					</span>
				</div>
				<p class="p-b-12">
					<?php the_excerpt(); ?>
				</p>
				<a href="<?php the_permalink(); ?>" class="s-text20">
					Continue Reading
					<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
				</a><br><br><br>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- Pagination -->
	<div class="pagination flex-m flex-w p-r-50">
		<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
		<?php previous_posts_link( 'Newer posts &rarr;' ); ?>
	</div>
</div>
<div class="col-md-4 col-lg-3 p-b-75">
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
		
		<h4 class="m-text23 p-t-50 p-b-16">
		Archive
		</h4>
		<ul>
			
			<li class="flex-sb-m">
				<a href="#" class="s-text13 p-t-5 p-b-5">
					<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
				</a>
				<!-- <span class="s-text13">
					(39)
				</span> -->
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