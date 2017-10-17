<?php get_header(); ?>

<style>
    a {
        text-decoration: none !important;
    }
    h1.entry-title {
        color: #333;
        margin-bottom: 10px;
        font: 400 28px/32px arial;
        text-rendering: geometricPrecision;
    }
    .description {
        font: 700 14px/18px arial;
        color: #444;
        text-rendering: geometricPrecision;
        margin: 10px 0;
        padding-bottom: 5px;
    }
    .entry-date {
        font-size: 11px;
        color: #666;
        margin: 10px 0;
    }
    a.post-edit-link {
        margin: 10px 0;
        display: block;
        font-weight: 500;
        color: blue;
        text-align: right;
    }
    .entry-content {
        font-size: 14px;
        padding-bottom: 10px;
    }
    .entry-content p {
        margin: 0 0 1em;
        line-height: 18px;
        text-rendering: geometricPrecision;
    }
    .entry-footer {

    }

    #nav-below a {
        color: #004f8b;
        font: 400 14px arial;
    }

    #nav-below .nav-previous {
        margin-bottom: 10px;
    }
    #nav-below .nav-next {
        margin-bottom: 10px;
    }

</style>

<div class="container">
    <section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'entry' ); ?>

    <?php if ( ! post_password_required() )
        //comments_template( '', true );
    ?>
    <?php endwhile; endif; ?>

    <footer class="footer">
    <?php get_template_part( 'nav', 'below-single' ); ?>
    </footer>
    </section>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>