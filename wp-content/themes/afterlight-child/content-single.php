<?php
/**
 * @package Afterlight
 * @since Afterlight 1.0
 *
 * Template for single post for Afterlight Child
 *
 */

$when = get_field('when');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-date">
			<?php echo $when ?>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<?php afterlight_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'afterlight' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'afterlight' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php afterlight_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'afterlight' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
