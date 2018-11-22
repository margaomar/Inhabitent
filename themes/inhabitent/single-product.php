<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php // get_template_part( 'template-parts/content', 'product' ); ?>




	<div class="product-image-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>

	<div class="product-content-wrapper">
		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<!-- <div class="entry-meta"> -->
				<!-- <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?> -->
			<!-- </div>.entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p class="price"><?php echo CFS() ->get('price'); ?></p>

			<?php the_content(); ?>

			<div class="social-buttons">
				<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
				<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
				<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
			</div>
			<!-- <?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?> -->
		</div><!-- .entry-content -->
	</div> <!-- .product-content-wrapper -->

	<!-- <?php the_post_thumbnail(); ?> --> 
			

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
