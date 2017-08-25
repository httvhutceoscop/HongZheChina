<?php /*Template Name: Cafe Menu Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page cafe-menu">
	<div class="container">

		<?php 
		if(has_post_thumbnail()) {
			echo '<div class="feature-image"> <a href="#">';
			echo get_the_post_thumbnail(get_the_ID(), 'full');
			echo '</a> </div>';
		} else {
			echo '<div class="feature-image"> <a href="#">';
		?>
		<img src="<?php echo get_template_directory_uri().'/assets/images/coffee-banner.png';?>" alt="Coffee Banner"/>
		<?php	
			echo '</a> </div>';
		}
		?>

		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">Cafe Menu</li>       
		</ol>
		<div class="cate-name">
			Cafe Menu
			<div class="divide"></div>
		</div>
		<div class="col-sm-8 col-sm-offset-2 cate-des">
			<?php 
			$meta = get_post_meta(get_the_ID(), 'introduction');
			echo isset($meta[0]) ? nl2br($meta[0]) : '';
			?>
		</div>
		
		<div class="clearfix"></div>

		<div class="content">
			<div class="ap-group-product" id="cafe-menu">
				<?php 
				$args = array(
						'category_name' => 'cafe-menu-'.pll_current_language(), 
						'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
						'posts_per_page' => 4,
						'post_type' => 'product'
				);
				
				include_once 'template/template-product.php';
				?>
				<div class="group-list">
					<?php 
					ListProducts($args);
					?>
				</div>
			</div>			
		</div>		
	</div>

	<div id="news-section">
		<div class="container">
			<div class="content">			
				<div id="news" class="ap-group-product">
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
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-cafe'));
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

<?php get_footer()?>