<?php /*Template Name: Shop Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page">
	<div class="container">
		<?php 
		if(has_post_thumbnail()) {
			echo '<div class="feature-image">';
			echo get_the_post_thumbnail(get_the_ID(), 'full');
			echo '</div>';
		}
		?>
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">Shop</li>       
		</ol>
		<div class="cate-name">
			Shop
			<div class="divide"></div>
		</div>
		<div class="col-sm-8 col-sm-offset-2 cate-des">
			<?php 
			$meta = get_post_meta(get_the_ID(), 'introduction');
			echo isset($meta[0]) ? $meta[0] : '';
			?>
		</div>
		<div class="clearfix"></div>
		<div class="content">
			<?php 
			$shopCate = get_category_by_slug('shop-'.pll_current_language());
			
			if (isset($shopCate->cat_ID)) {
				$categories = get_categories(
					array('parent' => $shopCate->cat_ID, 'hide_empty' => 0, 'orderby' => 'id' )
				);
			?>
			<ul class="nav nav-tabs" role="tablist" id="shop-categories">
				<?php 
				foreach ($categories as $index => $cate) {
				?>
				<li role="presentation" class="<?php echo ($index == 0) ? 'active' : ''?>">
					<a href="#tab-<?php echo $index?>" aria-controls="tab-<?php echo $index?>" role="tab" data-toggle="tab">
						<?php echo $cate->cat_name?>
					</a>
				</li>
				<?php }?>
			</ul>
			<div class="tab-content" id="shop-products">
				<?php 
				foreach ($categories as $index => $cate) {
				?>
				<div role="tabpanel" class="tab-pane <?php echo ($index == 0) ? 'active' : ''?>" id="tab-<?php echo $index?>" data-cate="<?php echo $cate->cat_ID?>">
					<?php 
					$args = array(
						'cat' => $cate->cat_ID,
						'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
						'posts_per_page' => 8,
						'post_type' => 'product'
					);
					//query_posts($args);
					include_once 'template/template-product.php';
					ListProducts($args);
					?>
				</div>
				<?php }?>
			</div>
			<?php }?>
		</div>
	</div>
	<div id="call-order">
		<img alt="" src="/wp-content/themes/blankslate/images/call_order.png">
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-shop'));
	$(document).on('click', '#shop-products .ap-navigation li a', function(e) {
		e.preventDefault();
		var li = $(this).parent();
		if (li.hasClass('active')) {
			return;
		}
		var obj = $(this);
		var paged = obj.attr('paged');
		if (paged === undefined) {
			return;
		}
		var group = obj.parents('.tab-pane');
		$.post(
			'/wp-admin/admin-ajax.php', 
			{
				'action' : 'ajax_paging', 
				'paged' : paged,
				'type' : 'shop',
				'cate' : group.data('cate')
			}, 
			function(res) {
				group.html(res);
			}
		);
	});
});
</script>

<?php get_footer()?>