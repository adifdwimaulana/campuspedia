(function($){
	"use strict";
	jQuery(document).on('ready', function () {
        // Mean Menu
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});

		// Header Search
		$('a[href="#header-search"]').on("click", function (event) {
			event.preventDefault();
			$("#header-search").addClass("open");
			$('#header-search > form > input[type="search"]').focus();
		});
		$("#header-search, #header-search button.close").on("click", function (
			event
		) {
			if (
				event.target === this ||
				event.target.className === "close" ||
				event.keyCode === 27
			) {
				$(this).removeClass("open");
			}
        });
        
        // Start Agency Home Slides
        $('.home-slides').owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            nav:true,
            responsiveClass:true,
            dots:false,
            autoplayHoverPause:true,
            mouseDrag:true,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
        });
		$(".home-slides").on("translate.owl.carousel", function(){
            $(".main-banner h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner p").removeClass("animated zoomIn").css("opacity", "0");
            $(".main-banner .btn, .main-banner .video-btn").removeClass("animated fadeInDown").css("opacity", "0");
            $(".main-banner .startup-image").removeClass("animated zoomIn").css("opacity", "0");
        });
        $(".home-slides").on("translated.owl.carousel", function(){
            $(".main-banner h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner p").addClass("animated zoomIn").css("opacity", "1");
            $(".main-banner .btn, .main-banner .video-btn").addClass("animated fadeInDown").css("opacity", "1");
            $(".main-banner .startup-image").addClass("animated zoomIn").css("opacity", "1");
        });

		// Public methods
        $.fn.tilt.destroy = function() {
            $(this).each(function () {
                $(this).find('.js-tilt-glare').remove();
                $(this).css({'will-change': '', 'transform': ''});
                $(this).off('mousemove mouseenter mouseleave');
            });
		};
		
		// Magnific Popup
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		
		// Tabs
        (function ($) {
            $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
            $('.tab ul.tabs li a').on('click', function (g) {
                var tab = $(this).closest('.tab'), 
                index = $(this).closest('li').index();
                tab.find('ul.tabs > li').removeClass('current');
                $(this).closest('li').addClass('current');
                tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
                tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
                g.preventDefault();
            });
	    })(jQuery);

		// Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.crake-nav').addClass("is-sticky");
            }
            else{
                $('.crake-nav').removeClass("is-sticky");
            }
		});
		
		// Feedback Slides
        $('.feedback-slides').owlCarousel({
            loop:true,
            nav:true,
            autoplay:true,
            autoplayHoverPause: true,
            mouseDrag: true,
            center: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        // Screenshot Slides
        $('.screenshot-slides').owlCarousel({
            loop:true,
            nav:true,
            autoplay:true,
            autoplayHoverPause: true,
            mouseDrag: true,
            center: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1024:{
                    items:3,
                },
                1200:{
                    items:3,
                }
            }
        });
        
        // Team Slides
        $('.team-slides').owlCarousel({
            loop:true,
            nav:true,
            autoplay:true,
            autoplayHoverPause: true,
            mouseDrag: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1024:{
                    items:3,
                },
                1200:{
                    items:4,
                }
            }
        });
        
        // Blog Slides
        $('.blog-slides').owlCarousel({
            autoplay: true,
            nav: true,
            loop:true,
            mouseDrag: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });

        // Project Slides
        $('.project-slides').owlCarousel({
            autoplay: true,
            nav: true,
            loop:true,
            mouseDrag: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:4,
                }
            }
        });

        // Product Slides
        $('.product-slides').owlCarousel({
            autoplay: true,
            nav: true,
            loop:true,
            mouseDrag: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            dots: false,
            navText: [
                "<i class='icofont-bubble-left'></i>",
                "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });
		
		// Partner Slides
        $('.partner-slides').owlCarousel({
            autoplay: true,
            nav: false,
            mouseDrag: true,
            autoplayHoverPause: true,
            responsiveClass: true,
            dots: false,
            loop: true,
            navText: [
            "<i class='icofont-bubble-left'></i>",
            "<i class='icofont-bubble-right'></i>"
            ],
            responsive:{
                0:{
                    items:2,
                },
                768:{
                    items:3,
                },
                1024:{
                    items:4,
                },
                1200:{
                    items:5,
                }
            }
        });

        // Product Details Image SLides
        $(".product-img-slides").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            touchDrag: false,
            mouseDrag: true,
            autoplay: true,
            smartSpeed: 500,
            loop: true,
            autoplayHoverPause:true,
            navText: [
            "<i class='icofont-bubble-left'></i>",
            "<i class='icofont-bubble-right'></i>"
            ],
        });

        // Check distance to top and display back-to-top.
        jQuery( window ).on('scroll', function() {
            if ( $( this ).scrollTop() > 800 ) {
                $( '.back-to-top' ).addClass( 'show-back-to-top' );
            } else {
                $( '.back-to-top' ).removeClass( 'show-back-to-top' );
            }
        });
        $('.back-to-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  500);
        });

		// Counter
        $(".count").counterUp({
            delay: 15,
            time: 5500,
        });

        // Popup Gallery
		$('.popup-btn').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });

        // FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
        });

        // Count Time 
        function makeTimer() {
            var endTime = new Date("April 26, 2019 17:00:00 PDT");			
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");		
        }
        setInterval(function() { makeTimer(); }, 1000);

        // Tabs
        $("#tabs li").on("click", function(){
            var tab = $(this).attr("id");
            if ($(this).hasClass("inactive")) {
                $(this).removeClass("inactive");
                $(this).addClass("active");
                $(this).siblings().removeClass("active").addClass("inactive");
                $("#" + tab + "_content").addClass("show");
                $("#" + tab + "_content").siblings("div").removeClass("show");
            }
        });

        // Nice Select
        $('select').niceSelect();

        // Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
			// handle the invalid form...
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				// everything looks good!
				event.preventDefault();
			}
		});

		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://salakit.us20.list-manage.com/subscribe/post?u=a5891eb96ac2e08f22da1faf3&amp;id=a1861bcb1e", // Your url MailChimp
			callback: callbackFunction
		});
    });
    
    $(window).on ('load', function (){
        // WOW JS
        if ($(".wow").length) { 
            var wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       20,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
    });
	
    // Preloader Area
	jQuery(window).on('load', function() {
	    $('.preloader-area').fadeOut();
	});
}(jQuery));