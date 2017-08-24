<?php
/**
 * The template for displaying all case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
     <?php query_posts('post_type=case_studies&order=ASC'); ?>
      <?php
        while ( have_posts() ) : the_post();
        $services = get_field('services');
        $link = get_field('site_link');
        $image1 = get_field('image_1');
        $size = "full";
      ?>
        <article class="case-study">
          <aside class="case-study-sidebar">
            <h2><?php the_title() ;?></h2>
            <h6><?php echo $services ;?></h6>
            <?php the_excerpt(); ?>
            <strong><a href="<?php the_permalink(); ?>">View Project <span>&rsaquo;</span></a></strong>
          </aside>
          <div class="case-study-images">
            <a href="<?php the_permalink(); ?>">
              <?php if($image1) { ?>
                <?php echo wp_get_attachment_image ($image1, $size); ?>
              <?php } ?>
            </a>
          </div>
        </article>
      <?php endwhile; // end of the loop. ?>
    <?php wp_reset_query(); ?>
  
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
