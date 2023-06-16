// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('.accordion-header').on('click', function () {
    $(this).parent().toggleClass('active');
    $(this).next('.accordion-content').slideToggle(200);

    if ($(this).parent().hasClass('active')) {
        $(this).find('.icon').html('-');
    } else {
        $(this).find('.icon').html('+');
    }
});

$('.ctas_Slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
});

$('.banner_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    speed: 500,
    autoplaySpeed: 1000,
    cssEase: 'linear',
    autoplay: true,
    asNavFor: '.banner_slider_step'
})

$('.banner_slider_step').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    speed: 500,
    autoplaySpeed: 1000,
    cssEase: 'linear',
    autoplay: true,
    asNavFor: '.banner_slider'
})

let calcSlider = $('.calc_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    // speed: 2000,
    cssEase: 'linear'
});

$('#goToForm').on('click', function () {
    calcSlider.slick('slickGoTo', 1);
})

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});