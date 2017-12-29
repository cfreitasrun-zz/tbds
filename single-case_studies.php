<?php
/**
 * Template name: sites page
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
				<h1>My site collection</h1>

			</div>
		<?php endwhile; // end of the loop. ?>
	<!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Sites</h4>

		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=sites'); ?>
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
									<p><strong><a href="<?php echo $link; ?>">Visit Live Site</a></strong></p>
						</li>

	  				<?php endwhile; // end of loop. ?>
	  				<?php wp_reset_query(); ?>
		</ul>

		</div>
</section>
</div>

<?php get_footer(); ?>
