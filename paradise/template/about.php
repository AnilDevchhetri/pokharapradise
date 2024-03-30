<?php /*template name:About*/ ?>
<?php get_header(); ?>
        <!--================Breadcrumb =================-->
        <?php 
            while(have_posts()): the_post();

        ?>
  <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3><?php the_title(); ?></h3>
                    <ul>
                        <li class="active"><a href="<?php  home_url(); ?>">Home</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
  </section>
<?php endwhile;
 wp_reset_query();
?>
     <!--================Breadcrumb =================-->

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
                            <div class="img-title"><?php the_title(); ?></div>
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

  <!--================ Gallery Section =================-->
   <section class="our-speciality">
         
           <?php $gallery = new wp_query(array(
                                    'post_type' => 'paradise_gallery',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 1
                                  )); 
                                   while($gallery->have_posts()):$gallery->the_post();
                                  ?>  

            <div class="container custom-container">
               <div class="main-title text-center mb-5">
                  <h2>Photo Gallery</h2>
                  <h1><i class="fas fa-home"></i></h1>
                </div>
               <div class="masonry-grid row">
                         
                      <?php 
                      $gallery_images = get_post_meta($post->ID, 'vdw_gallery_id', true);
                      $i = 0;
                      foreach ($gallery_images as $img) {
                        
                        if($i == 8){
                          break;
                        }
                        $img = wp_get_attachment_image_src($img,'full');?>

                      
                            <!-- masonry grid item start -->
                            <div class="masonry-grid-item col-md-3 pr-0 resp-pad-lt0">
                              <!-- blogpost start -->
                              <article class="clearfix blogpost">
                                <div class="overlay-container">
                                  <img src="<?php echo $img[0]; ?>" alt="">
                                  <div class="overlay">
                                    <div class="overlay-links">
                                      <a href="<?php echo $img[0]; ?>" class="popup-img"><i class="fas fa-file-image"></i></i></a>
                                    </div>
                                  </div>
                                </div>
                              </article>
                              <!-- blogpost end -->
                            </div>
                            <!-- masonry grid item end -->
                   <?php
                    $i++;
                    } ?>         

               </div>
            </div>
        <?php 
           endwhile; 
               wp_reset_query();

     ?>  
    </section>
  <!--================ Gallery Section =================-->




<?php get_footer();?>