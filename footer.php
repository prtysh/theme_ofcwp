<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ofcwp
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ofcwp' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ofcwp' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ofcwp' ), 'ofcwp', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
			<div class="ofcwp-footer">
			<div>
				<h2 class="footer-ofc"> One Future Collective</h2>
			</div>

			<div class="footer-flex">
				<h3 class="footer-title"> About</h3>
				<a href="" class="footer-link"> Journey, Values and Impact</a>
				<a href="" class="footer-link"> Team </a>
				<a href="" class="footer-link"> Advisors and Mentors</a>
				<a href="" class="footer-link"> Theory of Change </a>
			</div>

			<div class="footer-flex">
				<h3 class="footer-title"> Our Work </h3>
				<a href="" class="footer-link"> Knowledge </a>
				<a href="" class="footer-link"> Communities </a>
				<a href="" class="footer-link"> Advocacy </a>
				<a href="" class="footer-link"> Fellowship </a>	
				<a href="" class="footer-link"> FemJustice Centre </a>	
				<a href="" class="footer-link"> Queer Rights Centre </a>	
			</div>

			<div class="footer-flex">
				<a href="" class="footer-link"> Resources </a>	
				<a href="" class="footer-link"> Blog </a>	
				<a href="" class="footer-link"> Get Involved </a>	
				<a href="" class="footer-link"> Hire Us </a>
				<a href="" class="footer-link"> FAQs </a>
			</div>

		</div>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
