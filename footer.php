<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>

			<nav class="site-nav footer-nav">
				<?php
				
				$args = array(
					'theme_location' => 'footer'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
			<p class="footer-bottom"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>

		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
