<?php
/**
 * The default template for displaying individual CV items
 *
 * Used for both single and index/archive/search.
 *
 * @package Afterlight
 * @since Afterlight 1.0
 */

// Define CV Variables

	$entry = get_field ( 'cv_single' );
	$date = get_field ( 'item_date' );
	$location = get_field ( 'item_location' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>		
		<?php endif; ?>
	</header>

	<ul class="cv-item-wrapper">
		<li class="cv-location"><?php echo $location ?></li>
		<li class="cv-entry"><?php echo $entry ?></li>
		<li class="cv-date"><?php echo $date ?></li>
	</ul>

</article><!-- #post-## -->
