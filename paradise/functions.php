<?php 
add_theme_support('post-thumbnails'); 
remove_filter( 'the_content', 'wpautop' );

    add_action('wp_enqueue_scripts','paradise_style');

function paradise_style()
 { 
        
   wp_enqueue_style( 'hotel-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css',false,'','all');
 	 
     wp_enqueue_style( 'animation-css', get_template_directory_uri() . '/css/animation.css',false,'','all');
    
     wp_enqueue_style( 'allminfont', get_template_directory_uri() . '/css/all.min.css',false,'','all');
    
     wp_enqueue_style( 'owlcarouselmin', get_template_directory_uri() . '/css/owl.carousel.min.css',false,'','all');
    
     wp_enqueue_style( 'magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css',false,'','all');
    
     wp_enqueue_style( 'dataaos-style', get_template_directory_uri() . '/css/dataaos.css',false,'','all');
    
     wp_enqueue_style( 'stylefile', get_template_directory_uri() . '/css/style.css',false,'','all');
    
     wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css',false,'','all');




         // Links for jss

     wp_enqueue_script( 'jquerys-min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'modernizr.js', get_template_directory_uri() . '/js/modernizr.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'jqueryappear-js', get_template_directory_uri() . '/js/jquery.appear.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'jquery.magnific-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js',array('jquery') ,'' , true);

      wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js',array('jquery') ,'' , true);
}
 ////////Code for logo start///////////////////
    add_theme_support( 'custom-logo', array(
  'height'      => 200,
  'width'       => 200,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  ) );
  ////////Code for logo end///////////////////  


 require_once(TEMPLATEPATH . '/inc/custom_post.php');
 require_once(TEMPLATEPATH . '/inc/metabox.php');
 require_once(TEMPLATEPATH . '/inc/customizer.php');
 require_once(TEMPLATEPATH . '/gallery-metabox/gallery.php');



 //////Code for register widghets/////////////////////
    register_sidebar( array(
 'name' => 'Footer Area 1',
'id' => 'footer-1',
'description' => 'Appears in the footer area',
 'before_widget' => '<div id="%1$s" class="footer-contact %2$s">',
 'after_widget' => '</div>',
'before_title' => '<h3 class="footer-title">',
'after_title' => '</h3>',
) );

       register_sidebar( array(
 'name' => 'Footer Area 2',
'id' => 'footer-2',
'description' => 'Appears in the footer area',
'before_widget' => '<ul id="%1$s" class="links %2$s">',
 'after_widget' => '</ul>',
'before_title' => '<h3 class="footer-title">',
'after_title' => '</h3>',
) );


//     register_sidebar( array(
//  'name' => 'Footer Area 3',
// 'id' => 'footer-3',
// 'description' => 'Appears in the footer area',
// // 'before_widget' => '<div id="%1$s" class="booking-partner %2$s">',
// //  'after_widget' => '</div>',
// 'before_title' => '<h3 class="widget-title">',
// 'after_title' => '</h3>',
// ) );



//     register_sidebar( array(
//  'name' => 'Footer Area 4',
// 'id' => 'footer-4',
// 'description' => 'Appears in the footer area',
// 'before_widget' => '<div id="%1$s" class="footer-contact %2$s">',
//  'after_widget' => '</div>',
// 'before_title' => '<h3 class="widget-title">',
// 'after_title' => '</h3>',
// ) );



//////////////////////start for retister menu////////////////////////

          function register_my_menu() {
                  register_nav_menu('primary',__( 'Header Menu' ));
                }
                add_action( 'init', 'register_my_menu' );

                /*8=**************************rnav walker code*********************************/
                 if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
                    // file does not exist... return an error.
                    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
                } else {
                    // file exists... require it.
                    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
                }
/////////////////////End for register menu////////////////////



















    