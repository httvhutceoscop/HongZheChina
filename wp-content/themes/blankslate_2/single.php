<?php 
get_header();

if (get_post_type() == 'product') {
	include_once 'single/single-product.php';
} else {
	include_once 'single/single-news.php';
}

get_footer();