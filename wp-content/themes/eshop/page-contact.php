<?php get_header(); ?>
<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/header.jpg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">

				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="27.672876" data-map-y="85.301132" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
						
					<?php
						while ( have_posts() ) :
						the_post();

						the_content();

						endwhile;
					?>
					
				</div>
			</div>
		</div>
	</section>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>

<?php get_footer(); ?>