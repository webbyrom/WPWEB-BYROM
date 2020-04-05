<?php
    /* VC single image */
    add_action( 'vc_after_init', 'Webbyrom_add_vc_single_image_new_style' );
    function Webbyrom_add_vc_single_image_new_style() {
      $param = WPBMap::getParam( 'vc_single_image', 'style' );
      $param['value'][esc_html__( 'Top overlap', 'Webbyrom' )] = 'top-overlap';
      $param['value'][esc_html__( 'Full overlap', 'Webbyrom' )] = 'full-overlap';
      vc_update_shortcode_param( 'vc_single_image', $param );
    }
    /* VC Accordion */
    add_action( 'vc_after_init', 'Webbyrom_update_vc_tta_accordion' );
    function Webbyrom_update_vc_tta_accordion() {  
        $style = WPBMap::getParam( 'vc_tta_accordion', 'style' );
        $style['value'][esc_html__( 'Theme', 'Webbyrom' )] = 'theme';
        $style['value'][esc_html__( 'Primary', 'Webbyrom' )] = 'primary';
        $style['value'][esc_html__( 'Second', 'Webbyrom' )] = 'second';
        vc_update_shortcode_param( 'vc_tta_accordion', $style );
    }
     add_action( 'vc_after_init', 'Webbyrom_update_vc_tta_tabs' );
    function Webbyrom_update_vc_tta_tabs() {  
        $style = WPBMap::getParam( 'vc_tta_tabs', 'style' );
        $style['value'][esc_html__( 'Theme', 'Webbyrom' )] = 'theme';
        vc_update_shortcode_param( 'vc_tta_tabs', $style );
    }
    add_action( 'vc_after_init', 'Webbyrom_update_vc_btn_color' );
    function Webbyrom_update_vc_btn_color() {  
        $style = WPBMap::getParam( 'vc_btn', 'color' );
        $style['value'][esc_html__( 'Primary', 'Webbyrom' )] = 'primary';
        $style['value'][esc_html__( 'Default', 'Webbyrom' )] = 'default';
        vc_update_shortcode_param( 'vc_btn', $style );
    }

