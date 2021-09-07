<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-copyright">
					&copy; <?php echo date ("Y"); ?> cool mat. All Rights Reserved
			</div>

			<div class="footer-social">
				<a class="social-link" href="https://facebook.com/coolmat">
					<img class="social-facebook" src="<?php bloginfo('template_url'); ?>'/assets/facebook-icon.svg'">
				</a>
				<a class="social-link" href="https://instagram.com/coolmat">
				<img class="social-instagram" src="<?php bloginfo('template_url'); ?>'/assets/instagram-icon.svg'">
				</a>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
