// This function will scroll the window to an anchor with a nice, smooth animation
function nice_scroll_to_section (section_id, $) {
    var anchor = $('#' + section_id);
    $('html, body').animate({
        scrollTop: anchor.offset().top
    }, 'slow');
}

(function ($) {

    // Change the speed of the parallax scroller so the images appear to stay still
    $('.parallax-container').parallax({
        speed: 0,
    });

    // When the homepage next button is clicked, scroll to the next section
    $('.homepage-next-page > .fa-angle-down').click(function () {
        nice_scroll_to_section('section-14', $);
    });

    // When the about next button is clicked, scroll to the next section
    $('.about-next-page > .fa-angle-down').click(function () {
        nice_scroll_to_section('section-17', $);
    });

    // When the portfolio next button is clicked, scroll to the next section
    $('.portfolio-next-page > .fa-angle-down').click(function () {
        nice_scroll_to_section('section-73', $);
    });

    // When the services next button is clicked, scroll to the next section
    $('.services-next-page > .fa-angle-down').click(function () {
        nice_scroll_to_section('section-93', $);
    });

    // Slick slider functionality for slider on portfolio page
    $('.portfolio-slick-slider').slick({
        prevArrow: $('.previous-arrow-container'),
        nextArrow: $('.next-arrow-container'),
        dots: true,
    });

    // This is the functioality to show the overlay when hovering over portfolio images
    $('.slick-slide-inner').hover(function () {
        var slide_id = $(this).attr('slide-id');

        $('.slide-overlay-' + slide_id).show();
    }, function () {
        $('.slick-slide-hover-overlay').hide();
    });

})(jQuery);
