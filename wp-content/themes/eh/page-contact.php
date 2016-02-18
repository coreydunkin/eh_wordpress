<?php /* Template Name: Contact */ ?>


<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <div class="slider sub">
    <div>
    	<div class="text-block">
    		<h1><?php the_field('contact_title'); ?></span></h1>
    		<p class="sub"><?php the_field('contact_sub_header'); ?></p>
    	</div>
    	<img class="sliderimg" src="<?php the_field('contact_image'); ?>" />
    </div>
  </div>

  
<div class="thumbs container">
	
  <!-- contact SECTION -->

    <?php the_field('contact_form'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();


