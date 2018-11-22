<?php
/**
 * The template for displaying archive pages of products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">Latest Adventures</h1>
					</header><!-- .page-header -->

				<div class="adventure-grid">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'adventure' );
						?>
						

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

						<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

				</div>	<!-- .product-grid -->	

			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #content -->


<?php get_footer(); ?>
