<?php /*Template Name: Company Profile Page*/ ?>
<?php get_header(); ?>

<div class="main_content clearfix">
    <div class="sidebar">
        <h3>公司简介</h3>
        <ul>

            <li class="active"><a href="#">公司简介</a></li>
            <li><a href="#">企业文化</a></li>
            <li><a href="#">公司体系建设</a></li>

        </ul>
        <form method="post" action="#" id="form1">
            <div class="aspNetHidden">
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTg1MDkyMjU4MmRkGZh7fBhO0tPFph6D6Mv/itLKRxooQlFfE1aTJiERXHg=">
            </div>

            <div class="aspNetHidden">

                <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="462E2BEA">
                <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAA0x9pquXvaRA/9rDsme9EH5AAtKZt4xVE2zWCN5m43omsk4l0wQSkUOpd+GwXtBo0JEJCihyjNGKWjTu/I67jWGqid2JP+xtO/GacCVXauj2xylO8fVA7+tO9UhPdshhp10NSHwRpzSVLRJ5VVXgBmM12EsYGhlshFPwqBzsNY9f2IPvYeDG74krley9jUXoMLJ4kfXMuzDgOM4kqZM6xazC66dlIqcZAfsPLcX5yl2+vJmnhHgf6/0AewZpxr/joErZHAK7iV5Rn1p0rzaM4NrgAno4F1TqFaD6YG6jIKF1uXpLnAZmulmLSZepMfJAeU=">
            </div>
            <div class="online_apply" style="display:none">
                <h3><i class="iedit"></i>在线申请</h3>
                <div class="form">
                    <ol>
                        <li>
                            <span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
                            <input name="Order1$OrderName" type="text" id="Order1_OrderName" placeholder="请输入您的姓名">
                        </li>
                        <li>
                            <span>联系电话：</span>
                            <input name="Order1$OrderPhone" type="text" id="Order1_OrderPhone" placeholder="请输入您的联系电话">
                        </li>
                        <li>
                            <span>所在城市：</span>
                            <select name="Order1$OrderCity" id="Order1_OrderCity">
                                <option value="上海">上海</option>
                                <option value="北京">北京</option>
                                <option value="天津">天津</option>
                                <option value="上海">宁波</option>
                                <option value="苏州">苏州</option>
                                <option value="杭州">杭州</option>
                                <option value="青岛">青岛</option>
                                <option value="其他">其他</option>

                            </select>
                        </li>
                        <li>
                            <span>我要办理：</span>
                            <select name="Order1$OrderCategory" id="Order1_OrderCategory">
                                <option value="我要出借">我要出借</option>
                                <option value="我要借款">我要借款</option>

                            </select>
                        </li>
                    </ol>
                    <input type="submit" name="Order1$SubmitButton" value="" id="Order1_SubmitButton" class="submit_btn">
                </div>
            </div>
        </form>

    </div>
    <div class="company_introduction">
        <div class="top_bar">
            <h3>公司简介</h3>
            <p>当前位置:<a href="#"> 首页</a><span class="array">&gt;</span><a href="#" class="red">公司简介</a></p>
        </div>
        <div class="interview about_us">
            <div class="about-intro">
                <div class="about-intro-hd">
                    <ul class="clearfix" id="tab-hd">
                        <li class="cur">公司介绍<span></span></li>
                        <li>发展历程<span></span></li>
                        <li>专家顾问<span></span></li>

                    </ul>
                </div>
                <div clas="about-intro-bd" id="tab-bd">
                    <div class="jtjs" style="position: relative;">
                        <div class="zoom" id="zoom_btn" style="top: -35px;"><b title="放大字体" class="zoom_in" id="zoomIn"></b><b title="缩小字体" class="zoom_out min_font" id="zoomOut"></b></div>
                        <p style="TEXT-ALIGN: center; MARGIN: 0px auto; DISPLAY: none; CURSOR: pointer" id="videoPlay" onclick="$(this).hide();$('#video').show();">
                            <img src="<?php echo get_theme_file_uri('/assets/images/company-video.jpg');?>">
                        </p>
                        <p style="TEXT-ALIGN: center; MARGIN: 0px auto; DISPLAY: none" id="video">
                            <embed src="http://player.youku.com/player.php/sid/XODgzOTg4MTMy/v.swf" allowfullscreen="true" quality="high" width="525" height="280" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash">
                        </p>

                        <p>弘哲公司是一家集资产管理、基金管理、网络科技、创业投资、股权投资、国际贸易等业务于一体的综合性现代化企业公司。公司业务遍布上海、北京、广东、浙江、江苏、河南、河北、山东、辽宁、吉林、黑龙江等地，是国内资产管理行业中的知名品牌。</p>

                        <p>
                            公司近年来不断加速全牌照金融布局，经各级政府主管部门的大力支持和审核批准目前已获得了：第三方理财服务、理财产品的研究与开发、资产管理、私募基金、小贷公司、融资租赁、金融信息服务等多个牌照。
                        </p>

                        <p>
                            公司坚持市场诚信建设，以专业投资和科学配置为主线，不断发展金融创新服务模式，极力打造理财产品服务平台、家庭财务规划平台、FOF基金服务平台、基金测评服务平台、全球资产配置平台，全心全意服务各金融机构与广大客户，并不断实现客户资产的保值增值。
                        </p>

                        <p>
                            弘哲秉承"诚信、专业、稳健"的经营理念，紧跟中国金融改革推进步伐，把握多层次资本市场发展机遇，立志打造资产管理服务行业的百年老店。
                        </p>

                        <h3><span>弘哲公司旗下品牌</span></h3>

                        <div class="about-jtjs-hd">
                            <ul class="clearfix">
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/jtjs-img03.jpg');?>"><span></span> </li>
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/jtjs-img-02.jpg');?>"><span></span> </li>
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/jtjs-img05.jpg');?>"><span></span> </li>
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/xuanwuzhihuiLogo2.jpg');?>"><span></span> </li>
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/huashanyuanLogo.jpg');?>"><span></span> </li>
                                <li>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/yuduoduoLogo.jpg');?>"><span></span>
                                </li>
                            </ul>
                        </div>
                        <div class="about-jtjs-bd">
                            <?php for ($i = 0; $i < 7; $i++) { ?>
                            <div style="display: none;">
                                <p>Lorem ipsum dolor sit amet, ei malorum nusquam prodesset mei, duo ea inciderint signiferumque vituperatoribus, et qui nulla disputationi. Ne pro ullum omittam lucilius. Sea augue affert phaedrum id, ullum reprimique vix.</p>
                                <?php if($i %2 ==0) {?>
                                <p>Lorem ipsum dolor sit amet, ei malorum nusquam prodesset mei, duo ea inciderint signiferumque vituperatoribus, et qui nulla disputationi. Ne pro ullum omittam lucilius. Sea augue affert phaedrum id, ullum reprimique vix.</p>
                                <p>Lorem ipsum dolor sit amet, ei malorum nusquam prodesset mei, duo ea inciderint signiferumque vituperatoribus, et qui nulla disputationi. Ne pro ullum omittam lucilius. Sea augue affert phaedrum id, ullum reprimique vix.</p>
                                <?php }?>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="fzlc" style="display: none">
                        <dl class="clearfix">
                            <dt><strong>2017年<i></i><em></em></strong></dt>
                            <dd>
                                <strong>2017-7<em></em></strong>
                                <p>
                                    2017年优秀私募夏季策略交流会
                                </p>
                            </dd>
                            <dd>
                                <strong>2017-6<em></em></strong>
                                <p>
                                    弘哲公司2017年度年中工作会议暨第四期高管培训在北京华膳园如期举行

                                </p>
                            </dd>

                            <dd>
                                <strong>2017-5<em></em></strong>
                                <p>
                                    由亿信伟业、玄武智慧主办"基金天地上线发布会暨百强私募联盟成立仪式"
                                </p>
                            </dd>
                            <dd>
                                <strong>2017-4<em></em></strong>
                                <p>
                                    "第三届对冲基金中国年会暨2016年度对冲基金•介甫奖颁奖典礼"。
                                    <br> "弘哲亿信玄武FOF基金2号 "荣获"最佳母基金产品奖"。
                                    <br>

                                </p>
                            </dd>
                            <dd>
                                <strong>2017-1<em></em></strong>
                                <p>
                                    亿信伟业荣获2016中国基金风云榜"最佳私募管理公司"奖，并荣获"最具创新私募基金机构"称号。
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt><strong>2016年<i></i><em></em></strong></dt>
                            <dd>
                                <strong>2016-10<em></em></strong>
                                <p>
                                    2016年优秀私募秋季策略交流会成功举办
                                </p>
                            </dd>
                            <dd>
                                <strong>2016-8<em></em></strong>
                                <p>
                                    召开"2016年优秀私募夏季策略交流会"
                                </p>
                            </dd>
                            <dd>
                                <strong>2016-6<em></em></strong>
                                <p>
                                    主办"百家大型私募FOF基金养成记第一站"活动
                                </p>
                            </dd>
                            <dd>
                                <strong>2016-4<em></em></strong>
                                <p>
                                    "亿信玄武灵活配置1号"荣获"最具创新精神产品奖"
                                    <br>亿信伟业基金组织召开了第一期的精英私募路演沙龙
                                </p>
                            </dd>
                            <dd>
                                <strong>2016-1<em></em></strong>
                                <p>
                                    弘哲公司旗下-亿信伟业基金荣获"最佳行业创新资产管理机构"
                                    <br>弘哲公司荣获第五届中国公益界"2015年度公益践行奖"
                                    <br>弘哲公司旗下亿信伟业荣获2015年度中国最具影响力资产管理公司
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt><strong>2015年<i></i><em></em></strong></dt>
                            <dd>
                                <strong>2015-10<em></em></strong>
                                <p>
                                    弘哲亿信稳赢5号、创赢5号成功通过中国证券投资基金业协会备案
                                    <br> 第二届私募基金发展黄金十年高峰论坛
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-08<em></em></strong>
                                <p>
                                    弘哲公司旗下"亿信伟业财富管理高端酒会暨弘哲亿信伟业FOF基金启动仪式"隆重召开
                                    <br> 弘哲公司郝丹董事长接受和讯网专访，诠释"牛熊过后，机遇就在转角"的观点
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-06<em></em></strong>
                                <p>
                                    私募排排网专访弘哲·亿信伟业董事长郝丹，浅谈如何将弘哲公司打造成《一站式私募基金管理服务平台》
                                    <br> 弘哲公司旗下亿信伟业基金管理主办、私募排排网协办的"弘哲•亿信杯私募排排【股票冠军挑战赛】"启动仪式隆重举行
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-05<em></em></strong>
                                <p>

                                    弘哲公司旗下亿信伟业基金管理主办、东航期货提供技术支持的弘哲•亿信杯东航期货【冠军挑战赛】启动仪式隆重举行
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-04<em></em></strong>
                                <p>

                                    亿信伟业受邀参加第6届中国私募金牛奖颁奖典礼
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-03<em></em></strong>
                                <p>
                                    弘哲公司董事长郝丹受邀出席2015年度全球对冲基金高峰论坛
                                    <br> "弘哲•亿信伟业"2015年客户感恩交流会圆满落幕
                                    <br> 亿信伟业受邀出席第九届中国私募基金高峰论坛，探讨私募基金的变革与新格局
                                </p>
                            </dd>
                            <dd>
                                <strong>2015-01<em></em></strong>
                                <p>
                                    弘哲公司董事长郝丹参加首届和讯资产管理百人论坛，并接受和讯网专访，畅谈私募大发展对国民经济的意义
                                    <br> 弘哲公司旗下又一子公司长春市弘哲小额贷款有限公司正式开业，为公司的持续发展壮大增添浓墨重彩的一笔

                                </p>
                            </dd>
                        </dl>
                        <dl style="margin-top: 50px;">
                            <dt><strong>2014年<i></i><em></em></strong></dt>
                            <dd>
                                <strong>2014-12<em></em></strong>
                                <p>
                                    亿信伟业受邀参加第三届中国对冲基金年会
                                    <br> 弘哲公司旗下弘哲资产成功挂牌，开创财富理财新时代
                                    <br>
                                </p>
                            </dd>

                            <dd>
                                <strong>2014-04<em></em></strong>
                                <p>

                                    弘哲公司受邀参加2014年首届"财之道"金融领袖高峰论坛
                                </p>
                            </dd>
                            <dd>
                                <strong>2014-03<em></em></strong>
                                <p>
                                    《两会专访》：《商务时报》《经济时报》分别对郝丹董事长专访
                                    <br> 弘哲公司郝丹董事长随习主席出访法国
                                    <br> 受邀参加中法建交50周年UNESCO会议、"摩洛哥 — 中国商务论坛"
                                </p>
                            </dd>

                        </dl>
                        <dl style="margin-top: 50px;">
                            <dt><strong>2013年<i></i><em></em></strong></dt>

                            <dd>
                                <strong>2013-12<em></em></strong>
                                <p>

                                    弘哲公司受邀出席第四届财新峰会
                                </p>
                            </dd>

                            <dd>
                                <strong>2013-10<em></em></strong>
                                <p>
                                    弘哲公司总部入驻上海陆家嘴金融中心中建大厦
                                    <br> 弘哲公司受邀出席2013TALK
                                    <br> 弘哲金融上海第一营业部开业
                                </p>
                            </dd>
                            <dd>
                                <strong>2013-09<em></em></strong>
                                <p>
                                    弘哲资产正式成立
                                </p>
                            </dd>
                            <dd>
                                <strong>2013-08<em></em></strong>
                                <p>
                                    弘哲金融正式成立
                                </p>
                            </dd>
                            <dd>
                                <strong>2013-07<em></em></strong>
                                <p>
                                    弘哲投资正式成立
                                </p>
                            </dd>
                            <dd>
                                <strong>2013-06<em></em></strong>
                                <p>
                                    弘哲量化团队正式成立
                                </p>
                            </dd>
                            <dd>
                                <strong>2013-04<em></em></strong>
                                <p>
                                    弘哲公司进驻上海SOHO中山广场
                                </p>
                            </dd>
                        </dl>
                    </div>

                    <div class="gwtd" style="display: none">
                        <ul>

                        <?php for ($i = 0; $i < 8; $i++) { ?>

                            <li>
                                <div class="pic">
                                    <img width="178" height="220" src="<?php echo get_theme_file_uri('/assets/images/default-178x220.png');?>">
                                </div>
                                <div class="con">
                                    <h3>郝丹  &nbsp;&nbsp;&nbsp;&nbsp;  董事长&amp;总裁</h3>
                                    <p>弘哲集团创始人，1995年随父辈进入证券期货行业，20年投资经验，在股票、期货、权证等交易上身经百战， 经验丰富。2012年在国内率先组建量化交易团队，是国内量化投资和程序化交易的先行者。
                                    </p>
                                </div>
                            </li>

                        <?php } ?>
                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        function tabs(tabTit, on, tabCon) {
            $(tabCon).each(function () {
                $(this).children().eq(0).show();
            });
            $(tabTit).each(function () {
                $(this).children().eq(0).addClass(on);
            });
            $(tabTit).children().hover(function () { //鼠标"hover"的效果
                $(this).addClass('cur').siblings().removeClass('cur');
                var index = $(tabTit).children().index(this);
                $(tabCon).children().eq(index).show().siblings().hide();
            });
        }
        tabs("#tab-hd", "cur", "#tab-bd");
        tabs("#tab-hd2", "cur", "#tab-bd2");
    })
</script>
<script type="text/javascript">
    $(function () {
        $(".fzlc > dl > dt > strong").click(function () {
            if ($(this).parent().nextAll("dd").css("display") == "block") {
                $(this).parent().nextAll("dd").slideUp();
            } else {
                $(this).parent().nextAll("dd").slideDown();
            }
        });


        $(document).ready(function () {
            $('#zoom_btn b').click(function () {
                //取得原网页字体大小
                var sizeT = $(".jtjs p").css("font-size");
                //除去字体大小的单位，取得单位以外的十进制数
                var sizePre = parseFloat(sizeT, 10);
                //取得字体大小的单位（px）
                var sizeAft = sizeT.slice(-2);
                //判断字体是否为最大或者最小
                if (sizePre === 12) {
                    $('.zoom_out').addClass('min_font');
                } else if (sizePre === 18) {
                    $('.zoom_in').addClass('max_font');
                } else {
                    $('.zoom_in').removeClass('max_font');
                    $('.zoom_out').removeClass('min_font');
                }

                //按放大则字体大2，按缩小则字体小2
                if ($(this).attr("id") == "zoomIn") {
                    if (sizePre <= 16) {
                        sizePre += 2;
                    }
                } else if ($(this).attr("id") == "zoomOut") {
                    if (sizePre >= 14) {
                        sizePre -= 2;
                    }
                }
                //重新设置网页字体大小，数字+单位
                $(".jtjs p").css("font-size", sizePre + sizeAft);
            });

        });

    })
</script>
<script type="text/javascript">
    $(function () {
        $(".about-jtjs-hd li").hover(function (index) {
            var _index = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".about-jtjs-bd").find("div").eq(_index).show().siblings().hide();
        });
    })
</script>



<section id="content" role="main" class="hide">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>