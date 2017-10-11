<?php get_header(); ?>

<div id="slider-homepage" class="section">
    <div class="container">
    <?php
    echo do_shortcode('[smartslider3 slider=2]');
    ?>
    </div>
</div>

<?php
$cat_id = 22;
if ($current_lang == 'zh') {
    $cat_id = 24;
}
query_posts( 'cat='.$cat_id.'&posts_per_page=5');
?>

<div id="news" role="news" class="section">
    <div class="container">
    <div class="news-content">
        <div class="news-bg"></div>
            <img class="news-title" src="<?php echo get_theme_file_uri('/assets/images/news-title-homepage.png');?>">
            <img class="news-img" src="<?php echo get_theme_file_uri('/assets/images/news-img.png');?>">
            <div class="news-box">
                <ul class="news-list transition">
                    <?php while ( have_posts() ) : the_post();?>
                        <li class="news">
                            <span class="news-left">
                                <p class="data-day"><?php the_date('d'); ?></p>
                                <p class="data-year-month"><?php the_date('d-Y-m'); ?></p>
                            </span>
                            <span class="news-right">
                                <p class="news-header">
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                    <?php //the_title(); ?>
                                    <?php echo wp_trim_words(get_the_title(), 10); ?>
                                    </a>
                                </p>
                                <p class="news-text">
                                <?php echo wp_trim_words(get_the_excerpt(), 15, ' ...'); ?>
                                </p>
                            </span>
                           <a class="arrows-right" href="<?php the_permalink(); ?>"></a>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
            </div>
            <div class="news-btn">
                <div class="btn-up"></div>
                <div class="btn-down unabled"></div>
            </div>
        </div>
    </div>
</div>

<div id="service" role="service" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">Service</div>
            </div>
            <div class="col-md-12">
                <div class="section-content">
                    <span class="col-md-4 serve-box touzi">
                        <div class="serve-name">Equity investment</div>
                        <p class="serve-text">Lorem ipsum dolor sit amet, quo iisque fastidii ei. Efficiendi intellegam instructior nam cu, epicuri adolescens ea nec, duo ei utamur scripta voluptaria. Eos civibus euripidis abhorreant id. Eos aperiam petentium ea.</p>
                    </span>

                    <span class="col-md-4 serve-box jinrong">
                        <div class="serve-name">Fund management</div>
                        <p class="serve-text">Lorem ipsum dolor sit amet, quo iisque fastidii ei. Efficiendi intellegam instructior nam cu, epicuri adolescens ea nec, duo ei utamur scripta voluptaria. Eos civibus euripidis abhorreant id. Eos aperiam petentium ea.</p>
                    </span>

                    <span class="col-md-4 serve-box zichan">
                        <div class="serve-name">Asset management</div>
                        <p class="serve-text">Lorem ipsum dolor sit amet, quo iisque fastidii ei. Efficiendi intellegam instructior nam cu, epicuri adolescens ea nec, duo ei utamur scripta voluptaria. Eos civibus euripidis abhorreant id. Eos aperiam petentium ea.</p>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="slogan" role="slogan" class="section">
    <div class="container">
        <div class="more-content">
            <div class="more">
                <a class="hot-btn more-btn" href="#" target="_blank">热销业务</a>
                <a class="product-btn more-btn" href="#" target="_blank">产品公告</a>
            </div>
        </div>
    </div>
</div>

<div id="cooperative-organization" role="cooperative-organization" class="section">
    <div class="container">
        <div class="cooperation-content">
            <span class="decorate"></span>
            <span class="cooperation-title">Organization</span>
            <span class="decorate"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#"><img class="cooperation-img" src="<?php echo get_theme_file_uri('/assets/images/cooperation.png');?>"></a>
            </div>
        </div>
    </div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>