

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<!-- // check if the post or page has a Featured Image assigned to it. -->
		
			
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'large' ); }
						?>
					<header class="entry-header">
						
						<?php the_title( '<h1 class="entry-title container">', '</h1>' ); ?>
						<div class="entry-meta container"> 
							<span class="byline">
								<span class="author vcard"><?php red_starter_posted_by(); ?></span>
							</span>										
						</div><!-- .entry-meta-->
					</header><!-- .entry-header -->

					<div class="entry-content container">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer container">
						<div class="social-buttons">
							<button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
							<button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
							<button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
						</div>
					<footer>
				</article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
