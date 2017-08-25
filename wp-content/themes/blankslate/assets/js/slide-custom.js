/* 
* @Author: anchen
* @Date:   2017-03-30 11:53:10
* @Last Modified by:   anchen
* @Last Modified time: 2017-04-07 16:59:36
*/
function slide(config) {
    var base = {
        ele: null,      //æŽ§åˆ¶å¯¹è±¡
        interval: 500,  //åŠ¨ç”»é—´éš”
        distance: 50,   //ç§»åŠ¨é«˜åº¦
        auto: false,    //è‡ªåŠ¨æ»šåŠ¨
        btn: null,      //å…³è”æŒ‰é’®
        className: 'selected',   //è”åŠ¨æŒ‰é’®æ ·å¼å
        alternate: true, //é€†å‘æ’­æ”¾
        showNum: 1//ä¸€å±æ˜¾ç¤ºæ¡æ•°
    }
    $.extend(base, config);
    //é˜²æ­¢å¼‚å¸¸å€¼
    base.interval = base.interval < 500 ? 500 : base.interval;
    base.distance = base.distance < 1 ? 1 : base.distance;
    base.showNum = base.showNum <= 0 ? 1 : base.showNum;
    var num = 0;
    var pro = this;
    var setInt,
        i = 1,//æŽ§åˆ¶ç§»åŠ¨æ–¹å‘ç³»æ•°
        childCount = base.ele.children().length,//æ“æŽ§å¯¹è±¡çš„å­å…ƒç´ æ€»æ•°
        btnCount = 0,//è”åŠ¨æŒ‰é’®ä¸ªæ•°
        maxCount = childCount - base.showNum,//æœ€å¤§æ»šåŠ¨æ¬¡æ•°
        resetHtml = '',
        clone = false;

    pro.init = function () {
        resetHtml = base.ele.html();//è®°å½•å¯¹è±¡åŽŸå§‹æ•°æ®
        if (!!base.auto && childCount > base.showNum) {
            pro.auto();
        }
        if (!!base.btn) {
            btnCount = base.ele.children().length;
        }
    }

    //ç§»åŠ¨æ–¹æ³•
    pro.moveEle = function (n) {
        //ç»Ÿä¸€è®¡æ•°
        num = n;
        //åˆ¤æ–­å¾ªçŽ¯ç³»æ•°
        if (base.alternate) {
            if (num >= maxCount) {
                i = -1;
            } else if (num <= 0) {
                i = 1;
            }
        } else {
            pro.testNum();
        }
        //ç§»åŠ¨
        if (num <= maxCount || !base.alternate) {
            base.ele.css('top', base.distance * num * -1);
        }
        if (!base.ele.hasClass('transition')) {
            setTimeout(function () {
                num++;
                pro.testNum();
                base.ele.addClass('transition');
                //ç§»åŠ¨
                base.ele.css('top', base.distance * num * -1);
            }, base.interval / 10)
        }
        //è”åŠ¨æŒ‰é’®æ ·å¼
        if (!!base.btn) {
            var btn = $(base.btn[n % btnCount]);
            btn.addClass(base.className);
            btn.siblings().removeClass(base.className);
        }
    }
    pro.testNum = function () {
        if (num == maxCount || num == childCount && !clone) {
            //console.log('å¤åˆ¶');
            base.ele.html(resetHtml + resetHtml);
            clone = true;
        } else if (num > childCount && clone) {
            num = 0;
            base.ele.removeClass('transition');
            base.ele.css('top', base.distance * num * -1);
            base.ele.html(resetHtml);
            clone = false;
            //console.log('è¿˜åŽŸ');
        }
    }
    //è‡ªåŠ¨æ»šåŠ¨
    pro.auto = function () {
        setInt = setInterval(function () {
            //console.log('num' + num)
            num += i;
            pro.moveEle(num);
        }, base.interval)
    }

    //æš‚åœè‡ªåŠ¨æ»šåŠ¨
    pro.pause = function () {
        clearInterval(setInt);
    }

    pro.init();
}