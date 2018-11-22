<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="content">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
				</div>

				<div class="site-info">
					<div class="container">COPYRIGHT © <?php echo date('Y');?> INHABITENT</div>
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
