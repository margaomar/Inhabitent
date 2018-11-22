<?php
/**
 * The template for displaying the product taxonomies.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php echo single_term_title();?></h1>
					<div class="taxonomy-description"><p><?php echo the_archive_description();?></p></div>
				</header>
				<div class="product-grid">
					<?php if(have_posts()) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php  get_template_part( 'template-parts/content', 'product' ); ?>
					<?php endwhile; // End of the loop. ?>
					<?php endif; // End of the loop. ?>
				</div>
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
