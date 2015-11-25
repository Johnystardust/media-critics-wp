<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        2:41 PM
 *
 * @package Media Critics
 */

if(get_field('page_content')):

    while(has_sub_field('page_content')):

        switch(get_row_layout()):

            case 'slider':
                get_template_part('includes/acf/parts/slider');
                break;
            case 'header':
                get_template_part('includes/acf/parts/header');
                break;
            case 'text_title_subtitle':
                get_template_part('includes/acf/parts/text-title-subtitle');
                break;
            case 'latest_work':
                get_template_part('includes/acf/parts/latest-work');
                break;
            case 'facts':
                get_template_part('includes/acf/parts/facts');
                break;
            case 'strategy':
                get_template_part('includes/acf/parts/strategy');
                break;
            case 'services':
                get_template_part('includes/acf/parts/services');
                break;
            case 'link_block':
                get_template_part('includes/acf/parts/link-block');
                break;
            case 'maps':
                get_template_part('includes/acf/parts/maps');
                break;
            case 'contact_form':
                get_template_part('includes/acf/parts/contact');
                break;


        endswitch;

    endwhile;

endif;