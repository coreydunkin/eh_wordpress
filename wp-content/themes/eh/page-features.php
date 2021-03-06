<?php /* Template Name: Features */ ?>


<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <div class="slider sub">
    <div class="background-backup" style="background: url(<?php the_field('features_image'); ?>) no-repeat center center;">
    	<div class="text-block">
    		<h1><?php the_field('features_title'); ?></span></h1>
    		<p class="sub"><?php the_field('features_sub_header'); ?></p>
    	</div>
    	<img class="sliderimg" src="<?php the_field('features_image'); ?>" />
    <div class="overlay"></div>
    <!-- hello -->
    </div>

    

  </div>

  
<div class="thumbs container">
	
  <!-- FEATURES SECTION -->
<h2>OUR <span>FEATURES</span></h2>
<?php query_posts('category_name=features'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <a class="thumbbox" href="<?php the_permalink(); ?>">
    <div class="image" style>
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="desc subdesc">
      <h3><?php the_title(); ?></h3>
      <!--<p><?php echo substr(get_the_excerpt(), 0,61); ?>...</p>-->
      <p><?php the_field('post_sub_header'); ?></p>
    </div>
    <div class="arrow"></div>
  </a>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</div><!-- end second container -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();


