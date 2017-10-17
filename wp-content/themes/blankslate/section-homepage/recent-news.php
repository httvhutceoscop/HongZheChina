<style>
    .blog-section {
        padding-bottom: 28px;
    }
    .blog-style-one {
        padding: 35px 35px 23px 35px;
        text-align: center;
        border: 1px solid #ebebeb;
        position: relative;
        margin-bottom: 35px;
        transition: .3s;
    }
    .blog-style-one:hover {
        border-color: #1490d7;
    }
    .blog-style-one:hover .image img {
        -webkit-transform: rotate(10deg) scale(1.4);
        -ms-transform: rotate(10deg) scale(1.4);
        transform: rotate(10deg) scale(1.4);
    }
    .blog-style-one:hover .date {
        border-color: #1490d7;
    }
    .blog-style-one .image {
        margin-bottom: 35px;
        overflow: hidden;
    }

    .blog-style-one .image img {
        transition: all 0.3s ease 0s;
    }
    .blog-style-one .date {
        position: absolute;
        border: 1px solid #ebebeb;
        text-align: center;
        text-transform: uppercase;
        min-width: 140px;
        bottom: -20px;
        padding: 7px 15px;
        left: calc(50% - 70px);
        background: #fff;
        border-radius: 30px;
    }
</style>

<?php
$cat_id = 22;
if ($current_lang == 'zh') {
    $cat_id = 24;
}
query_posts( 'cat='.$cat_id.'&posts_per_page=3');
$num = 0;
?>

<section class="blog-section section-padding pdb0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>News</h2>
                    <span>Cập nhật tin tức từng phút từng giây</span>
                </div>
            </div>
        </div>

        <div class="row row-eq-rs-height">
            <?php while ( have_posts() ) : the_post();?>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item blog-style-one wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="image">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail(); ?>
                        <?php } else { ?>
                            <img src="http://via.placeholder.com/288x221" alt="">
                        <?php } ?>                        
                    </div>
                    <div class="blog-text">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p>
                        <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="date">
                        <?php the_date(); ?>
                    </div>
                </div><!--/blog-item-->
            </div>

            <?php
            $num++;
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</section>