<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Afterlight
 * @since Afterlight 1.0
 */
?>
		<?php get_sidebar(); ?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php dynamic_sidebar( 'footer_widget' ); ?>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
