<?php /*Template Name: Company Profile Page*/ ?>
<?php get_header(); ?>

<?php
$current_lang = pll_current_language();
$t_post = null;
$tt = 'Culture';
$so_do = 'Sơ đồ tổ chức';

if ($current_lang == 'vi') {
    $t_post = get_post(112);
} else {
    $t_post = get_post(114);
    $so_do = '组织图';
}
$tt = $t_post->post_title;

if (is_user_logged_in()) {

}

?>

<div class="container">
    <div class="row">
        <!-- <div class="sidebar col-md-3">
            <h3>Company</h3>
            <ul>
                <li class="active"><a href="#">Profile</a></li>
                <li><a href="#">Culture</a></li>
                <li><a href="#">System construction</a></li>
            </ul>
        </div> -->
        <div class="company_introduction col-md-12">
            <div class="top_bar">
                <h3><?php the_title(); ?></h3>
                <p><a href="<?php echo pll_home_url();?>"> Home</a><span class="array">&gt;</span><a href="#" class="red"><?php the_title(); ?></a></p>
            </div>
            <div class="interview">
                <div class="about-intro">
                    <div class="about-intro-hd">
                        <ul class="clearfix" id="tab-hd">
                            <li class="cur"><?php the_title(); ?><span></span></li>
                            <li><?php echo $so_do; ?><span></span></li>
                            <li><?php echo $tt; ?><span></span></li>
                        </ul>
                    </div>
                    <div clas="about-intro-bd" id="tab-bd">
                        <div class="jtjs" style="position: relative;">
                            <div class="zoom" id="zoom_btn" style="top: -35px;"><b title="放大字体" class="zoom_in" id="zoomIn"></b><b title="缩小字体" class="zoom_out min_font" id="zoomOut"></b></div>
                            <p style="TEXT-ALIGN: center; MARGIN: 0px auto; DISPLAY: none; CURSOR: pointer" id="videoPlay" onclick="$(this).hide();$('#video').show();">
                                <img src="<?php echo get_theme_file_uri('/assets/images/company-video.jpg');?>">
                            </p>


                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <section class="entry-content">
                            <?php the_content(); ?>
                            </section>
                            <?php endwhile; endif; ?>
                        </div>

                        <div class="gwtd" style="display: none">
                            <section class="entry-content">
                                <img style="max-width: 670px;" src="http://longvietgroup.com/wp-content/uploads/2017/08/so-do-cong-ty.png" alt="so do to chuc">
                            </section>
                        </div>

                        <div class="fzlc" style="display: none">
                            <section class="entry-content">
                            <?php
                                // if (is_user_logged_in()) {
                                    $content = apply_filters('the_content', $t_post->post_content);
                                    echo $content;
                                // }
                            ?>
                            </section>
                        </div>

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