<?php /*Template Name: About Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page about">
	<div class="container">
		<?php 
		if(has_post_thumbnail()) {
			echo '<div class="feature-image"> <a href="#">';
			echo get_the_post_thumbnail(get_the_ID(), 'full');
			echo '</a> </div>';
		} else {
			echo '<div class="feature-image"> <a href="#">';
		?>
		<img src="<?php echo get_template_directory_uri().'/assets/images/about-banner.png';?>" alt="About Banner"/>
		<?php	
			echo '</a> </div>';
		}
		?>

		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">About</li>       
		</ol>
		<div class="cate-name">
			About
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
				'category_name' => 'about-'.pll_current_language(),
				'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish',
				'posts_per_page' => 3,
			);
			query_posts($args);
			?>
			<div class="group-list">
				<?php 
				include_once 'template/template-about.php';
				?>
			</div>
			
			<div id="about-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.930192761076!2d105.84561931548649!3d21.035478985994697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbebe916b47%3A0x3736877b24f677f0!2zMjQgSMOgbmcgVuG6o2ksIEjDoG5nIELhu5MsIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1499742114265" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	activeMenu($('#menu-center .ap-menu-about'));
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
				'type' : 'about',
			}, 
			function(res) {
				$('#news .group-list').html(res);
			}
		);
	});
});
</script>

<?php get_footer()?>