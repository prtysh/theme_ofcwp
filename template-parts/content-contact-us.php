<?php if (get_the_title() == "Get Involved" || get_the_title() == "Hire Us") : ?>

	<h2 class="ofcwp-carousel-header"><span>Contact Us</span> </h2>
	<div style="padding-bottom: 1rem;"></div>
	<?php if (get_the_title() == "Get Involved" || get_the_title() == "Hire Us") : ?>
		<div class="ofcwp-form-grid">
			<div class="ofcwp-form-text">
				<p>If you want to know more about our work,
					partner with us, have us conduct a
					workshop at your organisation or just want
					to chat – we would love to hear from you!</p>
				<p>You can fill out the contact form provided
					here, email us at info@onefuturecollective.org</p>

				<p>or</p>
				<p>WhatsApp us at +91 9820618799</p>

			</div>
			<div class="ofcwp-form-form">
				<form>
					<div class="form-group">
						<!-- <label for="ofcwp-input-name">Name</label> -->
						<input type="text" class="form-control" id="ofcwp-input-name" aria-describedby="emailHelp" placeholder="Name">
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="ofcwp-email-name" aria-describedby="emailHelp" placeholder="Email">
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="ofcwp-subject-name" aria-describedby="emailHelp" placeholder="Subject">
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="ofcwp-message-name" aria-describedby="emailHelp" placeholder="Message">
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>

					<button type="submit" class="ofcwp-button btn btn-primary">Send</button>
				</form>
			</div>
		</div>
	<?php endif; ?>
	<h2 class="ofcwp-carousel-header"><span>Clients and Partners</span> </h2>
	<?php get_template_part('template-parts/content', 'clients-partners'); ?>
	<div style="padding-bottom: 3rem;"></div>


<?php endif; ?>