<?php
/*********************************
	Employee Custom Post Type
**********************************/
function EMPLOYEE() {
  register_post_type( 'employee',
    array(
        'labels' => array(
            'name' => __( 'Employee'),
            'singular_name' => __( 'Employee')
        ),
        'public' => true,
            'menu_icon' => 'dashicons-groups',
            'rewrite' => array('slug' => 'employee'),
        )
    );
}
add_action( 'init', 'EMPLOYEE' );
function EMPLOYEE_a() {
  $labels = array(
    'name'                => _x( 'Employee', 'Post Type General Name', 'Employee Bio' ),
    'singular_name'       => _x( 'Employee', 'Post Type Singular Name', 'Employee Bio' ),
    'menu_name'           => __( 'Employee', 'Employee Bio' ),
    'parent_item_colon'   => __( 'Employee', 'Employee Bio' ),
    'all_items'           => __( 'All Employees', 'Employee Bio' ),
    'view_item'           => __( 'View Employee', 'Employee Bio' ),
    'add_new_item'        => __( 'Add New Employee', 'Employee Bio' ),
    'add_new'             => __( 'Add New', 'Employee Bio' ),
    'edit_item'           => __( 'Edit Employee', 'Employee Bio' ),
    'update_item'         => __( 'Update Employee', 'Employee Bio' ),
    'search_items'        => __( 'Search Employees', 'Employee Bio' ),
    'not_found'           => __( 'Not Found', 'Employee Bio' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'Employee Bio' ),
  );
  $args = array(
    'label'               => __( 'Employee', 'Employee Bio' ),
    'description'         => __( 'Employee', 'Employee Bio' ),
    'labels'              => $labels,
    'supports'            => false,
  );
  register_post_type( 'EMPLOYEE', $args );
}
add_action( 'init', 'EMPLOYEE_a', 0 );

/*********************************
    Remove Default Editor
**********************************/
add_action( 'init', function() {
    remove_post_type_support( 'employee', 'editor' );
}, 99);