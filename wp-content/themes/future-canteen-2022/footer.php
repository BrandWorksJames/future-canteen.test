<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Future_Canteen_2022
*/

?>

<footer id="colophon" class="site-footer">
	<div id="footer-inner">
		<div class="site-info">
			<a href="/"><img id="footer-logo" src="/wp-content/uploads/2022/10/footer-logo.svg" /></a>
		</div><!-- .site-info -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer-primary-menu',
			)
		);
		wp_nav_menu(
			array(
				'theme_location' => 'footer-secondary-menu',
			)
		);
		?>
		<div id="copyright">
			<p>Copyright <?php echo date("Y"); ?> © T&T Management Group Pty Ltd T/A Future Canteen.</p>
			<p>ABN: 31 601 944 941</p>
		</div>
	</div><!-- #footer-inner -->
	<img src='/wp-content/uploads/2022/10/footer-banner.svg' />
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
