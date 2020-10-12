<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ofcwp
 */

?>

<div class="ofcwp-page-start ofcwp-main-container">
	<div class="ofcwp-main-left">
		<?php if (get_field('ofcwp_quote')) : ?>
			<blockquote class="ofcwp-quote"> <?php the_field('ofcwp_quote'); ?> </blockquote>
		<?php endif; ?>


	</div>
	<div class="entry-content ofcwp-main-right">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'ofcwp'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->