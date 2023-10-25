<?php
/**************************************
    Employee Bio Shortcode Function
**************************************/
function wp_create_shortcode_for_employee_bio(){
    //get columns field value from employee settings page
    $columns = 1;
    $columns = get_field('columns','options');
    $args = array(
        'post_type'      => 'employee',
        'posts_per_page' => '-1',
        'publish_status' => 'published',
     );
    $query = new WP_Query($args);
    if($query->have_posts()):
        $result .= '<section class="employee-blocks col-'.$columns.'">';
            while($query->have_posts()) : $query->the_post();

                $title = get_the_title(); //Employee Title
                if( function_exists('acf_add_local_field_group')){
                    $thumbnail = get_field('employee_image'); //Employee Thumbnail
                    if($thumbnail){
                        $size = 'full';
                        $thumbnail_attr = [];
                        if($thumbnail['alt'] = ''){
                            $thumbnail_attr['alt'] = '';
                            $thumbnail_attr['role'] = 'presentation';
                        } else {
                            $thumbnail_attr['alt'] = esc_attr($thumbnail['alt']);
                        }
                        $thumbnail = wp_get_attachment_image( $thumbnail['id'], $size, false, $thumbnail_attr );
                    }
                    $position_title = get_field('position_title'); //Employee Position Title
                    $divison_title = get_field('division_title'); // Employee Division Title
                    $divison_logo = get_field('division_logo'); //Employee Divison Logo
                    if($divison_logo){
                        $logo_attr = [];
                        if($divison_logo['alt'] = ''){
                            $logo_attr['alt'] = '';
                            $logo_attr['role'] = 'presentation';
                        } else {
                            $logo_attr['alt'] = esc_attr($divison_logo['alt']);
                        }
                        $divison_logo = wp_get_attachment_image( $divison_logo['id'], $size, false, $logo_attr );
                    }
                    $time_spent = get_field('time_spent'); //How many years spent in company
                    $bio_text = get_field('description'); // Employee Bio Text

        	        $result .= '<article class="employee-bio">';
        	        $result .= '<div class="employee-thumbnail">' . $thumbnail . '</div>';
                    $result.= '<div class="emloyee-details">';
                    $result .= '<strong class="employee-name">' . $title . '</strong>';
        	        $result .= '<span class="employee-position"><strong>Position:</strong>' . $position_title . '</span>';
        	        $result .= '<span class="employee-division"><strong>Division:</strong>' . $divison_title . '</span>';
                    $result .= '<div class="employee-division-logo">' . $divison_logo . '</div>';
                    $result .= '<p class="employee-time-spent">' . $time_spent . '</p>';
                    $result .= '<div class="employee-bio-text"><p>' . $bio_text . '</p></div>';
        	        $result .= '</div>';
                    $result .= '</article>';
                } else {
                    $result .= '<div class="empty"><p>no data available</p></div>';
                }

            endwhile;
        $result .= '</section>';
        wp_reset_postdata();
    endif;
    return $result;

}
  
add_shortcode( 'employee-bio', 'wp_create_shortcode_for_employee_bio' );