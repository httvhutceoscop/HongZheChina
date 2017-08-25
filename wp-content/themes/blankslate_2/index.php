<?php get_header(); ?>
<?php include_once 'template/template-product.php';?>
<section id="content" role="main">
	<div id="slider" class="container">
		<?php echo do_shortcode('[smartslider3 slider=2]');?>
	</div>
	<div id="selling" class="ap-group-product">
		<div class="container">
			<?php 
			$queried_post = get_page_by_path('homepage-introduction', OBJECT, 'post');
			$postLang = pll_get_post_language($queried_post->ID);
			if (isset($queried_post->post_title) && $postLang == pll_current_language()) {
			?>
			<div class="group-title">
				<?php echo $queried_post->post_title?>
				<span class="divide"></span>
			</div>
			<div class="col-sm-8 col-sm-offset-2 group-des">
				<?php echo $queried_post->post_content?>
			</div>
			<?php }?>
			<?php 
			$args = array(
					'category_name' => 'best-selling-product-'.pll_current_language(), 
					'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
					'posts_per_page' => 8,
					'post_type' => 'product'
			);
			
			
			?>
			<div class="group-list">
				<?php 
				ListProducts($args);
				?>
			</div>
		</div>
	</div>
	<div id="rusk" class="ap-group-product">
		<div class="container">
			<div class="group-title">
				Annam Rusk
				<span class="divide"></span>
			</div>
			<?php 
			$args = array(
					'category_name' => 'rusk-'.pll_current_language(), 
					'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
					'posts_per_page' => 4,
					'post_type' => 'product'
			);
			
			?>
			<div class="group-list">
				<?php 
				ListProducts($args);
				?>
			</div>
		</div>
	</div>
	<div id="news" class="ap-group-product">
		<div class="container">
			<div class="group-title">
				News
				<span class="divide"></span>
			</div>
			<?php 
			$args = array(
					'category_name' => 'news-'.pll_current_language(), 
					'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
					'posts_per_page' => 4
			);
			
			query_posts($args);
			?>
			<div class="group-list">
				<?php 
				include_once 'template/template-news.php';
				?>
			</div>
		</div>
	</div>
	<div id="facebook" class="ap-group-product">
		<div class="container">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fannam.parlour.more%2F&tabs=timeline&width=500&height=210&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>	
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-home'));
	$(document).on('click', '.ap-navigation li a', function(e) {
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
		var group = obj.parents('.ap-group-product');
		var type = group.attr('id');
		if (type === undefined) {
			return;
		}
		$.post(
			'/wp-admin/admin-ajax.php', 
			{
				'action' : 'ajax_paging', 
				'paged' : paged,
				'type' : type
			}, 
			function(res) {
				group.find('.group-list').html(res);
			}
		);
	});
});
</script>

<?php get_footer(); ?>