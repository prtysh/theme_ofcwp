<?php if (get_the_title() == "Hire Us" || get_the_title() == "Get Involved") : ?>
	<div class="ofcwp-client-container text-center my-3">
		<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
			<div class="carousel-inner w-100" role="listbox">
				<div class="carousel-item row no-gutters active">
					<?php $clientimg = "ofcwp_client_image_1"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_2"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_3"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_4"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_5"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_6"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>

				</div>
				<div class="carousel-item row no-gutters">
					<?php $clientimg = "ofcwp_client_image_7"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_8"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_9"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_10"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_11"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_12"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
				</div>
				<div class="carousel-item row no-gutters">
					<?php $clientimg = "ofcwp_client_image_13"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_14"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_15"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_16"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_17"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
					<?php $clientimg = "ofcwp_client_image_18"; ?>
					<?php if (get_field($clientimg)) : ?>
						<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="<?php the_field($clientimg); ?>"></div>
					<?php endif; ?>
				</div>
			</div>
			<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<?php endif; ?>

<?php if (is_front_page()) : ?>
	<?php $frontpage_id = get_option( 'page_on_front' ); ?>
	<div class="ofcwp-client-container text-center my-3">
		<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
			<div class="carousel-inner w-100" role="listbox">
				<div class="carousel-item row no-gutters active">
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Arguendo.jpg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/AURO.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gently altered.webp"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gov of haryana.png"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Belabai Morarka School Nawalgarh.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Canada Consulate General.jpg"></div>
				</div>
				
				<div class="carousel-item row no-gutters">
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/AURO.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gently altered.webp"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gov of haryana.png"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Belabai Morarka School Nawalgarh.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Canada Consulate General.jpg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Arguendo.jpg"></div>
				</div>

				<div class="carousel-item row no-gutters">
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Arguendo.jpg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/AURO.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gov of haryana.png"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Gently altered.webp"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Belabai Morarka School Nawalgarh.jpeg"></div>
					<div class="col-2 float-left ofcwp-client-img-div"><img class="img-fluid ofcwp-client-img" src="/wp-content/themes/ofcwp/assets/images/clients_partners/Canada Consulate General.jpg"></div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<?php endif; ?>