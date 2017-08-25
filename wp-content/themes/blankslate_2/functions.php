<?php
add_action ( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
	load_theme_textdomain ( 'blankslate', get_template_directory () . '/languages' );
	add_theme_support ( 'title-tag' );
	add_theme_support ( 'automatic-feed-links' );
	add_theme_support ( 'post-thumbnails' );
	global $content_width;
	if (! isset ( $content_width ))
		$content_width = 640;
	register_nav_menus ( array (
			'main-menu' => __ ( 'Main Menu', 'blankslate' ) 
	) );
}
add_action ( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
	wp_enqueue_script ( 'jquery' );
}
add_action ( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
	if (get_option ( 'thread_comments' )) {
		wp_enqueue_script ( 'comment-reply' );
	}
}
add_filter ( 'the_title', 'blankslate_title' );
function blankslate_title($title) {
	if ($title == '') {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter ( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title($title) {
	return $title . esc_attr ( get_bloginfo ( 'name' ) );
}
add_action ( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
	register_sidebar ( array (
			'name' => __ ( 'Sidebar Widget Area', 'blankslate' ),
			'id' => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>' 
	) );
}
function blankslate_custom_pings($comment) {
	$GLOBALS ['comment'] = $comment;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter ( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number($count) {
	if (! is_admin ()) {
		global $id;
		$comments_by_type = &separate_comments ( get_comments ( 'status=approve&post_id=' . $id ) );
		return count ( $comments_by_type ['comment'] );
	} else {
		return $count;
	}
}

// Add Your Menu Locations
function register_footer_menu() {
	register_nav_menus(
		array(
				'footer-menu' => __( 'Footer Menu' )
			)
	);
}
add_action( 'init', 'register_footer_menu' );

function build_number_input($value = 1, $attr = null) {
    ?>
    <div class="ap-input-number">
		<button class="btn down" type="button"><</button>
		<input type="text" class="number" maxlength="4" <?php echo isset($attr) ? $attr : ''?> value="<?php echo $value?>">
		<button class="btn up" type="button">></button>
	</div>
    <?php 
}

require_once 'custom/wp-bootstrap-navwalker.php';

require_once 'ajax-paging.php';
require_once 'ajax-cart.php';