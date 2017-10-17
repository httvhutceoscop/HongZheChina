<div class="clear"></div>
</div>

<footer id="footer" role="contentinfo" class="hide">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-left">
                <?php wp_nav_menu(array(
                        //'menu' => 'menu-top-menu',
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'nav navbar-nav navbar-center',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'menu-center',
                        // 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        // 'walker' => new WP_Bootstrap_Navwalker()
                        // 'link_after' => '<span>|</span>',
                        // 'after' => '<span>|</span>',
                ));?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-middle text-center">
                    <a href="#" target="_blank" title="站长统计">
                        <img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif ">
                    </a>
                    <a href="#" target="_blank">
                        <img src="//static.anquan.org/static/outer/image/gw_83x30.png?id=www.hzjituan.com?t=51" alt="安全联盟认证" width="83" height="30" style="border: none;">
                    </a>
                    <a href="#" target="_blank">
                        <img src="//static.anquan.org/static/outer/image/sm_83x30.png?id=www.hzjituan.com?t=51" alt="安全联盟认证" width="83" height="30" style="border: none;">
                    </a>
                </div>    
            </div>
            <div class="col-md-3">
                <div class="contact">
                    <img src="<?php echo get_theme_file_uri('/assets/images/contact.png');?>">
                    <p>(Thứ 2 - Thứ 6: 9:00-18:00)</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center copyright">
                    Copyright All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="copyright-text">
                    © Copyright <?php echo date('Y'); ?> LongViet. All rights reserved.
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-menu text-right">
                    <?php wp_nav_menu(array(
                            //'menu' => 'menu-top-menu',
                            'theme_location' => 'footer-menu',
                            // 'menu_class' => 'nav navbar-nav navbar-center',
                            // 'container_class' => 'collapse navbar-collapse',
                            // 'container_id' => 'menu-center',
                            // 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            // 'walker' => new WP_Bootstrap_Navwalker()
                            // 'link_after' => '<span>|</span>',
                            // 'after' => '<span>|</span>',
                    ));?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php wp_footer(); ?>
</body>
</html>