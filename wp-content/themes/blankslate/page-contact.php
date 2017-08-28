<?php /*Template Name: Contact Us Page*/ ?>

<?php get_header(); ?>

<div class="secondary_banner">        
    <img alt="弘哲投资" src="<?php echo get_theme_file_uri('/assets/images/banners-lxwm.jpg');?>">        
</div>

<div class="main_content clearfix">
        <div class="sidebar">
            
            <h3>联系我们</h3>
            <ul>
                <li class="active"><a href="#">联系方式</a></li>
                <li><a href="#">招贤纳士</a></li>
            </ul>
            <form method="post" action="#" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJODQ4Njg4OTcwZGQ8uXzZ+OXEeMHVtQ9s7e71XjXSYn9Yj5yoKY0dq/bBRw==">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E809BCA5">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAA17a/+RtvLHdYDq3yVIHSt6AAtKZt4xVE2zWCN5m43omsk4l0wQSkUOpd+GwXtBo0JEJCihyjNGKWjTu/I67jWGqid2JP+xtO/GacCVXauj2xylO8fVA7+tO9UhPdshhp10NSHwRpzSVLRJ5VVXgBmM12EsYGhlshFPwqBzsNY9f2IPvYeDG74krley9jUXoMLJ4kfXMuzDgOM4kqZM6xazC66dlIqcZAfsPLcX5yl2+vJmnhHgf6/0AewZpxr/joErZHAK7iV5Rn1p0rzaM4NrUqX9c26DdRUtSEy3u2ItogjQ0IYU2P/KMrG0+RW3nHo=">
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
                <h3>联系我们</h3>
                
                <p>当前位置:<a href="#">首页</a><span class="array">&gt;</span><span><span class="red">联系我们</span></span></p>
                
            </div>
            <div class="interview about_us">
                <div class="contact"><a target="_blank" href="#"><img border="0" src="<?php echo get_theme_file_uri('/assets/images/distribution-map.jpg');?>"></a> 
<p>公司业务遍布上海、北京、广东、浙江、江苏、河南、河北、山东、辽宁、吉林、黑龙江等地。</p>
<h3 class="address">总部地址</h3>
<p>上海市长宁区延安西路500号嘉宁国际广场28楼</p><img border="0" src="<?php echo get_theme_file_uri('/assets/images/20150612155655315.jpg');?>"> 
<h3 class="phone">总机电话</h3>
<p>全国客服热线：<span>400-835-9699</span>传真：<span>021-62268927&nbsp;</span>总机：<span>021-62268921&nbsp;</span></p>
<h3 class="email">电子邮件</h3>
<p>E-mail：<span>contact@hzjituan.com<span></span></span></p></div>
            </div>
        </div>
    </div>





<section id="content" role="main" class="hide">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if (!post_password_required()) comments_template('', true); ?>
<?php endwhile;
endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>