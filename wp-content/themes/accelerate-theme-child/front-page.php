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
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<section class="featured-work">
	<div class="site-content">
			<h4>Featured Work</h4>
			<ul>
				<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
				<?php
					while ( have_posts() ) : the_post();
					$image1= get_field("image_1");
					$size="medium";
				?>
				<li>
				  <a href="<?php the_permalink(); ?>">
				    <?php echo wp_get_attachment_image( "$image1, $size") ?>
				  </a>
				  <a class="read-more-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
    </ul>

  </div>
</section>
<section class="our-services">
	<div class="site-content">
			<h4>Our Services</h4>
			<ul>
				<?php query_posts('posts_per_page=4&post_type=services&order=ASC'); ?>
				<?php
					while ( have_posts() ) : the_post();
					$icon= get_field("service_icon");
					$size="medium";
				?>
				<li>
				  <a href="<?php the_permalink(); ?>">
				    <?php echo wp_get_attachment_image( "$icon, $size") ?>
				  </a>
				  <a class="read-more-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			 <?php endwhile; ?>
			 <?php wp_reset_query(); ?>
    </ul>

  </div>
</section>
<section class="recent-posts">
  <div class="site-content">
    <div class="blog-post">
      <h4>From the Blog</h4>
      <?php query_posts('posts_per_page=1'); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
     <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    </div>
<!--twitter feed-->
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
      <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
          <a class="read-more-link" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Flocalhost%2Faccelerate%2F&ref_src=twsrc%5Etfw&screen_name=Accelerate&tw_p=followbutton" title="Twitter Follow Button" target="_blank">FOLLOW US <span>&rsaquo;</span></a>
      </div>
    <?php endif; ?>
    
  </div>
</section>

<?php get_footer(); ?>
