<?php
/**
 * Add row params
 * 
 * @author Knight
 * @since 1.0.0
 */

vc_add_param('vc_row', array(
    'type' => 'checkbox',
    'heading' => esc_html__("Overlay opacity", 'Webbyrom'),
    'param_name' => 'overlay_opacity',
    'value' => array(
        'Yes' => true,
    ),
    'std' => false,
    'group' => esc_html__("Design Options",'Webbyrom'),
));
vc_add_param("vc_row", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__("Overlay Color", 'Webbyrom'),
    "param_name" => "overlay_color",
    "value" => "",
    'dependency' => array(
        'element' => 'overlay_opacity',
        'value' => array(
            '1',
        ),
    ),
    'group' => esc_html__("Design Options", 'Webbyrom'),
));
vc_add_param('vc_row', array(
    'type' => 'checkbox',
    'heading' => esc_html__("Background image fixed", 'Webbyrom'),
    'param_name' => 'bg_fixed',
    'value' => '',
    'group' => esc_html__("Design Options",'Webbyrom'),
));

vc_add_param('vc_row', array(
    'type' => 'checkbox',
    'heading' => esc_html__("Visible overflow", 'Webbyrom'),
    'param_name' => 'visible_overflow',
    'value' => '',
    'group' => esc_html__("Other setting",'Webbyrom'),
));
 