$(function () {
    // banner   
    var mySwiper = new Swiper('.banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        effect: 'fade',
        loop: true,
        pagination: {
            el: '.banner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.banner .swiper-button-next',
            prevEl: '.banner .swiper-button-prev',
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


    //定义变量获取屏幕视口宽度
    var windowWidth = $(window).width();
    if (windowWidth < 768) {
        // partenr
        var mySwiper = new Swiper('.partner .swiper-container', {
            loop: true,
            autoplay: true,
            speed: 1200,
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: '.partner .swiper-button-next',
                prevEl: '.partner .swiper-button-prev',
            },
            pagination: {
                el: '.partner .swiper-pagination',
                clickable: true,
            },
        })
        // Feedback
        var mySwiper = new Swiper('.feedback .swiper-container', {
            loop: true,
            speed: 1200,
            autoplay: true,
            spaceBetween: 10,
            navigation: {
                nextEl: '.feedback .swiper-button-next',
                prevEl: '.feedback .swiper-button-prev',
            },
            pagination: {
                el: '.feedback .swiper-pagination',
                clickable: true,
            },

        });

        $(".nav li").click(function () {
            $(this).parent().parent().removeClass("in");
        })



    }
    if (windowWidth >= 768) {
        var mySwiper = new Swiper('.partner .swiper-container', {
            loop: true,
            autoplay: true,
            speed: 1200,
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.partner .swiper-button-next',
                prevEl: '.partner .swiper-button-prev',
            },
        })
        var mySwiper = new Swiper('.feedback .swiper-container', {
            loop: true,
            autoplay: true,
            speed: 1200,
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.feedback .swiper-button-next',
                prevEl: '.feedback .swiper-button-prev',
            },
        });
    }


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
