<?php
vc_remove_param('cms_counter_single', 'title');
vc_remove_param('cms_counter_single', 'description'); 
vc_remove_param('cms_counter_single', 'content_align'); 
vc_remove_param('cms_counter_single', 'icon_type'); 
 
$params = array( 
    array(
        'type' => 'img',
        'param_name' => 'counter_style',
    	'heading' => esc_html__( 'Counter Style', 'Webbyrom' ),
    	'value' => array(
            'style-1' => get_template_directory_uri().'/vc_params/layouts/counter_single1.png',
            'style-2' => get_template_directory_uri().'/vc_params/layouts/counter_single2.png',
            'style-3' => get_template_directory_uri().'/vc_params/layouts/counter_single3.png',
    	),
        "admin_label" => true,
        'description' => esc_html__( 'Select Counter style', 'Webbyrom' ),
        'weight' => 1,  
    	"group" => esc_html__("Template", 'Webbyrom')
    ),
    array(
        'type' => 'dropdown',
        'param_name' => 'counter_type',
        'heading' => esc_html__( 'Counter Options Type', 'Webbyrom' ),
        'value' => array(
            esc_html__( 'Icon', 'Webbyrom' ) => 'counter_icon',
            esc_html__( 'Image', 'Webbyrom' ) => 'counter_image',
        ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Icon library', 'Webbyrom' ),
        'value' => array(
            esc_html__( 'Font Awesome', 'Webbyrom' ) => 'fontawesome',
            esc_html__( 'Open Iconic', 'Webbyrom' ) => 'openiconic',
            esc_html__( 'Typicons', 'Webbyrom' ) => 'typicons',
            esc_html__( 'Entypo', 'Webbyrom' ) => 'entypo',
            esc_html__( 'Linecons', 'Webbyrom' ) => 'linecons',
            esc_html__( 'P7 Stroke', 'Webbyrom' ) => 'pe7stroke',
            esc_html__( 'RT Icon', 'Webbyrom' ) => 'rticon',
        ),
        'param_name' => 'icon_type',
        'description' => esc_html__( 'Select icon library.', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_type',
            'value' => array(
                'counter_icon',
            ),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'color_icon',
        'heading' => esc_html__( 'Icon Color', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_type',
            'value' => array(
                'counter_icon',
            ),
        ),
    ),
    array(
        "type" => "attach_image",
        "heading" => esc_html__("Image Item",'Webbyrom'),
        "param_name" => "image",
        'dependency' => array(
            'element' => 'counter_type',
            'value' => array(
                'counter_image',
            ),
        ),
    ),
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Font Weight Title",'Webbyrom'),
        "param_name" => "fweight1",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ), 
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Font Size Title",'Webbyrom'),
        "param_name" => "fsize1",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ), 
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Line Height Title",'Webbyrom'),
        "param_name" => "lheight1",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ),
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Font Weight Counter",'Webbyrom'),
        "param_name" => "fweight",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ), 
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Font Size Counter",'Webbyrom'),
        "param_name" => "fsize",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ), 
    array(
        "type"       => "textfield",
        "heading"    => esc_html__("Line Height Counter",'Webbyrom'),
        "param_name" => "lheight",
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
            ),
        ),
    ), 
    array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Icon library', 'Webbyrom' ),
    'value' => array(
        esc_html__( 'Font Awesome', 'Webbyrom' ) => 'fontawesome',
        esc_html__( 'Flat Icon', 'Webbyrom' ) => 'flaticon',
        esc_html__( 'Food Font 2', 'Webbyrom' ) => 'foodfont2',
    ),
        'param_name' => 'icon_type',
        'description' => esc_html__( 'Select icon library.', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-3',
            ),
        ),
    ),
    array(
        'type'       => 'iconpicker',
        'heading'    => esc_html__( 'Icon Item', 'Webbyrom' ),
        'param_name' => 'icon_fontawesome',
        'value'      => '',
        'settings'   => array(
            'emptyIcon'    => true, 
            'type'         => 'fontawesome',
            'iconsPerPage' => 200,  
        ),
        'dependency' => array(
            'element' => 'icon_type',
            'value'   => 'fontawesome',
        ),
        'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
    ),
    array(
        'type'       => 'iconpicker',
        'heading'    => esc_html__( 'Icon Item', 'Webbyrom' ),
        'param_name' => 'icon_flaticon',
        'value'      => '',
        'settings'   => array(
            'emptyIcon'    => true, 
            'type'         => 'flaticon',
            'iconsPerPage' => 200,  
        ),
        'dependency' => array(
            'element' => 'icon_type',
            'value'   => 'flaticon',
        ),
        'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
    ),
    array(
        'type'       => 'iconpicker',
        'heading'    => esc_html__( 'Icon Item', 'Webbyrom' ),
        'param_name' => 'icon_foodfont2',
        'value'      => '',
        'settings'   => array(
            'emptyIcon'    => true, 
            'type'         => 'foodfont2',
            'iconsPerPage' => 200,  
        ),
        'dependency' => array(
            'element' => 'icon_type',
            'value'   => 'foodfont2',
        ),
        'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'bg_color',
        'heading' => esc_html__( 'Background Color', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-3',
            ),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'color_text',
        'heading' => esc_html__( 'Text Color', 'Webbyrom' ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'color_counter',
        'heading' => esc_html__( 'Counter Color', 'Webbyrom' ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'color_icon',
        'heading' => esc_html__( 'Icon Color', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-3',
            ),
        ),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__("Border", 'Webbyrom'),
        'param_name' => 'border',
        'value' => array(
            'Yes' => true
            ),
        'std' => 'true',
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-1',
                'style-2',
            ),
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Border Style', 'Webbyrom' ),
        'value' => array(
            esc_html__( 'Vertical', 'Webbyrom' ) => 'vertical',
            esc_html__( 'Horizontal', 'Webbyrom' ) => 'horizontal',
        ),
        'default'   => 'vertical',
        'param_name' => 'border_style',
        'description' => esc_html__( 'Choose border style for counter.', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-2',
            ),
        ),
    ),
    array(
        'type' => 'colorpicker',
        'param_name' => 'color_border',
        'heading' => esc_html__( 'Border Color', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'border',
            'value' => array(
                '1',
            ),
        ),
    ),
    array(
        'type' => 'textarea',
        'param_name' => 'counter_content',
        'heading' => esc_html__( 'Counter Content', 'Webbyrom' ),
        'dependency' => array(
            'element' => 'counter_style',
            'value' => array(
                'style-2',
            ),
        ),
    ),
)  
 
?>