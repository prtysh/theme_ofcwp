<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ofcwp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title('<h1 class="entry-title">', '</h1>'); ?> -->
	</header><!-- .entry-header -->

	<!-- <?php ofcwp_post_thumbnail(); ?> -->
	<div class="pure-g">
		<div class="entry-content pure-u-4-5">
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