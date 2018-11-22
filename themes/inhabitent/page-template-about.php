<?php
/*
Template Name: About
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--<section class="home-hero">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about-hero.jpg" width="100%" height="auto" alt="Inhabitent About Page image" /> 
			</section> -->
			<!-- // check if the post or page has a Featured Image assigned to it. -->
			<header class="entry-header hero-image-header">
				<?php if ( has_post_thumbnail() ) {
					 the_post_thumbnail(); }
					?>
			</header>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page', 'about' ); 
				 ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
