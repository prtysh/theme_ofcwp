<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ofcwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ofcwp-post-content">
		<div class="ofcwp-post-container">
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta">
						<span class="ofcwp-blog-author">
							<?php
							ofcwp_posted_by();
							?>
						</span>
						<span style="color: #e11e7a"> &#9679 </span>
						<span class="ofcwp-blog-time">
							<?php
							ofcwp_posted_on();
							?>
						</span>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php
			$ofcwp_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			echo '<img class="ofcwp-post-banner-image" src="' .  esc_url($ofcwp_featured_img_url) . '" alt="">';

			?>
			<div class="entry-content" style="padding-bottom: 1rem;">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ofcwp'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'ofcwp'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<?php
			$tags = get_the_tags();
			if ($tags) {
				$html = '<div class="ofcwp_post_tags">';
				$html .= '<div style="padding-top:20px; border-top:1px solid #e11e7a;"></div>';
				foreach ($tags as $tag) {
					$tag_link = get_tag_link($tag->term_id);

					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='ofcwp-front-blog-tag ofcwp-post-tag'>";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';
				echo $html;
			}
			?>
			<?php

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle ofcwp-nav-post-subtitle">' . esc_html__('Previous:', 'ofcwp') . '</span> <span class="nav-title ofcwp-nav-post-title">%title</span>',
					'next_text' => '<span class="nav-subtitle ofcwp-nav-post-subtitle">' . esc_html__('Next:', 'ofcwp') . '</span> <span class="nav-title ofcwp-nav-post-title">%title</span>',
				)
			);
			?>
		</div>
		<div class="ofcwp-blog-side">
			<div class="ofcwp-front-blog-grids">
				<?php
				$args = array('post_type' => 'post', 'posts_per_page' => 3);
				$the_query = new WP_Query($args);
				?>
				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="ofcwp-front-blog">

							<div class="ofcwp-blog-card-img-frame">
								<?php
								if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail('small', array('class' => 'ofcwp-front-blog-card-img'));
								}
								?>
							</div>

							<p class="ofcwp-front-blog-card-title" style="padding-top:5px;"> <?php the_title_attribute(); ?></p>

							<div class="ofcwp-blog-card-text-frame">
								<?php
								$tags = get_the_tags();
								if ($tags) {
									$html = '<div class="ofcwp_post_tags">';
									foreach ($tags as $tag) {
										$tag_link = get_tag_link($tag->term_id);

										$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='ofcwp-front-blog-tag'>";
										$html .= "{$tag->name}</a>";
									}
									$html .= '</div>';
									echo $html;
								}
								?>

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
			<?php get_sidebar('post'); ?>
		</div>
	</div>



	<footer class="entry-footer">
		<?php //ofcwp_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->