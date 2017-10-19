<?php get_header(); ?>

<div id="slider-homepage">
    <div class="container">
    <?php
    echo do_shortcode('[smartslider3 slider=2]');
    ?>
    </div>
</div>

<?php include('section-homepage/news.php'); ?>
<?php //include('section-homepage/recent-news.php'); ?>
<?php include('section-homepage/client.php'); ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>