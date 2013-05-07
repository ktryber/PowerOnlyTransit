<?php get_header(); ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="myCarousel" class="carousel slide">
	  		
				  <ol style="list-style:none" class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
				    	<img src="http://localhost:8888/poweronly1/assets/truck1.jpg"/>
				    </div>
				    <div class="item">
				    	<img src="http://localhost:8888/poweronly1/assets/truck2.jpg"/>
				    </div>
				    <div class="item">
				    	<img src="http://localhost:8888/poweronly1/assets/truck3.jpg"/>
				    </div>
				  </div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
 
</div>

<div class="hero-main">
	<div class="row-fluid">
		<div class="span6">
			<h1>Lorem ipsum Adipisicing quis anim consectetur dolor eiusmod Ut veniam id enim mollit consectetur.</h1>
			<p>Lorem ipsum Pariatur exercitation laboris in commodo exercitation aute sint esse do.</p>
		</div>	

		<div class="span6">
			<button class="btn btn-large btn-primary" type="button" id="cta-button">Large button</button>
		</div>	
	</div>		

</div>	


	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>



<?php get_footer(); ?>