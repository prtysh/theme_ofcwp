<?php

/*
Template Name: With Quote
*/
?>


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
	<div class="ofcwp-with-quote-container pure-g">
		<div class="ofcwp-quote-container pure-u-6-24">
		
			<h4 class="ofcwp-quote">
			<span class="ofcwp-quotation-marks">"</span>		
				<?php echo get_post_meta($post->ID, 'ofcwp-quote', true); ?>
				
			</h4>
			<p class="ofcwp-quotation-marks">"</p>
		</div>
		<div class="ofcwp-quote-content pure-u-17-24"><?php get_template_part('template-parts/content', 'page'); ?></div>
	</div>
</main><!-- #main -->

<?php
// get_sidebar('splash');
get_footer('splash');
