<?php
/*
Plugin Name: Nominet

Description: A powerful Wordpress plugin showing off the most basic Wordpress skills of Ferencz Kaszoni :).

Plugin URI: http://www.nomitest.co.uk/


Version: 1.0

Author: Ferencz Kaszoni

Author URI: https://www.nomi.net/test/
*/


defined( 'ABSPATH' ) or die( 'No access to these files - this is kind of unnecessary in this case' );


 




///////////////////////// create database table
register_activation_hook( __FILE__, 'nominet_create_db' );
function nominet_create_db() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'nominet';

	$sql = "CREATE TABLE $table_name (
		ID mediumint(9) NOT NULL AUTO_INCREMENT,
		headline varchar(100) NOT NULL,
		tagline varchar(500) NOT NULL,
		button varchar(50) NOT NULL,
		image_url varchar(100) NOT NULL,
		UNIQUE KEY id (ID)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}


//////////////// add some nice headline, tagline and button text, + image path
function nominet_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'nominet'; // do not forget about tables prefix

	
	
	for ($no = 0 ; $no < 5; $no++){ 
	
    $wpdb->insert($table_name, array(
        'headline' => 'Headline text',
        'tagline' => 'Lorem ipsum dolor sit amet, eam everti ullamcorper an, eu ridens vulputate sea. Mei labore numquam fabulas ea, no eam graeci detraxit expetenda.',
        'button' => 'Find out more >>',
		'image_url' => site_url().'/wp-content/plugins/nominet/images/sample-image.jpg',
    ));
	
	
	}
	
	
	
   
}

register_activation_hook(__FILE__, 'nominet_install_data');











/////////////////////// add admin menu and admin page
add_action('admin_menu', 'nominet_menu');
 
function nominet_menu(){
        add_menu_page( 'Nominet Menu', 'Nominet', 'manage_options', 'nominet', 'test_init' );
}
 
function test_init(){
        include('admin/settings.php');
}
 
	





?>