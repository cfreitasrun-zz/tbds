<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage tinybirddesignstudio Marketing
 * @since tinybirddesignstudio Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>

			</div>
		<?php endwhile; // end of the loop. ?>
	<!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>

		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
	  				<?php while ( have_posts() ) : the_post();
										$image_1 = get_field("image_1");
										$size = "medium";
						?>
						<li class="individual-featured-work">
									<figure>
												<?php echo wp_get_attachment_image($image_1, $size); ?>
									</figure>

		 							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h3><?php the_content(); ?></h3>
						</li>

	  				<?php endwhile; // end of loop. ?>
	  				<?php wp_reset_query(); ?>
		</ul>

		<h4>Services</h4>

		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=&post_type=services'); ?>
	  				<?php while ( have_posts() ) : the_post();
										$featuredsite = get_field("featuredsite");
										$size = "medium";
						?>
						<li class="individual-featured-work">


									<figure>
												<?php echo wp_get_attachment_image($featuredsite, $size); ?>
												<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</figure>


						</li>
	  				<?php endwhile; // end of loop. ?>
	  				<?php wp_reset_query(); ?>
		</ul>

	</div>
</section>
</div>



	</div><!--site content-->
</section>

<?php get_footer(); ?>
