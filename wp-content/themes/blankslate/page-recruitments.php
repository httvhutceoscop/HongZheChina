<?php /*Template Name: Recruitments Page*/ ?>
<?php get_header(); ?>
<div class="secondary_banner">
    <img alt="弘哲投资" src="<?php echo get_theme_file_uri('/assets/images/banners-qyry.jpg');?>">
</div>

<div class="main_content clearfix">
    Recruitments Content
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