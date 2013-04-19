<!doctype html>
<html class="no-js">
    <body lang="en">
        	<header class="clearfix">
                    <?php $this->widget('header')?>
			<!-- top widget -->
		</header>
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper">

				<!-- slider holder -->
				<div id="slider-holder" class="clearfix">
					
					<!-- slider -->
			        <div class="flexslider home-slider">
					  <ul class="slides">
					    <li>
					      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/01.jpg" alt="alt text" />
					    </li>
					    <li>
					      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/02.jpg" alt="alt text" />
					      <p class="flex-caption">Pellentesque habitant morbi  feugiat vitae.</p>
					    </li>
					    <li>
					      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/03.jpg" alt="alt text" />
					    </li>
					  </ul>
					</div>
		        	<!-- ENDS slider -->
		        	
		        	<div class="home-slider-clearfix "></div>
		        	
		        	<!-- Headline -->
		        	<div id="headline">
		        		<h1>RESPONSIVE, FREE AND SLEEK</h1>
		        		<p>Zeni is a FREE Responsive HTML 5 Template.</p>
		        		<p>Visit my <a href="http://www.luiszuno.com">site</a> for more freebies</p>
		        		<em id="corner"></em>
		        	</div>
		        	<!-- ENDS headline -->
		        	
		        	
				</div>
				<!-- ENDS slider holder -->
				
				
				<!-- home-block -->
	        	<div class="home-block" >
	        		<?php echo $content ;?>
	        	</div>
	        	<!-- ENDS home-block -->
	        	
	        	
	        	<!-- home-block -->
	        	<div class="home-block">
	        		<h2 class="home-block-heading"><span>LATEST PROJECTS</span></h2>
	        		<div class="one-fourth-thumbs clearfix">
	        			
	        			
	        			<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="single.html"  class="thumb"><img src="img/dummies/featured-7.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="single.html"  class="thumb"><img src="img/dummies/featured-8.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure>
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="single.html"  class="thumb"><img src="img/dummies/featured-9.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<figure class="last">
		        			<figcaption>
	        					<strong>Pellentesque habitant morbi</strong>
	        					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</span>
	        					<em>December 08, 2011</em>
	        					<a href="single.html" class="opener"></a>
			        		</figcaption>
			        		
			        		<a href="single.html"  class="thumb"><img src="img/dummies/featured-10.jpg" alt="Alt text" /></a>
		        		</figure>
		        		
		        		<a href="#" class="more-link right">More projects  &#8594;</a>
		        		
		        		
		        		
	        		</div>
	        		
	        		
	        	</div>
	        	<!-- ENDS home-block -->
	        		        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
		
		<footer>
			<?php $this->widget('footer');?>
		</footer>
					
	</body>
	
</html>