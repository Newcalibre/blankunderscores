<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Test
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container col-sm-12">
			<?php if ( has_nav_menu( 'footer-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
		        wp_nav_menu( array( 'theme_location' => 'footer-menu') ); 
		    }?>
		    <?php dynamic_sidebar('sidebar-footer'); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'test' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'test' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'test' ), 'Test', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
