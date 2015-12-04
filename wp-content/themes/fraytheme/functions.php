<?php 
function add_fray_style(){
	wp_enqueue_style('fray-style', get_template_directory_uri() . '/css/fraystyle.css', array(), '1.0', 'all' );
	wp_enqueue_scripts('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0', true );
	wp_enqueue_script('frayscript', get_template_directoy_uri() . '/js/fraysc.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'add_fray_style');
?>