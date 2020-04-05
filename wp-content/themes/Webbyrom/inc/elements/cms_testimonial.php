<?php
vc_map(array(
    'name' => 'CMS Testimonial',
    'base' => 'cms_testimonial',
    'icon' => 'cs_icon_for_vc',
    'category' => esc_html__('CmsSuperheroes Shortcodes', 'Webbyrom'),
    'description' => esc_html__('Add Testimonial', 'Webbyrom'),
    'params' => array(
        array(
            'type'          => 'attach_image',
            'heading'       => esc_html__( 'Testimonial Image', 'Webbyrom' ),
            'param_name'    => 'testi_avatar',
            'value'         => '',
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Background",'Webbyrom'),
            "param_name" => "bg_testimonial",
            "value" => array(
                esc_html__('Image','Webbyrom') => 'image',
                esc_html__('Color','Webbyrom') => 'color',
            ),
            "std" => 'image',
        ),
        array(
            'type'          => 'attach_image',
            'heading'       => esc_html__( 'Background Image', 'Webbyrom' ),
            'param_name'    => 'bgimage',
            'value'         => '',
            'dependency' => array(
                'element' => 'bg_testimonial',
                'value' => array(
                    'image',
                ),
            ),
        ),
        array(
            "type"       => "colorpicker",
            "class"      => "",
            "heading"    => esc_html__("Background Color", 'Webbyrom'),
            "param_name" => "bgcolor",
            "value"      => "",
            'dependency' => array(
                'element' => 'bg_testimonial',
                'value' => array(
                    'color',
                ),
            ),
        ),
        array(
            'type'          => 'textarea',
            'heading'       => esc_html__( 'Description', 'Webbyrom' ),
            'param_name'    => 'testi_des',
            'value'         => '',
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Testimonial name', 'Webbyrom' ),
            'param_name'    => 'testi_name',
            'admin_label'   => true,
            'value'         => '',
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Testimonial Position', 'Webbyrom' ),
            'param_name'    => 'testi_position',
            'value'         => '',
        ),

        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Alignment', 'Webbyrom' ),
            'param_name' => 'alignment',
            'value' => array(
                esc_html__( 'Left', 'Webbyrom' ) => 'left',
                esc_html__( 'Center', 'Webbyrom' ) => 'center',
                esc_html__( 'Right', 'Webbyrom' ) => 'right',
            ), 
            'std' =>'left'          
        ),
        array(
            'type'          => 'attach_image',
            'heading'       => esc_html__( 'Testimonial Signature', 'Webbyrom' ),
            'param_name'    => 'testi_signature',
            'value'         => ''
        ),
        array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__( 'Testimonial text color', 'Webbyrom' ),
            'param_name'    => 'tcolor',
            'value'         => ''
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Background Border Radius', 'Webbyrom' ),
            'param_name'    => 'testi_borderradius',
            'value'         => '',
        ),
        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__( 'CSS box', 'Webbyrom' ),
            'param_name' => 'css',
            'group'      => esc_html__( 'Design Options', 'Webbyrom' ),
        ),    
    )
));

class WPBakeryShortCode_cms_testimonial extends CmsShortCode
{
    protected function content($atts, $content = null){
        return parent::content($atts, $content);
    }  
}
?>