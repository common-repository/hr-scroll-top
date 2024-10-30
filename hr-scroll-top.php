<?php 
/*
	Plugin Name:       HR Scroll Top
	Plugin URI:        https://plugin.habibcoder.com/hr-scroll-top/
	Author:            HabibCoder
	Author URI:        https://habibcoder.com
	License:           GNU General Public License
	License URI:       http://www.gnu.org/licenses/gpl-2.0.html
	Version:           3.0.0
	Requires at least: 6.0
	Tested up to:      6.6
	Requires PHP:      7.0
	Description:       HR Scroll Top is a very useful Scroll To Top plugin. This plugin has more icons, icon color, Icon position, and smooth scroll speed options.
	Tags: HR Scroll Top, hrscrolltop, Scroll Top, Scroll to Top, scrolltop
	Text Domain:       hr-scroll-top
*/

// ABSPATH Defined
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ==========================
	Text Domain
========================== */
add_action('plugins_loaded', 'hrst_load_textdomain');
function hrst_load_textdomain(){
    load_plugin_textdomain('hr-scroll-top', false, dirname(plugin_basename( __FILE__ ) ) . '/lang');
}


/* ==============================
	Get Plugin Directory and URL
============================== */
$hrst_dir = plugin_dir_path( __FILE__ );

$hrst_plugin_url = plugin_dir_url( __FILE__ );

/* ==============================
	Requires Files
============================== */
// admin option
$hrst_adminoption_dir =  $hrst_dir . 'admin/hrst_admin_option.php';
if(file_exists( $hrst_adminoption_dir )){
	require_once( $hrst_adminoption_dir );
};


/* ==============================
	Style and Scropts Enqueue
============================== */
add_action('wp_enqueue_scripts', 'hr_scrolltop_stylejs');
function hr_scrolltop_stylejs(){
	// custom css
	wp_enqueue_style('hrst_style', PLUGINS_URL('css/hrst-style.css', __FILE__), array(), '2.0.0', 'all');
	// main js
	wp_enqueue_script('hrst_main', PLUGINS_URL('js/hrst-main.js', __FILE__), array('jquery'), '2.0.0', false);
};

/* ==============================
	Admin Stylesheet Enqueue
============================== */
add_action('admin_enqueue_scripts', 'hrst_admin_stylejs');
function hrst_admin_stylejs(){
	// admin style
	wp_enqueue_style( 'hrst-admin-style', PLUGINS_URL('css/hrst-admin-style.css', __FILE__), array(), '2.0.0', 'all'); 
};


/* ==============================
   Scroll Top Icons
============================== */
add_action('wp_footer', 'hr_scroll_top_function');
function hr_scroll_top_function(){

	// wp_footer contents/all icons load from dynamic/hrst_icons_load.php
	global $hrst_dir;
	$hrst_icons_dir = $hrst_dir . 'dynamic/hrst_icons_load.php';
	if(file_exists( $hrst_icons_dir )){
		require_once( $hrst_icons_dir );
	};
	
};



/* ==============================
   All Styles/JS Dynamic
============================== */
add_action('wp_head', 'hrst_dynamic_stylejs');
function hrst_dynamic_stylejs(){ 

	// wp_head content will load from dynamic/hrst_cssjs_dynamic.php file
	global $hrst_dir;
	$hrst_dynamic_dir = $hrst_dir . 'dynamic/hrst_cssjs_dynamic.php';
	if(file_exists( $hrst_dynamic_dir )){
		require_once( $hrst_dynamic_dir );
	}

};



/* ===============================================
	Redirect Plugin Admin Page after Activate
=============================================== */
register_activation_hook( __FILE__, 'hrst_plugin_activation' );
function hrst_plugin_activation(){
	add_option( 'hrst_plugin_do_activated', true);
}

add_action( 'admin_init', 'hrst_plugin_redirect' );
function hrst_plugin_redirect(){
	if ( is_admin() && get_option('hrst_plugin_do_activated', false)) {
		delete_option( 'hrst_plugin_do_activated' );
		
		if(!isset($_GET['active_multi'])) {
			wp_safe_redirect( admin_url('admin.php?page=hrst-scroll-top') );
			exit;
		}

	}
};


