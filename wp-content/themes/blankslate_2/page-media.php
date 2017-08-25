<?php /*Template Name: Media Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page media-list">
	<div class="container">
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">Media List</li>       
		</ol>
		<div class="cate-name">
			Media List
			<div class="divide"></div>
		</div>
		<div class="col-sm-8 col-sm-offset-2 cate-des">
			<?php 
			$meta = get_post_meta(get_the_ID(), 'introduction');
			echo isset($meta[0]) ? nl2br($meta[0]) : '';
			?>
		</div>
		<div class="clearfix"></div>
		<div class="content" id="news">
			<?php 
			$args = array(
				'category_name' => 'media-'.pll_current_language(),
				'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
				'posts_per_page' => 8,
			);
			query_posts($args);
			?>
			<div class="group-list">
				<?php 
				include_once 'template/template-media.php';
				?>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-media'));
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