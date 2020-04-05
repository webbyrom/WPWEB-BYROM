<?php
vc_map(array(
    "name" => 'Message Box',
    "base" => "cms_message_box",
    "icon" => "cs_icon_for_vc",
    "category" =>  esc_html__('CmsSuperheroes Shortcodes', 'Webbyrom'),
    "description" =>  '',
    "params" => array(
        array(
            "type"       => "dropdown",
            "heading"    => esc_html__("Layout", 'Webbyrom'),
            "param_name" => "message_type",
            "value"      => array(
                esc_html__("Theme", 'Webbyrom')      => "alert-theme",
                esc_html__("Success", 'Webbyrom')      => "alert-success",
                esc_html__("Info", 'Webbyrom')         => "alert-info",
                esc_html__("Warning", 'Webbyrom')      => "alert-warning",
                esc_html__("Danger", 'Webbyrom')       => "alert-danger",
                 
            ),
            "std"=>"alert-success",
        ), 
         
        array(
            "type" => "textfield",
            "heading" =>esc_html__("Title",'Webbyrom'),
            "param_name" => "title",
            "admin_label" => true,
            "value"   => "Well done!",
        ),
        array(
          "type"       => "textarea",
          "heading"    => esc_html__( "Message", "Webbyrom" ),
          "param_name" => "message",
          "value"      => 'You successfully read this important alert message.', 
        ),
        array(
            'type'       => 'css_editor',
            'heading'    => esc_html__( 'CSS box', 'Webbyrom' ),
            'param_name' => 'css',
            'group'      => esc_html__( 'Design Options', 'Webbyrom' ),
        ), 
    )
));

class WPBakeryShortCode_cms_message_box extends CmsShortCode
{
    protected function content($atts, $content = null){
        return parent::content($atts, $content);
    }
    
}

?>