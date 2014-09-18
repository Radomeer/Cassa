
<?php get_header();?>

<div class="col col-lg-12">
	<div id="myCarousel" class="carousel slide hidden-xs">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active"><img src="<?php echo get_template_directory_uri() . '/images/carousel/seattle_skyline.jpg' ?>" alt="Photo of Seattle Skyline">
				<div class="carousel-caption">
					<h4>SEATTLE SKYLINE</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque numquam, nostrum consectetur deleniti? Nemo totam, saepe sed repellendus velit corporis id, repudiandae excepturi, quaerat voluptates maxime est quisquam dolorem. Minima.</p>	
				</div> <!-- carousel-caption -->
			</div>
			<div class="item"><img src= "<?php echo get_template_directory_uri() . '/images/carousel/painting_workshop.jpg' ?>" alt="Photo of"></div>
			<div class="item"><img src="<?php echo get_template_directory_uri() . '/images/carousel/pottery_workshop.jpg' ?>" alt="Photo of"></div>
			<div class="item"><img src="<?php echo get_template_directory_uri() . '/images/carousel/jewelry_workshop.jpg' ?>" alt="Photo of"></div>
			
		</div><!--carousel-inner-->

		<a href="#myCarousel" class=" left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a href="#myCarousel" class="right carousel-control" data-slide ="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

	</div> <!--myCarousel-->


</div> <!-- container -->
<section class = "main col col-lg-8">

</section> <!-- end main content-->


<section class = "sidebar col col-lg-4">

</section>	<!-- end sidebar -->

<?php get_footer(); ?>









