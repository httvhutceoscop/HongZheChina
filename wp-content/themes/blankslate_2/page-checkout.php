<?php /*Template Name: Checkout Page*/ ?>
<?php get_header();?>

<section id="content" role="main" class="ap-page checkout">
	<div class="container">
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">Cart</li>       
		</ol>
		<form class="list-products" action="/order-ja" method="get">
			<?php if (isset($_SESSION['cart'])) {?>
			<table class="table">
				<thead>
					<tr>
						<th>Product</th>
						<th>Product Name</th>
						<th>Amount</th>
						<th>Price</th>
						<th class="text-right">Total</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$total = 0;
					foreach ($_SESSION['cart'] as $id => $number) {
					    $post = get_post($id);
					    setup_postdata($post);
					    $price = types_field_meta_value('product-price', $post->ID);
					?>
					<tr>
						<td>
							<input type="hidden" name="pid[]" value="<?php echo $post->ID?>">
							<div class="image">
                					<a href="<?php the_permalink()?>">
                						<?php the_post_thumbnail('small' ); ?>
                					</a>
                				</div>
						</td>
						<td>
							<a href="<?php the_permalink()?>" class="name">
            						<?php the_title(); ?>
            					</a>
						</td>
						<td>
							<?php build_number_input($number, 'name="number[]" data-price="'. $price .'"');?>
						</td>
						<td>
							<div class="price">
            						<?php 
            						echo number_format($price);
            						?> VND
            					</div>
						</td>
						<td class="text-right td-total">
							<span class="total" data-total="<?php echo $number * $price?>">
        							<?php 
        							 //$price = str_replace('.', '', $price);
        							 $total += $number * $price;
        							 echo number_format($number * $price);
        							?>
							</span> VND
						</td>
					</tr>
					<?php }?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" id="col-cart-total">
							Cart Total (* included VAT) : <span id="cart-total" class="total"><?php echo number_format($total);?></span> VND 
						</td>
					</tr>
					<tr>
						<td colspan="5" class="text-right" id="col-cart-button">
							<a class="btn btn-shopcart" id="btn-shopping" href="/shop-<?php echo pll_current_language()?>">Shopping</a>
							<button type="submit" class="btn btn-shopcart" id="btn-order">Order</button>
						</td>
					</tr>
				</tfoot>
			</table>
			<?php } else {?>
			<h4>You have no product.</h4>
			<?php }?>
		</form>
	</div>
</section>
<script type="text/javascript">
$(document).ready(function() {
	$('.number').change(function() {
		var number = $(this).val();
		var price = $(this).data('price');
		var total = number * price;
		$(this).parents('tr').find('.total').data('total', total);
		$(this).parents('tr').find('.total').text(number_format(total));
		var cart_total = 0;
		$('.list-products tbody tr .total').each(function() {
			cart_total += $(this).data('total');
		});
		$('#cart-total').text(number_format(cart_total));
	});
});
</script>
<?php get_footer();?>
