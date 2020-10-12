
<?php if (get_the_title() == "Our Work" || get_the_title() == "Certificate Courses" || get_the_title() == "Advocacy") : ?>
	<div style="height:30px"></div>
	<h2 class="ofcwp-carousel-header"><span>What's New</span> </h2>
	<div style="height:30px"></div>
	<div class="ofcwp-front-blog-grid">
		<?php
		$args = array('post_type' => 'post', 'posts_per_page' => 3);
		$the_query = new WP_Query($args);
		?>
		<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="ofcwp-front-blog">
					<p class="ofcwp-front-blog-card-title"> <?php the_title_attribute(); ?></p>
					<p><span class="ofcwp-front-blog-card-author"> by <?php the_author();  ?> </span> </p>

					<div class="ofcwp-blog-card-img-frame">
						<?php
						if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium', array('class' => 'ofcwp-front-blog-card-img'));
						}
						?>
					</div>
					<div class="ofcwp-blog-card-text-frame">
						<!-- <p class="ofcwp-front-blog-date"> <?php echo get_the_date(); ?></p> -->
						<?php
						$tags = get_the_tags();
						if ($tags) {
							$html = '<div class="ofcwp_post_tags">';
							$date = get_the_date();
							// $html .= "<div class='ofcwp-front-blog-date'>{$date}</div>";
							$html .= "<div> <span class='ofcwp-front-blog-date'>{$date} </span>";
							foreach ($tags as $tag) {
								$tag_link = get_tag_link($tag->term_id);

								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='ofcwp-front-blog-tag'>";
								$html .= "{$tag->name}</a>";
								//$html .= "<span> &#9679 </span>";
							}
							$html .= '</div> </div>';
							echo $html;
						}
						?>

						<p class="ofcwp-blog-card-excerpt"> <?php echo get_the_excerpt();  ?></p>
						<!-- <a class="ofcwp-blog-card-continue pure-button" href="<?php // the_permalink(); 
																					?>"> Continue Reading </a> -->
						<button class="ofcwp-blog-card-continue pure-button" onclick="window.location.href='<?php the_permalink(); ?>';'">Continue Reading</button>
					</div>
				</div>

			<?php endwhile;
		else : ?>
			<?php get_the_tags(); ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
			<p> <?php ofcwp_entry_footer(); ?></p>
		<?php endif; ?>
		<?php // echo paginate_links(); 
		?>

	</div>
<?php endif; ?>