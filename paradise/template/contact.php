<?php /*template name:Contact*/ ?>
<?php get_header(); ?>
    <!--================Breadcrumb =================-->
	<section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact</h3>
                    <ul>
                        <li class="active"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
  </section>
     <!--================Breadcrumb =================-->

    <!--================ Detail Section =================-->
    <section class="contact-form-section mt-5">
    <div class="container custom-container">
     <div class="row">
                          <div class="col-md-7">
                            <div class="contact-form-box">
                              <div class="title">
                                <h4>We Love to Hear From You</h4>
                              </div>
                                <div class="contact-form">
                                  <!--<form class="row" method="post">-->
                                       <?php echo do_shortcode('[contact-form-7 id="50" title="Contact us form"]');?>
                                      

                                  <!--</form>-->
                               

                                   

                                </div>
                            </div>
                          </div>
                          <?php 
                              $add  = get_theme_mod('hp-box-address1');
                              $email = get_theme_mod('hp-box-email1');
                              $email1 = get_theme_mod('hp-box-email2');
                              $phone = get_theme_mod('hp-box-phone');
                              $website = get_theme_mod('hp-box-website');

                          ?>
                          <div class="col-md-5 mb-30 pl-lg-5">
                            <div class="title">
                              <h4>Address Information</h4>
                              
                            </div>
                            <ul class="contact-info-list">
                              <li>
                                <span class="fas fa-map-marker-alt"></span><b>Address</b><?php
                                echo $add; ?></li><li>
                                <span class="fas fa-envelope-open"></span><b>Email</b>  
                                <?php echo $email;  ?><br>
                                   <?php echo $email1; ?>
                              </li>
                                <li>
                                  <span class="fas fa-phone"></span><b>Phone </b><?php echo $phone; ?></li>
                                  <li><span class="fas fa-globe"></span><b>Website</b><?php 
                                     echo $website;
                                  ?></li>
                                </ul></div>
                        </div>
    </div>
    </section>
    <!--================ Detail Section =================-->
<?php get_footer(); ?>