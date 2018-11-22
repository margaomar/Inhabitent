<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="adventure-grid-item">
	<div class="story-wrapper">
		<a href="<?php the_permalink()?>" rel="bookmark">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</a>
	</div>

	<div class="story-info">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<a class="white-btn" href="<?php the_permalink()?>">Read More</a>
	</div>
</div>
