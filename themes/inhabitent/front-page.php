<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- /* hero image part */ -->
            <section class="home-hero">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" width="100%" height="auto" alt="Inhabitent homepage image" />
            </section>

        

			<!-- section product terms links -->
			
			<?php 
			$terms = get_terms( array(
				'taxonomy' => 'product-type',
				'hide_empty' => false
			));
			?>
			<section class="product-info container"> 
				<div class='entry-content'></div>
				<h2>Shop Stuff</h2>
				<div class="product-type-blocks">
					
					<?php foreach ( $terms as $term ) : ?> 
					<div class="product-type-block-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->name; ?>.svg"> 

						<p><?php echo $term->description; ?></p>
						<a class="btn" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> Stuff</a>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
						
				</div>
			</section>

			<!-- section blog -->
			<section class="latest-entries">
				<div class="container">
					<h2>Inhabitent Journal</h2>
					<ul>
						<?php                 
						$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );                 
						$news_posts = get_posts( $args ); // returns an array of posts?>                      
						<?php foreach ( $news_posts as $post ) : ?> 
						<li> 
							<div class="thumbnail-wrapper"><?php the_post_thumbnail();?></div>
							<div class="post-info-wrapper">
								<span class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</span>
								<h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo the_title(); ?></a></h3>                        
							</div>
							<a class="black-btn" href="<?php the_permalink(); ?>">Read Entry</a>
						</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul> 
				</div>
			</section>
				
			<!-- section adventures -->
			<section class="adventures container">
				<h2>Latest Adventures</h2>
				<ul>
					
					<?php                 
					$args = array( 'post_type' => 'adventure', 'posts_per_page' => 4 );                 
					$news_posts = get_posts( $args ); // returns an array of posts?>                      
					<?php foreach ( $news_posts as $post ) : ?> 
						<li> 
							<div class="story-wrapper">
								<?php the_post_thumbnail();?>
								<div class="story-info">
									<h3 class="entry-title"><a href="<?php echo get_template_directory_uri(); ?>" rel="bookmark"><?php echo the_title(); ?></a></h3> 
									<a class="white-btn" href="<?php the_permalink() ?>">Read More</a>                   
								</div>
							</div>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul> 
				<p class="see-more">
                  <a href="<?php the_permalink()?>/adventures/" class="btn">More Adventures</a>
               </p>
			</section>
    	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


<!-- // <?php                 
// 			$args = array( 'post_type' => 'post', 'post_per_page' => 3 );                 
// 			$news_posts = get_posts( $args ); // returns an array of posts?>                      
// 			<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>             
// 				<div class="journalentry"><h3>
// 					<?php echo the_title(); ?></h3>                 
// 					<?php the_post_thumbnail();?>                 
// 					<p><?php the_date();?></p>                 
// 					<p><?php get_comments( $args );?></p>
// 				</div>     

// 			<?php endforeach; wp_reset_postdata(); ?> -->