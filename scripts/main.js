// AOS.init({ duration: 1500 });

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
    nextArrow: "<img src='./assets/images/icons/right-arrow.png' class='next-arrow'>",
    prevArrow: "<img src='./assets/images/icons/left-arrow.png' class='prev-arrow'>"
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
    arrows: true,
    fade: true,
    // speed: 2000,
    nextArrow: "<img src='./assets/images/icons/right-arrow.png' class='next-arrow'>",
    cssEase: 'linear',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false,
            }
        }
    ]
});

document.querySelectorAll('a[href="#calculator"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        $('.calc_slider').slick('slickGoTo', 1);

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });

    });
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

const today = new Date().toISOString().split('T')[0];
document.getElementById("dateInput").setAttribute("min", today);

function validateForm() {
    let phoneInput = $('#phoneInput').val();
    let re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if(!re.test(phoneInput)) {
        $('#phoneError').fadeIn();

        return false;
    }

    return true;
}

$("#heroForm").on('submit', function () {
    return validateForm();
});

let autocompleteFrom;
let autocompleteTo;

function initPlaces() {
    if ($('#moving-from').length) {
        autocompleteFrom = new google.maps.places.Autocomplete(
            document.getElementById('moving-from'),
            { types: ['geocode'] }
        );
    }

    if ($('#moving-to').length) {
        autocompleteTo = new google.maps.places.Autocomplete(
            document.getElementById('moving-to'),
            { types: ['geocode'] }
        );
    }
};