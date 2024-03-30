<?php get_header(); ?>
    <!--================Breadcrumb =================-->
  <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Room Detail</h3>
                    <ul>
                        <li class="active"><a href="<?php home_url(); ?>">Home</a></li>
                        <li><a href="#">Room Detail</a></li>
                    </ul>
                </div>
            </div>
  </section>
     <!--================Breadcrumb =================-->

      <!--================Room Detail =================-->
       <?php 

                while (have_posts()):the_post(); {
                  $room_p = get_post_meta($post->ID,'room_price',true);
                   $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'paradise_room');
                }

              ?>
      <div class="inner-content mb-5">
          <div class="container custom-container">
             <div class="row">
                <div class="col-md-6">
                <div class="room-detail">
                <div class="owl-carousel rooms-details">
                   
                    <div class="item">
                      <div class="room-detail-img">
                        <img src="<?php echo $image[0]; ?>">
                      </div>
                    </div>
                </div>
                
              </div>
              </div>
             
              <div class="col-md-6">
                <div class="detail-room">
                  <div class="title text-left title-room-detail">
                      <!-- <h1>Twin <span class="resort-col"> Room</span> </h1> -->
                      <h1><span class="resort-col"><?php the_title(); ?></span></h1>
                      <h6> <?php echo $room_p; ?></h6>
                      <p><?php the_content(); ?></p>
                      
                  </div>
                </div>
                
              </div> 
             </div>
             <div class="row">







               <div class="col-lg-12">
                 <div class="contact-form-box mt-5">




                                   

                                  



                              <div class="title text-center pb-4">
                                <h4>Book Your Room</h4>
                              </div>
                                <div class="contact-form">

	                      
                                  <form class="row" method="post">


                                      <div class="form-group col-lg-6">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" name="name-id" placeholder="Your Name">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label>Your Email</label>
                                        <input type="email" class="form-control" id="exampleInputemail" aria-describedby="name" name="email-id" placeholder="Your Email Address">
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <label>Your Phone</label>
                                        <input type="tel" class="form-control" id="exampleInputphone" aria-describedby="name" name="tel-id" placeholder="Your Phone">
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <label>Your Country</label>
                                        <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="name" name="sub-id" placeholder="Country">
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <label>Checkin Checkout</label>
                                        <input type="date" class="form-control" id="exampleInputsubject" aria-describedby="name" name="sub-id" placeholder="Checkin checkout">
                                      </div>
                                      <div class="form-group col-lg-3">
                                        <label>Adult</label>
                                        <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="name" name="sub-id" placeholder="Adult">
                                      </div>
                                      <div class="form-group col-lg-3">
                                        <label>Children</label>
                                        <input type="text" class="form-control" id="exampleInputsubject" aria-describedby="name" name="sub-id" placeholder="Children">
                                      </div>
                                      <div class="form-group col-lg-12">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Comments..."></textarea>
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <div class="btn-main pt-3">
                                            <a href="#" class="btn-main-style">
                                            <span class="btn-title title-main-btn">Book Room</span>
                                          </a>
                                      </div>
                                      </div>
                                  </form>
                                </div>
                            </div>
               </div>
             </div>
         <?php endwhile; ?>
          </div>
      </div>
 
      <!--================ Room Detail =================-->
<?php get_footer(); ?>