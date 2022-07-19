<?php
/*
Plugin Name: REBI - Form
Description: Membuat custom form untuk kebutuhan bisnis anda, seperti form untuk lead, membuat form untuk order
Version: 1
Author: REBI - RemoteBisnis
Author URI: http://RemoteBisnis.com/tools
*/			
error_reporting(0);
define('RDRFO', plugin_dir_path(__FILE__)); 

function rebiform_function_install() {

    global $wpdb;

    $sql = "
    	 

    ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
    $wpdb->query($sql);
}

 
register_activation_hook(__FILE__, 'rebiform_function_install');

add_action('admin_menu','addmenu_reviovw');
function addmenu_reviovw() {
	add_menu_page('FORM',
	'REBI - FORM',
	'manage_options',
	'rebiform_list',
	'rebiform_list',   
	'https://mediabuatlinkwedding.files.wordpress.com/2022/04/iconplugin.png', 
	3
	);
	// buat form, desain field di form, dan buat shorcode dan tambah field untuk script, kali aja ada yg mau pasang pixel, harga di form spaya ter track di statistik lead, pilih type , apa form biasa -> thanks, atau form redirec to wa 
	// nama, pixel, harga, form type, field
 	add_submenu_page('rebiform_list',
	'Form',
	'Form',
	'manage_options',
	'rebiform_list',
	'rebiform_list'); 

 	// manage lead, buat simple analisis, daftar hari ini, profit hari ini, tampil grafik 5 hari yg lalu, dan report keseluruhan data,
	add_submenu_page('rebiform_list',
	'Lead',
	'Lead',
	'manage_options',
	'rebiform_lead',
	'rebiform_lead'); 	

	add_submenu_page('rebiform_list',
	'Setting',
	'Setting',
	'manage_options',
	'rebiform_setting',
	'rebiform_setting');  
}
function rebiform_load_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'assets/s.css' );
}
add_action( 'wp_enqueue_scripts', 'rebiform_load_css' );

include_once(RDRFO.'controller/logic.php');
include_once(RDRFO.'inc/switch.php');