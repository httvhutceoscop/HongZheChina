<?php
add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

add_action('wp_ajax_ajax_cart', 'ajax_cart');
add_action('wp_ajax_nopriv_ajax_cart', 'ajax_cart');
function ajax_cart() {
	if (isset($_POST['id']) && isset($_POST['number'])) {
		$_SESSION['cart'][$_POST['id']] = $_POST['number'];
		exit();
	}
	exit('fail');
}


add_action('wp_ajax_ajax_order', 'ajax_order');
add_action('wp_ajax_nopriv_ajax_order', 'ajax_order');
function ajax_order() {
    parse_str($_POST['data'], $products);
    parse_str($_POST['info'], $info);
    if (isset($products['pid']) && isset($products['number'])) {
        $to = 'annam.parlour.morevn@gmail.com,' .$info['your-email'];
        $subject = '['.$info['your-name'].'] ordered ' . count($products['pid']) . ' products';
        $message = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>';
        $message .= '<p><b>['.$info['your-name'].']</b> ordered '. count($products['pid']) .' products :</p>';
        $message .= '<table width="800">';
        $message .= '<thead>';
            $message .= '<tr>';
                $message .= '<th width="30" align="left">No.</th>';
                $message .= '<th width="250" align="left">Name</th>';
                $message .= '<th width="100" align="left">Amount</th>';
                $message .= '<th width="120" align="left">Price</th>';
                $message .= '<th width="120" align="left">Total</th>';
            $message .= '</tr>';
        $message .= '</thead>';
        $message .= '<tbody>';
        $total = 0;
        foreach ($products['pid'] as $key => $pid) {
            $number = $products['number'][$key];
            $post = get_post($pid);
            if (isset($post)) {
                $price = types_field_meta_value('product-price', $post->ID);
                $total += $number * $price;
                $message .= '<tr>';
                $message .= '<td>'. ($key + 1) .'</td>';
                $message .= '<td><p lang="ja"><a href="'. get_post_permalink($post->ID) .'" target="_blank">'. $post->post_title .'</a></p></td>';
                $message .= '<td>'. ($number) .'</td>';
                $message .= '<td>'. (number_format($price)) .' VND</td>';
                $message .= '<td>'. (number_format($number * $price)) .' VND</td>';
                $message .= '</tr>';
            }
        }
        $message .= '<tr>';
            $message .= '<td colspan="3"></td>';
            $message .= '<td align="left"><b>Total</b></td>';
            $message .= '<td><b>'. number_format($total) .' VND</b></td>';
        $message .= '</tr>';
        $message .= '</tbody>';
        $message .= '</table></body>';
        
        $message .= '<p><b>Title :</b></p>';
        $message .= '<p style="padding-left: 30px;">'. $info['your-subject'] .'</p>';
        $message .= '<p><b>Content :</b></p>';
        $message .= '<p style="padding-left: 30px;">'. nl2br($info['your-message']) .'</p>';
        
        $message .= '<p style="margin-top: 50px;">-------------------</p>';
        $message .= '<p style="color: #888;">This e-mail was sent from a order form on ' . get_bloginfo('name') . ' (' . get_bloginfo('url') . ')</p>';
        $headers = "Content-Type: text/html\n";
        $headers .= "charset=UTF-8";
        $isSent = wp_mail($to, $subject, $message, $headers);
        unset($_SESSION['cart']);
        if ($isSent) {
            die('ok');
        }
        die('fail');
    }
    die;
}
