<?php /*Template Name: Contact Us Page*/ ?>

<?php get_header(); ?>

<div class="secondary_banner">
    <img alt="弘哲投资" src="<?php echo get_theme_file_uri('/assets/images/banners-lxwm.jpg');?>">
</div>

<div class="container">
    <div class="row">
        <!-- <div class="sidebar col-md-3">
            <h3>Contact Us</h3>
            <ul>
                <li class="active"><a href="#">Contact Information</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div> -->
        <div class="company_introduction col-md-12">
            <div class="top_bar">
                <h3>Contact Us</h3>

                <p><a href="#">Home</a><span class="array">&gt;</span><span><span class="red">Contact Us</span></span>
                </p>

            </div>
            <div class="interview about_us">
                <div class="contact"><a target="_blank" href="#"><img border="0" src="<?php echo get_theme_file_uri('/assets/images/distribution-map.jpg');?>"></a>
                    <p>Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</p>
                    <h3 class="address">Headquarters address</h3>
                    <p>Lorem ipsum dolor sit amet, ut sanctus commune sed. Cu laoreet luptatum explicari sed. Ei per possim animal fastidii, ea.</p><img border="0" src="<?php echo get_theme_file_uri('/assets/images/20150612155655315.jpg');?>">
                    <h3 class="phone">Switchboard phone</h3>
                    <p>National Customer Service Hotline:<span>400-835-9699</span>Fax: <span>021-62268927&nbsp;</span>Switchboard:<span>021-62268921&nbsp;</span></p>
                    <h3 class="email">E-mail</h3>
                    <p>E-mail：<span>contact@hzjituan.com<span></span></span>
                    </p>
                </div>
            </div>
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