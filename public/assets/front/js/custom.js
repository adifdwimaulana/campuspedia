$(function() {
     'use strict'; // Start of use strict
     /*------------------------------------------------------------------
      Progress Bar
      ------------------------------------------------------------------*/
     $('.progress .progress-bar').css("width",
             function() {
                 return $(this).attr("aria-valuenow") + "%";
             }
         )
         /*------------------------------------------------------------------
        Header Search
        ------------------------------------------------------------------*/
     $("#search-form").hide();
     $(".fa-search").on('click', function() {
         $("#search-form").toggle();
         $("#search-form").fadeIn().addClass("open");
     });
     $("#search-form .close").on('click', function() {
         $("#search-form").fadeOut().removeClass("open");
         $("#this").hide();
     });
     /*------------------------------------------------------------------
     Scrool Top
     ------------------------------------------------------------------*/
     $("#scrool-top").on('click', function() {
         $('html, body').animate({
             scrollTop: 0
         }, 1200, 'easeOutQuint');
         return false;
     });
     /*------------------------------------------------------------------
    Header Navigation
    ------------------------------------------------------------------*/
     if ($(window).width() > 767) {
         $('ul.navbar-nav li.dropdown').on('hover', function() {
             $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
         }, function() {
             $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
         });
     }
 });
 /*------------------------------------------------------------------
 WOW
 ------------------------------------------------------------------*/
 wow = new WOW({
     animateClass: 'animated',
     offset: 100
 });
 wow.init();
 /*------------------------------------------------------------------
  Loader + Animation Numbers
 ------------------------------------------------------------------*/
 jQuery(window).on("load scroll", function() {
	  'use strict'; // Start of use strict
     // Loader 
     $("#dvLoading").fadeOut("fast");
     // map zooming 	 
     $('.google-map').on('click', function() {
         $('.google-map iframe').css("pointer-events", "auto");
     });
     //Animation Numbers	 
     jQuery('.animateNumber').each(function() {
         var num = jQuery(this).attr('data-num');
         var top = jQuery(document).scrollTop() + (jQuery(window).height());
         var pos_top = jQuery(this).offset().top;
         if (top > pos_top && !jQuery(this).hasClass('active')) {
             jQuery(this).addClass('active').animateNumber({
                 number: num
             }, 2000);
         }
     });
     jQuery('.animateProcent').each(function() {
         var num = jQuery(this).attr('data-num');
         var percent_number_step = jQuery.animateNumber.numberStepFactories.append('%');
         var top = jQuery(document).scrollTop() + (jQuery(window).height());
         var pos_top = jQuery(this).offset().top;
         if (top > pos_top && !jQuery(this).hasClass('active')) {
             jQuery(this).addClass('active').animateNumber({
                 number: num,
                 numberStep: percent_number_step
             }, 2000);
             jQuery(this).css('width', num + '%');
         }
     });
 });
 /*------------------------------------------------------------------
     Owl Carousel for Team
 ------------------------------------------------------------------*/
 var owl = $("#owl-demo");
 owl.owlCarousel({
     itemsCustom: [
         [0, 1],
         [450, 2],
         [600, 2],
         [700, 2],
         [1000, 4],
         [1200, 4],
         [1400, 4],
         [1600, 4]
     ],
     navigation: true

 });
 /*------------------------------------------------------------------
     Owl Carousel for Testimonials
 ------------------------------------------------------------------*/ 
 var owl = $("#testimonials");
 owl.owlCarousel({
     itemsCustom: [
         [0, 1],
         [450, 2],
         [600, 2],
         [700, 2],
         [1000, 2],
         [1200, 2],
         [1400, 2],
         [1600, 2]
     ],
     navigation: true

 });
 /*------------------------------------------------------------------
     Owl Carousel for Sponsers
 ------------------------------------------------------------------*/
 var owl = $("#sponsers");
 owl.owlCarousel({
     itemsCustom: [
         [0, 1],
         [450, 2],
         [600, 3],
         [700, 3],
         [1000, 3],
         [1200, 4],
         [1400, 4],
         [1600, 4]
     ],
     navigation: true

 });
 /*------------------------------------------------------------------
 Classic Accordion
 ------------------------------------------------------------------*/
 (function($) {
     'use strict'; // Start of use strict
     // Accordion Toggle Items
     var iconOpen = 'fa fa-minus',
         iconClose = 'fa fa-plus';

     $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function(e) {
         var $target = $(e.target)
         $target.siblings('.accordion-heading')
             .find('em').toggleClass(iconOpen + ' ' + iconClose);
         if (e.type == 'show')
             $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
         if (e.type == 'hide')
             $(this).find('.accordion-toggle').not($target).removeClass('active');
     });

 })(jQuery);
 /*------------------------------------------------------------------
 Count Down
 ------------------------------------------------------------------*/
 if ($(".count-down").length) {
     var year = parseInt($(".count-down").attr("data-countdown-year"), 10);
     var month = parseInt($(".count-down").attr("data-countdown-month"), 3) - 1;
     var day = parseInt($(".count-down").attr("data-countdown-day"), 10);
     $(".count-down").countdown({
         until: new Date(year, month, day),
         padZeroes: true
     });
 }

 $(document).ready(function(){
    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $('.tentor').removeClass('active');
    $(this).addClass('active');
    $('.siswa').addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $('.siswa').removeClass('active');
    $(this).addClass('active');
    $('.tentor').addClass('active');
    e.preventDefault();
});
$(document).ready(function(){
    $("#tablePaketHome").dataTable();
})
// 
});