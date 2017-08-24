<?php
/**
 * The template for displaying the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

  <div class="hero">
  <h1><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</h1>
  </div>
	<div id="primary" class="site-content">
		 <div id="content" role="main" class="about-page">
          <div class="about-services">
            <h5>Our Services</h5>
            <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
          </div>
			
			<ul class="list-services">
				<?php query_posts('post_type=services&order=ASC'); ?>
				<?php
					while ( have_posts() ) : the_post();
					$icon= get_field("service_icon");
					$size="medium";
				?>
				<li>
                  <?php if($icon) { ?>
				    <?php echo wp_get_attachment_image ($icon, $size); ?>
                  <?php } ?>
                  <div class="service-description">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                  </div>
				</li>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
    </ul>

<!--  </div>-->
<!--</section>-->
		 

<div class="contact-link">
<h2>Interested in working with us?</h2>
<a href="#">Contact Us</a>
</div>
			

		 </div>
		<!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
