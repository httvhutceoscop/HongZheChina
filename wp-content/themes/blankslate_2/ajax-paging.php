<?php
add_action('wp_ajax_ajax_paging', 'ajax_paging');
add_action('wp_ajax_nopriv_ajax_paging', 'ajax_paging');
function ajax_paging() {
	switch ($_POST['type']) {
		case 'selling': 
			selling_product();
			break;
		case 'rusk':
			annam_rusk();
			break;
		case 'news':
			news();
			break;
		case 'shop':
			shop(isset($_POST['cate']) ? $_POST['cate'] : 1);
			break;
		case 'about':
			about();
			break;
		case 'media':
			media();
			break;
		case 'cafe-menu':
			cafe_menu();
			break;
	}
}

function selling_product() {
	$args = array(
		'category_name' => 'best-selling-product-'.pll_current_language(),
		'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
		'posts_per_page' => 8,
		'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1,
		'post_type' => 'product'
	);
	
	include_once 'template/template-product.php';
	ListProducts($args);
	
	exit();
}

function annam_rusk() {
	$args = array(
		'category_name' => 'rusk-'.pll_current_language(),
		'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
		'posts_per_page' => 4,
		'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1,
		'post_type' => 'product'
	);
	include_once 'template/template-product.php';
	ListProducts($args);
	
	exit();
}

function news() {
	$args = array(
			'category_name' => 'news-'.pll_current_language(),
			'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
			'posts_per_page' => 4,
			'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1
	);
	query_posts($args);
	
	if (have_posts()) {
		include_once 'template/template-news.php';
	} else {
		exit();
	}
	
	exit();
}

function shop($cat_ID) {
	$args = array(
		'cat' => $cat_ID,
		'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
		'posts_per_page' => 8,
		'post_type' => 'product',
		'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1
	);
	include_once 'template/template-product.php';
	ListProducts($args);
	
	exit();
}

function about() {
	$args = array(
			'category_name' => 'about-'.pll_current_language(),
			'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
			'posts_per_page' => 3,
			'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1
	);
	query_posts($args);
	
	if (have_posts()) {
		include_once 'template/template-about.php';
	} else {
		exit();
	}
	
	exit();
}

function media() {
	$args = array(
			'category_name' => 'media-'.pll_current_language(),
			'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
			'posts_per_page' => 8,
			'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1
	);
	query_posts($args);
	
	if (have_posts()) {
		include_once 'template/template-media.php';
	} else {
		exit();
	}
	
	exit();
}

function cafe_menu() {
	$args = array(
			'category_name' => 'cafe-menu-'.pll_current_language(),
			'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
			'posts_per_page' => 4,
			'paged' => isset($_POST['paged']) ? $_POST['paged'] : 1,
			'post_type' => 'product'
	);
	include_once 'template/template-product.php';
	ListProducts($args);
	
	exit();
}


function numeric_paging()
{
	if (is_singular())
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1)
		return;

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max = intval($wp_query->max_num_pages);

	/**	Add current page to the array */
	if ($paged >= 1)
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="ap-navigation"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
				/* if ( get_previous_posts_link() )
					printf( '<li>%s</li>' . "\n", get_previous_posts_link() ); */

	/**	Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf('<li%s><a href="%s" paged="1">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

		if (!in_array(2, $links))
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array)$links as $link) {
		$class = $paged == $link ? ' class="active"' : '';
		printf('<li%s><a href="%s" paged="%d">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link, $link);
	}

	/**	Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links))
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf('<li%s><a href="%s" paged="%d">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max, $max);
	}

	/**	Next Post Link */
					/* if ( get_next_posts_link() )
						printf( '<li>%s</li>' . "\n", get_next_posts_link() ); */

	echo '</ul></div>' . "\n";

}
