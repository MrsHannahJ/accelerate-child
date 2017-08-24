<?php
/**
 * The template for displaying case study pages.

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php
				while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image1 = get_field('image_1');
				$image2 = get_field('image_2');
				$image3 = get_field('image_3');
				$size = "full";
			?>
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title() ;?></h2>
						<h6><?php echo $services ;?></h6>
						<h5>Client: <?php echo $client ;?></h5>
						<?php the_content(); ?>
						<strong><a href="<?php echo $link ;?>">Visit Live Site</a></strong>
					</aside>
					<div class="case-study-images">
						<?php if($image1) { ?>
							<?php echo wp_get_attachment_image ($image1, $size); ?>
						<?php } ?>
						<?php if($image2) { ?>
							<?php echo wp_get_attachment_image ($image2, $size); ?>
						<?php } ?>
						<?php if($image3) { ?>
							<?php echo wp_get_attachment_image ($image3, $size); ?>
						<?php } ?>
					</div>

				</article>
				<footer class="navigation container">
				<div class="left">&larr;<a href="<?php echo home_url(); ?>/case-studies">back to work</a></div>
			</footer>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
