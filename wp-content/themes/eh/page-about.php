<?php /* Template Name: About */ ?>


<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <div class="slider sub">
    <div>
    	<div class="text-block">
    		<h1><?php the_field('features_title'); ?></span></h1>
    		<p class="sub"><?php the_field('features_sub_header'); ?></p>
    	</div>
    	<img class="sliderimg" src="<?php the_field('features_image'); ?>" />
    </div>
  </div>

  
<div class="container posts">
  
  <?php the_field('content'); ?>

  <!-- POSTS SECTION -->
  <!--<div class="smaller-container">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptas 
      quidem officia architecto eveniet ipsum cum quas error, 
      autem ex odit tempora minima quisquam quasi vero illo 
      optio quaerat veniam!
    </p>
  </div>
  
  <div class="breakout">
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas sit amet nib</h3>
  </div>

  <div class="smaller-container">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptas 
      quidem officia architecto eveniet ipsum cum quas error, 
      autem ex odit tempora minima quisquam quasi vero illo 
      optio quaerat veniam!
    </p>
  </div>

  <div class="breakout-image">
      <img src="http://placehold.it/560x250" alt="">
  </div>

  <div class="image-left">
    <img src="http://placehold.it/560x250" alt="">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptas 
      quidem officia architecto eveniet ipsum cum quas error, 
      autem ex odit tempora minima quisquam quasi vero illo 
      optio quaerat veniam!
    </p>
  </div>  

  <div class="image-right">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit voluptas 
      quidem officia architecto eveniet ipsum cum quas error, 
      autem ex odit tempora minima quisquam quasi vero illo 
      optio quaerat veniam!
    </p>
    <img src="http://placehold.it/560x250" alt="">
  </div>-->   

</div><!-- end container -->


    </main><!-- #main -->
  </div><!-- #primary -->
<?php

get_footer();


