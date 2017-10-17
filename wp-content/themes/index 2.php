<?php get_header(); ?>

<div id="slider-homepage" class="section">
    <div class="container">
    <?php 
    echo do_shortcode('[smartslider3 slider=2]');
    ?>
    </div>
</div>

<div id="introduction" role="introduction" class="section hide">
    <div class="container">
    <div class="top">
            <div class="top-bg"></div>
            <img class="top-img" src="<?php echo get_theme_file_uri('/assets/images/top-img.png');?>">
            <img class="top-text" src="<?php echo get_theme_file_uri('/assets/images/top-text.png');?>">
            <div class="banner-content">
                <div class="banner-left">
                    <div class="banner">
                        <div class="banner-box transition">                              
                            <a target="_blank" href="#">
                                <img src="<?php echo get_theme_file_uri('/assets/images/sys/20174141849.jpg');?>">
                            </a>
                        
                            <a target="_blank" href="#">
                                <img src="<?php echo get_theme_file_uri('/assets/images/sys/2017412011.jpg');?>">
                            </a>
                        
                            <a target="_blank" href="#">
                                <img src="<?php echo get_theme_file_uri('/assets/images/sys/20174115830.jpg');?>">
                            </a>
                        
                            <a target="_blank" href="#">
                                <img src="<?php echo get_theme_file_uri('/assets/images/sys/2017412126.jpg');?>">
                            </a>
                        
                            <a target="_blank" href="#">
                                <img src="<?php echo get_theme_file_uri('/assets/images/sys/20174143621.jpg');?>">
                            </a>
                        </div>
                    </div>
                    <ul class="banner-nav">
                        <li class="banner-btn selected"></li>
                        <li class="banner-btn"></li>
                        <li class="banner-btn"></li>
                 <li class="banner-btn"></li>
                        <li class="banner-btn"></li>
                    </ul>
                </div>
                <div class="banner-right">
                    <img class="top-title" src="<?php echo get_theme_file_uri('/assets/images/top-title.png');?>">
                    <p>Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.
</p>
                    <a class="more-btn" href="#">More&gt;&gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="news" role="news" class="section">
    <div class="container">
    <div class="news-content">
            <div class="news-bg"></div>
            <img class="news-title" src="<?php echo get_theme_file_uri('/assets/images/news-title-homepage.png');?>">
            <img class="news-img" src="<?php echo get_theme_file_uri('/assets/images/news-img.png');?>">
            <div class="news-box">
                <ul class="news-list transition">

                      
                    <li class="news" onclick="showlilink(1920)">
                        <span class="news-left">
                            <p class="data-day">24</p>
                            <p class="data-year-month">2017-08</p>
                        </span>
                        <span class="news-right">
                            <p class="news-header"><a title="央行发布第二季度中国货币政策大事记" href="#">Lorem ipsum dolor sit amet.</a></p>
                            <p class="news-text"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</a></p>
                        </span>
                       <a class="arrows-right" href="#"></a>
                    </li>
                     
                    <li class="news" onclick="showlilink(1919)">
                        <span class="news-left">
                            <p class="data-day">22</p>
                            <p class="data-year-month">2017-08</p>
                        </span>
                        <span class="news-right">
                            <p class="news-header"><a title="“基金天地” 投资人交流会全国巡讲（青岛场）成功举办" href="#">Lorem ipsum dolor sit amet.</a></p>
                            <p class="news-text"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</a></p>
                        </span>
                       <a class="arrows-right" href="#"></a>
                    </li>
                     
                    <li class="news" onclick="showlilink(1918)">
                        <span class="news-left">
                            <p class="data-day">18</p>
                            <p class="data-year-month">2017-08</p>
                        </span>
                        <span class="news-right">
                            <p class="news-header"><a title="央行周四开展1000亿元逆回购 净投放500亿元" href="#">Lorem ipsum dolor sit amet.</a></p>
                            <p class="news-text"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</a></p>
                        </span>
                       <a class="arrows-right" href="#"></a>
                    </li>
                     
                    <li class="news" onclick="showlilink(1917)">
                        <span class="news-left">
                            <p class="data-day">16</p>
                            <p class="data-year-month">2017-08</p>
                        </span>
                        <span class="news-right">
                            <p class="news-header"><a title="风险叠加背景下的资产配置逻辑" href="#">Lorem ipsum dolor sit amet.</a></p>
                            <p class="news-text"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</a></p>
                        </span>
                       <a class="arrows-right" href="#"></a>
                    </li>
                     
                    <li class="news" onclick="showlilink(1916)">
                        <span class="news-left">
                            <p class="data-day">11</p>
                            <p class="data-year-month">2017-08</p>
                        </span>
                        <span class="news-right">
                            <p class="news-header"><a title="央行周四开展900亿逆回购 净投放300亿" href="#">Lorem ipsum dolor sit amet....</a></p>
                            <p class="news-text"><a href="javascript:void(0);">Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</a></p>
                        </span>
                       <a class="arrows-right" href="#"></a>
                    </li>
                     
                
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
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">Organization</div>
            </div>
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