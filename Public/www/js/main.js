$(function () {

    // pc轮播

    // pc-partner
    var mySwiper = new Swiper('.pc-partner .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.pc-partner .swiper-button-next',
            prevEl: '.pc-partner .swiper-button-prev',
        },
    })

    // pc-feedback
    var mySwiper = new Swiper('.pc-feedback .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.pc-feedback .swiper-button-next',
            prevEl: '.pc-feedback .swiper-button-prev',
        },
    });
    // about
    var mySwiper = new Swiper('.about .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        pagination: {
            el: '.about .swiper-pagination',
            clickable: true,
        },
    })



    // wap 轮播
    // wap-banner
    var mySwiper = new Swiper('.wap-banner .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        pagination: {
            el: '.wap-banner .swiper-pagination',
            clickable: true,
        },
    })
    // wap-partenr
    var mySwiper = new Swiper('.wap-partner .swiper-container', {
        loop: true,
        autoplay: true,
        speed: 1200,
        slidesPerView: 2,
        spaceBetween: 20,
        pagination: {
            el: '.wap-partner .swiper-pagination',
            clickable: true,
        },
    })
    // wap-feedback
    var mySwiper = new Swiper('.wap-feedback .swiper-container', {
        loop: true,
        speed: 1200,
        autoplay: true,
        spaceBetween: 10,
        pagination: {
            el: '.wap-feedback .swiper-pagination',
            clickable: true,
        },

    });
    // wap右上导航
    $(".nav li").click(function () {
        $(this).parent().parent().removeClass("in");
    })


    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })
    // top
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".goTop").fadeIn(1000);
            $(".navbar").addClass("navbar-fixed-top");
        } else {
            $(".goTop").fadeOut(1000);
            $(".navbar").removeClass("navbar-fixed-top");
        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });
    
    // banner
    var mySwiper = new Swiper('.pc-banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        effect: 'fade',
        loop: true,
        pagination: {
            el: '.pc-banner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.pc-banner .swiper-button-next',
            prevEl: '.pc-banner .swiper-button-prev',
        },
        on: {
            init: function () {
                swiperAnimateCache(this);
                swiperAnimate(this);
            },
            slideChangeTransitionEnd: function () {
                swiperAnimate(this);

            }
        }

    })

})

var submitcount2 = 0;

function beforeSubmit2(form) {

    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.company.value == '') {
        alert('The company can not be empty');
        form.company.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}

