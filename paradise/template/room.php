<?php /*template name:Rooms*/ ?>
<?php get_header(); ?>
    <!--================Breadcrumb =================-->
	<section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Rooms</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="room.php">Rooms</a></li>
                    </ul>
                </div>
            </div>
  </section>
     <!--================Breadcrumb =================-->

    <!--================ Detail Section =================-->
    <section class="room-section room-all">
    <div class="container custom-container">
        <div class="row">
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

            <div class="col-md-4">
                <div class="single-item">
                    <div class="img-box">
                        <figure><a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="room-image"></a></figure>
                    </div>
                    <div class="service-content">
                        <a href="room-detail.php"><h3><?php the_title(); ?></h3></a>
                        <div class="text"><span><?php echo $room_p; ?></span></div>
                        <div class="rating-wrapper"><a class="btn-style-one" href="<?php the_permalink(); ?>">Book Now</a></div>
                    </div>
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
    <!--================ Detail Section =================-->
<?php get_footer();?>