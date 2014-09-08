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

	}

?>


<?php
	

				/*Enqueuing Styles and Scripts*/

	function cassa_scripts() {

		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/_/css/bootstrap.css');
	
		wp_enqueue_style('my-style' , get_template_directory_uri() . '/_/css/mystyles.css');

		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/_/js/bootstrap.js');

		wp_enqueue_script('my-script', get_template_directory_uri() . '/_/js/myscript.js');


	}

	add_action ('wp_enqueue_scripts', 'cassa_scripts');
?>
