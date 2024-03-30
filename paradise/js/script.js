(function ($) {
    $(document).ready(function () {
         // Magnific popup
        //-----------------------------------------------
        if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
            $(".popup-img").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                }
            });
            $(".popup-img-single").magnificPopup({
                type: "image",
                gallery: {
                    enabled: false,
                }
            });
            $('.popup-iframe').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                preloader: false,
                fixedContentPos: false
            });
        }
        

        // Animations
        //-----------------------------------------------
        if (($("[data-animation-effect]").length > 0) && !Modernizr.touch) {
            $("[data-animation-effect]").each(function () {
                var $this = $(this),
                    animationEffect = $this.attr("data-animation-effect");
                if (Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
                    $this.appear(function () {
                        var delay = ($this.attr("data-effect-delay") ? $this.attr("data-effect-delay") : 1);
                        if (delay > 1) $this.css("effect-delay", delay + "ms");
                        setTimeout(function () {
                            $this.addClass('animated object-visible ' + animationEffect);
                        }, delay);
                    }, { accX: 0, accY: -130 });
                } else {
                    $this.addClass('object-visible');
                }
            });
        };


        //Scroll totop
        //-----------------------------------------------
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $(".scrollToTop").fadeIn();
            } else {
                $(".scrollToTop").fadeOut();
            }
        });

        $(".scrollToTop").click(function () {
            $("body,html").animate({ scrollTop: 0 }, 800);
        });

        // OWL CAROUSEL


            $('.rooms').owlCarousel({
                    loop:true,
                    margin:45,
                    responsiveClass:true,
                    nav:true,
                   autoplay: true,
                   smartSpeed: 3000,
                    autoplay: 4000,
                     navText: [
                            "<i class='fa fa-angle-left'></i>",
                            "<i class='fa fa-angle-right'></i>"
                        ],
                    responsive:{
                        0:{
                            items:1,
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:3,
                            
                        }
                    }
                })

               

                  $('.testi').owlCarousel({
                    loop:true,
                    margin:12,
                    responsiveClass:true,
                    nav:true,
                   autoplay: true,
                   smartSpeed: 3000,
                    autoplay: 4000,
                    
                    responsive:{
                        0:{
                            items:1,
                            autoHeight:false,
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:1,
                            nav: true,
                            pagination: true,
                            mouseDrag:true,
                            
                        }
                    }
                })


                   $('.rooms-details').owlCarousel({
                    loop:true,
                    margin:0,
                    responsiveClass:true,
                    nav:true,
                   autoplay: false,
                   smartSpeed: 1500,
                   autoHeight:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false,
                            
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:1,
                            navText: [
                            "<i class='fa fa-angle-left'></i>",
                            "<i class='fa fa-angle-right'></i>"
                        ],
                            
                        }
                    }
                })

         // END OWL CAROUSEL
         

        //menubar scripts starts here
     var stickyNavTop = $('.nav1').offset().top;

                var stickyNav = function(){
                var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('.nav1').addClass('sticky');
       $('.nav1').addClass('fadeInDown animated');
     $(".logosticky").css("width","150px");
     $(".book-btn").css("right","150px");
    } else {
      $(".logosticky").css("width","150px");
      $('.nav1').removeClass('sticky'); 
      $('.nav1').removeClass('fadeInDown animated');
      $(".book-btn").css("right","150px");
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });

  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

//menubar scripts ends here


 }); // End document ready

})(this.jQuery);

jQuery(window).load(function ($) {
 // Isotope filters
        //-----------------------------------------------
        if ($('.isotope-container').length > 0 || $('.masonry-grid').length > 0 || $('.masonry-grid-fitrows').length > 0) {
            
                $('.masonry-grid').isotope({
                    itemSelector: '.masonry-grid-item',
                    layoutMode: 'masonry'
                });
                $('.masonry-grid-fitrows').isotope({
                    itemSelector: '.masonry-grid-item',
                    layoutMode: 'fitRows'
                });
        }
});