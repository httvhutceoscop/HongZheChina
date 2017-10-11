<?php /*Template Name: Recruitments Page*/ ?>
<?php get_header(); ?>
<div class="secondary_banner">
    <img alt="弘哲投资" src="<?php echo get_theme_file_uri('/assets/images/banners-qyry.jpg');?>">
</div>

<div class="container">
    <div class="row">
        <!-- <div class="sidebar col-md-3">

        </div> -->
        <div class="company_introduction col-md-12">
            <div class="top_bar">
                <h3>Recruitments</h3>

                <p><a href="#">Home</a><span class="array">&gt;</span><span><span class="red">Recruitments</span></span>
                </p>

            </div>
            <div class="interview about_us">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <section class="entry-content">
                    <?php the_content(); ?>
                    </section>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>



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