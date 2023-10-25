<?php
/*********************************
	   Register ACF Fields
**********************************/
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
        'key' => 'employee_bio',
        'title' => 'Employee Bio',
        'label_placement' => 'top',
        'fields' => array (
            array (
                'key' => 'field_1',
                'label' => 'Image',
                'name' => 'employee_image',
                'type' => 'image',
                'required' => 1,
            ),
            array (
                'key' => 'field_2',
                'label' => 'Position Title',
                'name' => 'position_title',
                'type' => 'text',
                'required' => 1,
            ),
            array (
                'key' => 'field_3',
                'label' => 'Division Title',
                'name' => 'division_title',
                'type' => 'text',
                'required' => 1,
            ),
            array (
                'key' => 'field_4',
                'label' => 'Division Logo',
                'name' => 'division_logo',
                'type' => 'image',
                'required' => 0,
            ),
            array (
                'key' => 'field_5',
                'label' => 'How long with the company?',
                'name' => 'time_spent',
                'type' => 'text',
                'required' => 1,
            ),
            array (
                'key' => 'field_6',
                'label' => 'Bios Text',
                'name' => 'description',
                'type' => 'textarea',
                'required' => 1,

            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'employee',
                ),
            ),
        ),
    ));
endif;