<?php


$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );






$nomiidz = $_POST['nomiid'];

$headlinez = $_POST['headline'];  


$taglinez = $_POST['tagline']; 


$buttonz = $_POST['button']; 


$imagez = $_POST['imageurl']; 
 

global $wpdb;


$wpdb->update( 
	 'wp_nominet',  
	
	array( 
		'headline' => $headlinez,
		'tagline' => $taglinez,
		'button' => $buttonz,
		'image_url' => $imagez
		
		
	
		
	), 
	
	array( 'ID' => $nomiidz ) 
);




?>