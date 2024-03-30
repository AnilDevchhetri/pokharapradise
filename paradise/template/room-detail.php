<?php include('header.php') ?>
    <!--================Breadcrumb =================-->
  <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Room Detail</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Room Detail</a></li>
                    </ul>
                </div>
            </div>
  </section>
     <!--================Breadcrumb =================-->

      <!--================Room Detail =================-->
      <div class="inner-content mb-5">
          <div class="container custom-container">
             <div class="row">
                <div class="col-md-6">
                <div class="room-detail">
                <div class="owl-carousel rooms-details">
                    <div class="item">
                      <div class="room-detail-img">
                        <img src="img/room1.jpg">
                      </div>
                    </div>
                    <div class="item">
                      <div class="room-detail-img">
                        <img src="img/room1.jpg">
                      </div>
                    </div>
                </div>
                
              </div>
              </div>
              <div class="col-md-6">
                <div class="detail-room">
                  <div class="title text-left title-room-detail">
                      <h1>Twin <span class="resort-col"> Room</span> </h1>
                      <h6>Nrs. 2000 <span> / Night</span></h6>
                      <p>All rooms are tastefully designed with wall to wall carpets,sofas and curtains. All the rooms at Hotel Hilltop have attached spotless Bathrooms with geysers and modern sanitary fittings which provide running hot and cold water round the clock.</p>
                      <h3>Room Amenities</h3>
                      <div class="resot_list">
                          <ul>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Wi-Fi Access</li>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>Clean & Hygiene Bathroom</li>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious Food</li>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>Attached Bathroom</li>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>Clean room service</li>
                              <li><i class="fa fa-caret-right" aria-hidden="true"></i>24 hours hot and Cold shower</li>
                          </ul>
                      </div>
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
                                            <a href="introduction.php" class="btn-main-style">
                                            <span class="btn-title title-main-btn">Book Room</span>
                                          </a>
                                      </div>
                                      </div>
                                  </form>
                                </div>
                            </div>
               </div>
             </div>
          </div>
      </div>
 
      <!--================ Room Detail =================-->
<?php include('footer.php') ?>