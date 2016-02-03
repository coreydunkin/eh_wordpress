<?php /* Template Name: Features */ ?>


<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <div class="slider sub">
    <div>
    	<div class="text-block">
    		<h1>OUR <span>FEATURES</span></h1>
    		<p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
    	</div>
    	<img class="sliderimg" src="<?php bloginfo('stylesheet_directory'); ?>/img/subhero.jpg" />
    </div>
  </div>

  
<div class="thumbs container">
	
  <!-- FEATURES SECTION -->
<h2>OUR <span>FEATURES</span></h2>
<?php query_posts('category_name=features'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <a class="thumbbox" href="<?php the_permalink(); ?>">
    <div class="image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="desc">
      <h3><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
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


