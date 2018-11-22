<?php
/**
 * The template for displaying archive pages of products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php //declare $terms for product slugs
$terms = get_terms( array(
	'taxonomy' => 'product-type',
	'hide_empty' => false
));
?>


<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'product', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">

			<?php if ( $wpb_all_query->have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">Shop Stuff</h1>
					<ul class="product-type-list">
						<?php foreach ( $terms as $term ) : ?> 
						<li>
							<p><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> </a></p>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</header><!-- .page-header -->

				<div class="product-grid">
					<!-- /* Start the Loop */ -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'product' ); ?>
					<?php endwhile; wp_reset_postdata();?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>

			</div>	<!-- .product-grid -->	
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
