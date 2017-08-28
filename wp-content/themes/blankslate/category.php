<?php get_header(); ?>
<div class="secondary_banner">
    <img alt="Hongzhe investment" src="<?php echo get_theme_file_uri('/assets/images/banners-hzdt.jpg');?>">
</div>

<div class="container">
    <div class="news-title">
        <a href="#" id="news3" class="first active">Latest</a>
        <!-- <a href="javascript:void(0);" id="news5">弘哲资讯</a> -->
        <!-- <a href="javascript:void(0);" id="news6">弘哲人</a> -->
    </div>

    <div class="news-container">
        <div class="news-item" id="news-item3">
            <ul class="news-list row">
            <?php for($i = 0; $i < 7; $i++) {?>
                <li class="col-md-4 col-xs-12">
                    <div class="list-inner">
                    <h3><a href="#">Lorem ipsum dolor sit amet, posse aeterno accommodare ei vel. Debet moderatius.</a></h3>
                        <dl>
                            <dt>
                                <img src="<?php echo get_theme_file_uri('/assets/images/20164131526.jpg');?>" onerror="javascript:this.src='<?php echo get_theme_file_uri('/assets/images/default.jpg');?>'">
                            </dt>
                            <dd>
                                <p>Lorem ipsum dolor sit amet, posse aeterno accommodare ei vel. Debet moderatius.</p>
                                <div class="news-list-footer">
                                    <a href="#">Detail &gt;</a> 2016-04-05
                                </div>
                            </dd>
                        </dl>
                    </div>
                </li>
            <?php }?>
            </ul>
            
        </div>
        <div class="news-item" style="display: none" id="news-item5">
            <ul class="new-list2">

            </ul>

            <div class="pages" style="text-align: center; margin-top: 10px;">

                <div class="pages fr">
                    <span class="pagesInfo">1/1页</span>
                    <a href="/news-3.html?Page=9&amp;sPage=1" class="firstPage" title="第一页">&nbsp;</a>
                    <a href="/news-3.html?Page=9&amp;sPage=1" class="prevPage" title="上一页">&nbsp;</a>

                    <a href="/news-3.html?Page=9&amp;sPage=1" class="current">1</a>

                    <a href="/news-3.html?Page=9&amp;sPage=1" class="nextPage" title="下一页">&nbsp;</a>
                    <a href="/news-3.html?Page=9&amp;sPage=1" class="lastPage" title="最后页">&nbsp;</a>
                </div>

            </div>
        </div>
        <div class="news-item" style="display: none" id="news-item6">
            <div class="news-hzr">
                <div class="news-hzr-top">
                    <div class="news-hzr-left">
                        <div class="slide-banner">
                            <ul class="slide-list">

                            </ul>
                            <div class="slide-title">
                                <p></p>
                            </div>
                            <div class="num">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="news-hzr-right">
                        <div class="news-hzr-first">

                        </div>
                        <div class="news-hzr-second">

                        </div>
                        <ul class="news-hzr-right-list">

                        </ul>
                    </div>
                </div>

                <h2 class="news-hzr-title"><span>最荣誉</span></h2>
                <div class="zry-img-list" id="demo">
                    <div class="zry-banner">
                        <div class="zry-banner-box" id="banner1">
                            <ul>

                            </ul>
                        </div>
                        <div id="banner2" class="zry-banner-box">
                            <ul>

                            </ul>
                        </div>
                    </div>

                </div>
                <h2 class="news-hzr-title"><span>最生活</span></h2>
                <div class="zsh-container">
                    <div class="zsh-item fl">

                        <ul>

                        </ul>
                    </div>
                    <div class="zsh-item fr">

                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
            /* $(function () {
                //顶部tab切换
                $('.news-title a').click(function (event) {
                    $(this).addClass('active').siblings().removeClass('active');
                    $('.news-container').find('.news-item').eq($(this).index()).show().siblings().hide();
                    var myID = $(this).attr('id');
                    switch (myID) {
                        case "news3":
                            location.href = "/news-3.html";
                            break;
                        case "news5":
                            location.href = "/news-5.html";
                            break;
                        case "news6":
                            location.href = "/news-6.html";
                            break;
                    }
                });
                $('#news'+ 3).addClass('active').siblings().removeClass('active')
                $('.news-container').find('#news-item3').eq($(this).index()).show().siblings().hide();
                function slideShow() {
                    var imgList = $('.slide-list li');
                    var num = $('.num ul');
                    var box = $('.slide-banner');
                    var count = imgList.length;
                    var speed = 3000;
                    var t;
                    var index = 0;
                    //初始化banner
                    //添加按钮
                    var btn = '';
                    for (var j = 1; j <= imgList.size() ; j++) {
                        btn += '<li>' + j + '</li>';
                    }
                    num.html(btn);
                    num.find('li').eq(0).addClass('active');
                    imgList.eq(0).show().siblings().hide();
                    $('.slide-title p').text(imgList.eq(0).find('img').attr('title'));
                    //默认隐藏
                    function hideAll() {
                        imgList.hide();

                    }
                    //显示
                    function showItem() {
                        hideAll();
                        $(imgList[index]).fadeIn();
                        $('.slide-title p').text($(imgList[index]).fadeIn().find('img').attr('title'));
                        num.find('li').eq(index).addClass('active').siblings().removeClass('active');

                    }
                    //下一个
                    function next() {
                        index = index + 1;

                        if (index == count) {
                            index = 0
                        }
                        showItem();
                    }
                    //循环播放
                    t = setInterval(next, speed);
                    box.mouseover(function () {
                        clearInterval(t);
                    });
                    box.mouseout(function () {
                        t = setInterval(next, speed);
                    });
                    //点击数字跳转
                    num.find('li').each(function (i, n) {
                        $(n).click(function () {
                            index = i;
                            showItem();
                        });
                    });
                }
                slideShow();
            }) */

            //最荣誉图片滚动
            var speed = 20; //数字越大速度越慢
            var tab = document.getElementById("demo");
            var tab1 = document.getElementById("banner1");
            var tab2 = document.getElementById("banner2");
            tab2.innerHTML = tab1.innerHTML;

            function Marquee() {
                if (tab2.offsetWidth - tab.scrollLeft <= 0) {
                    tab.scrollLeft -= tab1.offsetWidth;
                }
                else {
                    tab.scrollLeft++;
                }
            }
            var MyMar = setInterval(Marquee, speed);
            tab.onmouseover = function () { clearInterval(MyMar) };
            tab.onmouseout = function () { MyMar = setInterval(Marquee, speed) };

</script>

<style type="text/css">
    .news-title { border-bottom: 2px solid #d60b18; overflow: hidden; margin-bottom: 20px;; }

    .news-title a { display: block; float: left; width: 114px; height: 24px; line-height: 24px; text-align: center; color: #fff; background: url("<?php echo get_theme_file_uri('/assets/images/news-title.png');?>") no-repeat 0 -24px; }

    .news-title a:hover, .news-title a.active { background-position: 0 0; text-decoration: none; }

    .news-title a.first { background: url("<?php echo get_theme_file_uri('/assets/images/news-title-first.png');?>") no-repeat 0 0; }

    .news-title a.first:hover, .news-title a.first.active { background-position: 0 -24px; }

    .news-list li {margin-bottom: 10px;}

    .news-list li > div.list-inner { border: 1px solid #ddd; overflow: hidden; padding: 10px;}

    .news-list h3 { font-size: 14px; color: #3c3c3c; font-weight: normal; margin-bottom: 10px; }

    .news-list dl { overflow: hidden; }

    .news-list dt { float: left; width: 155px; height: 87px; }

    .news-list dt img { width: 155px; height: 87px; }

    .news-list dd { overflow: hidden; padding-left: 10px; }

    .news-list dd p { font-size: 12px; color: #555; line-height: 20px; }

    .news-list-footer { margin-top: 5px; font-size: 12px; color: #555; }

    .news-list-footer a { float: right; color: #d60b18; }
    /*弘哲人*/
    .news-hzr-top { overflow: hidden; }

    .news-hzr-left { width: 498px; height: 314px; float: left; }

    .slide-banner, .slide-list { width: 498px; height: 314px; position: relative; }

    .slide-list { overflow: hidden; position: relative; }

    .slide-title { height: 40px; line-height: 40px; background: rgba(0,0,0,.5); *background: #000; position: absolute; left: 0; bottom: 0; width: 100%; color: #fff; font-size: 14px; }

    .slide-title p { padding-left: 20px; }

    .slide-banner .num { position: absolute; bottom: 10px; right: 0; }

    .slide-banner .num li { width: 14px; height: 14px; display: block; float: left; border: 1px solid #fff; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%; font-size: 0; margin-right: 10px; cursor: pointer; }

    .slide-banner .num li.active { background: #fff; }

    .news-hzr-right { overflow: hidden; padding-left: 20px; }

    .news-hzr-first h3, .news-hzr-second h3 { font-size: 18px; color: #555; margin-bottom: 5px; }

    .news-hzr-first p, .news-hzr-second p { color: #666; font-size: 12px; line-height: 24px; }

    .news-hzr-first p a, .news-hzr-second p a { float: right; color: #3893ed; }

    .news-hzr-second { width: 210px; float: left; margin-top: 20px; }

    .news-hzr-right-list { margin-top: 20px; margin-left: 20px; float: right; width: 220px; }

    .news-hzr-right-list li { font-size: 12px; line-height: 24px; background: url("<?php echo get_theme_file_uri('/assets/images/hzr-list-bg.jpg');?>") no-repeat left center; padding-left: 10px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }

    .news-hzr-title { border-bottom: 1px solid #ccc; height: 40px; line-height: 39px; margin-top: 20px; }

    .news-hzr-title span { font-size: 22px; border-bottom: 2px solid #f36e01; display: block; float: left; padding: 0 10px; }

    .zqx-container { overflow: hidden; padding: 10px 0; position: relative; }

    .zqx-container .zqx-left img { float: right; width: 186px; height: 140px; position: absolute; right: 0; top: 10px; }

    .zqx-left { float: left; width: 776px; }

    .zqx-left h3 { font-size: 18px; font-weight: normal; margin-bottom: 10px; padding-top: 5px; }

    .zqx-left a:hover { text-decoration: none; }

    .zqx-left p { font-size: 12px; line-height: 24px; }

    .zqx-left .time { text-align: right; color: #f36e01; }

    .zqx-ad { border-top: 1px dashed #ccc; padding-top: 20px; overflow: hidden; }

    .zqx-ad-list { width: 300px; float: left; margin-right: 20px; }

    .zqx-ad .zqx-ad-list.last { width: 280px; float: right; margin: 0; }

    .zqx-ad .zqx-ad-list.last p { font-size: 12px; }

    .zqx-ad-list dt { float: left; width: 76px; height: 76px; }

    .zqx-ad-list dt img { width: 76px; height: 76px; }

    .zqx-ad-list dd { overflow: hidden; padding-left: 15px; }

    .zqx-ad-list dd h3, .zqx-ad .zqx-ad-list.last h3 { color: #555; padding-bottom: 5px; }

    .zqx-ad-list dd p, .zqx-ad .zqx-ad-list.last p { font-size: 12px; line-height: 24px; color: #666; }

    .zqx-ad .zqx-ad-list.last h3 span { float: right; font-size: 12px; font-weight: normal; color: #f36e01; }

    .zry-img-list { overflow: hidden; height: 225px; margin-top: 20px; width: 980px; }

    .zry-banner { width: 800%; float: left; }

    .zry-banner-box { float: left; }

    .zry-img-list li { width: 170px; height: 225px; margin: 0 30px 0 0; position: relative; *position: static; float: left; display: inline; border: 1px solid #dde3e7; }

    .zry-img-list li span { display: block; height: 34px; line-height: 34px; *background: #000; background: rgba(0,0,0,.5); position: absolute; *position: static; bottom: 0; text-align: center; color: #fff; margin-top: -38px; width: 100%; }

    .zsh-item { width: 465px; display: inline; margin-top: 20px; }

    .zsh-item dl { overflow: hidden; margin-bottom: 10px; }

    .zsh-item dt { width: 154px; height: 102px; float: left; }

    .zsh-item dt img { width: 154px; height: 102px; }

    .zsh-item dd h3 { font-size: 16px; font-weight: normal; }

    .zsh-item dd { overflow: hidden; padding-left: 15px; }

    .zsh-item dd p { font-size: 12px; line-height: 24px; color: #666; }

    .zsh-item dd p a { float: right; color: #3893ed; }

    .zsh-item ul li { line-height: 24px; }

    .zsh-item ul li span { float: right; color: #666; }

    .fl { float: left; }

    .new-list2 li { overflow: hidden; border-bottom: 1px solid #ccc; padding: 10px 0; }

    .new-list2 .text { float: left; width: 630px; }

    .new-list2 .text h3 { font-size: 16px; color: #3c3c3c; padding-bottom: 5px; }

    .new-list2 .text p { color: #555; line-height: 24px; }

    .new-list2 .more { float: left; width: 100px; margin-left: 80px; font-size: 12px; padding-top: 50px; }

    .new-list2 .more a { color: #d60b18; line-height: 30px; }

    .new-list2 .pic { float: right; width: 155px; height: 87px; margin-top: 10px; }
</style>






<section id="content" role="main" class="hide">
<header class="header">
<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>