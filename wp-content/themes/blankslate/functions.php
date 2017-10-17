<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    register_nav_menus(
        array('main-menu' => __('Main Menu', 'blankslate'))
    );
    register_nav_menus(
        array('footer-menu' => __('Footer Menu', 'blankslate'))
    );
}
/**
 * Enqueue scripts and styles.
 */
function blankslate_load_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri().'/assets/css/bootstrap-theme.min.css');

    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css');

    // Owl Carousel
    wp_enqueue_style('carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style('carousel-theme-style', get_template_directory_uri().'/assets/css/owl.theme.min.css');

    wp_enqueue_style('basic-style', get_template_directory_uri().'/assets/css/global.css');
    wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
    // wp_enqueue_style( 'main-style', get_theme_file_uri( '/assets/css/main.css' ) );

    wp_enqueue_script( 'jquery-min', get_theme_file_uri( '/assets/js/jquery.min.js' ) );
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ) );
    wp_enqueue_script( 'slide-custom', get_theme_file_uri( '/assets/js/slide-custom.js' ) );
    wp_enqueue_script( 'carousel', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ) );
    wp_enqueue_script( 'app-js', get_theme_file_uri( '/assets/js/app.js' ) );

    // wp_enqueue_script( 'blankslate-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );
    // wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );
    // wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'blankslate_load_scripts');

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title)
{
    if ($title == '') {
        return '&rarr;';
    }
    else {
        return $title;
    }
}
add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
function blankslate_custom_pings($comment)
{
    $GLOBALS['comment'] = $comment;
    ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number($count)
{
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    }
    else {
        return $count;
    }
}