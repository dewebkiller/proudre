/******************
 BACK-TO-TOP
 ******************/
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
$(document).ready(function () {
    $("#back-to-top").click(function () {
        $('html, body').animate({
            scrollTop: $(".wrapper").offset().top
        }, 2000);
    });

});
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 300) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }
});
/******************
 BANNER
 ******************/
$(window).ready(function () {
    $('.slider').bxSlider({
        auto: true,
        autoControls: true,
        pause: 4000});
});
/******************
 TESTIMONIAL
 ******************/
$(document).ready(function () {
    $("#testimonial").owlCarousel({
        autoPlay: 6000, //Sets AutoPlay to 6 seconds********************
        items: 3,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
        pagination: true});
});
/******************
 BLOG
 ******************/
$(document).ready(function () {
    $("#blog").owlCarousel({
        autoPlay: 6000, //Sets AutoPlay to 6 seconds********************
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
        pagination: true});
});

/******************
 Properties single
 ******************/
$(document).ready(function () {
    $(".slides").owlCarousel({
        autoPlay: 3000, //Sets AutoPlay to 6 seconds********************
        items: 4,
        margin: 0,
        nav: true,
        navText: ['<span class="fa fa-chevron-left fa-2x"></span>','<span class="fa fa-chevron-right fa-2x"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            }
        },
        pagination: true});
});

$(function () {
    var $sections = $('.form-section');
    function navigateTo(index) {
        // Mark the current section with the class 'current'
        $sections
                .removeClass('current')
                .eq(index)
                .addClass('current');
// Show only the navigation buttons that make sense for the current section:
    }
    function curIndex() {
// Return the current index by looking at which section has the class 'current'
        return $sections.index($sections.filter('.current'));
    }
// Previous button is easy, just go back
// Next button goes forward iff current block validates
// Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
    $sections.each(function (index, section) {
        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });
    navigateTo(0); // Start at the beginning
});


