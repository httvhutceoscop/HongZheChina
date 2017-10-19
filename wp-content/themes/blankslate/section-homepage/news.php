<?php
$cat_id = 22;
$len_tt = 10;
$len_ex = 15;
if ($current_lang == 'zh') {
    $cat_id = 24;
    $len_tt = 60;
    $len_ex = 65;
}
query_posts( 'cat='.$cat_id.'&posts_per_page=5');
$num = 0;
?>

<div id="news" role="news" class="section-padding pdb0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>News</h2>
                </div>
            </div>
        </div>

        <div class="news-content">
            <div class="news-bg"></div>
            <!-- <img class="news-title" src="<?php //echo get_theme_file_uri('/assets/images/news-title-homepage.png');?>"> -->
            <img class="news-img" src="<?php echo get_theme_file_uri('/assets/images/news-img.jpg');?>">
            <div class="row">
                <div class="news-box col-md-8">
                    <ul class="news-list transition">
                        <?php while ( have_posts() ) : the_post();
                        $date = get_the_date('Y-m-d');
                        $d = explode('-', $date);
                        ?>
                            <li class="news">
                                <span class="news-left">
                                    <p class="data-day"><?php echo $d[2]; ?></p>
                                    <p class="data-year-month"><?php echo $d[1].'-'.$d[0]; ?></p>
                                </span>
                                <span class="news-right">
                                    <p class="news-header">
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                        <?php //the_title(); ?>
                                        <?php echo wp_trim_words(get_the_title(), $len_tt); ?>
                                        </a>
                                    </p>
                                    <p class="news-text">
                                    <?php echo wp_trim_words(get_the_excerpt(), $len_ex, ' ...'); ?>
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
            </div>
            <?php if ($num < 3) { ?>
            <div class="news-btn">
                <div class="btn-up"></div>
                <div class="btn-down unabled"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>