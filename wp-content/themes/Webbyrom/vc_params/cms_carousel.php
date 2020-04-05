<?php
$params = array(  

	array(
        'type' => 'checkbox',
        'heading' => esc_html__("Show Description", 'Webbyrom'),
        'param_name' => 'show_description',
        'value' => array(
            'Yes' => true
        ),
        'std' => false,
        'template' => array('cms_carousel.php'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__("Description limit word", 'Webbyrom'),
        'description' => esc_html__( 'Enter the number of work to display', 'Webbyrom' ),
        'param_name' => 'word_number',
        'value' =>  '',
        'dependency' => array(
            'element' => 'show_description',
            'value' => array(
                '1',
            ),
        ),
    ), 
    array(
        'type' => 'checkbox',
        'heading' => esc_html__("Show Categories", 'Webbyrom'),
        'param_name' => 'show_categories',
        'value' => array(
            'Yes' => true
        ),
        'std' => true,
        'template' => array('cms_carousel--case_studies.php'),
    ),
    array(
        "type"       => "colorpicker",
        "heading"    => esc_html__("Category Color", 'Webbyrom'),
        "param_name" => "category_color",
        "value"      => "",
        'template' => array('cms_carousel--case_studies.php'),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__("Show Read more", 'Webbyrom'),
        'param_name' => 'show_more',
        'value' => array(
            'Yes' => true
        ),
        'dependency' => array(
            'element' => 'show_description',
            'value' => array(
                '1',
            ),
        ),
        'std' => false,
    ),
);

?>