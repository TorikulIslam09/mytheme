<?php 

// ---------------------- dynamic logo upload -----------
function tr_theme_function($wp_customize) {
$wp_customize -> add_section('header_area', array(
    'title'       => __('Chang your Chang logo','trtorikultheme'),
    'description' => 'chang your logo position'
));
$wp_customize -> add_setting('logo_position', array(
    'default' => get_bloginfo('tempalte_directory').'img/final-logo.png'
));
$wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize,'logo_position', array(
    'lebel' => 'Upload your logo',
    'setting' => 'logo_position',
    'section' => 'header_area',
)));

}
add_action('customize_register', 'tr_theme_function');

// ------------------------  menu Position  --------------------

function menue_position_right_left_center($wp_customize){
    $wp_customize -> add_section('menu_position', array(
        'title' => __('Menu position chang your at website', 'trtorikultheme'),
        'description' => 'if your interested chang your logo / menu position, you can do it'
    ));
    $wp_customize -> add_setting('menu_side_chang', array(
        'default' => 'left_menu'
    ));
    $wp_customize -> add_control('menu_side_chang', array(
        'label' => 'Chang position ',
        'description' => 'Start now chang your menu position',
        'setting' => 'menu_side_chang',
        'section' => 'menu_position',
        'type' => 'radio',
        'choices' => array(
        'left_menu' => ' Left ',
        'center_menu' => 'Center',
        'right_menu' => 'Right'
        ),
    ));


// --------------------------------- footer -------------------
$wp_customize -> add_section('footer_area', array(
    'title' => __('Footer setup', 'trtorikultheme'),
    'description' => 'If you interested set Footer, you can do it'
));
$wp_customize -> add_setting('footer_set_position', array(
    'default' => '$copy; copyright copyright 2023 by Tr_Theme '
));
$wp_customize -> add_control('footer_set_position', array(
    'label' => 'Customize Your Footer',
    'description' => 'Start now Customize your Footer position',
    'setting' => 'footer_set_position',
    'section' => 'footer_area'
));

}
add_action('customize_register', 'menue_position_right_left_center');
add_image_size( 'custom_img', 970, 350, true);



// ------------------- sidebar register ------------
function widgets_register() {
    register_sidebar(array(
        'name' => __('Widgets Main Area', 'trtorikultheme'),
        'name_id' => 'sibbar_1',
        'description' => 'if you added widgets area',
        'before_widges' => '<div class="sidebar_child">', 
        'after_widgets' => '</div>',
        'before_title' => '<h1 class="widgets-title">',
        'after_title' => '</h1>'
    ));
}
add_action('widgets_init', 'widgets_register');
