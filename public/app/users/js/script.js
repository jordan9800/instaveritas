(function($) {
	
	"use strict";


    // Back to top
    $.scrollUp({
        scrollText: '<img src="assets/images/to-top.png">',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


    

    //js code for mobile menu toggle
   $(".menu-toggle").on("click", function() {
       $(this).toggleClass("is-active");
   });

    // banner content animation
   $(".hero-area").on("translate.owl.carousel", function() {
       $(".hero-content h3").removeClass("animated fadeIn").css("opacity", "0"),
       $(".hero-content h2").removeClass("animated flipInX").css("opacity", "0"),
       $(".hero-content p").removeClass("animated fadeIn").css("opacity", "0"),
       $(".hero-content a").removeClass("animated flipInX").css("opacity", "0")
   }),
   $(".hero-area").on("translated.owl.carousel", function() {
       $(".hero-content h3").addClass("animated fadeIn").css("opacity", "1"),
       $(".hero-content h2").addClass("animated flipInX").css("opacity", "1"),
       $(".hero-content p").addClass("animated fadeIn").css("opacity", "1"),
       $(".hero-content a").addClass("animated flipInX").css("opacity", "1")
   });

    // Hero Galerry
    $('.hero-area').owlCarousel({
        loop:true,
        dots: true,
        mouseDrag: false,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 10000,
        smartSpeed: 5000,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Photo Galerry
    $('.photo-gallery').owlCarousel({
        loop:true,
        dots: false,
        autoplay: true,
        center: true,
        smartSpeed: 1500,
        nav:true,
        navText: [
            '<img src="assets/images/arrow-left.png" alt="">',
            '<img src="assets/images/arrow-right.png" alt="">'
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Studio Galerry
    $('.studio-slider').owlCarousel({
        loop:true,
        dots: false,
        autoplay: true,
        smartSpeed: 1500,
        nav:true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Testimoal Slider
    $('.testimonials').owlCarousel({
        loop:true,
        dots: true,
        autoplay: false,
        margin:30,
        smartSpeed: 1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    // Rj Slider
    $('.rj-thumbnail').owlCarousel({
        loop:true,
        nav: true,
        dots: false,
        autoplay: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

        
         //portfolio filtering

        var $portfolio = $('.portfolio');
        if ($.fn.imagesLoaded && $portfolio.length > 0) {
            imagesLoaded($portfolio, function () {
                $portfolio.isotope({
                    itemSelector: '.portfolio-item',
                    filter: '*'
                });
                $(window).trigger("resize");
            });
        }

        $('.portfolio-filter').on('click', 'a', function (e) {
            e.preventDefault();
            $(this).parent().addClass('active').siblings().removeClass('active');
            var filterValue = $(this).attr('data-filter');
            $portfolio.isotope({filter: filterValue});
        });

        
         // Portfolio popup

        $(".portfolio-gallery").each(function () {
            $(this).find(".popup-gallery").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true
                }
            });
        }); 

        $('.video-popup').magnificPopup({
            type: 'iframe',
        });


    //Wow js active
    new WOW().init();   


    // Preloader Js
    $(window).on('load', function(){
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });

	
})(jQuery);