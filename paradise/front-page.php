<?php
get_header();

?>




	<!--================Our banner Area =================-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php   $slider = array(
                
                 'post_type' => 'paradise_slider',   
                 'order' => 'ASC'            
                 );
               $count = 0;
               query_posts($slider);
               global $wp_query;
               $count_post = $wp_query->post_count;
               while (have_posts()) : the_post();
               $counter++;
               ?>

          <div class="carousel-item <?php if($count== 0): echo 'active'; endif; ?>">
            <?php  if(has_post_thumbnail()) {      
               $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'paradise_slider');?> 
             <img class="d-block w-100" src="<?php echo $image[0]; ?>" alt="" ><?php } ?>
               <div class="carousel-caption">
                 <h1><?php the_title(); ?></span></h1>
                 <p>Where Every Stay is Unique</p>
               </div>   
          </div>
       
          <?php  $count++;
                endwhile; 
               wp_reset_query();  ?>
          

          </div>
              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <img src="<?php bloginfo('template_url'); ?>/img/left-arrow.png">
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <img src="<?php bloginfo('template_url'); ?>/img/right-arrow.png" class="">
              </a>
        </div>
   <!--================Our banner Area =================-->

  <!--================Our Welcome Area =================-->
   <section class="welcome-section">
      <?php 
           $welcome = new wp_query(array(
                              'post_type'    => 'paradise_about',
                              'post_status'  => 'publish',
                              
                              'posts_per_page' => 1

                              ));
                    if($welcome->have_posts()): while($welcome->have_posts()):

                      $welcome->the_post();
               ?>
     <div class="container custom-container">
      <div class="main-title text-center">
          <h2><?php the_title(); ?></h2>
      </div>
      <div class="intro-sec text-center">
        <?php the_content(); ?>
      </div>
     </div>
     <?php 
           endwhile; 
               wp_reset_query();
        endif; 
     ?>
    </section>
    <!--================ Services Section =================-->
    <section class="our-speciality">
            <div class="container custom-container">
                <div class="row">
                      <?php 
           $service = new wp_query(array(
                              'post_type'    => 'paradise_service',
                              'post_status'  => 'publish',
                               'order'   => 'ASC'
                              ));
                    if($service->have_posts()): while($service->have_posts()):

                      $service->the_post();
                      $font_icon = get_post_meta($post->ID,'services_info',true);
               ?>

                    <div class="col-sm-2">
                        <div class="single-item">
                            <div class="inner-box">
                                    <div class="img-box"><figure><i class="<?php echo $font_icon; ?>"></i></figure></div>
                            </div>
                            <div class="img-title"> <?php the_title(); ?></div>
                        </div>
                    </div>
         <?php 
           endwhile; 
               wp_reset_query();
        endif; 
     ?>             

              </div>
            </div>
    </section>
  <!--================ Services Section =================-->
     </div>
   </section>
  <!--================ Welcome Area =================-->

  <!--================Rooms Section =================-->
   <section class="room-section">
     <div class="container custom-container">
      <div class="main-title text-center room-title">
      <h2>Room & Suits</h2>
      <h1><i class="fas fa-home"></i></h1>
    </div>
      <div class="owl-carousel rooms">
           <?php 
                              $room = new wp_query(array(
                              'post_type'    => 'paradise_room',
                              'post_status'  => 'publish',
                             
                              ));
                              $delay = 100;
                              $row_delay = 1000;
                    if($room->have_posts()): while($room->have_posts()):

                      $room->the_post();
                         $room_p = get_post_meta($post->ID,'room_price',true);

                         $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'paradise_room');
                ?>

          <div class="single-item">
            <div class="img-box">
                <figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="room-image"></a></figure>
            </div>
            <div class="service-content">
                <a href="#"><h3><?php the_title(); ?></h3></a>
                <div class="text"><span> <?php echo $room_p; ?></span></div>
                <div class="rating-wrapper"><a class="btn-style-one" href="<?php the_permalink(); ?>">Book Now</a></div>
            </div>
        </div>
      <?php 
           endwhile; 
               wp_reset_query();
        endif; 
     ?>  
          
      </div>
     </div>
   </section>
  <!--================ Rooms Section =================-->

 <!--================ Gallery Section =================-->
   <section class="our-speciality">
         
          

            <div class="container custom-container">
               <div class="main-title text-center mb-5">
                  <h2>Photo Gallery</h2>
                  <h1><i class="fas fa-home"></i></h1>
                </div>
               <div class="masonry-grid row">
                         
                       <?php

                  $images1 = get_field('acf_gallery');

                          foreach ($images1 as $image):
    

          ?>
                      
                            <!-- masonry grid item start -->
                            <div class="masonry-grid-item col-md-3 pr-0 resp-pad-lt0">
                              <!-- blogpost start -->
                              <article class="clearfix blogpost">
                                <div class="overlay-container">
                                  <img src="<?php echo $image['sizes']['large'];?>" alt="">
                                  <div class="overlay">
                                    <div class="overlay-links">
                                      <a href="<?php echo $image['sizes']['large'];?>" class="popup-img"><i class="fas fa-file-image"></i></i></a>
                                    </div>
                                  </div>
                                </div>
                              </article>
                              <!-- blogpost end -->
                            </div>
                            <!-- masonry grid item end -->

                  <?php endforeach; ?>
                        

               </div>
            </div>
      
    </section>
  <!--================ Gallery Section =================-->


  <!--================Our Testimonial  =================-->
    <section class="testimonial-bg">
      <div class="main-title text-center room-title testi-title">
      <h2>Testimonial</h2>
    </div>
      <div class="container custom-container testi-dots">
        <div class="owl-carousel testi" >
          <?php $testimonial = new wp_query(array(
                                    'post_type' => 'paradise_testimonial',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 5
                                  )); 
                                   while($testimonial->have_posts()):$testimonial->the_post();
                       $img_t = wp_get_attachment_image_src(get_post_thumbnail_id(), 'paradise_testimonial');?>
               ?>
              <div class="item">
                <div class="circle-img text-center">
                      <img src="<?php echo $img_t[0]; ?>">
                    </div>
               <div class="testimonial">
                    <?php the_content(); ?>
                   
                  </div>
                  <div class="text-center clearfix client-info">
                       
                     <div class="testi-user">
                      <h6 class="text-white"><?php the_title(); ?></h6>
                      <?php $city = get_post_meta($post->ID,'city',true); ?>
                      <span class="text-white"><?php echo $city; ?></span>
                    </div>
                  </div>
              </div>

       <?php 
           endwhile; 
               wp_reset_query();

     ?> 

        </div>
      </div>
    </section>
   <!--================Our Testimonial =================-->
   

?>
<?php get_footer();?>