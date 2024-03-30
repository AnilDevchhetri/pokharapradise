<?php function custom_post_function() //post type(sear in google for more details)
 {
 
  $labels = array(
        'name'           => 'Slider',
        'singular_name'  =>'Slider',
        'menu_name'      =>'Slider',
        
        'add_new'   =>'Add Slider Image',
        'featured_image' => 'slider image',
        'set_featured_image' => 'set Slider image',
        'remove_featured_image' => 'Remove slider image'
        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_slider'),
        'labels'   =>$labels,
        'supports' =>array('title','thumbnail'),
       'menu_icon' => 'dashicons-format-image',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_slider',$args);


 $labels = array(
        'name'           => 'About us',
        'singular_name'  =>'About Us',
        'menu_name'      =>'About Us',
        

        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_about'),
        'labels'   =>$labels,
        'supports' =>array('title','thumbnail','editor'),
       'menu_icon' => 'dashicons-admin-users',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_about',$args);

//our services
   $labels = array(
        'name'           => 'services',
        'singular_name'  =>'services',
        'menu_name'      =>'Services',
        

        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_service'),
        'labels'   =>$labels,
        'supports' =>array('title','thumbnail'),
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_service',$args);

                              
 $labels = array(
        'name'           => 'Rooms',
        'singular_name'  =>'Rooms',
        'menu_name'      =>'Rooms',
        
        'add_new'   =>'Add Room Detail',
        'featured_image' => 'Room image',
        'set_featured_image' => 'set Room image',
        'remove_featured_image' => 'Remove Room image'
        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_room'),
        'labels'   =>$labels,
        'supports' =>array('title','editor','thumbnail'),
       'menu_icon' => 'dashicons-store',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_room',$args);


 $labels = array(
        'name'           => 'Gallery',
        'singular_name'  =>'Gallery',
        'menu_name'      =>'Gallery',
        
        'add_new'   =>'Add Gallery',
        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_gallery'),
        'labels'   =>$labels,
        'supports' =>array('title','thumbnail'),
       'menu_icon' => 'dashicons-store',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_gallery',$args);



 $labels = array(
        'name'           => 'Testimonial',
        'singular_name'  =>'Testimonial',
        'menu_name'      =>'Testimonial',
        
        'add_new'   =>'Add Testimonial',
        
        //'view_item'      =>'Hello'
  );
  $args = array(                        //register post(search in google. for more details)
        'label'    => __('paradise_Testimonial'),
        'labels'   =>$labels,
        'supports' =>array('title','thumbnail','editor'),
       'menu_icon' => 'dashicons-store',
        'public'   => true,
       
         'compabilty_type' => array('page','post'),
          'taxonomies'   => array( 'category' ),
  );
  register_post_type('paradise_testimonial',$args);

 }
 add_action('init','custom_post_function');

