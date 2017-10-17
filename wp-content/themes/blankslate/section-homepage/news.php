<?php
$cat_id = 22;
if ($current_lang == 'zh') {
    $cat_id = 24;
}
query_posts( 'cat='.$cat_id.'&posts_per_page=5');
$num = 0;
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
                                <p class="data-year-month"><?php the_date('Y-m'); ?></p>
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
                    $num++;
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
            </div>
            <?php if ($num > 3) { ?>
            <div class="news-btn">
                <div class="btn-up"></div>
                <div class="btn-down unabled"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>