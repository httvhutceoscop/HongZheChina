<?php
if (have_posts()) {
	$index = 0;
	while (have_posts()) {
		the_post();
		$index ++;
		$isNewRow = ($index % 4 == 1);
		$isFinishRow = ($index % 4 == 0);
?>
	<?php if ($isNewRow) {?>
	<div class="row">
	<?php }?>
		<div class="col-md-3">
			<div class="ap-product">
				<div class="image">
					<a href="<?php the_permalink()?>">
						<?php the_post_thumbnail('medium' ); ?>
					</a>
				</div>
				<div class="info">
					<a href="<?php the_permalink()?>" class="name">
						<?php the_title();?>
					</a>
					<div class="price">
						<?php echo types_field_meta_value('product-price', $post->ID);?> VND
					</div>
				</div>
			</div>
		</div>
	<?php if ($isFinishRow) {?>
	</div>
	<?php }?>
	<?php } ?>
	<?php if ($index % 4 != 0) {?>
	</div>
	<?php }?>
	<?php 
	wp_reset_postdata(); numeric_paging();?>
	
<?php }?>