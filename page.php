<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ofcwp
 */

get_header('splash');
?>

<main id="primary" class="site-main">

	<?php get_template_part('template-parts/content', 'page'); ?>

	<?php get_template_part('template-parts/content', 'tag-cloud'); ?>

	<?php get_template_part('template-parts/content', 'bullets'); ?>

	<?php get_template_part('template-parts/content', 'cards');	?>

	<div class=""><?php get_template_part('template-parts/content', 'carousel'); ?></div>

	<?php if (get_the_title() == "Impact") : ?>
		<div style="padding-top: 1rem;"></div>
		<h2 class="ofcwp-carousel-header"><span> Impact Numbers </span> </h2>
		<div style="padding-bottom: 2rem;"></div>
		<?php get_template_part('template-parts/content', 'impact-icons'); ?>
		<div style="padding-bottom: 2rem;"></div>
	<?php endif; ?>

	<?php get_template_part('template-parts/content', 'get-involved-icons'); ?>

	<?php get_template_part('template-parts/content', 'advocacy-icons'); ?>

	<?php if (get_field('ofc_testimonial_title')) : ?>
		<?php get_template_part('template-parts/content', 'testimonial'); ?>
	<?php endif; ?>

	<?php get_template_part('template-parts/content', 'front-blog'); ?>

	<?php get_template_part('template-parts/content', 'contact-us'); ?>
</main><!-- #main -->

<?php
// get_sidebar('splash');
get_footer('splash');
