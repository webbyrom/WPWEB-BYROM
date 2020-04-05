<?php
vc_remove_param('cms_fancybox_single', 'title');
vc_remove_param('cms_fancybox_single', 'description');
vc_remove_param('cms_fancybox_single', 'content_align');
vc_remove_param('cms_fancybox_single', 'description_item');
vc_remove_param('cms_fancybox_single', 'button_text');
vc_remove_param('cms_fancybox_single', 'button_link');
vc_remove_param('cms_fancybox_single', 'button_type');
vc_remove_param('cms_fancybox_single', 'cms_template');

vc_add_param("cms_fancybox_single", array(
    'type' => 'img',
    'heading' => esc_html__( 'Fancy Style', 'Webbyrom' ),
    'value' => array(
        'style-2' => get_template_directory_uri().'/vc_params/layouts/fancy-style2.png',

    ),
    'param_name' => 'fancy_style',
    "admin_label" => true,
    'description' => esc_html__( 'Select fancybox style', 'Webbyrom' ),
    "group" => esc_html__("Layout", 'Webbyrom'),
    'weight' => 1
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "heading" => esc_html__("Extra Class",'Webbyrom'),
    "param_name" => "class",
    "value" => "",
    "description" => "",
    "group" => esc_html__("Layout", 'Webbyrom'),
    'weight' => 1
));
vc_add_param("cms_fancybox_single", array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Fancy Options Type', 'Webbyrom' ),
    'value' => array(
        esc_html__( 'Icon', 'Webbyrom' ) => 'option_icon',
        esc_html__( 'Image', 'Webbyrom' ) => 'option_image',
    ),
    'param_name' => 'option_type',
    'dependency' => array(
        'element' => 'fancy_style',
        'value' => array(
            'style-2',
        ),
    ),
    "group" => esc_html__("Fancy Settings", 'Webbyrom')
));
vc_add_param("cms_fancybox_single", array(
    'type' => 'dropdown',
	'heading' => esc_html__( 'Icon library', 'Webbyrom' ),
	'value' => array(
		esc_html__( 'Font Awesome', 'Webbyrom' ) => 'fontawesome',
        esc_html__( 'Flat Icon', 'Webbyrom' ) => 'flaticon',
        esc_html__( 'Food Font 2', 'Webbyrom' ) => 'foodfont2',
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
        'element' => 'option_type',
        'value' => array(
            'option_icon',
        ),
    ),
	"group" => esc_html__("Fancy Icon Settings", 'Webbyrom')
));

vc_add_param("cms_fancybox_single", array(
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
    "group" => esc_html__("Fancy Settings", 'Webbyrom')
)); 
vc_add_param("cms_fancybox_single",array(
        'type' => 'iconpicker',
        'heading' => esc_html__( 'Icon Item', 'Webbyrom' ),
        'param_name' => 'icon_foodfont2',
        'value' => '',
        'settings' => array(
            'emptyIcon' => true,  
            'type' => 'foodfont2',
            'iconsPerPage' => 200,  
        ),
        'dependency' => array(
            'element' => 'icon_type',
            'value' => 'foodfont2',
        ),
        'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
        "group" => esc_html__("Fancy Settings", 'Webbyrom')
));

vc_add_param("cms_fancybox_single", array(
    "type" => "attach_image",
    "heading" => esc_html__("Image Item",'Webbyrom'),
    "param_name" => "image",
    'dependency' => array(
        'element' => 'option_type',
        'value' => array(
            'option_image',
        ),
    ),
    "group" => esc_html__("Fancy Settings", 'Webbyrom')
));

vc_add_param("cms_fancybox_single", array(
	"type" => "textfield",
    "heading" => esc_html__("Title Item",'Webbyrom'),
    "param_name" => "title_item",
    "value" => "",
    "admin_label" => true,
    "description" => esc_html__("Title Of Item",'Webbyrom'),
    "group" => esc_html__("Option", 'Webbyrom')
));

vc_add_param("cms_fancybox_single", array(
	"type" => "textarea_html",
    "heading" => esc_html__("Content Item",'Webbyrom'),
    "param_name" => "content",
    "value" => "",
    'dependency' => array(
        'element' => 'fancy_style',
        'value' => array(
            'style-2',
        ),
    ),
    "group" => esc_html__("Option", 'Webbyrom')
));

vc_add_param("cms_fancybox_single", array(
	'type' => 'vc_link',
    'heading' => esc_html__( 'URL (Link)', 'Webbyrom' ),
    'param_name' => 'link',
    'description' => esc_html__( 'Add link to button.', 'Webbyrom' ),
    'dependency' => array(
        'element' => 'fancy_style',
        'value' => array(
            'style-2',
        ),
    ),
    'group' => esc_html__("Option", 'Webbyrom'),
));

vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Icon Font Size", 'Webbyrom'),
    "param_name" => "icon_size",
    "value" => "",
    'dependency' => array(
        'element' => 'option_type',
        'value' => array('option_icon'),
    ),
    'group' => esc_html__("Fancy Settings", 'Webbyrom'),
));

vc_add_param("cms_fancybox_single", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__("Background Icon Color (For Icon be selected)", 'Webbyrom'),
    "param_name" => "bg_icon",
    "value" => "",
    'dependency' => array(
        'element' => 'option_type',
        'value' => array('option_icon'),
    ),
    'group' => esc_html__("Fancy Settings", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__("Icon Color (For Icon be selected)", 'Webbyrom'),
    "param_name" => "color_icon",
    "value" => "",
    'dependency' => array(
        'element' => 'option_type',
        'value' => array('option_icon'),
    ),
    'group' => esc_html__("Fancy Settings", 'Webbyrom'),
));

vc_add_param("cms_fancybox_single", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__("Text Color", 'Webbyrom'),
    "param_name" => "text_color",
    "value" => "",
    'dependency' => array(
        'element' => 'fancy_style',
        'value' => array(
            'style-2',
        ),
    ),
    'group' => esc_html__("Option", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Title Font Size", 'Webbyrom'),
    "param_name" => "title_size",
    "value" => "",
    'group' => esc_html__("Option", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Title Line Height", 'Webbyrom'),
    "param_name" => "title_height",
    "value" => "",
    'group' => esc_html__("Option", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Content Font Size", 'Webbyrom'),
    "param_name" => "content_size",
    "value" => "",
    'group' => esc_html__("Option", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Content Line Height", 'Webbyrom'),
    "param_name" => "content_height",
    "value" => "",
    'group' => esc_html__("Option", 'Webbyrom'),
));
vc_add_param("cms_fancybox_single", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__("Content Font style", 'Webbyrom'),
    "param_name" => "content_style",
    "value" => "",
    'group' => esc_html__("Option", 'Webbyrom'),
)); 
vc_add_param('cms_fancybox_single', array(
    'type' => 'checkbox',
    'heading' => esc_html__("Border", 'Webbyrom'),
    'param_name' => 'border',
    'value' => array(
            'Yes' => true
        ),
    'std' => false,
    'dependency' => array(
        'element' => 'fancy_style',
        'value' => array(
            'style-2',
        ),
    ),
    'group' => esc_html__("Option", 'Webbyrom'),
)); 


vc_add_param("cms_fancybox_single", array(
    'type' => 'dropdown',
    'heading' => esc_html__( 'Animation', 'Webbyrom' ),
    'param_name' => 'animation_effect',
    'std' => '',
    'description' => esc_html__( 'Animations  for grid', 'Webbyrom' ),
    'value' =>  array(
        esc_html__( 'None', 'Webbyrom' ) => '',
        esc_html__( 'fadeIn', 'Webbyrom' ) => 'wow fadeIn',
        esc_html__( 'FadeInUp', 'Webbyrom' ) => 'wow fadeInUp',
        esc_html__( 'BounceInUp', 'Webbyrom' ) => 'wow bounceInUp',
        esc_html__( 'BounceInDown', 'Webbyrom' ) => 'wow bounceInDown',
        esc_html__( 'BounceInLeft', 'Webbyrom' ) => 'wow bounceInLeft',
        esc_html__( 'BounceInRight', 'Webbyrom' ) => 'wow bounceInRight',  
     ),
     "group" => esc_html__("Animation", 'Webbyrom'),
     'weight' => 1
));
vc_add_param("cms_fancybox_single", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Data duration", 'Webbyrom'),
    "param_name" => "data_wow_duration",
    "value" =>  array(
        'None'  => '',
        '1s'    => '1s',
        '2s'    => '2s',
        '3s'    => '3s',
        '4s'    => '4s',
        '5s'    => '5s',
        '6s'    => '6s',
    ),
    "group" => esc_html__("Animation", 'Webbyrom'),
    'weight' => 1
));
vc_add_param("cms_fancybox_single", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("Data delay", 'Webbyrom'),
    "param_name" => "data_wow_delay",
    "value" =>  array(
        'None'  => '',
        '0.2s'    => '0.2s',
        '0.4s'    => '0.4s',
        '0.6s'    => '0.6s',
        '0.8s'    => '0.8s',
    ),
    "group" => esc_html__("Animation", 'Webbyrom'),
    'weight' => 1
));
vc_add_param("cms_fancybox_single", array(
	'type' => 'css_editor',
    'heading' => esc_html__( 'CSS box', 'Webbyrom' ),
    'param_name' => 'css',
    'group' => esc_html__( 'Design Options', 'Webbyrom' ),
));
 