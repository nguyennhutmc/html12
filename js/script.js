var vw = ($('html').css('font-size').replace('px', ''));
//console.log(vw);
function init() {
    $('body').addClass($("main").attr("class"));
    if ($(".events_card .swiper").length) {
        var swiper = new Swiper(".events_card .swiper", {
            slidesPerView: 1,
            //spaceBetween:0.75*vw,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".event-container .swiper-button-next",
                prevEl: ".event-container .swiper-button-prev",
            },
            breakpoints: {
                992: {
                    slidesPerView:3,
                    //spaceBetween:0*vw,
                    centeredSlides: false,
                },
            },
        });
    }
    if ($(window).width() >= 992) {
        let hideTimeout;
        $('.nav-item.dropdown').hover(
            function () {
                clearTimeout(hideTimeout);
                $('.nav-item.dropdown').removeClass('show').find('.dropdown-toggle, .dropdown-menu').removeClass('show');
                $(this).addClass('show');
                $(this).find('.dropdown-toggle').addClass('show');
                $(this).find('.dropdown-menu').addClass('show');
            },
            function () {
                const $dropdown = $(this);
                hideTimeout = setTimeout(function () {
                    $dropdown.removeClass('show');
                    $dropdown.find('.dropdown-toggle, .dropdown-menu').removeClass('show');
                }, 500);
            }
        );
    }
}

function _sticky() {
    var winscroll = $(window).scrollTop();
    if (winscroll >= vw * 10) {
        $("body").addClass("sticky");
    } else {
        $("body").removeClass("sticky");
    }
}
$(function () {
    init();
});
var lastScrollTop = 0;
$(window).on("scroll", function (event) {
    _sticky();
});
