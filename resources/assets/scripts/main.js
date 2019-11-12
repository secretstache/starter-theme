import $ from 'jquery';
import 'what-input';
window.jQuery = $;
require('foundation-sites');
require('slick-carousel');

import '../../../node_modules/slick-carousel/slick/slick.js';

$(document).foundation();

$('[data-slick]').slick();

// Sticky header
window.onscroll = function () { stickyHeader() };
const header = document.querySelector('.site-header');
var sticky = header.offsetTop;

function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

/*
 * Replace all SVG images with inline SVG
 */
$('img.editable-svg').each(function () {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    $.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');
        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }
        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');
        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        // if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        //     $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
        // }
        // Replace image with new SVG
        $img.replaceWith($svg);
    }, 'xml');
});


// Canvas button toggle
$('.hamburger').on('click', function () {
    $('body').toggleClass('offcanvas-active');
});

/* smooth scroll to anchors(sections) */
$(function () {
    $('.scroll-down, .menu-item a').on('click', function (e) {
        var target = $(this).attr('href');
        var offset = 100;
        if ($(target).length) {
            $('html,body').stop().animate({ scrollTop: $(target).offset().top - offset }, 1000);
            e.preventDefault();
        }
    });
});


// testimonial slider
$(document).ready(function () {
    const testimonialsCarousel = $('.testimonials-carousel');
    const singleItem = $('.single-item');

    function fitTestimonialsHeight() {
        const testimonials = testimonialsCarousel.find('.item');
        let maxHeight = 0;
        testimonials.each(function () {
            if ($(this).innerHeight() > maxHeight) {
                maxHeight = $(this).innerHeight();
            }
        });
        testimonials.each(function () {
            $(this).css('height', maxHeight);
        });
    }
    testimonialsCarousel.on('init reInit', function (event, slick) {
        if (slick.slideCount == 3) {
            $(this).addClass('has-3-slides');
        }
        fitTestimonialsHeight();
    });

    testimonialsCarousel.css('opacity', '1');

    singleItem.slick({
        arrows: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        autoplay: true,
        draggable: true,
        swipeToSlide: true,
    });
});

// counter for template-stats
var visible = false;
var $stats = $('.template-stats');

$(function () {
    if ($stats.length) {
        function Count(element) {

            var items = element.find(".counter");

            items.each(function () {

                var self = $(this);
                var countTo = self.attr('data-count');

                $({ countNum: self.text() }).animate(
                    {
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            self.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            self.text(this.countNum);
                        }

                    }
                );
            });

        }

        function Reset(element) {

            var items = element.find(".counter");

            items.each(function () {

                var self = $(this);
                self.text("0");

            })

        }

        function Scrolled(element) {

            var $section = element,
                findmeOffset = $section.offset(),
                findmeTop = findmeOffset.top,
                findmeBottom = $section.height() + findmeTop,
                scrollTop = $(document).scrollTop(),
                visibleBottom = window.innerHeight,
                prevVisible = $section.prop('_visible');

            if ((findmeTop > scrollTop + visibleBottom) || findmeBottom < scrollTop) {
                visible = false;
            } else {
                visible = true;
            }

            if (!prevVisible && visible) {
                Count(element);
            }

            $section.prop('_visible', visible);

            if (prevVisible && !visible) {
                Reset(element);
            }

        }

        $(window).on("scroll", function () {
            Scrolled($stats);
        });
    }
});

// hero unit slider
var heroSlider = $('.hero-unit-slider');

$(function () {
    if (heroSlider.length > 0) {
        heroSlider.slick();
        heroSlider.css('opacity', '1');
    }
});


// show extra categories in portfolio
$('.tabs-add').on('click', function () {
    $('.tab-hidden').toggleClass('tab-hidden-show');
    $('.tabs-add').css('display', 'none');
});

$('.tabs-title').on('click', function () {
    $('.tabs-panel').addClass('fadein');
});