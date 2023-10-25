<?php
/*********************************
	  Register Plugin Settings
**********************************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Employee Settings',
        'menu_title' => 'Employee Settings',
        'menu_slug' => 'employee-settings',
        'capability' => 'edit_posts',
    ));
}
/*********************************
      Plugin Settings Fields
**********************************/
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
        'key' => 'general-settings',
        'title' => 'General Settings',
        'label_placement' => 'top',
        'fields' => array (
            array (
                'key' => 'field_12',
                'label' => 'Shortcode Used for Employee Data',
                'name' => 'shortcode',
                'type' => 'message',
                'description' => 'test',
                'message' => '[employee-bio]',
            ),
            array (
                'key' => 'field_11',
                'label' => 'No of Columns',
                'name' => 'columns',
                'type' => 'select',
                'choices' => array(
                    '1' => '1 column',
                    '2' => '2 columns',
                    '3' => '3 columns',
                ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'employee-settings',
                ),
            ),
        ),
    ));
endif;
