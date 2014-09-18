<?php 

	//Tell wordpress to run cassa_setup function when after_setup_theme hook is run 
	add_action('after_setup_theme', 'cassa_setup');
?>

<?php

	function cassa_setup() {

		/*Post thumbnail support*/
		add_theme_support('post-thumbnails');

		/*Adding post formats*/
		add_theme_support ('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

		/*Allow users to set a custom backgorund*/
		add_theme_support ('custom-background', array());

		/*add rss url to the header so you dont have to*/
		add_theme_support('automatic-feed-links');

		/*when you set this wp can set the maximum size of embeded objects like large images all embeded without breaking the content*/
		if( !isset($content_width) ) $content_width = 698;

		
		/*Allow users to custom header images*/
		add_theme_support('custom-header', array(

			/*Default header image*/
			'default-image' => get_template_directory_uri() . '/images/carousel/acrilycs_workshop.jpg',
			
			'header-text' => false,

			/*header image width*/
			'width' => 1140,

			/*flexible height*/
			'flex-height' => true,
			
			/*header image height*/
			'height' => 200)
		);

		/*Default custom headers packed with the theme. %s is a placeholder for the theme template directory URI*/
		register_default_headers(array(

			'interiorDecor' => array (
				'url' => '%s/images/carousel/interior_decor_workshop.jpg',
				'thumbnail_url' => '%s/images/carousel/interior_decor_workshop_tn.jpg',
				/*translators: header image description*/
				'description' => __('Interior Decor', 'cassamilano')
				
				),

			'jewelryWorkshop' => array (
				'url' => '%s/images/carousel/jewelry_workshop.jpg',
				'thumbnail_url' => '%s/images/carousel/jewelry_workshop_tn.jpg',
				'description' => __('Jewelry Workshop', 'cassamilano')

				),

			'metalEngravingWorkshop' => array (
				'url' => '%s/images/carousel/metal_engraving_workshop.jpg',
				'thumbnail_url' => '%s/images/carousel/metal_engraving_workshop_tn.jpg',
				'description' => __('Metal Engraving Workshop', 'cassamilano')
				)		
			)
		);


	}

	/*custom nav menus*/
	function register_my_menu() {
		register_nav_menus(array(

			'top'	=>__('Top Header Navigation', 'cassamilano'),
			'footer'=> __('Footer Navigation', 'cassamilano'),
			)
		);
	}

	add_action('init','register_my_menu');	


?>


<?php 
		/*Add widget area*/
		function cassa_widget_init() {

			register_sidebar ( array(

				'name' => __('Sidebar Widget Area', 'cassamilano'),
				'id' => 'sidebar_widget_area',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				)
			);
		}

?>

	<?php add_action('widgets_init', 'cassa_widget_init'); ?>

<?php
	

				/*Enqueuing Styles and Scripts*/

function cassa_scripts() {
	if( !is_admin()) {
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/_/css/bootstrap.css');

		wp_enqueue_style('my-style' , get_template_directory_uri() . '/_/css/mystyles.css');

		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/_/js/bootstrap.js');

		wp_enqueue_script('my-script', get_template_directory_uri() . '/_/js/myscript.js');
	}
}

	add_action ('wp_enqueue_scripts', 'cassa_scripts');
?>
