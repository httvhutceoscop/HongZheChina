<?php /*Template Name: Contact Page*/ ?>
<?php get_header()?>
<section id="content" role="main" class="ap-page contact">
	<div class="container">
		<ol class="breadcrumb">
		    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
		    <li class="active">Contact</li>       
		</ol>
		<div class="cate-name">
			Contact
			<div class="divide"></div>
		</div>
		<div class="content">
			<?php echo do_shortcode('[contact-form-7 id="165" title="Contact form"]')?>
		</div>
	</div>
</section>
<script type="text/javascript">
activeMenu($('#menu-center .ap-menu-contact'));
</script>
<?php get_footer()?>