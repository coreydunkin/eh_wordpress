<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eh
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <div class="slider sub">
    <divdiv class="background-backup" style="background: url(<?php the_field('post_image'); ?>) no-repeat center center;">
    	<div class="text-block">
    		<h1><?php the_field('post_title'); ?></span></h1>
    		<p class="sub"><?php the_field('post_sub_header'); ?></p>
    	</div>
    	<img class="sliderimg" src="<?php the_field('post_image'); ?>" />
    	<div class="overlay"></div>
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
