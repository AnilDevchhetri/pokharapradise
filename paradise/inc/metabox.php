<?php




add_action("admin_init","adding_metabox");
function adding_metabox()
 {
  add_meta_box("metabox_id1","Additional information","field1","paradise_slider","normal","low");
    add_meta_box("metabox_id2","Service information","field2","paradise_service","normal","low");
 add_meta_box("metabox_id3","Room Price","field3","paradise_room","normal","low");
 add_meta_box("metabox_id4","City","field4","paradise_testimonial","normal","low");

           
  }
  function field1(){
    $data = get_post_custom($post->ID);
    $val = isset($data['slider_info']) ? esc_attr($data['slider_info'][0]):'';
    echo '<input type="text" name="slider_info" id="custom_input" value="'.$val.'" placeholder="Enter subtitle" style="width:100%;font-size:1.6em;">';
  }

  function field2(){

      $data2 = get_post_custom($post->ID);
    $val2 = isset($data2['services_info']) ? esc_attr($data2['services_info'][0]):'';
    echo '<input type="text" name="services_info" id="services_info" value="'.$val2.'" placeholder="Enter fownt awsome icon" style="width:100%;font-size:1.6em;">';

  }

  function field3(){

    $data3 = get_post_custom($post->ID);
    $val3 = isset($data3['room_price']) ? esc_attr($data3['room_price'][0]):'';
    echo '<input type="text" name="room_price" id="room_price" value="'.$val3.'" placeholder="Enter Room Price In rupees" style="width:100%;font-size:1.6em;">';

  }
  function field4(){
// global $post;
      $data4 = get_post_custom($post->ID);
    $val4 = isset($data4['city']) ? esc_attr($data4['city'][0]):'';
    echo '<input type="text" name="city" id="city" value="'.$val4.'" placeholder="Enter Room City" style="width:100%;font-size:1.6em;">';

  }

 add_action("save_post","save_detail");
function save_detail()
{
	global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE):
    {
        return $post->ID;
    } endif;
   update_post_meta($post->ID,"slider_info",$_POST["slider_info"]);
   update_post_meta($post->ID,"services_info",$_POST["services_info"]);
   update_post_meta($post->ID,"room_price",$_POST["room_price"]);
   update_post_meta($post->ID,"city",$_POST["city"]);
 }