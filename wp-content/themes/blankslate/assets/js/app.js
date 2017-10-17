$(document).ready(function(){

    console.log('here');

    /**=====================================
    *  sponsor Carousel
    * =====================================*/
    $('.client-carousel').owlCarousel({
       autoPlay: true,
       pagination: false,
       loop:true,
       navigation:false,
       items: 7,
       itemsDesktop: [1366, 5],
       itemsDesktopSmall: [768,3],
       itemsTablet: [650, 1],
       navigationText: [
         "<i class='fa fa-angle-left'></i>",
         "<i class='fa fa-angle-right'></i>"
         ]
    });

    //æœç´¢æ¡†
    var selectStatus = false;//
    $('#keyWord').focus(function () {
        $(this).val("");
    }).blur(function (event) {
        setTimeout(function () {
            $('#keyWord').fadeOut();
            $('#keyWord').css({ width: '0' });
            selectStatus = false;
        }, 250)
    }).keyup(function (event) {
        var code = event.which;
        if (code == '13') {
            $('#selectBtn').click();
        }
    });
    $('#selectBtn').click(function (event) {
        if (selectStatus) {
            window.location.href = '/search.aspx?key=' + $('#keyWord').val();
        } else {
            $('#keyWord').fadeIn();
            $('#keyWord').css({ width: '150px' });
            $('#keyWord').focus();
            selectStatus = true;
        }
    });

    var banners = {
        Parent: $('.banner'),
        Box: $('.banner-box'),
        Nav: $('.banner-nav'),
        Btn: $('.banner-btn')
    }
    var news = {
        Box: $('.news-box'),
        List: $('.news-list'),
        btnUp: $('.news-btn .btn-up'),
        btnDown: $('.news-btn .btn-down'),
        News: $('.news')
    }
    var bannerSelect, newsSelect;

    function initBanner(index) {
        //banner
        var h = banners.Parent.height();
        var bannerConfig = {
            ele: banners.Box,
            interval: 5000,
            distance: h,
            auto: true,
            btn: banners.Btn,
            alternate: false
        }
        bannerSelect = new slide(bannerConfig);
        banners.Btn.mouseover(function () {
            var index = $(this).index();
            $(this).addClass('selected');
            $(this).siblings().removeClass('selected');
            bannerSelect.moveEle(index);
            bannerSelect.pause();
        });
        banners.Btn.mouseout(function () {
            bannerSelect.auto();
        })

        //news
        var newsH = (news.News.height() + 3);
        var newsConfig = {
            ele: news.List,
            distance: newsH,
            showNum: 3
        }
        var newsCount = 0,
            maxCount = news.List.children().length;//æ–°é—»æ€»æ¡æ•°
        //åˆå§‹åŒ–newsæŒ‰é’®çŠ¶æ€
        if (maxCount <= 3) {
            unabled(news.btnDown);
            unabled(news.btnUp);
        } else {
            unabled(news.btnDown);
        }

        newsSelect = new slide(newsConfig);
        news.btnUp.click(function (e) {
            newsCount += 1;
            if (newsCount >= (news.News.length - 3)) {
                newsCount = news.News.length - 3;
            }
            if (news.btnDown.hasClass('unabled')) {
                abled(news.btnDown);
            }
            //ä¿ç•™3æ¡æ–°é—»
            if (newsCount == (maxCount - 3)) {
                unabled(news.btnUp);
            }
            newsSelect.moveEle(newsCount);
        });
        news.btnDown.click(function (e) {
            newsCount -= 1;
            if (newsCount <= 0) {
                newsCount = 0;
            }
            if (news.btnUp.hasClass('unabled')) {
                abled(news.btnUp);
            }
            if (newsCount == 0) {
                unabled(news.btnDown);
            }
            newsSelect.moveEle(newsCount);
        });
    }

    function unabled(ele) {
        ele.addClass('unabled');
    }
    function abled(ele) {
        ele.removeClass('unabled');
    }

    initBanner();
});