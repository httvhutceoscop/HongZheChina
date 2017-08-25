<section id="content" role="main" class="container ap-single">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<ol class="breadcrumb">
	    <li><a href="<?php echo pll_home_url()?>">Home</a></li>
	    <?php 
	    $cateName = '';
	    if (isset(get_the_category(get_the_ID())[0]->name)) {
	    	$cateName = get_the_category(get_the_ID())[0]->name;
	    ?>
	    <li>
	    	<?php echo $cateName?>
	    </li> 
	    <?php }?>
	    <li class="active"><?php the_title()?></li>       
	</ol>
	<div class="cate-name">
		<?php echo $cateName?>
		<div class="divide"></div>
	</div>
	<div class="title">
		<?php the_title()?>
	</div>
	<div class="content">
		<?php the_content()?>
	</div>
<?php endwhile; endif; ?>
</section>