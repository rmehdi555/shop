/*  ---------------------------------------------------
    Template Name: Specer
    Description: Specer Sport HTML Template
    Author: Colorlib
    Author URI: http://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    $(".canvas-open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").addClass("active");
    });


    $(".canvas-close, .offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("show-offcanvas-menu-wrapper");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    // Search model
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });


    /*------------------
        News Slider
    --------------------*/
    $(".news-slider").owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        mouseDrag: false
    });

    /*------------------------
		Video Slider
    ----------------------- */
    $(".video-slider").owlCarousel({
        items: 4,
        dots: false,
        autoplay: false,
        margin: 0,
        loop: true,
        smartSpeed: 1200,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
        }
    });

    /*------------------
        Magnific Popup
    --------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

})(jQuery);


$(document).ready(function() {


    // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
    $('.table-responsive-stack').each(function (i) {
        var id = $(this).attr('id');
        //alert(id);
        $(this).find("th").each(function(i) {
            $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
            $('.table-responsive-stack-thead').hide();

        });



    });





    // $( '.table-responsive-stack' ).each(function() {
    //     var thCount = $(this).find("th").length;
    //     var rowGrow = 100 / thCount + '%';
    //     //console.log(rowGrow);
    //     $(this).find("th, td").css('flex-basis', rowGrow);
    // });




    function flexTable(){
        if ($(window).width() < 768) {

            $(".table-responsive-stack").each(function (i) {
                $(this).find(".table-responsive-stack-thead").show();
                $(this).find('thead').hide();
                $(this).find(".hidden-mobile-view").hide();
            });

            $( '.table-responsive-stack' ).each(function() {
                var thCount = $(this).find("th").length;
                var rowGrow = 100 / thCount + '%';
                //console.log(rowGrow);
                $(this).find("th, td").css('flex-basis', rowGrow);
            });

            // window is less than 768px
        } else {


            $(".table-responsive-stack").each(function (i) {
                $(this).find(".table-responsive-stack-thead").hide();
                $(this).find('thead').show();
                $(this).find(".hidden-mobile-view").show();
            });
            $( '.table-responsive-stack' ).each(function() {
                $(this).find(".th-td-50").css('flex-basis', '50%');
                $(this).find(".th-td-40").css('flex-basis', '40%');
                $(this).find(".th-td-42").css('flex-basis', '42%');
                $(this).find(".th-td-36").css('flex-basis', '36%');
                $(this).find(".th-td-34").css('flex-basis', '34%');
                $(this).find(".th-td-30").css('flex-basis', '30%');
                $(this).find(".th-td-28").css('flex-basis', '28%');
                $(this).find(".th-td-20").css('flex-basis', '20%');
                $(this).find(".th-td-10").css('flex-basis', '10%');
                $(this).find(".th-td-8").css('flex-basis', '8%');
                $(this).find(".th-td-16").css('flex-basis', '16%');
            });



        }
// flextable
    }

    flexTable();

    window.onresize = function(event) {
        flexTable();
    };






// document ready
});