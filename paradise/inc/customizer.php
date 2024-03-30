<?php
function paradise_footer_box($wp_customize)
{
      $wp_customize->add_section('hp-contact-box-section',array(
    'title' => 'Contact Information',
   ));


   $wp_customize->add_setting('hp-box-address1',array(
  'default' => '',
   ));
   $wp_customize->add_setting('hp-box-email1',array(
  'default' => '',
   ));
    $wp_customize->add_setting('hp-box-email2',array(
  'default' => '',
   ));
    $wp_customize->add_setting('hp-box-phone',array(
  'default' => '',
   ));
  $wp_customize->add_setting('hp-box-website',array(
  'default' => '',
   ));


    
     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-contact-box-control-address',array(
    'label'           => 'Enter address:-',
    'section'         =>'hp-contact-box-section',
    'settings'         =>'hp-box-address1',
    )));
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-contact-box-control-email',array(
    'label'           => 'Enter email:-',
    'section'         =>'hp-contact-box-section',
    'settings'         =>'hp-box-email1',
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-contact-box-control-email2',array(
    'label'           => 'Enter Second line email:-',
    'section'         =>'hp-contact-box-section',
    'settings'         =>'hp-box-email2',
    )));
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-contact-box-control-phone',array(
    'label'           => 'Enter Second line email:-',
    'section'         =>'hp-contact-box-section',
    'settings'         =>'hp-box-phone',
    )));
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hp-contact-box-control-website',array(
    'label'           => 'Enter Website Url:-',
    'section'         =>'hp-contact-box-section',
    'settings'         =>'hp-box-website',
    )));
   

}
add_action('customize_register','paradise_footer_box');