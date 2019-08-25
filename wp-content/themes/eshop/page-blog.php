<?php get_header(); ?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/heading-pages-05.jpg);">
	<h2 class="l-text2 t-center">
	Blog
	</h2>
</section>
<!-- content page -->
<section class="bgwhite p-t-60">
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template-parts/content-blog' ); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>