<?php /* Template Name: Models */ ?>


<?php


get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

  <div class="slider sub">
    <div>
      <div class="text-block">
        <h1><?php the_field('models_title'); ?></span></h1>
        <p class="sub"><?php the_field('models_sub_header'); ?></p>
      </div>
      <img class="sliderimg" src="<?php the_field('models_image'); ?>" />
    </div>
  </div>

  
<div class="thumbs container">
  
  <!-- models SECTION -->
<h2>OUR <span>models</span></h2>
<?php query_posts('category_name=models'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <a class="thumbbox" href="<?php the_permalink(); ?>">
    <div class="image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="desc">
      <h3><?php the_title(); ?></h3>
      <p><?php echo substr(get_the_excerpt(), 0,61); ?>...</p>
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


