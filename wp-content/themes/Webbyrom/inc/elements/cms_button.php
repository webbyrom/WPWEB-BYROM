<?php
vc_map(array(
    "name" => 'CMS Button',
    "base" => "cms_button",
    "icon" => "cs_icon_for_vc",
    "category" => esc_html__('CmsSuperheroes Shortcodes', 'Webbyrom'),
    "description" => esc_html__('Show social from theme option', 'Webbyrom'),
    "params" => array(
        array(
        	"type" => "textfield",
            "heading" => esc_html__("Title",'Webbyrom'),
            "param_name" => "title",
            "value" => "",
            "admin_label" => true,
            "description" => esc_html__("Title",'Webbyrom'),
        ),
        array(
        	'type' => 'vc_link',
            'heading' => esc_html__( 'URL (Link)', 'Webbyrom' ),
            'param_name' => 'link',
            'description' => esc_html__( 'Add link to button.', 'Webbyrom' ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Button Style",'Webbyrom'),
            "param_name" => "btn_style",
            "value" => array(
                'Theme' => 'btn-theme',
                'Bootstrap' => 'btn-bootstrap', 
            ),
            "std" => 'btn-theme',
        ),
        array(
        	"type" => "dropdown",
        	"heading" => esc_html__("Type",'Webbyrom'),
        	"param_name" => "btn_type_bootstrap",
        	"value" => array(
                'Primary' => 'btn-primary',
                'Success' => 'btn-success',
                'Info' => 'btn-info',
                'Warning' => 'btn-warning',
                'Danger' => 'btn-danger'
            ),
            "std" => 'btn-primary',
            'dependency' => array(
                'element' => 'btn_style',
                'value' => 'btn-bootstrap',
            ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Type",'Webbyrom'),
            "param_name" => "btn_type_theme",
            "value" => array(
                'Default' => 'btn-theme-default',
                'Primary' => 'btn-theme-primary',
            ),
            "std" => 'btn-theme-default',
            'dependency' => array(
                'element' => 'btn_style',
                'value' => 'btn-theme',
            ),
        ),
        array(
        	"type" => "dropdown",
        	"heading" => esc_html__("Size",'Webbyrom'),
        	"param_name" => "size",
        	"value" => array(
                esc_html__('Large','Webbyrom') => 'btn-lg',
                esc_html__('Medium','Webbyrom') => 'btn-md',
                esc_html__('Small','Webbyrom') => 'btn-sm',
                esc_html__('Mini','Webbyrom') => 'btn-mn',
                esc_html__('Default','Webbyrom') => 'btn-sdefault',
                esc_html__('Custom','Webbyrom')  => 'btn-custom',
            ),
            "std" => 'btn-md',
            "description" => esc_html__( 'Select button size.', 'Webbyrom' ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Spacing ",'Webbyrom'),
            "param_name" => "spacing",
            "value" => "",
            "admin_label" => true,
            "description" => esc_html__("Padding ( ex: 15px 45px 15px 45px )",'Webbyrom'),
            'dependency' => array(
                'element' => 'size',
                'value' => 'btn-custom',
            ),
        ),
        array(
        	"type" => "dropdown",
        	"heading" => esc_html__("Alignment",'Webbyrom'),
        	"param_name" => "align",
        	"value" => array(
                'inline' => 'inline',
                'left' => 'left',
                'right' => 'right',
                'center' => 'center',
            ),
            "std" => 'inline',
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__("Set full width button?", 'Webbyrom'),
            'param_name' => 'button_block',
            'value' => array(
                'Yes' => true
            ),
            'dependency' => array(
                'element' => 'align',
                'value' => array(
                    'left',
                    'right',
                    'center',
                ),
            ),
            'std' => false,
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__("Border Radius",'Webbyrom'),
            "param_name" => "border_radius",
            "value" => "",
            "admin_label" => true,
            "description" => esc_html__("Border Radius with 10px, 20px, 50%...",'Webbyrom'),
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__("Button With Background Transparent", 'Webbyrom'),
            'param_name' => 'button_bg',
            'value' => array(
                'Yes' => true
            ),
            'std' => false,
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Color With Background Transparent ",'Webbyrom'),
            "param_name" => "color_transparent",
            "value" => array(
                esc_html__('Dark','Webbyrom') => 'dark',
                esc_html__('Light','Webbyrom') => 'light',
            ),
            'dependency' => array(
                'element' => 'button_bg',
                'value' => array(
                    '1',
                ),
            ),
            "std" => 'dark',
        ),
        array(
            'type' => 'checkbox',
            'heading' => esc_html__("Add icon", 'Webbyrom'),
            'param_name' => 'add_icon',
            'value' => array(
                'Yes' => true
            ),
            'std' => false,
        ),
        array(
        	"type" => "dropdown",
        	"heading" => esc_html__("Icon Alignment",'Webbyrom'),
        	"param_name" => "i_align",
        	"value" => array(
                'Left' => 'left',
                'Right' => 'right',
            ),
            'dependency' => array(
                'element' => 'add_icon',
                'value' => array(
                    '1',
                ),
            ),
            "std" => 'left',
        ),
        
        array(
            'type' => 'dropdown',
        	'heading' => esc_html__( 'Icon library', 'Webbyrom' ),
        	'value' => array(
        		esc_html__( 'Font Awesome', 'Webbyrom' ) => 'fontawesome',
                esc_html__( 'P7 Stroke', 'Webbyrom' ) => 'pe7stroke',
        	),
        	'param_name' => 'icon_type',
        	'description' => esc_html__( 'Select icon library.', 'Webbyrom' ),
            'dependency' => array(
                'element' => 'add_icon',
                'value' => array(
                    '1',
                ),
            ),
        ),
        array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon Item', 'Webbyrom' ),
			'param_name' => 'icon_fontawesome',
            'value' => '',
			'settings' => array(
				'emptyIcon' => true,  
				'type' => 'fontawesome',
				'iconsPerPage' => 200,  
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
		 
		),
        array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon Item', 'Webbyrom' ),
			'param_name' => 'icon_pe7stroke',
            'value' => '',
			'settings' => array(
				'emptyIcon' => true, 
				'type' => 'pe7stroke',
				'iconsPerPage' => 200,  
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'pe7stroke',
			),
			'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),	 
		),
         
        array(
        	"type" => "textfield",
            "heading" => esc_html__("Class",'Webbyrom'),
            "param_name" => "el_class",
            "value" => "",
            "description" => esc_html__("Class",'Webbyrom'),
        ), 
        array(
        	'type' => 'css_editor',
            'heading' => esc_html__( 'CSS box', 'Webbyrom' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design Options', 'Webbyrom' ),
        )
    )
));
class WPBakeryShortCode_cms_button extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}