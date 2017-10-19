<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="<?php echo get_parent_theme_file_uri('favicon.ico') ?>" type="image/x-icon">
<link rel="icon" href="<?php echo get_parent_theme_file_uri('favicon.ico') ?>" type="image/x-icon">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <div class="container">
        <header id="header" role="banner" class="header">
            <div class="row">
                <div class="col-md-9">
                    <div id="logo">
                        <a class="logo" href="/">
                            <img src="<?php echo get_theme_file_uri( '/assets/images/logo-h.png' ); ?>" alt="Logo">
                        </a>
                    </div>
                    <nav class="navbar navbar-default" role="navigation" id="header-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div id="logo_mobile">
                                <a class="logo" href="/">
                                    <img src="<?php echo get_theme_file_uri( '/assets/images/logo-h.png' ); ?>" alt="Logo">
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-center">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php wp_nav_menu(array(
                                //'menu' => 'menu-top-menu',
                                'theme_location' => 'main-menu',
                                'menu_class' => 'nav navbar-nav navbar-center',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'menu-center',
                                // 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                // 'walker' => new WP_Bootstrap_Navwalker()
                        ));?>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="right-header">
                        <div class="lang text-right">
                            <ul>
                                <?php 
                                $args = [
                                    'show_flags'=>1,
                                    'show_names'=>0,
                                    // 'dropdown'=>1,
                                    // 'hide_current' => 1
                                ];
                                pll_the_languages($args);
                                ?>
                            </ul>
                        </div>
                        <div class="contact">
                            
                            <a href="tel:02473098986">
                                <img src="<?php echo get_theme_file_uri( '/assets/images/contact.png' ); ?>">
                            </a>
                            <p>Thứ 2 - thứ 6, 8:00AM - 17:00PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </div>
    <div id="wrapper-content" class="main-content">