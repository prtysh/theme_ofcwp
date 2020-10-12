
	<?php if (get_field('ofc_card_header')) : ?>
		<h2 class="ofcwp-carousel-header"><span><?php the_field('ofc_card_header'); ?></span> </h2>
	<?php endif; ?>

	<?php if (get_field('ofc_card_title_1')) : ?>
		<div class="ofcwp-card-group">
			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_1");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_1')) : ?>
								<?php the_field('ofc_card_title_1'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_1')) : ?>
							<?php the_field('ofc_card_text_1'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_2");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_2')) : ?>
								<?php the_field('ofc_card_title_2'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_2')) : ?>
							<?php the_field('ofc_card_text_2'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_3");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_1')) : ?>
								<?php the_field('ofc_card_title_1'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_3')) : ?>
							<?php the_field('ofc_card_text_3'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_4");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_4')) : ?>
								<?php the_field('ofc_card_title_4'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_4')) : ?>
							<?php the_field('ofc_card_text_4'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_5");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_5')) : ?>
								<?php the_field('ofc_card_title_5'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_5')) : ?>
							<?php the_field('ofc_card_text_5'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>

			<div class="ofcwp-custom-card card" style="width: 18rem;">
				<?php
				$image = get_field("ofc_card_image_6");
				if (!empty($image)) : ?>
					<img class="ofcwp-custom-card-img card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<div class="card-body">
					<div class="ofcwp-custom-card-title-container">
						<h5 class="ofcwp-custom-card-title card-title">
							<?php if (get_field('ofc_card_title_6')) : ?>
								<?php the_field('ofc_card_title_6'); ?>
							<?php endif; ?>
						</h5>
						<div class="ofcwp-custom-card-border"></div>
					</div>
					<p class="ofcwp-custom-card-text card-text">
						<?php if (get_field('ofc_card_text_6')) : ?>
							<?php the_field('ofc_card_text_6'); ?>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
	<?php endif; ?>