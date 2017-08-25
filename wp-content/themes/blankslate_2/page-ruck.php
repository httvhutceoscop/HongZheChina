<?php /*Template Name: Ruck Cake Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page ruck-cake">
	<div class="container">

		<?php 
		if(has_post_thumbnail()) {
			echo '<div class="feature-image"> <a href="#">';
			echo get_the_post_thumbnail(get_the_ID(), 'full');
			echo '</a> </div>';
		} else {
			echo '<div class="feature-image"> <a href="#">';
		?>
		<img src="<?php echo get_template_directory_uri().'/assets/images/about-banner.png';?>" alt="Banh Ruck"/>
		<?php	
			echo '</a> </div>';
		}
		?>

		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li><a href="<?php echo 'shop-' . pll_current_language()?>">Shop</a></li>
		    <li class="active">Bánh Ruck</li>       
		</ol>
		<div class="cate-name">
			Bánh Ruck
			<div class="divide"></div>
		</div>
		<div class="col-sm-8 col-sm-offset-2 cate-des">
			<?php 
			$meta = get_post_meta(get_the_ID(), 'introduction');
			echo isset($meta[0]) ? nl2br($meta[0]) : '';
			?>
		</div>
		<div class="clearfix"></div>
		<div id="rusk-banner">
			<img alt="" src="/wp-content/themes/blankslate/images/rusk.png">
		</div>
		<div class="content">
			<div id="rusk" class="ap-group-product">
        			<?php 
        			$args = array(
        				'category_name' => 'rusk-'.pll_current_language(),
        				'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
        				'posts_per_page' => 8,
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
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-shop'));
	$(document).on('click', '#news .ap-navigation li a', function(e) {
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
		$.post(
			'/wp-admin/admin-ajax.php', 
			{
				'action' : 'ajax_paging', 
				'paged' : paged,
				'type' : 'media',
			}, 
			function(res) {
				$('#news .group-list').html(res);
			}
		);
	});
});
</script>

<?php get_footer()?>