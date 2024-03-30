<?php /*template name:Gallery*/ ?>
<?php get_header(); ?>
    <!--================Breadcrumb =================-->
	<section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Photo Gallery</h3>
                    <ul>
                        <li class="active"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
            </div>
  </section>
     <!--================Breadcrumb =================-->





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











  
  <!--================ Gallery Section =================-->
<?php get_footer(); ?>