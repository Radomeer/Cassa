<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset'); ?>" content = "<?php bloginfo('html_type');?>">
	<title><?php bloginfo('name');?><?php wp_title("||");?></title>
<?php wp_head();?>
</head>

<body>

	<div class = "container">
		<div class = "content row">
		
			
			<div class = "col-lg-12">
				<header class = "clearfix">
					<section id="branding">
						<a href="index.php"><img src="<?php echo get_template_directory_uri() . '/images/misc/ralogo_monogram.png';?>" alt=""></a>
					</section> <!-- End branding -->

					<div class="main-menu">
						<?php wp_nav_menu(array(

							'theme_location' => 'top',
							'container' => 'div',
							'container_class' => 'navbar',
							'menu_class' => 'nav navbar-nav',
							));
						?>
					</div> <!-- End main menu -->
				</header> <!-- end header -->
			</div>	<!-- End col -->