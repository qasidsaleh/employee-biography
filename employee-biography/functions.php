<?php
/*********************************
	   Enqueue Stylesheet
**********************************/
function employee_biography_styles() {
    wp_enqueue_style( 'style',  plugin_dir_url( __FILE__ ) . '/styles/style.css' );                      
}
add_action( 'wp_enqueue_scripts', 'employee_biography_styles' );
/*********************************
	   Register Post Type
**********************************/
require_once 'includes/register_employee_post_type.php';
/*********************************
	   Register ACF fields
**********************************/
include( plugin_dir_path( __FILE__ ) . 'includes/register_acf_fields.php' );
/*********************************
	   Register ACF fields
**********************************/
include( plugin_dir_path( __FILE__ ) . 'includes/register_acf_fields.php' );