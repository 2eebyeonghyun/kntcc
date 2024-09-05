//$(document).ready(function () {
//    setInputData: function (sSelector, data) {
//        var sSelectorSting = 'input#' + sSelector;
//        if (data) {
//            $(sSelectorSting).val(data);
//            $(sSelectorSting).addClass('bbx_w').removeClass('bbx_off');
//        } else {
//            $(sSelectorSting).val();
//            $(sSelectorSting).addClass('bbx_off').removeClass('bbx_on');
//        }
//    },
//});

$(document).ready(function () {
    //마우스 휠을 움직이면 항상 브라우저 y축 중간에 떠있는 퀵메뉴
    var $menu = $("#menu");
    var $menu_a = $menu.find("li a")
    var h = $(window).height() / 2 - $menu.height() / 2;
    $(".section").css("height", $(window).height());

    $menu.css("top", h + "px");
    $(window).scroll(function () {

        var t = $(window).scrollTop() + h
        $menu.stop().animate({
            "top": t
        }, 0);
    });

    // 클릭한 a태그의 href값이 같은 section박스의 좌표로 이동
    $menu_a.on("click", function () { //1.a태그를 클릭하면
        var target = $(this).attr("href"); //2.변수 target을 생성하고 현재 클릭한 a태그의 href를 담는다.
        $("body,html").animate({ //3. body와 html에 애니메이트 실행

            //scrollTop_스크롤y위치
            //offset().top_전역 좌표 위치
            scrollTop: $(target).offset().top - 100

        }, 100); //y스크롤값에 현재 클릭한 a태그의 href와 동일한 박스의 좌표를 담아 3번 실행.

        //클릭한 버튼에 백그라운드 색상 추가          
        $menu_a.removeClass("on");
        $(this).addClass("on");

    });
});


$(document).ready(function () {
    $('.detail_box .tabs a').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tab-cont > div').eq($(this).index()).fadeIn(300).siblings().hide();
    })

    $('.detail_box2 .tabs a').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tab-cont > div').eq($(this).index()).fadeIn(300).siblings().hide();
    })

    $('.detail_box3 .tabs a').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tab-cont > div').eq($(this).index()).fadeIn(300).siblings().hide();
    })

    $('.detail_box4 .tabs a').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tab-cont > div').eq($(this).index()).fadeIn(300).siblings().hide();
    })
})

$(document).ready(function () {
    init();

    $(window).on("load resize", function () {
        var doc_width = $(window).width(); // 리사이즈 될 때 문서 넓이 감지
        hdlr_switch(doc_width);
        console.log(2)
        if ($(window).width() <= 1200) {
            $(".main-menu > ul > li").off().on("click", function () {
                console.log(1)
                $(this).find("ul").stop().slideToggle();
                $(".main-menu ul > li").not(this).find("ul").stop().slideUp();
                $(this).toggleClass("on");
                $(".main-menu ul > li").not(this).removeClass("on");
            });
        } else {
            $(".main-menu ul > li").off("click");
            $(".main-menu ul > li").find("ul").stop().slideDown();
        }
    });


    // gnb복사 lnb 붙여넣기


    $('.header-menu ul > li').hover(function () {
        $(this).addClass('header-menu-on');
        $(this).find('.header-sub-menu').stop().slideDown().css('display', 'flex');
        $('.header-sub-menu-bg').stop().slideDown();
    }, function () {
        $(this).removeClass('header-menu-on');
        $(this).find('.header-sub-menu').stop().slideUp().css('display', 'flex');
        $('.header-sub-menu-bg').stop().slideUp();
    });
    $('.header-in').hover(function () {
        $('.header-in').addClass('header-menu-bg');
        $('.menu-open-btn-box button > span').addClass('menu-btn-on');
    }, function () {
        $('.header-in').removeClass('header-menu-bg');
        $('.menu-open-btn-box button > span').removeClass('menu-btn-on');
    });
    $('.menu-open-btn-box button').click(function () {
        $('.main-menu').addClass('main-menu-on').css('display', 'block');
        $('.menu-close-btn-box').css('display', 'block');
    });
    $('.menu-close-btn-box button').click(function () {
        $('.main-menu').removeClass('main-menu-on');
        $('.menu-close-btn-box').css('display', 'none');
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 80) {
            $('.header-in').addClass('header-scroll-bg');
            $('.menu-open-btn-box button > span').addClass('scroll-btn-on');
            //$('.business-info').addClass('on');
            $('.business-cont-title').addClass('on');
            $('.business-cont').addClass('on');
        } else {
            $('.header-in').removeClass('header-scroll-bg');
            $('.menu-open-btn-box button > span').removeClass('scroll-btn-on');
        }
    });
});

function init() {
    $winUrl = location.href; //lnb연결
    $gnb = $(".gnb");
};

function initEvent_pc(val) {
    console.log(val);
    $gnb.children("li").mouseenter(function () {
        gnbOn($(this));
    });
};

function initEvent_m(val) {
    console.log(val);

};


function hdlr_switch(val) {
    if (val > 1200) {
        console.log("pc");
        initEvent_pc(val);
    } else {
        console.log("mobile");
        initEvent_m(val);
    };
};

function autoHeightAnimate(element, time) {
    var curHeight = element.height(), // Get Default Height
        autoHeight = element.css('height', 'auto').height(); // Get Auto Height
    element.height(curHeight); // Reset to Default Height
    element.stop().animate({
        height: autoHeight
    }, time); // Animate to Auto Height
};



     
            
            
            
            
       










