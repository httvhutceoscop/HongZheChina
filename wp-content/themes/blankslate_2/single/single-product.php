<section id="content" role="main" class="container ap-single ap-product">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<div class="col-md-3 col-md-offset-3">
		<div class="image">
			<a href="#">
				<?php 
				$postId = get_the_ID();
				$post_thumb_url = get_the_post_thumbnail_url($postId, 'full');
				if (!empty($post_thumb_url)) {
					the_post_thumbnail('full');
				} else {
					$post_thumb_url = get_template_directory_uri().'/assets/images/product-thumb-default.png';
					echo '<img width="195" height="152" src="'.$post_thumb_url.'" class="attachment-full size-full wp-post-image" alt="">';
				}						
				?>
			</a>
		</div>
		<div class="other-images">
		<?php 
			$meta = get_post_meta(get_the_ID(), 'wpcf-product-thumb');
			if (isset($meta[0]) && !empty($meta[0])) {
			$index = 0;
			foreach ($meta as $m) {
				$index ++;
				$isNewRow = ($index % 4 == 1);
				$isFinishRow = ($index % 4 == 0);
			?>
			<?php if ($isNewRow) {?>
			<div class="row2">
			<?php }?>
				<div class="col-xs-3">
					<div class="img">
						<img alt="" src="<?php echo $m?>">
					</div>
				</div>
			<?php if ($isFinishRow) {?>
			</div>
			<?php }?>
			<?php 
			}
			if ($index % 4 != 0) {?>
			</div>
			<?php }?>
			<div class="clearfix"></div>
			<?php }?>
		</div>
	</div>
	<div class="col-md-3">
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li>
		    	<a href="/shop-<?php echo pll_current_language()?>">Shop</a>
		    </li> 
		    <li class="active"><?php the_title()?></li>       
		</ol>
		<div class="info">
			<div class="title">
				<?php the_title()?>
			</div>
			<div class="divide"></div>
			<div class="price">
				<?php echo number_format(types_field_meta_value('product-price', get_the_ID()));?> VND
			</div>
			<div class="cart">
				<?php build_number_input(1, 'id="number"');?>
				<button type="button" class="btn btn-default btn-cart" data-id="<?php the_ID()?>">
					<!-- Add to cart -->
					購入する
				</button>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-6 col-md-offset-3 content">
		<?php the_content()?>
	</div>
<?php endwhile; endif; ?>
</section>
<script type="text/javascript">
$(document).ready(function() {

	var otherImage = $('.other-images .img img');
	otherImage.click(function(e){
		var me = $(this);
		var src = me.attr('src');

		$('.ap-product .image img').attr('src',src);
	});

	$('.btn-cart').click(function(e) {
		var id = $(this).data('id');
		$.post(
			'/wp-admin/admin-ajax.php', 
			{
				'action' : 'ajax_cart', 
				'id' : id,
				'number' : $('#number').val()
			}, 
			function(res) {
				if (res === 'fail') {
					alert('Product can not be added into shopping cart.');
					return;
				}
				alert('Product added into shopping cart.');
			}
		);
	});
});
</script>