<?php /* Template Name: Home */ ?>


<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<?php if( have_rows('slider') ): ?>
  <div class="slider">




  





  <?php while( have_rows('slider') ): the_row(); 

    // vars
    $header = get_sub_field('slider_header');
    $subheader = get_sub_field('slider_sub_header');
    $linkurl = get_sub_field('link_url');
    $linktext = get_sub_field('link_text');
    $image = get_sub_field('slider_image');
    $videomp4 = get_sub_field('slider_video_mp4');
    $videoogv = get_sub_field('slider_video_ogv');
    $videowebm = get_sub_field('slider_video_webm');

    ?>



    <div>
      <div class="background-backup" style="background: url(<?php echo $image; ?>) no-repeat;">
        
          
        
        <div class="text-block">
          <h1><?php echo $header; ?></h1>
          <p class="sub"><?php echo $subheader; ?></p>
          <a href="<?php echo $linkurl; ?>" class="btn"><?php echo $linktext; ?></a>
        </div>
        <?php if( $videomp4 ): ?>
        <div class="video-container">
          <video id="video" controls preload="true" autoplay loop muted>
          <?php endif; ?>

            <source src="<?php echo $videomp4; ?>" type="video/mp4" > 
            <!--<source src="<?php echo $videoogv; ?>" type="video/ogv" >-->
            <source src="<?php echo $videowebm; ?>" type="video/webm" > 
          <?php if( $videomp4 ): ?>
          </video>
        </div>
        <?php endif; ?>
        <img class="sliderimg" src="<?php echo $image; ?>" />
      </div>

      <div class="overlay"></div>
    </div>


  <?php endwhile; ?>





  


<!--
    <div>
      <div class="text-block">
        <h1>STEPHANIE SHEPARD</h1>
        <p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        <a href="#" class="btn">view feature</a>
      </div>
      <video id="video" controls preload="true" autoplay loop muted>
        <source src="<?php bloginfo('stylesheet_directory'); ?>/img/vid-example.mp4" type="video/mp4" >  
        <source src="<?php bloginfo('stylesheet_directory'); ?>/img/vid-example.webm" type="video/webm" > 
      </video>
      <img class="sliderimg" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider1.jpg" />
    </div>

    <div>
    	<div class="text-block">
    		<h1>STEPHANIE SHEPARD</h1>
    		<p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  			<a href="#" class="btn">view feature</a>
    	</div>
    	<img class="sliderimg" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider1.jpg" />
    </div>

    <div>
    	<div class="text-block">
    		<h1>STEPHANIE SHEPARD</h1>
    		<p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  			<a href="#" class="btn">view feature</a>
    	</div>
    	<img class="sliderimg" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider1.jpg" />
    </div>
-->

  </div>
<?php endif; ?>  

<div class="thumbs container">
	
  <!-- FEATURES SECTION -->

  <h2>LATEST <span>FEATURES</span></h2>
<?php if( have_rows('latest_features') ): ?>
  <?php while( have_rows('latest_features') ): the_row(); 

    // vars
    $latestfeaturesheader = get_sub_field('latest_features_title');
    $latestfeaturessubtext = get_sub_field('latest_features_subtext');
    $latestfeatureslink = get_sub_field('latest_features_link');
    $latestfeaturesimage = get_sub_field('latest_features_image');

    ?>

  <a class="thumbbox" href="<?php echo $latestfeatureslink; ?>">
    <div class="image"><img src="<?php echo $latestfeaturesimage; ?>" alt=""></div>
    <div class="desc">
      <h3><?php echo $latestfeaturesheader; ?></h3>
      <p><?php echo $latestfeaturessubtext; ?></p>
    </div>
    <div class="arrow"></div>
  </a>


  <?php endwhile; ?>
<?php endif; ?>  

  <div class="thumbbox follow" href="#">
  	<div class="desc">
  		<h3>FOLLOW US</h3>
  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
      <br>
      <ul class="social">
        <li class="ig"><a href="<?php the_field('ig_social'); ?>" title="">FOLLOW US</a></li>
        <li class="sc"><a href="<?php the_field('sc_social'); ?>" title="">EHSNAP</a></li>
        <li class="fb"><a href="<?php the_field('fb_social'); ?>" title="">LIKE US</a></li>
        <li class="tw"><a href="<?php the_field('tw_social'); ?>" title="">TWEET US</a></li>
      </ul>


      <?php the_field('newsletter'); ?>
  	</div>
  	<div class="arrow"></div>
  </div>


  <!-- FEATURES SECTION -->

  <!--<h2>TOP <span>MODELS</span></h2>-->
<?php if( have_rows('top_models') ): ?>
  <?php while( have_rows('top_models') ): the_row(); 

    // vars
    $topmodelsheader = get_sub_field('top_models_title');
    $topmodelssubtext = get_sub_field('top_model_subtext');
    $topmodelslink = get_sub_field('top_model_link');
    $topmodelsimage = get_sub_field('top_model_image');

    ?>

  <a class="thumbbox" href="<?php echo $topmodelslink; ?>">
    <div class="image"><img src="<?php echo $topmodelsimage; ?>" alt=""></div>
    <div class="desc">
      <h3><?php echo $topmodelsheader; ?></h3>
      <p><?php echo $topmodelssubtext; ?></p>
    </div>
    <div class="arrow"></div>
  </a>


  <?php endwhile; ?>
<?php endif; ?>  




</div><!-- end second container -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();


