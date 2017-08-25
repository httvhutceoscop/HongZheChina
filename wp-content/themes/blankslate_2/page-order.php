<?php /*Template Name: Order Contact Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page contact">
	<div class="container">
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li><a href="<?php echo 'shop-' . pll_current_language()?>">Shop</a></li>
		    <li class="active">Contact</li>       
		</ol>
		<div class="content">
			<?php echo do_shortcode('[contact-form-7 id="225" title="Order form"]')?>
		</div>
	</div>
</section>
<script type="text/javascript">
$(document).ready(function() {
	$('.wpcf7-submit').click(function(e) {
		var hasError = false;
		$('.wpcf7-validates-as-required').each(function() {
			if ($(this).val().trim() == '') {
				hasError = true;
				return;
			}
		});
		if (!hasError) {
        		e.preventDefault();
        		$.post(
        			'/wp-admin/admin-ajax.php', 
        			{
        				'action' : 'ajax_order', 
        				'data' : '<?php echo $_SERVER['QUERY_STRING'];?>',
        				'info' : $('form').serialize()
        			}, 
        			function(res) {
        				if (res === 'ok') {
							alert('Your order is sent us ! Thank you !');
							location.href = '<?php echo pll_home_url()?>';
            			} else {
							alert('Ordering process has errors ! Please contact us by phone !');
                		}
        			}
        		);

		}
	});
});
</script>
<?php get_footer()?>