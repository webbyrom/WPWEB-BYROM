<?php
vc_map(array(
    "name"        => 'Cms Custom Heading',
    "base"        => "cms_custom_heading",
    "icon"        => "cs_icon_for_vc",
    "category"    =>  esc_html__('CmsSuperheroes Shortcodes', 'Webbyrom'),
    "description" =>  '',
    "params" => array(  
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Heading Style', 'Webbyrom' ),
            'param_name' => 'heading_style',
            'value' => array(
                esc_html__( 'Style 1', 'Webbyrom' ) => 'style1',
                esc_html__( 'Style 2', 'Webbyrom' ) => 'style2',
                esc_html__( 'Style 3', 'Webbyrom' ) => 'style3',
            ), 
            'std' =>'style1'          
        ),

        array(
            "type"       => "dropdown",
            "heading"    => esc_html__("Choose Media Type",'Webbyrom'),
            "param_name" => "media_type",
            'value' => array(
                esc_html__( 'Image', 'Webbyrom' ) => 'image',
                esc_html__( 'Icon', 'Webbyrom' ) => 'icon',
            ),
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type" => "attach_image",
            "param_name" => "image_type",
            "heading" => esc_html__("Image Item",'Webbyrom'),
            'dependency' => array(
                'element' => 'media_type',
                'value' => array(
                    'image',
                ),
            ),
        ),
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Image Width",'Webbyrom'),
            "param_name" => "image_width",
            'dependency' => array(
                'element' => 'media_type',
                'value' => array(
                    'image',
                ),
            ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Icon library', 'Webbyrom' ),
            'value' => array(
                esc_html__( 'Font Awesome', 'Webbyrom' ) => 'fontawesome',
                esc_html__( 'Flat Icon', 'Webbyrom' ) => 'flaticon',
                esc_html__( 'Open Iconic', 'Webbyrom' ) => 'openiconic',
                esc_html__( 'P7 Stroke', 'Webbyrom' ) => 'pe7stroke',
                esc_html__( 'RT Icon', 'Webbyrom' ) => 'rticon',
            ),
            'param_name' => 'icon_type',
            'description' => esc_html__( 'Select icon library.', 'Webbyrom' ),
            'dependency' => array(
                'element' => 'media_type',
                'value' => array(
                    'icon',
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
            'param_name' => 'icon_openiconic',
            'value'      => '',
            'settings'   => array(
                'emptyIcon'    => true, 
                'type'         => 'openiconic',
                'iconsPerPage' => 200,  
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value'   => 'openiconic',
            ),
            'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
        ),
        array(
            'type'       => 'iconpicker',
            'heading'    => esc_html__( 'Icon Item', 'Webbyrom' ),
            'param_name' => 'icon_pe7stroke',
            'value'      => '',
            'settings'   => array(
                'emptyIcon'    => true, 
                'type'         => 'pe7stroke',
                'iconsPerPage' => 200,  
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value'   => 'pe7stroke',
            ),
            'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
        ),
        array(
            'type'       => 'iconpicker',
            'heading'    => esc_html__( 'Icon Item', 'Webbyrom' ),
            'param_name' => 'icon_rticon',
            'value'      => '',
            'settings'   => array(
                'emptyIcon'    => true, 
                'type'         => 'rticon',
                'iconsPerPage' => 200,  
            ),
            'dependency' => array(
                'element' => 'icon_type',
                'value'   => 'rticon',
            ),
            'description' => esc_html__( 'Select icon from library.', 'Webbyrom' ),
        ),
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Title Before",'Webbyrom'),
            "param_name" => "title1",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Title",'Webbyrom'),
            "param_name" => "title",
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Title After",'Webbyrom'),
            "param_name" => "title2",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Font Weight Main Title",'Webbyrom'),
            "param_name" => "fweightm",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Font Family",'Webbyrom'),
            "param_name" => "ffamily",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Font Weight",'Webbyrom'),
            "param_name" => "fweight",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Font Size",'Webbyrom'),
            "param_name" => "fsize",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Line Height",'Webbyrom'),
            "param_name" => "lheight",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ),
        array(
            "type"       => "textfield",
            "heading"    => esc_html__("Letter Spacing",'Webbyrom'),
            "param_name" => "spacing",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "dropdown",
            "heading"    => esc_html__("Text Align",'Webbyrom'),
            "param_name" => "ttext-align",
            'value' => array(
                esc_html__( 'Left', 'Webbyrom' ) => 'text-left',
                esc_html__( 'Center', 'Webbyrom' ) => 'text-center',
                esc_html__( 'Right', 'Webbyrom' ) => 'text-right',
            ),
        ),
        array(
            "type"       => "colorpicker",
            "class"      => "",
            "heading"    => esc_html__("Icon color (For icon be selected)", 'Webbyrom'),
            "param_name" => "icon_color",
            "value"      => "",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style2',
                    'style3',
                ),
            ),
        ), 
        array(
            "type"       => "colorpicker",
            "class"      => "",
            "heading"    => esc_html__("Title color", 'Webbyrom'),
            "param_name" => "title_color",
            "value"      => "",
        ), 
        array(
            "type"       => "colorpicker",
            "class"      => "",
            "heading"    => esc_html__("Main Title color  ", 'Webbyrom'),
            "param_name" => "main_title_color",
            "value"      => "",
            'dependency' => array(
                'element' => 'heading_style',
                'value' => array(
                    'style3',
                ),
            ),
        ), 
        
         
 
        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__( 'CSS box', 'Webbyrom' ),
            'param_name' => 'css',
            'group'      => esc_html__( 'Design Options', 'Webbyrom' ),
        ),
        
    )
));
class WPBakeryShortCode_cms_custom_heading extends CmsShortCode
{
    protected function content($atts, $content = null){
        $html_id = cmsHtmlID('cms-custom-heading');
         
        $atts['html_id'] = $html_id; 
        return parent::content($atts, $content);
    }
  
}
 

?>